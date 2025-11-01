<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\post;
use App\category;
use Exception;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $gettagsitems=post::all();
        $data=array(
            'pagetitle'=>'Dashboard :: Posts',
            'posts'=>post::orderby('id','desc')->get(),
            'getCount'=>count($gettagsitems),
        );
        return view('post.index')->with($data);
    }

    public function create()
    {
        $data=array(
            'pagetitle'=>'Dashboard :: Create Post',
            'tags'=>category::all(),
        );
        return view('post.create')->with($data);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

            // Handle File Upload
            if($request->hasFile('cover_image')){
                // Get filename with the extension
                $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
                // Get just filename
                $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
                // Get just ext
                $extension = $request->file('cover_image')->getClientOriginalExtension();
                // Filename to store
                $fileNameToStore= $filename.'_'.time().'.'.$extension;
                // Upload Image
                $path = $request->file('cover_image')->move(public_path('/Uploads/post_cover_images'), $fileNameToStore);

            }
            else
            {
              $fileNameToStore = 'noimage.jpg';
            }

            $featured_value=0;
            if($request->input('featured')=="on"){
                $featured_value=1;
            }else{
                $featured_value=0;
            }

            try {
                // Create Post
                $Post = new Post;
                $Post->category_id = $request->input('category_id');
                $Post->title = $request->input('title');
                $Post->slug = $request->input('slug');
                $Post->author = $request->input('author');
                $Post->seo_title = $request->input('seotitle');
                $Post->excerpt = $request->input('description');
                $Post->status = $request->input('status');
                $Post->featured = $featured_value;
                $Post->body = $request->input('body');
                $Post->meta_description = $request->input('meta_description');
                $Post->keyword = $request->input('keywords');
                $Post->image = $fileNameToStore;
                $Post->created_at = $NowTime;
                $Post->updated_at = $NowTime;
                $Post->save();
                $sucessMsg = 'Your post has been successfully Added!';
                return redirect('/postSection')->with('success', $sucessMsg);
            }
            catch(Exception $exception) {
                $errormsg="Invalid Title, This \"<strong>".$request->input('title')."</strong>\" title already stored in the database, Please use another title!";
                return redirect('/postSection')->with('error',$errormsg);
            }

    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $data=array(
            'pagetitle'=>'Dashboard ::  Edit Post',
            'tags'=>category::all(),
            'post'=>post::find($id),
        );
        return view('post.edit')->with($data);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        $timezone_offset_minutes = 330;
        // Convert minutes to seconds
        $timezone_name = timezone_name_from_abbr("", $timezone_offset_minutes*60, false);
        date_default_timezone_set($timezone_name);
        $NowTime=date("Y-m-d h:i:s");

        #Get post category ID

        $get_currentimg=post::where('id',$id)->first();

        // Handle File Upload
        if($request->hasFile('cover_image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('cover_image')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('cover_image')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            //:delete exsist image
            File::delete('Uploads/post_cover_images/'.$get_currentimg->image);
            // Upload Image
            $path = $request->file('cover_image')->move(public_path('/Uploads/post_cover_images'), $fileNameToStore);

        }

        $featured_value=0;
        if($request->input('featured')=="on"){
            $featured_value=1;
        }else{
            $featured_value=0;
        }

        try {
            // Update Post
            $Post = Post::find($id);
            $Post->category_id = $request->input('category_id');
            $Post->title = $request->input('title');
            $Post->slug = $request->input('slug');
            $Post->author = $request->input('author');
            $Post->seo_title = $request->input('seotitle');
            $Post->excerpt = $request->input('description');
            $Post->status = $request->input('status');
            $Post->featured = $featured_value;
            $Post->body = $request->input('body');
            $Post->meta_description = $request->input('meta_description');
            $Post->keyword = $request->input('keywords');
            if ($request->hasFile('cover_image')) {
                $Post->image = $fileNameToStore;
            }
            $Post->updated_at = $NowTime;
            $Post->save();
            $sucessMsg = 'Your post has been successfully updated!';
            return redirect('/postSection')->with('success', $sucessMsg);
        }
        catch(Exception $exception) {
            $errormsg="Invalid Title, This \"<strong>".$request->input('title')."</strong>\" title already stored in the database, Please use another title!";
            return redirect('/postSection')->with('error',$errormsg);
        }

    }

    public function destroy($id)
    {
        $Post =post::find($id);
        if($Post->image != 'noimage.jpg'){
            File::delete('Uploads/post_cover_images/'.$Post->image);
        }
        $Post->delete();
        $sucessMsg='Your 1 Post record has been deleted!';
        return redirect('/postSection')->with('success', $sucessMsg);
    }

    public function destroy_bulk(Request $request)
    {
        $post =post::query()->truncate();
        $currentFilePath = public_path().'/Uploads/post_cover_images/';
        if (file_exists($currentFilePath)) {
            File::deleteDirectory($currentFilePath);
        }
        $sucessMsg='All Post records has been cleared!';
        return redirect('/postSection')->with('success', $sucessMsg);
    }
}
