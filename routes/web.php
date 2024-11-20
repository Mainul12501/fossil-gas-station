<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ViewControllers\FrontendViewController;
use App\Http\Controllers\Backend\ViewControllers\BackendViewController;

Route::get('/', [FrontendViewController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendViewController::class, 'about'])->name('about');
Route::get('/services', [FrontendViewController::class, 'services'])->name('services');
Route::get('/contact-us', [FrontendViewController::class, 'contactUs'])->name('contact-us');
Route::get('/gas', [FrontendViewController::class, 'gasDetails'])->name('gas-details');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', [BackendViewController::class, 'dashboard'])->name('dashboard');

});
