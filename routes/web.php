<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\AdvertisingController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SocialShareButtonsController;

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


Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/category/{slug}', [PageController::class, 'category'])->name('category');

Route::get('/search', [PageController::class, 'search'])->name('search');

Route::get('/social-media-share', [SocialShareButtonsController::class,'ShareWidget'])->name('share');

 Route::get('/posts/{slug}', [PageController::class, 'posts'])->name('post');

Route::get('/admin/posts', function () {
    return view('admin.posts.index');
})->middleware(['auth'])->name('postIndex');



Route::prefix('/admin')->name('admin.')->middleware('auth')->group(function (){

    Route::get('/dashboard', [AdminController::class, 'dashboard'] )->name('dashboard');
    Route::resource('posts', PostController::class);
    Route::resource('advertising', AdvertisingController::class);
    Route::resource('menu', MenuController::class);
    Route::resource('category', CategoryController::class);


});

require __DIR__.'/auth.php';
