<?php

namespace App\Http\Controllers\Backend\ViewControllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BackendViewController extends Controller
{
    public function dashboard()
    {
        return view('backend.dashboard.index');
    }
}
