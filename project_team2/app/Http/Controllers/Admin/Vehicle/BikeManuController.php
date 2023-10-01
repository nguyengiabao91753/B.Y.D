<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manufacture\StoreRequest;
use App\Http\Requests\Admin\Manufacture\UpdateRequest;
use App\Models\Vehicle\Manufacture;
use Illuminate\Http\Request;

class BikeManuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikemanus = Manufacture::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.bikemanu.index',[
            'bikemanus'=>$bikemanus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.bikemanu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $bikemanu = new Manufacture();
        $bikemanu ->bike_manufacture = $request->bike_manufacture;
        $bikemanu ->car_manufacture ="";

        $bikemanu->save();
        return redirect()->route('admin.vehicle.bikemanu.index')->with('success','Create Successfully!');
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
        $bikemanu=Manufacture::find($id);
        return view('admin.modules.vehicle.bikemanu.edit',[
            'bikemanu'=> $bikemanu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $bikemanu = Manufacture::find($id);
        if($bikemanu == null){
            abort(404);
        }
        $bikemanu ->bike_manufacture = $request->bike_manufacture;

        $bikemanu->save();
        return redirect()->route('admin.vehicle.bikemanu.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $bikemanu = Manufacture::find($id);
        if($bikemanu == null){
            abort(404);
        }

        $bikemanu->delete();

        return redirect()->route('admin.vehicle.bikemanu.index')->with('success','Delete Successfully!');
    }
}
