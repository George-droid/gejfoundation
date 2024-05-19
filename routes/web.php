<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HeroController;

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
Route::get('/login', [CustomAuthController::class, 'adminLogin'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
// Route::post('logout', [CustomAuthController::class, 'logout'])->name('logout');
Route::match(['get', 'post'], 'logout', [CustomAuthController::class, 'logout'])->name('logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->name('dashboard');

    Route::get('/dashboard/add-news', [DashboardController::class, 'addNews'])->name('be.addNews');
    Route::post('/dashboard/save-news', [DashboardController::class, 'saveNews'])->name('be.saveNews');
    Route::get('/dashboard/list-news', [DashboardController::class, 'listNews'])->name('be.listNews');
    Route::delete('/dashboard/list-news/delete/{id}', [DashboardController::class, 'deleteNews'])->name('be.deleteNews');

    Route::get('/dashboard/add-partners', [DashboardController::class, 'addPartners'])->name('be.addPartners');
    Route::post('/dashboard/save-partners', [DashboardController::class, 'savePartners'])->name('be.savePartners');
    Route::get('/dashboard/list-partners', [DashboardController::class, 'listPartners'])->name('be.listPartners');
    Route::delete('/dashboard/list-partners/delete/{id}', [DashboardController::class, 'deletePartners'])->name('be.deletePartners');

    Route::get('/dashboard/add-members', [DashboardController::class, 'addMembers'])->name('be.addMembers');
    Route::post('/dashboard/save-members', [DashboardController::class, 'saveMembers'])->name('be.saveMembers');
    Route::get('/dashboard/list-members', [DashboardController::class, 'listMembers'])->name('be.listMembers');
    Route::delete('/dashboard/list-members/delete/{id}', [DashboardController::class, 'deleteMembers'])->name('be.deleteMembers');

    Route::get('/dashboard/add-images', [GalleryController::class, 'addImages'])->name('be.addImages');
    Route::post('/dashboard/save-images', [GalleryController::class, 'saveImages'])->name('be.saveImages');
    Route::get('/dashboard/list-images', [GalleryController::class, 'listImages'])->name('be.listImages');
    Route::delete('/dashboard/list-images/delete/{id}', [GalleryController::class, 'deleteImages'])->name('be.deleteImages');

    Route::get('/dashboard/add-hero', [HeroController::class, 'addHero'])->name('be.addHero');
    Route::post('/dashboard/save-hero', [HeroController::class, 'saveHero'])->name('be.saveHero');
    Route::get('/dashboard/list-hero', [HeroController::class, 'listHero'])->name('be.listHero');
    Route::delete('/dashboard/list-hero/delete/{id}', [HeroController::class, 'deleteHero'])->name('be.deleteHero');
});
