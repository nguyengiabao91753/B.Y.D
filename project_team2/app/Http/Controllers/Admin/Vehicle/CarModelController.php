<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Model\StoreRequest;
use App\Http\Requests\Admin\Model\UpdateRequest;
use App\Models\Vehicle\ModelZ;
use Illuminate\Http\Request;

class CarModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carmodels = ModelZ::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.carmodel.index',[
            'carmodels'=>$carmodels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.carmodel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $carmodel = new ModelZ();
        $carmodel ->car_model = $request->car_model;
        $carmodel ->bike_model = "";
        $carmodel->save();
        return redirect()->route('admin.vehicle.carmodel.index')->with('success','Create Successfully!');
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
        $carmodel=ModelZ::find($id);
        return view('admin.modules.vehicle.carmodel.edit',[
            'carmodel'=> $carmodel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $carmodel = ModelZ::find($id);
        // if($cartype == null){
        //     abort(404);
        // }
        $carmodel ->car_model = $request->car_model;

        $carmodel->save();
        return redirect()->route('admin.vehicle.carmodel.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $carmodel = ModelZ::find($id);
        if($carmodel == null){
            abort(404);
        }

        $carmodel->delete();

        return redirect()->route('admin.vehicle.carmodel.index')->with('success','Delete Successfully!');
    }
}
