<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\testimonial;
use Image;
use Exception;

class TestimonialController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=array(
            'pagetitle'=>'Testimonial > Dashboard',
            'comments'=>testimonial::orderBy('id', 'desc')->get(),
            'tagviewid'=>0,
        );
        return view('testimonial.index')->with($data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try {

            // Create testimonial
            $testimonial = new testimonial;
            $testimonial->comment = $request->input('comment');
            $testimonial->created_at = $NowTime;
            $testimonial->updated_at = $NowTime;
            $testimonial->save();

            $sucessMsg='The '.$request->input('name').' testimonial has been successfully added!';
            return redirect('/commentSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/commentSection')->with('error',$exception->getMessage());
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=array(
            'pagetitle'=>'Edit Testimonial > Dashboard',
            'comments'=>testimonial::orderBy('id', 'desc')->get(),
            'comment'=>testimonial::find($id),
            'tagviewid'=>$id,
        );
        return view('testimonial.index')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'comment' => 'required',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try {

            // update testimonial
            $testimonial = testimonial::find($id);
            $testimonial->comment = $request->input('comment');
            $testimonial->created_at = $NowTime;
            $testimonial->updated_at = $NowTime;
            $testimonial->save();

            $sucessMsg='The '.$request->input('name').' testimonial has been successfully updated!';
            return redirect('/commentSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/commentSection')->with('error',$exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $testimonial =testimonial::find($id);
        $testimonial->delete();
        $sucessMsg='The testimonial record has been deleted!';
        return redirect('/commentSection')->with('success', $sucessMsg);
    }

    public function destroy_bluk()
    {
        testimonial::query()->truncate();
        $sucessMsg='All testimonial records has been cleared!';
        return redirect('/commentSection')->with('success', $sucessMsg);
    }
}
