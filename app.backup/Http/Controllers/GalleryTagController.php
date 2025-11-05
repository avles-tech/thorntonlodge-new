<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\gallery;
use App\gallery_tag;
use Image;
use Exception;

class GalleryTagController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Gallery Categories',
            'tags'=>gallery_tag::orderBy('id', 'desc')->get(),
            'tagviewid'=>0,
        );
        return view('gallery.tag.index')->with($data);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
        ]);
       
        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try {

            // Handle File Upload
            if($request->hasFile('images')){

                // Get filename with the extension
                $filenameWithExt = $request->file('images')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('images')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;

                // Upload Image
                $path = $request->file('images')->move(public_path('/Uploads/gallery_cover_images'), $fileNameToStore);

                //:Thumbnail compress image
                $createdFilePath = public_path().'/Uploads/gallery_cover_images/'.$fileNameToStore;
                $copyFilePath=public_path().'/Uploads/gallery_cover_images/thumbnail/'.$fileNameToStore;
                if (file_exists($copyFilePath)) {
                    File::copy($createdFilePath,$copyFilePath);
                } else {
                    $createnewFilePath = public_path().'/Uploads/gallery_cover_images/thumbnail';
                    File::makeDirectory($createnewFilePath,$mode = 0777, true, true);
                    File::copy($createdFilePath,$copyFilePath);
                }

                $thumbnailpath = public_path('/Uploads/gallery_cover_images/thumbnail/'.$fileNameToStore);
                $img = Image::make($thumbnailpath)->resize(890, 300, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
            }

            // Create gallery Tag
            $gallery_tag = new gallery_tag;
            $gallery_tag->title = $request->input('title');
            $gallery_tag->slug = $request->input('slug');
            $gallery_tag->order = $request->input('order');
            if($request->hasFile('images')) {
                $gallery_tag->image = $fileNameToStore;
            }
            else { $gallery_tag->image = 'noimage.jpg'; }
            $gallery_tag->created_at = $NowTime;
            $gallery_tag->updated_at = $NowTime;
            $gallery_tag->save();

            $sucessMsg='The '.$request->input('title').' tag has been successfully created!';
            return redirect('/gallerytagSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/gallerytagSection')->with('error',$exception->getMessage());
        }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Edit Gallery Category',
            'tags'=>gallery_tag::orderBy('id', 'desc')->get(),
            'tagscategory'=>gallery_tag::find($id),
            'tagviewid'=>$id,
        );
        return view('gallery.tag.index')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'slug' => 'required',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        try {

            $get_currentimg=gallery_tag::where('id',$id)->first();


            // Handle File Upload
            if($request->hasFile('image_new')){

                // Get filename with the extension
                $filenameWithExt = $request->file('image_new')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('image_new')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;

                //:delete exsist image
                File::delete('Uploads/gallery_cover_images/'.$get_currentimg->image);
                File::delete('Uploads/gallery_cover_images/thumbnail/'.$get_currentimg->image);

                // Upload Image
                $path = $request->file('image_new')->move(public_path('/Uploads/gallery_cover_images'), $fileNameToStore);

                //:Thumbnail compress image
                $createdFilePath = public_path().'/Uploads/gallery_cover_images/'.$fileNameToStore;
                $copyFilePath=public_path().'/Uploads/gallery_cover_images/thumbnail/'.$fileNameToStore;
                if (file_exists($copyFilePath)) {
                    File::copy($createdFilePath,$copyFilePath);
                } else {
                    $createnewFilePath = public_path().'/Uploads/gallery_cover_images/thumbnail';
                    File::makeDirectory($createnewFilePath,$mode = 0777, true, true);
                    File::copy($createdFilePath,$copyFilePath);
                }

                $thumbnailpath = public_path('/Uploads/gallery_cover_images/thumbnail/'.$fileNameToStore);
                $img = Image::make($thumbnailpath)->resize(890, 300, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save($thumbnailpath);
            }

            // Create gallery Tag
            $gallery_tag = gallery_tag::find($id);
            $gallery_tag->title = $request->input('title');
            $gallery_tag->slug = $request->input('slug');
            $gallery_tag->order = $request->input('order');
            if($request->hasFile('image_new')) {
                $gallery_tag->image = $fileNameToStore;
            }
            $gallery_tag->created_at = $NowTime;
            $gallery_tag->updated_at = $NowTime;
            $gallery_tag->save();

            $sucessMsg='The '.$request->input('title').' tag has been successfully updated!';
            return redirect('/gallerytagSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            return redirect('/gallerytagSection')->with('error',$exception->getMessage());
        }
    }

    public function destroy($id)
    {
        $gallery_tag =gallery_tag::find($id);
        $getTagName=$gallery_tag->title;
        if($gallery_tag->image != 'noimage.jpg'){
            File::delete('Uploads/gallery_cover_images/'.$gallery_tag->image);
            File::delete('Uploads/gallery_cover_images/thumbnail/'.$gallery_tag->image);
        }

        $getGalleries=gallery::where('tag_id',$id)->get();
        foreach($getGalleries as $gallery){
            $gallery =gallery::find($gallery->id);
            $currentThumbnailFilePath = public_path().'/Uploads/gallery_cover_images/thumbnail/'.$gallery->image;
            File::delete($currentThumbnailFilePath);
            $gallery->delete();
        }

        $currentFilePath = public_path().'/Uploads/gallery_images/'.$gallery_tag->slug;
        if (file_exists($currentFilePath)) {
            File::deleteDirectory($currentFilePath);
        }

        $gallery_tag->delete();
        $sucessMsg='The '.$getTagName.' Gallery tag and this particular images has been deleted!';
        return redirect('/gallerytagSection')->with('success', $sucessMsg);
    }

    public function destroybluk(Request $request)
    {
        gallery_tag::query()->truncate();
        $currentFilePath = public_path().'/Uploads/gallery_cover_images/';
        if (file_exists($currentFilePath)) {
            File::deleteDirectory($currentFilePath);
        }
        $sucessMsg='All gallery tag records has been cleared!';
        return redirect('/gallerytagSection')->with('success', $sucessMsg);
    }
}
