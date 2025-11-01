<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\gallery_tag;
use App\testimonial;
use App\room;
use App\career;
use App\post;
use App\category;
use App\gallery;
use App\room_detail;
use App\Staff;
use App\StaffCategory;

class PageController extends Controller
{
    public function index(){
        $data=array(
            'page_title'=>'Thornton Lodge',
            'description'=>"Thornton Lodge is a Residential Home for Adults and Older People with Mental Health Problems and it a whilst a network of public transport is within a stones throw which gives access to Central London and Croydon town centre.",
            'keywords'=>"thornton lodge, Care Home, care people",
            'Abstract'=>"Thornton Lodge",
            'testimonials'=>testimonial::orderBy('id', 'desc')->paginate(3),
            'count_room'=>count(room::all()),
            'rooms'=>room::where('status','=','PUBLISHED')->orderBy('id', 'desc')->paginate(3),
            'room_info'=>room_detail::where('id','1')->first(),
            'posts'=>post::where('status','=','PUBLISHED')->where('featured','=','1')->orderBy('id', 'desc')->paginate(4),
        );
        return view('pages.index')->with($data);
    }

    public function about_us(){
        $data=array(
            'page_title'=>'About Us > Thornton Lodge',
            'description'=>"Calm, cheerful and relaxed family-like environment pervades throughout the Home.",
            'keywords'=>"Thornton lodge, Care Home in UK, older people, about us, London",
            'Abstract'=>"About Thornton Lodge",
        );
        return view('pages.about')->with($data);
    }

    public function testimonial(){
        $data=array(
            'page_title'=>'Testimonial > Thornton Lodge',
            'description'=>"Our Clients what they said about our service and hospitality!",
            'keywords'=>"testimonial, about Thornton",
            'Abstract'=>"About Thornton Lodge Testimonial",
            'testimonials'=>testimonial::orderBy('id', 'desc')->paginate(9),
        );
        return view('pages.testimonial')->with($data);
    }

    public function cuisine(){
        $data=array(
            'page_title'=>'Cuisine > Thornton Lodge',
            'description'=>"The menu is decided after close consultation with the Residents.!",
            'keywords'=>"cuisine, about Thornton Cuisine",
            'Abstract'=>"About Thornton Lodge Cuisine",
        );
        return view('pages.cuisine')->with($data);
    }

    public function vacancies(){
        $data=array(
            'page_title'=>'Bed Vacancies > Thornton Lodge',
            'description'=>"We've comfortable room and other facilities and hospitality!",
            'keywords'=>"Bed Vacancies, bed Vacancies, Thornton Lodge, London",
            'Abstract'=>"About Bed Vacancies",
            'rooms'=>room::orderBy('id', 'desc')->where('status','PUBLISHED')->paginate(9),
            'room_info'=>room_detail::where('id','1')->first(),
            'count_room'=>count(room::all()),
        );
        return view('pages.vacancy')->with($data);
    }

