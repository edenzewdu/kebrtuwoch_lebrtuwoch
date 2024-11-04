<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\VideosController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\OurStrongestController;
use App\Http\Controllers\StrengthStoriesController;

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

// Route::get('/', [HomeController::class, 'home'])->middleware('auth')->name('home');
Route::get('/', [HomeController::class, 'home']);
Route::get('/about', [AboutController::class, 'about']);
Route::resource('ourStrongest', OurStrongestController::class);
Route::get('/videos', [VideosController::class, 'videos']);
Route::get('/contact', [ContactController::class, 'contact']);
Route::get('/strengthStories', [StrengthStoriesController::class, 'strengthStories']);
