<?php

namespace App\Http\Controllers\Backend\CommonCrudControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\Newsletter;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.common-crud.newsletter.index', ['newsletters' => Newsletter::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Newsletter::createOrUpdateNewsletter($request);
        Toastr::success('Your subscribed successfully');
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Newsletter $newsletter)
    {
        if ($newsletter->status == 0)
        {
            $newsletter->status = 1;
        } else {
            $newsletter->status = 0;
        }
        $newsletter->save();
        return back()->with('success', 'Status Changed successfully');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        Newsletter::createOrUpdateNewsletter($request, $id);
        return redirect(route('newsletters.index'))->with('success', 'Email updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Newsletter::find($id)->delete();
        return back()->with('success', 'Email deleted successfully');
    }
}
