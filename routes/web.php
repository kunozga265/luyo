<?php

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

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/projects', function () {
    return view('pages.projects');
})->name('projects');

Route::get('/projects/{id}', function () {
    return view('pages.projects-show');
})->name('projects.show');

Route::get('/construction-plant', function () {
    return view('pages.construction-plant');
})->name('construction-plant');

Route::get('/blog', function () {
    return view('pages.blog');
})->name('blog');

Route::get('/blog/{id}', function () {
    return view('pages.blog-show');
})->name('blog.show');

Route::get('/about-us', function () {
    return view('pages.aboutUs');
})->name('about-us');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
