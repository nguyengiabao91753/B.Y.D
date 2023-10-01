<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PKR\StoreRequest;
use App\Http\Requests\Admin\PKR\UpdateRequest;
use App\Models\Vehicle\ModelZ;
use App\Models\Vehicle\PKR;
use Illuminate\Http\Request;

class BikePkrController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bikepkrs = PKR::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.bikepkr.index',[
            'bikepkrs'=>$bikepkrs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.bikepkr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $bikepkr = new PKR();
        $bikepkr ->bike_pkr = $request->bike_pkr;
        $bikepkr ->car_pkr ="";

        $bikepkr->save();
        return redirect()->route('admin.vehicle.bikepkr.index')->with('success','Create Successfully!');
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
        $bikepkr=PKR::find($id);
        return view('admin.modules.vehicle.bikepkr.edit',[
            'bikepkr'=> $bikepkr
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $bikepkr = PKR::find($id);
        if($bikepkr == null){
            abort(404);
        }
        $bikepkr ->bike_pkr = $request->bike_pkr;

        $bikepkr->save();
        return redirect()->route('admin.vehicle.bikepkr.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $bikepkr = PKR::find($id);
        if($bikepkr == null){
            abort(404);
        }

        $bikepkr->delete();

        return redirect()->route('admin.vehicle.bikepkr.index')->with('success','Delete Successfully!');
    }
}