    public function team(){

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
            'page_title'=>'Team > Thornton Lodge',
            'description'=>"It is early collaboration is vital, it is all about patient care.",
            'keywords'=>"Care Home, team people",
            'Abstract'=>"Thornton Lodge Team",
            'staffs' => $staffs
        );
        return view('pages.team')->with($data);
    }

    public function accommodation(){
        $data=array(
            'page_title'=>'Accommodation > Thornton Lodge',
            'description'=>"We are a team of professionals, It is early collaboration is vital, it is all about patient care.",
            'keywords'=>"Care Home, care people, london",
            'Abstract'=>"Thornton Lodge Accommodation",
            'count_room'=>count(room::all()),
            'rooms'=>room::where('status','=','PUBLISHED')->orderBy('id', 'desc')->paginate(3),
            'room_info'=>room_detail::where('id','1')->first(),
        );
        return view('pages.accommodation')->with($data);
    }

    public function admission(){
        $data=array(
            'page_title'=>'Admission > Thornton Lodge',
            'description'=>"Thornton Lodge is a Home for adults and Older people with mental health problems.",
            'keywords'=>"Care Home, care people, admission",
            'Abstract'=>"Thornton Lodge admission",
        );
        return view('pages.admission')->with($data);
    }

    public function facilities(){
        $data=array(
            'page_title'=>'Facilities > Thornton Lodge',
            'description'=>"A service user is entitled to the same community facilities as any normal members of the community.",
            'keywords'=>"Care Home, facilities, facilities in UK",
            'Abstract'=>"Thornton Lodge facilities",
        );
        return view('pages.facilities')->with($data);
    }

    public function activities(){
        $data=array(
            'page_title'=>'Activities > Thornton Lodge',
            'description'=>"The Home encourages all the service users to participate in planned activities of their choice.",
            'keywords'=>"Care Home, Thornton Lodge activities, Thornton Lodge",
            'Abstract'=>"Thornton Lodge activities",
        );
        return view('pages.activities')->with($data);
    }

    public function principal(){
        $data=array(
            'page_title'=>'Principal > Thornton Lodge',
            'description'=>"All complaints should be addressed to the manager of the home either verbally or in written form.",
            'keywords'=>"Care Home, care people, principal, london care home",
            'Abstract'=>"Thornton Lodge principal",
        );
        return view('pages.principal')->with($data);
    }
    
    public function st_christophers(){
        $data=array(
            'page_title'=>'St. Christopher\'s > Thornton Lodge',
            'description'=>"Thornton Lodge aims at promoting quality of life for older, enabling Residents to die in comfort and with dignity towards the very end of their life.",
            'keywords'=>"St. Christopher\'s, Hospice, Care Home, care people, london",
            'Abstract'=>"Thornton Lodge St. Christopher\'s Hospice",
        );
        return view('pages.st_christophers')->with($data);
    }

    public function staff_training(){
        $data=array(
            'page_title'=>'Staff Training > Thornton Lodge',
            'description'=>"This is very much influenced by the staff who have been embraced by the philosophy of the home’s care.",
            'keywords'=>"Care Home, care people, training, staff training",
            'Abstract'=>"Thornton Lodge Staff Training",
        );
        return view('pages.staff_training')->with($data);
    }

    public function blog(){
        $data=array(
            'page_title'=>'Blog > Thornton Lodge',
            'description'=>"We provide News updates from the Thornton Lodge, we are learning from every moment.",
            'keywords'=>"Care Home, older people, news, care home london",
            'Abstract'=>"Thornton Lodge - Blog and News",
            'tags'=>category::all(),
            'posts'=>post::where('status','=','PUBLISHED')->where('category_id','=','2')->orderBy('id', 'desc')->paginate(6),
            'pop_post'=>post::where('status','=','PUBLISHED')->orderBy('id', 'desc')->paginate(4),
        );
        return view('pages.blog')->with($data);
    }

    public function postcategory($slug){
        $getcategory=category::where('slug',$slug)->first();
        $data=array(
            'page_title'=>$getcategory->name.' > Blog > Thornton Lodge',
            'description'=>$getcategory->name."  News updates from the Thornton Lodge, we are learning from every moment.",
            'keywords'=>"Care Home, older people, news, care home london",
            'Abstract'=>"Thornton Lodge - News",
            'tags'=>category::all(),
            'tag_info'=>$getcategory,
            'pop_post'=>post::where('status','=','PUBLISHED')->orderBy('id', 'desc')->paginate(4),
            'posts'=>post::where('status','=','PUBLISHED')->where('category_id','=',$getcategory->id)->orderBy('id', 'desc')->paginate(6),
        );
        return view('post.category')->with($data);
    }

    public function show_post($categorySlug,$slug){
        $posts = post::where('slug', '=', $slug)->firstOrFail();
        $getcategory=category::find($posts->category_id);

        $data=array(
            'page_title'=>$posts->title.' > Thornton Lodge',
            'Abstract'=>"Thornton Lodge - News",
            'tag_info'=>$getcategory,
            'tags'=>category::all(),
            'post'=>$posts,
            'pop_post' => post::where('status','=','PUBLISHED')->where('slug','!=',$slug)->orderBy('id','DESC')->paginate(5),
        );
        return view('post.show')->with($data);
    }

    public function gallery(){
        $data=array(
            'page_title'=>'Gallery > Thornton Lodge',
            'gallery_tags'=>gallery_tag::orderBy('id', 'desc')->paginate(9),
            'galleries'=>gallery::orderBy('created_at', 'desc')->paginate(18),
            'description'=>"Our team dedicated their work for our services.",
            'keywords'=>"Thornton Lodge, Gallery ,historic, London",
            'Abstract'=>"Thornton Lodge Gallery",
        );
        return view('pages.gallery')->with($data);
    }

    public function show_gallery($slug){

        $getcategory=gallery_tag::where('slug', $slug)->first();
        $data=array(
            'page_title'=>$getcategory->title.' Gallery Albums > Thornton Lodge',
            'description'=>"Our team dedicated their work for our services",
            'keywords'=>"Thornton Lodge, Gallery ,historic, London",
            'Abstract'=>"Thornton Lodge, Gallery ,historic, London\"",
            'tags'=>gallery_tag::all(),
            'tag_info'=>$getcategory,
            'galleries'=>gallery::where('tag_id',$getcategory->id)->orderBy('created_at', 'desc')->paginate(15),

        );
        return view('gallery.show')->with($data);
    }

    public function vacancy(){
        $data=array(
            'page_title'=>'Thornton Lodge > Vacancy',
            'description'=>"Working for Thornton Lodge - information about job opportunities and training",
            'keywords'=>"Vacancy, Careers, care home, London",
            'Abstract'=>"Thornton Lodge - job opportunities and training",
        );
        return view('pages.vacancy')->with($data);
    }

    public function contact(){
        $data=array(
            'page_title'=>'Thornton Lodge > Contact',
            'description'=>"Our Lodge contact and general information",
            'keywords'=>"Contact, care home, Lodge, Thornton Lodge, London",
            'Abstract'=>"Contact with Thornton Lodge",
        );
        return view('pages.contact')->with($data);
    }

    public function job_vacancy(){
        $data=array(
            'page_title'=>'Thornton Lodge > job_vacancy',
            'description'=>"Our Lodge contact and general job_vacancy information",
            'keywords'=>"Contact, care home, Lodge,job_vacancy, Thornton Lodge, London",
            'Abstract'=>"job_vacancy with Thornton Lodge",
        );
        return view('pages.job_vacancy')->with($data);
    }

    public function privacy_policy(){
        $data=array(
            'page_title'=>'Thornton Lodge > Privacy Policy',
            'description'=>"We are provide our service under UK government rules and regulations.",
            'keywords'=>"Care home in london, Care home, Privacy",
            'Abstract'=>"Thornton Lodge Privacy Policy",
        );
        return view('pages.terms')->with($data);
    }

    public function sitemap(){
        $data=array(
            'page_title'=>'Thornton Lodge > Sitemap',
            'description'=>"We are listed out our website all links by this link.",
            'keywords'=>"Care home in london, Care home, site map",
            'Abstract'=>"Thornton Lodge site map",
        );
        return view('pages.sitemap')->with($data);
    }
    public function menu(){
       
        return view('pages.menu');
    }
    
}