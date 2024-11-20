<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ViewControllers\FrontendViewController;
use App\Http\Controllers\Backend\ViewControllers\BackendViewController;
use App\Http\Controllers\Backend\RolePermissionManagement\Role\RoleController;
use App\Http\Controllers\Backend\RolePermissionManagement\Permission\PermissionController;
use App\Http\Controllers\Backend\RolePermissionManagement\Permission\PermissionCategoryController;

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
    Route::resources([
        'permission-categories' => PermissionCategoryController::class,
        'permissions'   => PermissionController::class,
        'roles'     => RoleController::class,
    ]);
});
