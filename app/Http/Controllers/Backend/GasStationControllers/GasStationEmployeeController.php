<?php

namespace App\Http\Controllers\Backend\GasStationControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\GasStationEmployee;
use App\Models\Backend\GasStationEmployeeRole;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GasStationEmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.gas-station.employee.index', ['employees' => GasStationEmployee::latest()->get()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.gas-station.employee.create', ['employeeRoles' => GasStationEmployeeRole::where(['status' => 1])->get()]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
            'roles'  => 'required',
        ]);
        try {
            DB::transaction(function () use ($request){
                $gasStationEmployee = GasStationEmployee::createOrUpdateGasStationEmployee($request);
                $gasStationEmployee->gasStationEmployeeRoles()->attach($request->roles);
            });

            return back()->with('success', 'Employee Created successfully.');
        } catch (\Exception $exception)
        {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GasStationEmployee $gasStationEmployee)
    {
        return view('backend.gas-station.employee.create', ['employee' => $gasStationEmployee, 'isShown' => true, 'employeeRoles' => GasStationEmployeeRole::where(['status' => 1])->get()]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GasStationEmployee $gasStationEmployee)
    {
//        return view('backend.home-slider.create', ['homeSlider' => $homePageSlider]);
        return view('backend.gas-station.employee.create', ['employee' => $gasStationEmployee, 'employeeRoles' => GasStationEmployeeRole::where(['status' => 1])->get()]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
            'roles'  => 'required',
        ]);
        try {
            DB::transaction(function () use ($request, $id){
                $gasStationEmployee = GasStationEmployee::createOrUpdateGasStationEmployee($request, $id);
                $gasStationEmployee->gasStationEmployeeRoles()->detach();
                $gasStationEmployee->gasStationEmployeeRoles()->sync($request->roles);
            });
            return redirect(route('gas-station-employees.index'))->with('success', 'Employee updated successfully.');
        } catch (\Exception $exception)
        {
            return back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GasStationEmployee $gasStationEmployee)
    {
//        GasStationEmployee::find($id)->delete();

        $gasStationEmployee->delete();
        return back()->with('success', 'Employee deleted successfully.');
    }
}
