<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\VehicleType\StoreRequest;
use App\Http\Requests\Admin\VehicleType\UpdateRequest;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class VehicleTypeController extends Controller
{
    public function index()
    {
        //
        {
            //
            $vehicles=Vehicle::all();
            return view('admin.vehicle.index',[
                'vehicles' => $vehicles
            ]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        //
        return view('admin.vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(StoreRequest $request)
    {
        //
        $vehicle = new Vehicle();
        $vehicle->vehicletype = $request->vehicletype;
        $vehicle->save();

        return redirect()->route('admin.vehicle.index')->with('success', 'Added Successfully!');

    }

    /**
     * Display the specified resource.
     *
     * 
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     */
    public function edit($id)
    {
        $vehicle= Vehicle::Find($id);
        return view('admin.vehicle.edit', [
            'vehicle' => $vehicle
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     */
    public function update(UpdateRequest $request, $id)
    {
        //
        $vehicle = Vehicle::find($id);    
        $vehicle->vehicletype = $request->vehicletype;
        $vehicle->save();
        return redirect()->route('admin.vehicle.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     */
    public function destroy( $id)
    {
        $vehicle= Vehicle::find($id);
        $vehicle->delete();

        return redirect()->route('admin.vehicle.index')->with('success', 'Deleted Successfully!');
    }
}
