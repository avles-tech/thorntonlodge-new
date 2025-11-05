<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Staff;
use App\StaffCategory;

class StaffController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gettagsitems=Staff::all();

        $staffs = Staff::orderby('id')->get();
        $categories =  StaffCategory::get();

        foreach ($staffs AS $k => $staff ){
            foreach ($categories AS $n => $category){
                if($staff->staff_category_id == $category->id){
                    $staffs[$k]['category'] = $category->title;
                }
            }
        }

        $data=array(
            'pagetitle'=>'Dashboard :: Posts',
            'staffs'=>$staffs,
            'getCount'=>count($gettagsitems),
        );

        return view('staff.index')->with($data);
    }

    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Create Staff',
            'categories'=>StaffCategory::all(),
        );
        return view('staff.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'staff_category_id' => 'required',
            'name' => 'required',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload Image
            $path = $request->file('image')->move(public_path('/Uploads/staff_images'), $fileNameToStore);

        }else {
            $fileNameToStore = Null;
        }


        try {
            // Create Post
            $staff = new Staff();
            $staff->image = $fileNameToStore;
            $staff->staff_category_id = $request->input('staff_category_id');
            $staff->name = $request->input('name');
            $staff->qualification = $request->input('qualification');
            $staff->bio = $request->input('bio');
            $staff->created_at = $NowTime;
            $staff->save();
            $sucessMsg = 'New staff has been successfully Added!';
            return redirect('/staff')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid data, Please try again!";
            return redirect('/staff')->with('error',$errormsg);
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $staff = Staff::find($id);
        $categories =  StaffCategory::get();

        foreach ($categories AS $n => $category){
            if($staff->staff_category_id == $category->id){
                $staff['category'] = $category->title;
            }
        }

        $data=array(
            'pagetitle'=>'Dashboard ::  Edit Staff',
            'categories'=>$categories,
            'staff'=>$staff,
        );
        return view('staff.edit')->with($data);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        #Get post category ID

        $selected_staff=Staff::where('id',$request->id)->first();

        // Handle File Upload
        if($request->hasFile('image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //:delete existing image
            if($selected_staff->image){
                File::delete('Uploads/staff_images/'.$selected_staff->image);
                // Upload Image
            }
            $path = $request->file('image')->move(public_path('/Uploads/staff_images'), $fileNameToStore);
        }else {
            $fileNameToStore = Null;
        }

        try{
            // Update Staff
            Staff::where('id',$request->id)
                ->update([
                    'staff_category_id' => $request->staff_category_id,
                    'name' => $request->name,
                    'qualification' => $request->qualification,
                    'bio' => $request->bio,
                    'updated_at' => $NowTime,

                ]);

            //update staff image if new value available
            if($fileNameToStore){
                Staff::where('id',$request->id)
                    ->update([
                        'image' => $fileNameToStore,
                    ]);
            }

            $sucessMsg='The <strong>'.$request->input('name').'</strong> Staff record has been successfully updated!';
            return redirect('/staff')->with('success',$sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid record, Please try again!";
            return redirect('/staff')->with('error',$errormsg);
        }

    }

    public function destroy($id)
    {
        $staff =Staff::find($id);

        if($staff->image){
            File::delete('Uploads/staff_images/'.$staff->image);
        }

        $staff->delete();
        $sucessMsg='Selected Staff record has been deleted!';
        return redirect('/staff')->with('success', $sucessMsg);
    }

    public function destroy_bulk(Request $request)
    {
        $staff =Staff::query()->truncate();
        $sucessMsg='All Staff records has been cleared!';
        return redirect('/staff')->with('success', $sucessMsg);
    }
}
