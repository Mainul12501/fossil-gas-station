<?php

namespace App\Http\Controllers\Backend\GasStationControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\GasStationEmployeeRole;
use Illuminate\Http\Request;

class EmployeeRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.gas-station.employee-role.index', ['employeeRoles' => GasStationEmployeeRole::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gas-station.employee-role.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        GasStationEmployeeRole::createOrUpdateEmployeeRole($request);
        return back()->with('success', 'Employee Role Created successfully.');
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
    public function edit(String $id)
    {
        return view('backend.gas-station.employee-role.create', ['employeeRole' => GasStationEmployeeRole::find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        GasStationEmployeeRole::createOrUpdateEmployeeRole($request, $id);
        return redirect(route('employee-roles.index'))->with('success', 'Employee Role updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        GasStationEmployeeRole::find($id)->delete();
        return back()->with('success', 'Employee Role deleted successfully.');
    }
}
