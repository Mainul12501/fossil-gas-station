<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\ViewControllers\FrontendViewController;
use App\Http\Controllers\Backend\ViewControllers\BackendViewController;

use App\Http\Controllers\Backend\RolePermissionManagement\Role\RoleController;
use App\Http\Controllers\Backend\RolePermissionManagement\Permission\PermissionController;
use App\Http\Controllers\Backend\RolePermissionManagement\Permission\PermissionCategoryController;

use App\Http\Controllers\BasicSettingController;
use App\Http\Controllers\Backend\CommonCrudControllers\NewsletterController;
use App\Http\Controllers\Backend\CommonCrudControllers\HomePageSliderController;

use App\Http\Controllers\Backend\GasStationControllers\EmployeeRoleController;
use App\Http\Controllers\Backend\GasStationControllers\GasStationEmployeeController;
use App\Http\Controllers\Backend\GasStationControllers\GasStationController;

Route::get('/', [FrontendViewController::class, 'home'])->name('home');
Route::get('/about-us', [FrontendViewController::class, 'about'])->name('about');
Route::get('/services', [FrontendViewController::class, 'services'])->name('services');
Route::get('/contact-us', [FrontendViewController::class, 'contactUs'])->name('contact-us');
Route::get('/station/{slug?}', [FrontendViewController::class, 'gasDetails'])->name('gas-details');
Route::get('/career', [FrontendViewController::class, 'career'])->name('career');
Route::get('/locations', [FrontendViewController::class, 'locations'])->name('locations');

Route::post('/new-contact', [FrontendViewController::class, 'newContact'])->name('new-contact');


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

        'basic-settings' => BasicSettingController::class,
        'home-sliders' => HomePageSliderController::class,
        'newsletters'   => NewsletterController::class,

        'employee-roles'    => EmployeeRoleController::class,
        'gas-station-employees' => GasStationEmployeeController::class,
        'gas-stations'  => GasStationController::class,
    ]);
});
