<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ViewControllers\FrontendViewController;

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
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
