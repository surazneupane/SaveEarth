<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/about', [HomeController::class, 'about'])->name('aboutus');
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('blog/{id}', [HomeController::class, 'showBlog'])->name('showblog');
Route::get('causes', [HomeController::class, 'causes'])->name('causes');
Route::get('/contactus', [HomeController::class, 'contactUs'])->name('contactus');
