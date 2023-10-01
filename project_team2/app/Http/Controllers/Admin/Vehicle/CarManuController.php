<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Manufacture\StoreRequest;
use App\Http\Requests\Admin\Manufacture\UpdateRequest;
use App\Models\Vehicle\Manufacture;
use Illuminate\Http\Request;

class CarManuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carmanus = Manufacture::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.carmanu.index',[
            'carmanus'=>$carmanus
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.carmanu.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $carmanu = new Manufacture();
        $carmanu ->car_manufacture = $request->car_manufacture;
        $carmanu ->bike_manufacture = "";
        $carmanu->save();
        return redirect()->route('admin.vehicle.carmanu.index')->with('success','Create Successfully!');
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
        $carmanu=Manufacture::find($id);
        return view('admin.modules.vehicle.carmanu.edit',[
            'carmanu'=> $carmanu
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $carmanu = Manufacture::find($id);
        // if($cartype == null){
        //     abort(404);
        // }
        $carmanu ->car_manufacture = $request->car_manufacture;

        $carmanu->save();
        return redirect()->route('admin.vehicle.carmanu.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $carmanu = Manufacture::find($id);
        if($carmanu == null){
            abort(404);
        }

        $carmanu->delete();

        return redirect()->route('admin.vehicle.carmanu.index')->with('success','Delete Successfully!');
    }
}
