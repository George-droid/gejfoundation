<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CustomAuthController::class, 'home'])->name('home');
Route::get('/about', [CustomAuthController::class, 'about'])->name('about');
Route::get('/blog', [CustomAuthController::class, 'blog'])->name('blog');
Route::get('/services', [CustomAuthController::class, 'services'])->name('services');
Route::get('/contact-us', [CustomAuthController::class, 'contact'])->name('contact');
Route::post('/contact-us/submit', [CustomAuthController::class, 'submitContactForm'])->name('contact.submit');