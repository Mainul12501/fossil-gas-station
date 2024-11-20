<?php

namespace App\Http\Controllers\Frontend\ViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendViewController extends Controller
{
    public function home()
    {
        return view('frontend.home.home');
    }
    public function about()
    {
        return view('frontend.common-pages.about');
    }
    public function services()
    {
        return view('frontend.service.services');
    }
    public function contactUs()
    {
        return view('frontend.common-pages.contact');
    }
    public function gasDetails()
    {
        return view('frontend.gas-stations.details');
    }
}
