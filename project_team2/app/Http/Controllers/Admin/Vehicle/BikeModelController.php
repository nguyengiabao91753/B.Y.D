<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Model\StoreRequest;
use App\Http\Requests\Admin\Model\UpdateRequest;
use App\Models\Vehicle\ModelZ;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class BikeModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikemodels = ModelZ::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.bikemodel.index',[
            'bikemodels'=>$bikemodels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.bikemodel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $bikemodel = new ModelZ();
        $bikemodel ->bike_model = $request->bike_model;
        $bikemodel ->car_model ="";

        $bikemodel->save();
        return redirect()->route('admin.vehicle.bikemodel.index')->with('success','Create Successfully!');
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
    public function edit(int $id)
    {
        $bikemodel=ModelZ::find($id);
        return view('admin.modules.vehicle.bikemodel.edit',[
            'bikemodel'=> $bikemodel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $bikemodel = ModelZ::find($id);
        if($bikemodel == null){
            abort(404);
        }
        $bikemodel ->bike_model = $request->bike_model;

        $bikemodel->save();
        return redirect()->route('admin.vehicle.bikemodel.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $bikemodel = ModelZ::find($id);
        if($bikemodel == null){
            abort(404);
        }

        $bikemodel->delete();

        return redirect()->route('admin.vehicle.bikemodel.index')->with('success','Delete Successfully!');
    }
}
