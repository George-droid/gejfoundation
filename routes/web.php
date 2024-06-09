<?php

use App\Http\Controllers\ResourceController;
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
Route::get('/blog/{slug}', [CustomAuthController::class, 'blogpage'])->name('blogpage');
Route::get('/gejresources', [CustomAuthController::class, 'gejresources'])->name('gejresources');
Route::get('/services', [CustomAuthController::class, 'services'])->name('services');
Route::get('/security', [CustomAuthController::class, 'security'])->name('security');
Route::get('/empowerment', [CustomAuthController::class, 'empowerment'])->name('empowerment');
Route::get('/contact-us', [CustomAuthController::class, 'contact'])->name('contact');
Route::get('/waef', [CustomAuthController::class, 'waef'])->name('waef');
Route::get('/waefmembers', [CustomAuthController::class, 'waefmembers'])->name('waefmembers');
Route::get('/resources', [CustomAuthController::class, 'resources'])->name('resources');
Route::get('/waefworks', [CustomAuthController::class, 'waefworks'])->name('waefworks');
Route::get('/gejgallery', [CustomAuthController::class, 'gejgallery'])->name('gejgallery');
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
    Route::get('/dashboard/edit-news/{id}', [DashboardController::class, 'editNews'])->name('be.editNews');
    Route::put('/dashboard/update-news/{id}', [DashboardController::class, 'updateNews'])->name('be.updateNews');


    Route::get('/dashboard/add-partners', [DashboardController::class, 'addPartners'])->name('be.addPartners');
    Route::post('/dashboard/save-partners', [DashboardController::class, 'savePartners'])->name('be.savePartners');
    Route::get('/dashboard/list-partners', [DashboardController::class, 'listPartners'])->name('be.listPartners');
    Route::delete('/dashboard/list-partners/delete/{id}', [DashboardController::class, 'deletePartners'])->name('be.deletePartners');

    Route::get('/dashboard/add-members', [DashboardController::class, 'addMembers'])->name('be.addMembers');
    Route::post('/dashboard/save-members', [DashboardController::class, 'saveMembers'])->name('be.saveMembers');
    Route::get('/dashboard/list-members', [DashboardController::class, 'listMembers'])->name('be.listMembers');
    Route::delete('/dashboard/list-members/delete/{id}', [DashboardController::class, 'deleteMembers'])->name('be.deleteMembers');
    Route::get('/dashboard/edit-members/{id}', [DashboardController::class, 'editMembers'])->name('be.editMembers');
    Route::put('/dashboard/update-members/{id}', [DashboardController::class, 'updateMembers'])->name('be.updateMembers');

    Route::get('/dashboard/add-images', [GalleryController::class, 'addImages'])->name('be.addImages');
    Route::post('/dashboard/save-images', [GalleryController::class, 'saveImages'])->name('be.saveImages');
    Route::get('/dashboard/list-images', [GalleryController::class, 'listImages'])->name('be.listImages');
    Route::delete('/dashboard/list-images/delete/{id}', [GalleryController::class, 'deleteImages'])->name('be.deleteImages');

    Route::get('/dashboard/add-hero', [HeroController::class, 'addHero'])->name('be.addHero');
    Route::post('/dashboard/save-hero', [HeroController::class, 'saveHero'])->name('be.saveHero');
    Route::get('/dashboard/list-hero', [HeroController::class, 'listHero'])->name('be.listHero');
    Route::delete('/dashboard/list-hero/delete/{id}', [HeroController::class, 'deleteHero'])->name('be.deleteHero');
    Route::get('/dashboard/edit-hero/{id}', [HeroController::class, 'editHero'])->name('be.editHero');
    Route::put('/dashboard/update-hero/{id}', [HeroController::class, 'updateHero'])->name('be.updateHero');

    Route::get('/dashboard/add-resources', [ResourceController::class, 'addResources'])->name('be.addResources');
    Route::post('/dashboard/save-resources', [ResourceController::class, 'saveResources'])->name('be.saveResources');
    Route::get('/dashboard/list-resources', [ResourceController::class, 'listResources'])->name('be.listResources');
    Route::delete('/dashboard/list-resources/delete/{id}', [ResourceController::class, 'deleteResources'])->name('be.deleteResources');

    Route::get('/dashboard/add-news-highlights', [DashboardController::class, 'addNewsHighlights'])->name('be.addNewsHighlights');
    Route::post('/dashboard/save-news-highlights', [DashboardController::class, 'saveNewsHighlights'])->name('be.saveNewsHighlights');
    Route::get('/dashboard/list-news-highlights', [DashboardController::class, 'listNewsHighlights'])->name('be.listNewsHighlights');
    Route::delete('/dashboard/list-news-highlights/delete/{id}', [DashboardController::class, 'deleteNewsHighlights'])->name('be.deleteNewsHighlights');
    Route::get('/dashboard/edit-news-highlights/{id}', [DashboardController::class, 'editNewsHighlights'])->name('be.editNewsHighlights');
    Route::put('/dashboard/update-news-highlights/{id}', [DashboardController::class, 'updateNewsHighlights'])->name('be.updateNewsHighlights');

    Route::get('/dashboard/add-image-collections', [GalleryController::class, 'addImageCollections'])->name('be.addImageCollections');
    Route::post('/dashboard/save-image-collections', [GalleryController::class, 'saveImageCollections'])->name('be.saveImageCollections');
    // Route::get('/dashboard/list-image-collections', [GalleryController::class, 'listImageCollections'])->name('be.listImageCollections');
    // Route::delete('/dashboard/list-image-collections/delete/{id}', [GalleryController::class, 'deleteImageCollections'])->name('be.deleteImageCollections');
});
