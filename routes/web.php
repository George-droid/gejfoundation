<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [CustomAuthController::class, 'home'])->name('home');
Route::get('/about', [CustomAuthController::class, 'about'])->name('about');
Route::get('/blog', [CustomAuthController::class, 'blog'])->name('blog');
Route::get('/services', [CustomAuthController::class, 'services'])->name('services');
Route::get('/contact-us', [CustomAuthController::class, 'contact'])->name('contact');
Route::get('/waef', [CustomAuthController::class, 'waef'])->name('waef');
Route::get('/gallery', [CustomAuthController::class, 'gallery'])->name('gallery');
Route::post('/contact-us/submit', [CustomAuthController::class, 'submitContactForm'])->name('contact.submit');
Route::get('/admin/login', [CustomAuthController::class, 'adminLogin'])->name('admin.login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');

Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

Route::get('/dashboard/add-news', [DashboardController::class, 'addNews'])->name('be.addNews');
Route::post('/dashboard/save-news', [DashboardController::class, 'saveNews'])->name('be.saveNews');
Route::get('/dashboard/list-news', [DashboardController::class, 'listNews'])->name('be.listNews');
Route::delete('/dashboard/list-news/delete/{id}', [DashboardController::class, 'deleteNews'])->name('be.deleteNews');

Route::get('/dashboard/add-partners', [DashboardController::class, 'addPartners'])->name('be.addPartners');
Route::post('/dashboard/save-partners', [DashboardController::class, 'savePartners'])->name('be.savePartners');
Route::get('/dashboard/list-partners', [DashboardController::class, 'listPartners'])->name('be.listPartners');
Route::delete('/dashboard/list-partners/delete/{id}', [DashboardController::class, 'deletePartners'])->name('be.deletePartners');