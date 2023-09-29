<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Policy\UpdateRequest;
use App\Http\Requests\Admin\Policy\StoreRequest;
use App\Models\Policy;
use Illuminate\Http\Request;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policy = Policy::orderBy('created_at','DESC')->get();
        return view('admin.modules.policy.index',[
            'policies'=>$policy
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.modules.policy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $policy = new Policy();
        $policy ->name = $request->name;
        $policy->description = $request->description;
        $policy->price = $request->price;

        $policy->save();
        return redirect()->route('admin.policy.index')->with('success','Create Successfully!');
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
        $policy = Policy::find($id);
        return view('admin.modules.policy.edit',[
            
            'policy'=>$policy
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $policy = Policy::find($id);
        if($policy == null){
            abort(404);
        }
        $policy ->name = $request->name;
        $policy->description = $request->description;
        $policy->price = $request->price;

        $policy->save();
        return redirect()->route('admin.policy.index')->with('success','Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $policy = Policy::find($id);
        if($policy == null){
            abort(404);
        }

        $policy->delete();

        return redirect()->route('admin.policy.index')->with('success','Delete Successfully!');
    }
}
