<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\gallery_tag;
use App\gallery;
use Exception;
use Image;

class GalleryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $getitems=gallery::all();
        $data=array(
            'pagetitle'=>'Dashboard :: Gallery Images',
            'galleries'=>gallery::orderBy('id', 'desc')->get(),
            'getCount'=>count($getitems),
        );
        return view('gallery.index')->with($data);
    }


    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Upload Gallery Images',
            'tags'=>gallery_tag::all(),
        );
        return view('gallery.create')->with($data);
    }

    public function get_type(Request $request){
        $id=$request->id;
        $get_tag=gallery_tag::where('id',$id)->first();
        $result = array(
            'image'=>$get_tag->image,
        );
        return response()->json($result);
    }


    public function store(Request $request)
    {
        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try {


            // Handle File Upload
            if($request->hasFile('image')){

                foreach($request->image as $gallery_image){

                    // Get filename with the extension
                    $filenameWithExt = $gallery_image->getClientOriginalName();
                    // Get just filename
                    $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                    // Get just ext
                    $extension = $gallery_image->getClientOriginalExtension();
                    // Filename to store
                    $fileNameToStore= $filename.'_'.time().'.'.$extension;
                    // Upload Image
                    $gpath = $gallery_image->move(public_path('Uploads/gallery_images/'), $fileNameToStore);

                    //:Thumbnail compress image
                    $createdFilePath = public_path().'/Uploads/gallery_images/'.$fileNameToStore;
                    $copyFilePath=public_path().'/Uploads/gallery_images/thumbnail/'.$fileNameToStore;
                    if (file_exists($copyFilePath)) {
                        File::copy($createdFilePath,$copyFilePath);
                    } else {
                        $createnewFilePath = public_path().'/Uploads/gallery_images/thumbnail';
                        File::makeDirectory($createnewFilePath,$mode = 0777, true, true);
                        File::copy($createdFilePath,$copyFilePath);
                    }

                    $thumbnailpath = public_path('/Uploads/gallery_images/thumbnail/'.$fileNameToStore);
                    $img = Image::make($thumbnailpath)->resize(890, 300, function($constraint) {
                        $constraint->aspectRatio();
                    });
                    $img->save($thumbnailpath);

                    // Create Gallery Images
                    $gallery = new gallery;
                    $gallery->tag_id = $request->input('category_id');
                    $gallery->title = $request->input('title');
                    $gallery->image = $fileNameToStore;
                    $gallery->created_at = $NowTime;
                    $gallery->updated_at = $NowTime;
                    $gallery->save();
                }
            }

            $sucessMsg = 'Your Gallery Image/s has been successfully Added!';
            return redirect('/gallerySection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/gallerySection')->with('error',$exception->getMessage());
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=array(
            'pagetitle'=>'Dashboard ::  Edit Gallery Image',
            'tags'=>gallery_tag::all(),
            'image'=>gallery::find($id),
        );
        return view('gallery.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        $get_currentimg=gallery::where('id',$id)->first();
        $get_exsisttag=$get_currentimg->tag_id;
        $get_exsistcategory = gallery_tag::where('id',$get_exsisttag)->first();

        try {
        if($get_exsisttag ==$request->input('category_id')){

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
                //:delete exsist image
                File::delete('Uploads/gallery_images/'.$get_currentimg->image);
                File::delete('Uploads/gallery_images/thumbnail/'.$get_currentimg->image);

                // Upload Image
                $path = $request->file('image')->move(public_path('/Uploads/gallery_images/'), $fileNameToStore);

                //:Thumbnail compress image
                $createdFilePath = public_path().'/Uploads/gallery_images/'.$fileNameToStore;
                $copyFilePath=public_path().'/Uploads/gallery_images/thumbnail/'.$fileNameToStore;
                if (file_exists($copyFilePath)) {
                    File::copy($createdFilePath,$copyFilePath);
                } else {
                    $createnewFilePath = public_path().'/Uploads/gallery_images/thumbnail';
                    File::makeDirectory($createnewFilePath,$mode = 0777, true, true);
                    File::copy($createdFilePath,$copyFilePath);
                }

                $thumbnailpath = public_path('/Uploads/gallery_images/thumbnail/'.$fileNameToStore);
                $img = Image::make($thumbnailpath)->resize(890, 300, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);

            }
        }else{

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
                //:delete exsist image
                File::delete('Uploads/gallery_images/'.$get_exsistcategory->slug.'/'.$get_currentimg->image);
                // Upload Image
                $path = $request->file('image')->move(public_path('/Uploads/gallery_images/'), $fileNameToStore);

            }else{

                $currentFilePath = public_path().'/Uploads/gallery_images/'.$get_currentimg->image;
                $newFilePath = public_path().'/Uploads/gallery_images/'.$get_currentimg->image;

                if (file_exists($newFilePath)) {
                    $fileMoved = rename($currentFilePath, $newFilePath);
                } else {
                    $createnewFilePath = public_path().'/Uploads/gallery_images/';
                    File::makeDirectory($createnewFilePath,$mode = 0777, true, true);
                    $fileMoved = rename($currentFilePath, $newFilePath);
                }
            }

        }

        // Update Gallery Image
        $gallery = gallery::find($id);
        $gallery->tag_id = $request->input('category_id');
        $gallery->title = $request->input('title');
        if($request->hasFile('image')) {
            $gallery->image = $fileNameToStore;
        }
        $gallery->updated_at = $NowTime;
        $gallery->save();

        $sucessMsg = 'Your Gallery Image has been successfully updated!';
        return redirect('/gallerySection')->with('success', $sucessMsg);

        }
        catch(Exception $exception) {
            return redirect('/gallerySection')->with('error',$exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $gallery =gallery::find($id);
        $get_category = gallery_tag::where('id',$gallery->tag_id)->first();
        $getName=$gallery->title;
        if($gallery->image != 'noimage.jpg'){
            File::delete('Uploads/gallery_images/'.$gallery->image);
            File::delete('Uploads/gallery_images/thumbnail/'.$gallery->image);
        }
        $gallery->delete();
        $sucessMsg='The '.$getName.' gallery image record has been deleted!';
        return redirect('/gallerySection')->with('success', $sucessMsg);
    }

    public function destroy_bluk(Request $request)
    {
        gallery::query()->truncate();
        $currentFilePath = public_path().'/Uploads/gallery_images/';
        if (file_exists($currentFilePath)) {
            File::deleteDirectory($currentFilePath);
        }
        $sucessMsg='The gallery image records has been cleared!';
        return redirect('/gallerySection')->with('success', $sucessMsg);
    }
}
