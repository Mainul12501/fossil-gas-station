<?php

namespace App\Providers;

use App\Models\Backend\GasStation;
use App\Models\BasicSetting;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Schema::defaultStringLength(191);
        Toastr::useVite();
        View::composer(['frontend.master'], function ($view){
            $view->with([
                'basicSetting' => BasicSetting::first(),
                'gasStations' => GasStation::where(['gas_station_id' => 0, 'status' => 1])->get(),
                'gasStationsLogos' => GasStation::where(['status' => 1])->select('id', 'logo', 'name')->get(),
            ]);
        });
    }
}
