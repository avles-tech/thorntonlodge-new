<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\room;
use Exception;
use Image;

class RoomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=array(
            'pagetitle'=>'Rooms > Dashboard',
            'rooms'=>room::orderby('id','desc')->get(),
        );
        return view('room.index')->with($data);
    }

    public function create()
    {
        $data=array(
            'pagetitle'=>'Add Room > Dashboard',
        );
        return view('room.create')->with($data);
    }

    public function store(Request $request)
    {
        

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

            // Handle File Upload
            if($request->hasFile('cover_image')){

                $imageName = time().'.'.request()->cover_image->getClientOriginalExtension();

                request()->cover_image->move(public_path('/Uploads/room_cover_images'), $imageName);

            }
            else
            {
                $imageName = 'noimage.jpg';
            }

            try {
                // add Room
                $room = new room;
                $room->title = $request->input('title');
                $room->slug = $request->input('slug');
                $room->seo_title = $request->input('seotitle');
                $room->excerpt = $request->input('description');
                $room->status = $request->input('status');
                $room->body = $request->input('body');
                $room->meta_description = $request->input('meta_description');
                $room->keyword = $request->input('keywords');
                $room->cover_image = $imageName;
                $room->created_at = $NowTime;
                $room->updated_at = $NowTime;
                $room->save();
                $sucessMsg = 'Your '.$request->input('title') .' room has been successfully Added!';
                return redirect('/roomSection')->with('success', $sucessMsg);
            }
            catch(Exception $exception) {
                $errormsg="Invalid Title, This \"<strong>".$request->input('title')."</strong>\" title already stored in the database, Please use another title!";
                return redirect('/roomSection')->with('error',$errormsg);
            }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=array(
            'pagetitle'=>'Edit Room Information > Dashboard',
            'room'=>room::find($id),
        );
        return view('room.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'nullable|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        #Get room image name
        $get_currentimg=room::where('id',$id)->first();
                    

        // Handle File Upload
        if($request->hasFile('cover_image')){
           
 	    $imageName = time().'.'.request()->cover_image->getClientOriginalExtension();
           
            
            //:delete exsist image
            File::delete('Uploads/room_cover_images/'.$get_currentimg->cover_image);

            // Upload Image
             request()->cover_image->move(public_path('/Uploads/room_cover_images'), $imageName);
        }

        try {
            // Update room information
            $room = room::find($id);
            $room->title = $request->input('title');
            $room->slug = $request->input('slug');
            $room->seo_title = $request->input('seotitle');
            $room->excerpt = $request->input('description');
            $room->status = $request->input('status');
            $room->body = $request->input('body');
            $room->meta_description = $request->input('meta_description');
            $room->keyword = $request->input('keywords');
            if ($request->hasFile('cover_image')) {
                $room->cover_image = $imageName;
            }
            $room->updated_at = $NowTime;
            $room->save();
            $sucessMsg = 'Your '.$request->input('title'). ' room information has been successfully updated!';
            return redirect('/roomSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid Title, This \"<strong>".$request->input('title')."</strong>\" title already stored in the database, Please use another title!";
            return redirect('/roomSection')->with('error',$errormsg);
        }

    }

    public function destroy($id)
    {
        $room =room::find($id);
        $getName=$room->title;
        if($room->cover_image != 'noimage.jpg'){
            File::delete('Uploads/room_cover_images/'.$room->cover_image);
        }
        $room->delete();
        $sucessMsg='The '.$getName.' room record has been deleted!';
        return redirect('/roomSection')->with('success', $sucessMsg);
    }

    public function destroy_bulk(Request $request)
    {
        room::query()->truncate();
        $room_cover_FilePath = public_path().'/Uploads/room_cover_images/';
        if (file_exists($room_cover_FilePath)) {
            File::deleteDirectory($room_cover_FilePath);
        }
        $sucessMsg='All Room/s records has been cleared!';
        return redirect('/roomSection')->with('success', $sucessMsg);
    }
}
