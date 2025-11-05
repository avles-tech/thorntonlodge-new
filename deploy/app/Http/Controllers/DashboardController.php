<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\category;
use App\post;
use App\room;
use App\testimonial;
use App\User;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $get_p_tags=category::all();
        $get_posts=post::all();
        $get_rooms=room::all();
        $get_testimonial=testimonial::all();
        $data=array(
        'pagetitle'=>"Thornton Lodge :: Dashboard",
            'post_tag_count' => count($get_p_tags),
            'post_count' => count($get_posts),
            'rooms_count' => count($get_rooms),
            'testimonial_count' => count($get_testimonial),
        );
        return view('dashboard')->with($data);
    }

    public function my_profile()
    {
        $pagetitle="Dashboard - User Profile";
        return view('admin_user.user')->with('pagetitle',$pagetitle);
    }

    public function updateUser(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        //:Update the user data
        $Users = User::find($id);
        $Users->name = $request->input('name');
        $Users->email = $request->input('email');
        $Users->password = bcrypt($request->input('password'));
        $Users->save();
        Auth::logout();
        return redirect('/admin')->with('success', 'Your Admin login credentials has been updated!');
    }
}
