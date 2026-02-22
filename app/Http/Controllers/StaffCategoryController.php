<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StaffCategory;
use Exception;

class StaffCategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Staff Category',
            'tags'=>StaffCategory::orderby('order','asc')->orderby('id','desc')->get(),
            'postviewid'=>0,
        );
        return view('staff.category.index')->with($data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'display_type' => 'required|in:card-grid,name-list,individual-cards',
            'order' => 'required|integer|min:1'
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try{
            // Create Category
            $category = new StaffCategory();
            $category->name = $request->input('title');
            $category->slug = \Illuminate\Support\Str::slug($request->input('title'));
            $category->section_title = $request->input('section_title') ?? $request->input('title');
            $category->parent_section = $request->input('parent_section');
            $category->display_type = $request->input('display_type');
            $category->is_active = $request->has('is_active') ? 1 : 0;
            $category->description = $request->input('description');
            $category->order = $request->input('order');
            $category->created_at = $NowTime;
            $category->save();
            $sucessMsg='The <strong>'.$request->input('title').'</strong> Staff category has been successfully added!';
            return redirect('/staff-category')->with('success',$sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Error! ".$exception->getMessage();
            return redirect('/staff-category')->with('error',$errormsg);
        }
    }


    public function show($id)
    {
    }

    public function edit(Request $request)
    {
        $staff_category = StaffCategory::find($request->id);

        $data=array(
            'pagetitle' => 'Dashboard :: Edit Staff Category',
            'tags' => StaffCategory::orderby('id','desc')->get(),
            'tagscategory' => $staff_category
        );

        return view('staff.category.index')->with($data);

    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required',
            'title' => 'required',
            'display_type' => 'required|in:card-grid,name-list,individual-cards',
            'order' => 'required|integer|min:1'
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try{
            // Update Category
            StaffCategory::where('id',$request->id)
                ->update([
                    'name' => $request->title,
                    'slug' => \Illuminate\Support\Str::slug($request->title),
                    'section_title' => $request->input('section_title') ?? $request->title,
                    'parent_section' => $request->input('parent_section'),
                    'display_type' => $request->input('display_type'),
                    'is_active' => $request->has('is_active') ? 1 : 0,
                    'description' => $request->input('description'),
                    'order' => $request->input('order'),
                    'updated_at' => $NowTime,
                ]);

            $sucessMsg='The <strong>'.$request->input('title').'</strong> Staff category has been successfully updated!';
            return redirect('/staff-category')->with('success',$sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Error! ".$exception->getMessage();
            return redirect('/staff-category')->with('error',$errormsg);
        }
    }

    public function destroy($id)
    {
        $category =StaffCategory::find($id);
        $getcategoryName=$category->name;
        $category->delete();
        $sucessMsg='The <strong>'.$getcategoryName.'</strong> Staff category record has been deleted!';
        return redirect('/staff-category')->with('success', $sucessMsg);
    }

    public function destroy_bulk(Request $request)
    {
        $category =StaffCategory::query()->truncate();
        $sucessMsg='All Staff category records has been cleared!';
        return redirect('/staff-category')->with('success', $sucessMsg);
    }
}
