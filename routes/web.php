<?php

use App\Http\Livewire\Pages;
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
Route::controller(Pages::class)->group(function(){
    Route::get('/', 'render')->name('pages.index');
    Route::get('about', 'about')->name('pages.about');
    Route::get('policy', 'policy')->name('pages.policy');
    Route::get('blog', 'blog')->name('pages.blog');
});
