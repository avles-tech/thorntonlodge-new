<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use Exception;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gettagsitems=category::all();
        $data=array(
            'pagetitle'=>'Dashboard :: Post Category',
            'tags'=>category::orderby('id','desc')->get(),
            'postviewid'=>0,
        );
        return view('post.tag.index')->with($data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);
       
        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try{
        // Create Category
        $category = new category();
        $category->name = $request->input('name');
        $category->slug = $request->input('slug');
        $category->created_at = $NowTime;
        $category->updated_at = $NowTime;
        $category->save();
        $sucessMsg='The <strong>'.$request->input('name').'</strong> Post category has been successfully added!';
        return redirect('/categorySection')->with('success',$sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid Name, This \"<strong>".$request->input('name')."</strong>\" name already stored in the database, Please use another name!";
            return redirect('/categorySection')->with('error',$errormsg);
        }
    }


    public function show($id)
    {
    }

    public function edit($id)
    {
        $gettagsitems=category::all();
        $data=array(
            'pagetitle'=>'Dashboard :: Edit Post Category',
            'tags'=>orderby('id','desc')->get(),
            'tagscategory'=>category::find($id),
            'postviewid'=>$id,
        );
        return view('post.tag.index')->with($data);

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try{
            // Update Category
            $category = category::find($id);
            $category->name = $request->input('name');
            $category->slug = $request->input('slug');
            $category->updated_at = $NowTime;
            $category->save();
            $sucessMsg='The <strong>'.$request->input('name').'</strong> Post category has been successfully updated!';
            return redirect('/categorySection')->with('success',$sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid Name, This \"<strong>".$request->input('name')."</strong>\" name already stored in the database, Please use another name!";
            return redirect('/categorySection')->with('error',$errormsg);
        }
    }

    public function destroy($id)
    {
        $category =category::find($id);
        $getcategoryName=$category->name;
        $category->delete();
        $sucessMsg='The <strong>'.$getcategoryName.'</strong> Post category record has been deleted!';
        return redirect('/categorySection')->with('success', $sucessMsg);
    }

    public function destroy_bulk(Request $request)
    {
        $category =category::query()->truncate();
        $sucessMsg='All Post category records has been cleared!';
        return redirect('/categorySection')->with('success', $sucessMsg);
    }
}
