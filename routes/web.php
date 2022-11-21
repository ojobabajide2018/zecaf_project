<?php

use App\Http\Controllers\WebsiteController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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


    Route::get('/', [WebsiteController::class, 'index'])->name('welcome');
    Route::get('about-us', [WebsiteController::class, 'aboutUs'])->name('about-us');
    Route::get('members', [WebsiteController::class, 'members'])->name('members');
    Route::get('committees', [WebsiteController::class, 'subCommittees'])->name('committees');


    /*CMS endpoints*/
    Route::get('admin', [AdminController::class, 'admin'])->name('admin');
    Route::get('slider', [AdminController::class, 'slider'])->name('slider');
    Route::post('upload-slider', [AdminController::class, 'uploadSlider'])->name('upload-slider');


    /*governing body*/
    Route::get('governing-body', [AdminController::class, 'governingBody'])->name('governing-body');
    Route::post('upload-governing-body', [AdminController::class, 'uploadGoverningBody'])->name('upload-governing-body');

    /*blog post*/
    Route::get('blog-post', [AdminController::class, 'blogPost'])->name('blog-post');
    Route::post('upload-blog-post', [AdminController::class, 'uploadBlogPost'])->name('upload-blog-post');

    Route::get('blog-single', [AdminController::class, 'blogSingle'])->name('blog-single');


    /*Gallery*/
    Route::get('gallery', [AdminController::class, 'gallery'])->name('gallery');

    Route::post('upload-gallery', [AdminController::class, 'uploadGallery'])->name('upload-gallery');

