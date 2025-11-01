<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PageController;
use App\Http\Controllers\GalleryTagController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomInfoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffCategoryController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\UploadController;

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

// Public Pages
Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about_us'])->name('about');
Route::get('/testimonial', [PageController::class, 'testimonial'])->name('testimonial');
Route::get('/cuisine', [PageController::class, 'cuisine'])->name('cuisine');
Route::get('/accommodation', [PageController::class, 'accommodation'])->name('accommodation');
Route::get('/admission-criteria', [PageController::class, 'admission'])->name('admission');
Route::get('/facilities', [PageController::class, 'facilities'])->name('facilities');
Route::get('/activities-and-events', [PageController::class, 'activities'])->name('activities');
Route::get('/principal-of-care', [PageController::class, 'principal'])->name('principal');
Route::get('/st-christophers', [PageController::class, 'st_christophers'])->name('st_christophers');
Route::get('/staff-training', [PageController::class, 'staff_training'])->name('staff_training');
Route::get('/bed-vacancies', [PageController::class, 'vacancies'])->name('vacancies');
Route::get('/team', [PageController::class, 'team'])->name('team');
Route::get('/job-vacancy', [PageController::class, 'job_vacancy'])->name('job_vacancy');

// Gallery Routes
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/gallery/{slug}', [PageController::class, 'show_gallery']);

// News/Blog Routes
Route::get('/news', [PageController::class, 'blog'])->name('news');
Route::get('/category-{postcategory}', [PageController::class, 'postcategory']);
Route::get('/tag-{post_category}/{slug}', [PageController::class, 'show_post']);

// Gallery Tag Section
Route::resource('/gallerytagSection', GalleryTagController::class);
Route::get('/gallerytagSection/{id}/delete', [GalleryTagController::class, 'destroy']);
Route::get('/gallerytagSection/delete/bulk-delete', [GalleryTagController::class, 'destroybluk']);

// Gallery Section
Route::resource('/gallerySection', GalleryController::class);
Route::get('/gallerySection/delete/bulk-delete', [GalleryController::class, 'destroy_bluk']);
Route::get('/gallerySection/{id}/delete', [GalleryController::class, 'destroy']);
Route::get('/get_gallery_type', [GalleryController::class, 'get_type']);

// Comment/Testimonial Section
Route::resource('/commentSection', TestimonialController::class);
Route::get('/commentSection/delete/bulk-delete', [TestimonialController::class, 'destroy_bluk']);
Route::get('/commentSection/{id}/delete', [TestimonialController::class, 'destroy']);

// Projects/Room Routes
Route::get('/projects', [PageController::class, 'room'])->name('projects');
Route::get('/room-tag-{project_tag}', [PageController::class, 'project_tag']);
Route::get('/room/{slug}', [PageController::class, 'show_project']);

// Other Pages
Route::get('/privacy-policy', [PageController::class, 'privacy_policy'])->name('privacy_policy');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/sitemap', [PageController::class, 'sitemap'])->name('sitemap');

// Post Section
Route::resource('/postSection', PostController::class);
Route::get('/postSection/{id}/delete', [PostController::class, 'destroy']);
Route::get('/postSection/delete/bulk-delete', [PostController::class, 'destroy_bulk']);

// Category Section
Route::resource('/categorySection', CategoryController::class);
Route::get('/categorySection/{id}/delete', [CategoryController::class, 'destroy']);
Route::get('/categorySection/delete/bulk-delete', [CategoryController::class, 'destroy_bulk']);

// Room Section
Route::resource('/roomSection', RoomController::class);
Route::get('/roomSection/{id}/delete', [RoomController::class, 'destroy']);
Route::get('/roomSection/delete/bulk-delete', [RoomController::class, 'destroy_bulk']);

// Room Info Section
Route::resource('/roomInfoSection', RoomInfoController::class);

// Authentication Routes
Auth::routes();

// Dashboard Routes (Protected)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/dashboard/profile', [DashboardController::class, 'my_profile']);
Route::put('/dashboard/profile/{id}', [DashboardController::class, 'updateUser']);

// Staff Category Section
Route::resource('/staff-category', StaffCategoryController::class);
Route::get('/staff-category/edit/{id}', [StaffCategoryController::class, 'edit']);
Route::post('/staff-category/update', [StaffCategoryController::class, 'update']);
Route::get('/staff-category/{id}/delete', [StaffCategoryController::class, 'destroy']);
Route::get('/staff-category/delete/bulk-delete', [StaffCategoryController::class, 'destroy_bulk']);

// Staff Section
Route::resource('/staff', StaffController::class);
Route::get('/staff/edit/{id}', [StaffController::class, 'edit']);
Route::post('/staff/update', [StaffController::class, 'update']);
Route::get('/staff/{id}/delete', [StaffController::class, 'destroy']);
Route::get('/staff/delete/bulk-delete', [StaffController::class, 'destroy_bulk']);

// Menu Route
Route::get('/menu', function () {
    return view('pages.menu');
})->name('menu');

// Upload Menu
Route::post('/uploadmenu', [UploadController::class, 'store']);

// Admin Login
Route::get('/admin', function () {
    return view('auth.login');
})->name('admin');