<?php

namespace App\Http\Controllers\Frontend\ViewControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\Contact;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
