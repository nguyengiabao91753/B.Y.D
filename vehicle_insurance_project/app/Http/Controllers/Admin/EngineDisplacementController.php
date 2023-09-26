<?php

namespace App\Http\Controllers;

use App\Http\Requests\Admin\Displacement\StoreRequest;
use App\Http\Requests\Admin\Displacement\UpdateRequest;
use App\Models\EngineDisplacement;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Http\Request;

class EngineDisplacementController extends Controller
{
    public function index()
    {
        //
        {
            //
            $displacements=EngineDisplacement::all();
            return view('admin.displacement.index',[
                'displacements' => $displacements
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
        return view('admin.displacement.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     */
    public function store(StoreRequest $request)
    {
        //
        $displacement = new EngineDisplacement();
        $displacement->value = $request->value;
        $displacement->save();

        return redirect()->route('admin.displacement.index')->with('success', 'Added Successfully!');

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
        $displacement= EngineDisplacement::Find($id);
        return view('admin.customer.edit', [
            'displacement' => $displacement
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
        $displacement = EngineDisplacement::find($id);    
        $displacement->value = $request->value;
        $displacement->save();
        return redirect()->route('admin.displacement.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * 
     */
    public function destroy( $id)
    {

        $displacement= EngineDisplacement::find($id);
        $displacement->delete();

        return redirect()->route('admin.displacement.index')->with('success', 'Deleted Successfully!');
    }
}
