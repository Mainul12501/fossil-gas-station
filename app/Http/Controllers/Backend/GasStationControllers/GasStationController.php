<?php

namespace App\Http\Controllers\Backend\GasStationControllers;

use App\Http\Controllers\Controller;
use App\Models\Backend\GasStation;
use App\Models\Backend\GasStationEmployee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GasStationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        if (isset($request->station))
        {
            $gasStations = GasStation::where('gas_station_id', $request->station)->latest()->get();
        } else {
            $gasStations = GasStation::latest()->get();
        }
        return view('backend.gas-station.station.index', ['gasStations' => $gasStations]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        return view('backend.gas-station.station.create', ['stationEmployees' => GasStationEmployee::where(['status' => 1])->get(), 'parent_station_id' => $request->station ?? 0 ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required',
        ]);
        try {
            DB::transaction(function () use ($request){
                $gasStation = GasStation::createOrUpdateGasStation($request);
                if (isset($request->gas_station_employees))
                    $gasStation->gasStationEmployees()->attach($request->gas_station_employees);
            });

            return back()->with('success', 'Gas Station Created successfully.');
        } catch (\Exception $exception)
        {
            return back()->with('error', $exception->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(GasStation $gasStation)
    {
        return view('backend.gas-station.station.create', ['gasStation' => $gasStation, 'isShown' => true, 'stationEmployees' => GasStationEmployee::where(['status' => 1])->get(),'parent_station_id' => $request->station ?? 0]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(GasStation $gasStation)
    {
//        return view('backend.home-slider.create', ['homeSlider' => $homePageSlider]);
        return view('backend.gas-station.station.create', ['gasStation' => $gasStation, 'stationEmployees' => GasStationEmployee::where(['status' => 1])->get(),'parent_station_id' => $request->station ?? 0]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'  => 'required',
        ]);

        try {
            DB::transaction(function () use ($request, $id){
                $gasStation = GasStation::createOrUpdateGasStation($request, $id);
//                $gasStation->gasStationEmployeeRoles()->detach();
                if (isset($request->gas_station_employees))
                    $gasStation->gasStationEmployees()->sync($request->gas_station_employees);
            });
            return redirect(route('gas-stations.index'))->with('success', 'Gas Station updated successfully.');
        } catch (\Exception $exception)
        {
            return back()->with('error', $exception->getMessage());
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GasStation $gasStation)
    {
//        GasStationEmployee::find($id)->delete();

        $gasStation->delete();
        return back()->with('success', 'Gas Station deleted successfully.');
    }
}
