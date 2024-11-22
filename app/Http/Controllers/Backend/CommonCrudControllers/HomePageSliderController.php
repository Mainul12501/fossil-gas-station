<?php

namespace App\Http\Controllers\Backend\CommonCrudControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\HomePageSlider;
use Illuminate\Http\Request;

class HomePageSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.home-slider.index', ['homeSliders' => HomePageSlider::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.home-slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        HomePageSlider::createOrUpdateHomePageSliders($request);
        return back()->with('success', 'Home Slider Created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        return view('backend.home-slider.create', ['homeSlider' => HomePageSlider::find($id), 'isShown' => true]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
//        return view('backend.home-slider.create', ['homeSlider' => $homePageSlider]);
        return view('backend.home-slider.create', ['homeSlider' => HomePageSlider::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        HomePageSlider::createOrUpdateHomePageSliders($request, $id);
        return redirect(route('home-sliders.index'))->with('success', 'Home Slider updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        HomePageSlider::find($id)->delete();
//        $homePageSlider->delete();
        return back()->with('success', 'Home Slider deleted successfully.');
    }
}
