<?php

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
Route::get('/layanan/{name}', [PageViewController::class, 'layananCustom'])->name('layanan-custom');

// Blog
Route::get('/blog', [PageViewController::class, 'blog'])->name('blog');
Route::get('/blog/post', [PageViewController::class, 'blogPost'])->name('blog-post');