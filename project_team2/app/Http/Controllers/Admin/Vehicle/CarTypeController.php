<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Type\StoreRequest;
use App\Http\Requests\Admin\Type\UpdateRequest;
use App\Models\Vehicle\Type;
use Illuminate\Http\Request;

class CarTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cartypes = Type::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.cartype.index',[
            'cartypes'=>$cartypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.cartype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $cartype = new Type();
        $cartype ->car_type = $request->car_type;
        $cartype ->bike_type = null;
        $cartype->save();
        return redirect()->route('admin.vehicle.cartype.index')->with('success','Create Successfully!');
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
        $cartype=Type::find($id);
        return view('admin.modules.vehicle.cartype.edit',[
            'cartype'=> $cartype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $cartype = Type::find($id);
        // if($cartype == null){
        //     abort(404);
        // }
        $cartype ->car_type = $request->car_type;

        $cartype->save();
        return redirect()->route('admin.vehicle.cartype.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $cartype = Type::find($id);
        if($cartype == null){
            abort(404);
        }

        $cartype->delete();

        return redirect()->route('admin.vehicle.cartype.index')->with('success','Delete Successfully!');
    }
}
