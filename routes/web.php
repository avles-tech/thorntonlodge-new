<?php
use Illuminate\Support\Facades\Mail;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/','PageController@index')->name('home');
Route::get('/about','PageController@about_us')->name('about');
Route::get('/testimonial','PageController@testimonial')->name('testimonial');
Route::get('/cuisine','PageController@cuisine')->name('cuisine');
Route::get('/accommodation','PageController@accommodation')->name('accommodation');
Route::get('/admission-criteria','PageController@admission')->name('admission');
Route::get('/facilities','PageController@facilities')->name('facilities');
Route::get('/activities-and-events','PageController@activities')->name('activities');
Route::get('/principal-of-care','PageController@principal')->name('principal');
Route::get('/st-christophers','PageController@st_christophers')->name('st_christophers');
Route::get('/staff-training','PageController@staff_training')->name('staff_training');
Route::get('/bed-vacancies','PageController@vacancies')->name('vacancies');
Route::get('/team','PageController@team')->name('team');
Route::get('/job-vacancy','PageController@job_vacancy')->name('job_vacancy');

Route::get('/gallery','PageController@gallery')->name('gallery');
Route::get('/gallery/{slug}','PageController@show_gallery');

Route::get('/news','PageController@blog')->name('news');
Route::get('/category-{postcategory}','PageController@postcategory');
Route::get('/tag-{post_category}/{slug}','PageController@show_post');

Route::resource('/gallerytagSection','GalleryTagController');
Route::get('/gallerytagSection/{id}/delete','GalleryTagController@destroy');
Route::get('/gallerytagSection/delete/bulk-delete','GalleryTagController@destroybluk');

Route::resource('/gallerySection','GalleryController');
Route::get('/gallerySection/delete/bulk-delete','GalleryController@destroy_bluk');
Route::get('/gallerySection/{id}/delete','GalleryController@destroy');
Route::get('/get_gallery_type','GalleryController@get_type');

Route::resource('/commentSection','TestimonialController');
Route::get('/commentSection/delete/bulk-delete','TestimonialController@destroy_bluk');
Route::get('/commentSection/{id}/delete','TestimonialController@destroy');

Route::get('/projects','PageController@room')->name('projects');
Route::get('/room-tag-{project_tag}','PageController@project_tag');
Route::get('/room/{slug}','PageController@show_project');

Route::get('/privacy-policy','PageController@privacy_policy')->name('privacy_policy');
Route::get('/contact','PageController@contact')->name('contact');

Route::get('/sitemap','PageController@sitemap')->name('sitemap');

Route::resource('/postSection','PostController');
Route::get('/postSection/{id}/delete','PostController@destroy');
Route::get('/postSection/delete/bulk-delete','PostController@destroy_bulk');

Route::resource('/categorySection','CategoryController');
Route::get('/categorySection/{id}/delete','CategoryController@destroy');
Route::get('/categorySection/delete/bulk-delete','CategoryController@destroy_bulk');

Route::resource('/roomSection','RoomController');
Route::get('/roomSection/{id}/delete','RoomController@destroy');
Route::get('/roomSection/delete/bulk-delete','RoomController@destroy_bulk');

Route::resource('/roomInfoSection','RoomInfoController');

Auth::routes();
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/profile','DashboardController@my_profile');
Route::Put('/dashboard/profile/{id}','DashboardController@updateUser');

Route::resource('/staff-category','StaffCategoryController');
Route::get('/staff-category/edit/{id}','StaffCategoryController@edit');
Route::post('/staff-category/update','StaffCategoryController@update');
Route::get('/staff-category/{id}/delete','StaffCategoryController@destroy');
Route::get('/staff-category/delete/bulk-delete','StaffCategoryController@destroy_bulk');

Route::get('/site-settings','SiteSettingController@index');
Route::post('/site-settings/update-menu-pdf','SiteSettingController@updateMenuPdf');

Route::resource('/staff','StaffController');
Route::get('/staff/edit/{id}','StaffController@edit');
Route::post('/staff/update','StaffController@update');
Route::get('/staff/{id}/delete','StaffController@destroy');
Route::get('/staff/delete/bulk-delete','StaffController@destroy_bulk');

Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

Route::post('/uploadmenu', 'UploadController@store');

Route::get('/admin', function () {
    return view('auth.login');
})->name('admin');