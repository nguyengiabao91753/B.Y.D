<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Models\Vehicle\Type;
use Illuminate\Http\Request;

class BikeTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biketypes = Type::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.biketype.index',[
            'biketypes'=>$biketypes
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.biketype.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $biketype = new Type();
        $biketype ->bike_type = $request->bike_type;
        $biketype ->car_type =null;

        $biketype->save();
        return redirect()->route('admin.vehicle.biketype.index')->with('success','Create Successfully!');
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
        $biketype=Type::find($id);
        return view('admin.modules.vehicle.biketype.edit',[
            'biketype'=> $biketype
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $biketype = Type::find($id);
        if($biketype == null){
            abort(404);
        }
        $biketype ->bike_type = $request->bike_type;

        $biketype->save();
        return redirect()->route('admin.vehicle.biketype.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $biketype = Type::find($id);
        if($biketype == null){
            abort(404);
        }

        $biketype->delete();

        return redirect()->route('admin.vehicle.biketype.index')->with('success','Delete Successfully!');
    }
}
