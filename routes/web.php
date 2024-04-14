<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\PageViewController;
use Illuminate\Support\Facades\Route;

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

// Landing page
Route::get('/', [PageViewController::class, 'home'])->name('landing');

// Main Page
Route::get('/layanan', [PageViewController::class, 'layanan'])->name('layanan');
Route::get('/layanan/{slug}', [LayananController::class, 'getCustomLayanan'])->name('layanan-custom');

// Blog
Route::get('/blog', [BlogController::class, 'blogHome'])->name('blog');
Route::get('/blog/post/{slug}', [BlogController::class, 'blogPost'])->name('blog-post');