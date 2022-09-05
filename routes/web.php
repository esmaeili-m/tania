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
Route::get('/', \App\Http\Livewire\Home\Index::class)->name('home');
Route::prefix('admin')->group(function () {
//------------------------------------------------------------------------------------------------------------------------------>dashboard
    Route::get('/dashboard',\App\Http\Livewire\Admin\Dashboard\Index::class)->name('dashboard');
//----------------------------------------------------------------------------------------------------------------------------------->category
    Route::get('/category',\App\Http\Livewire\Admin\Category\Index::class)->name('category');
    Route::get('/category/trashed',\App\Http\Livewire\Admin\Category\Trash::class)->name('category.trash');
    Route::get('/category/{category}',\App\Http\Livewire\Admin\Category\Update::class)->name('category.update');
//------------------------------------------------------------------------------------------------------------------------------------>post
    Route::get('/post',\App\Http\Livewire\Admin\Post\Index::class)->name('post');
    Route::get('/post/create',\App\Http\Livewire\Admin\Post\Create::class)->name('post.create');
    Route::post('/editor',[\App\Http\Controllers\uploadController::class,'index'])->name('editor-upload');
    Route::get('/post/trash',\App\Http\Livewire\Admin\Post\Trash::class)->name('post.trash');
    Route::get('/post/update/{post}',\App\Http\Livewire\Admin\Post\Update::class)->name('post.update');
//------------------------------------------------------------------------------------------------------------------------------------>article
    Route::get('/article',\App\Http\Livewire\Admin\Article\Index::class)->name('article');
    Route::get('/article/create',\App\Http\Livewire\Admin\Article\Create::class)->name('article.create');
    Route::get('/article/trash',\App\Http\Livewire\Admin\Article\Trash::class)->name('article.trash');
    Route::get('/article/update/{article}',\App\Http\Livewire\Admin\Article\Update::class)->name('article.update');
//------------------------------------------------------------------------------------------------------------------------------------>social
   Route::get('/social',\App\Http\Livewire\Admin\SocialMedia\Index::class)->name('social');
//------------------------------------------------------------------------------------------------------------------------------------>slider
   Route::get('/slider',App\Http\Livewire\Admin\Slider\Index::class)->name('slider');
   Route::get('/slider/create',App\Http\Livewire\Admin\Slider\Create::class)->name('slider.create');
   Route::get('/slider/update/{slider}',App\Http\Livewire\Admin\Slider\Update::class)->name('slider.update');
   Route::get('/slider/trash',App\Http\Livewire\Admin\Slider\Trash::class)->name('slider.trash');
//------------------------------------------------------------------------------------------------------------------------------------>services
   Route::get('/services',App\Http\Livewire\Admin\Services\Index::class)->name('services');
   Route::get('/services/create',App\Http\Livewire\Admin\Services\Create::class)->name('services.create');
   Route::get('/services/update/{service}',App\Http\Livewire\Admin\Services\Update::class)->name('services.update');
   Route::get('/services/trash',App\Http\Livewire\Admin\Services\Trash::class)->name('services.trash');
//------------------------------------------------------------------------------------------------------------------------------------>services
   Route::get('/postSlider',App\Http\Livewire\Admin\PostSlider\Index::class)->name('postSlider');
   Route::get('/postSlider/create',App\Http\Livewire\Admin\PostSlider\Create::class)->name('postSlider.create');
   Route::get('/postSlider/update/{postSlider}',App\Http\Livewire\Admin\PostSlider\Update::class)->name('postSlider.update');
   Route::get('/postSlider/trash',App\Http\Livewire\Admin\PostSlider\Trash::class)->name('postSlider.trash');
});
