<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [
    PageController::class,'home'
])->name('home');

Route::get('/services', [
    PageController::class,'services'
])->name('services');

Route::get('/projects', [
    PageController::class,'projects'
])->name('projects');

Route::get('/projects/{slug}', [
    PageController::class, 'projectShow'
])->name('projects.show');

Route::get('/construction-plant', [
    PageController::class,'construction'
])->name('construction-plant');

Route::get('/blogs', [
    PageController::class,'blogs'
])->name('blogs');

Route::get('/blogs/{slug}',[
    PageController::class,'blogShow'
])->name('blogs.show');

Route::get('/about-us',[
    PageController::class,'aboutUs'
])->name('about-us');


Route::group(['middleware'=>'auth','prefix'=>'admin'],function(){
    Route::get('/dashboard',[
        PageController::class,'dashboard'
    ])->name('dashboard');

    Route::get('/change-password',function (){
        return view('admin.change-password');
    })->name('change-password-view');

    Route::post('/change-password',[
        PageController::class,'changePassword'
    ])->name('change-password');

    Route::post('/logout', function () {
        Auth::logout();
        return Redirect::route('home');
    })->name('logout');

    Route::group(['prefix'=>'projects'],function (){
        Route::get('/', [
            ProjectController::class,'index'
        ])->name('admin-projects');

        Route::get('/new', function () {
            return view('admin.projects.new');
        })->name('admin-projects-new');

        Route::post('/new', [
            ProjectController::class, 'store'
        ])->name('admin-projects-store');

        Route::post('/image-upload', [
            ProjectController::class, 'upload'
        ])->name('projects.image-upload');

        Route::get('/view/{slug}', [
            ProjectController::class,'show'
        ])->name('admin-projects-view');

        Route::get('/edit/{slug}', [
            ProjectController::class,'edit'
        ])->name('admin-projects-edit');

        Route::post('/edit/{slug}', [
            ProjectController::class, 'update'
        ])->name('admin-projects-update');

        Route::get('/delete/{slug}', [
            ProjectController::class, 'destroy'
        ])->name('admin-projects-delete');

    });

    Route::group(['prefix'=>'blogs'],function (){
        Route::get('/', [BlogController::class,'index'])->name('admin-blogs');

        Route::get('/new', function () {
            return view('admin.blogs.new');
        })->name('admin-blogs-new');

        Route::post('/new', [BlogController::class, 'store'])->name('admin-blogs-store');

        Route::post('/image-upload', [BlogController::class, 'upload'])->name('blogs.image-upload');

        Route::get('/view/{slug}', [BlogController::class,'show'])->name('admin-blogs-view');

        Route::get('/edit/{slug}', [BlogController::class,'edit'])->name('admin-blogs-edit');

        Route::post('/edit/{slug}', [BlogController::class, 'update'])->name('admin-blogs-update');

        Route::get('/delete/{slug}', [BlogController::class, 'destroy'])->name('admin-blogs-delete');

    });




});



require __DIR__.'/auth.php';
