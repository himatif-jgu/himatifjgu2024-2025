<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\AlumniController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\SocialiteController;
use App\Http\Controllers\GalleryController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/auth/redirect', [SocialiteController::class, 'redirect'])->name('redirect');
Route::get('/auth/google/callback', [SocialiteController::class, 'callback'])->name('callback');


Route::get('/', [MainController::class, 'index'])->name('welcome');
Route::get('blog', [MainController::class, 'blog'])->name('blog');
Route::get('blog/{post}', [MainController::class, 'show'])->name('blog.post');

Route::get('gallery-landing', [MainController::class, 'gallery'])->name('gallery-landing');
Route::get('alumni-landing', [MainController::class, 'alumni'])->name('alumni-landing');

Route::get('sejarah', [MainController::class, 'sejarah'])->name('sejarah');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/posts/create/checkSlug', [PostController::class, 'checkSlug']);

Route::middleware(['auth'])->group(function () {
    Route::get('/account', [AccountController::class, 'index'])->name('account');
    Route::post('/account', [AccountController::class, 'store'])->name('account.store');
    Route::get('/account/{id}/edit', [AccountController::class, 'edit'])->name('account.edit');
    Route::put('/account/{id}/update', [AccountController::class, 'update'])->name('account.update');
    Route::delete('/account/{id}', [AccountController::class, 'destroy'])->name('account.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/posts', [PostController::class, 'index'])->name('posts');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/update/{post}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/destroy/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/alumni', [AlumniController::class, 'index'])->name('alumni');
    Route::get('/alumni/create', [AlumniController::class, 'create'])->name('alumni.create');
    Route::post('/alumni/store', [AlumniController::class, 'store'])->name('alumni.store');
    Route::get('/alumni/edit/{alumni}', [AlumniController::class, 'edit'])->name('alumni.edit');
    Route::put('/alumni/update/{alumni}', [AlumniController::class, 'update'])->name('alumni.update');
    Route::delete('/alumni/destroy/{alumni}', [AlumniController::class, 'destroy'])->name('alumni.destroy');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
    Route::get('/gallery/create', [GalleryController::class, 'create'])->name('gallery.create');
    Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
    Route::get('/gallery/edit/{gallery}', [GalleryController::class, 'edit'])->name('gallery.edit');
    Route::put('/gallery/update/{gallery}', [GalleryController::class, 'update'])->name('gallery.update');
    Route::delete('/gallery/destroy/{gallery}', [GalleryController::class, 'destroy'])->name('gallery.destroy');
});
