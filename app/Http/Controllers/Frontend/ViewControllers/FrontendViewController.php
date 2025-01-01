<?php

namespace App\Http\Controllers\Frontend\ViewControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\Contact;
use App\Models\Backend\GasStation;
use App\Models\Backend\GasStationEmployee;
use App\Models\Backend\HomePageSlider;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendViewController extends Controller
{
    public function home()
    {
        return view('frontend.home.home', [
            'homeSliders'   => HomePageSlider::where(['status' => 1])->get(),
            'employees' => GasStationEmployee::where(['status' => 1])->take(4)->get(),
            'station'   => GasStation::where(['gas_station_id' => 0, 'status' => 1])->first(),
        ]);
    }
    public function about()
    {
        return view('frontend.common-pages.about', ['employees' => GasStationEmployee::where(['status' => 1])->get(), ]);
    }
    public function services()
    {
        return view('frontend.service.services');
    }
    public function contactUs()
    {
        return view('frontend.common-pages.contact');
    }
    public function gasDetails(Request $request, String $slug = null)
    {
        if (isset($slug))
        {
            return view('frontend.gas-stations.details', [
                'station'   => GasStation::where('slug', $slug)->with('gasStations', 'gasStationEmployees')->first(),
                'isDetailsPage'     => true
            ]);
        } else {
            Toastr::error('Station Not found. Please try again.');
            return back();
        }

    }

    public function career()
    {
        return view('frontend.common-pages.career', [
            'employees' => GasStationEmployee::where(['status' => 1])->get(),
        ]);
    }
    public function locations()
    {
        $locations = [];
//        $locations = [
//            ['Mumbai', 19.0760,72.8777],
//        ];
        foreach (GasStation::where(['status' => 1])->get() as $station)
        {
            if (($station->lat != 0) && ($station->lon != 0) )
            {
                $locations[] = [$station->name, $station->lat, $station->lon];
            }
        }
        if (count($locations) == 0)
        {
                    $locations = [
            ['Park', 23.733004880974164, 90.40019485359036],
        ];
        }
        return view('frontend.common-pages.locations', ['locations' => $locations]);
    }

    public function newContact(Request $request)
    {
        try {
            DB::transaction(function () use ($request) {
                Contact::createContact($request);
            });
            Toastr::success('We got your message. We will contact you soon.');
        } catch (\Exception $exception)
        {
            Toastr::error($exception->getMessage());
        }
        return back();
    }
}
