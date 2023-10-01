<?php

namespace App\Http\Controllers\Admin\Vehicle;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PKR\StoreRequest;
use App\Http\Requests\Admin\PKR\UpdateRequest;
use App\Models\Vehicle\PKR;
use Illuminate\Http\Request;

class CarPkrController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carpkrs = PKR::orderBy('created_at','DESC')->get();
        return view('admin.modules.vehicle.carpkr.index',[
            'carpkrs'=>$carpkrs
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.vehicle.carpkr.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $carpkr = new PKR();
        $carpkr ->car_pkr = $request->car_pkr;
        $carpkr ->bike_pkr = "";
        $carpkr->save();
        return redirect()->route('admin.vehicle.carpkr.index')->with('success','Create Successfully!');
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
        $carpkr=PKR::find($id);
        return view('admin.modules.vehicle.carpkr.edit',[
            'carpkr'=> $carpkr
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, int $id)
    {
        $carpkr = PKR::find($id);
        // if($cartype == null){
        //     abort(404);
        // }
        $carpkr ->car_pkr = $request->car_pkr;

        $carpkr->save();
        return redirect()->route('admin.vehicle.carpkr.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $carpkr = PKR::find($id);
        if($carpkr == null){
            abort(404);
        }

        $carpkr->delete();

        return redirect()->route('admin.vehicle.carpkr.index')->with('success','Delete Successfully!');
    }
}
