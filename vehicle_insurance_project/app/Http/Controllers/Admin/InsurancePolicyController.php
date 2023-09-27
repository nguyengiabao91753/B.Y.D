<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Policy\StoreRequest;
use App\Http\Requests\Admin\Category\Policy\UpdateRequest;
use App\Models\EngineDisplacement;
use App\Models\InsurancePolicy;
use App\Models\Provider;
use App\Models\Vehicle;
use Illuminate\Http\Request;

class InsurancePolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * 
     */
    public function index()
    {
        $data = InsurancePolicy::all();
        return view('admin.category.policy.index', [
            'InsurancePolicies' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     *
     */
    public function create()
    {
        $vehicleType = Vehicle::all();
        $engineDisplacement = EngineDisplacement::all();
        $provider = Provider::all();
        return view('admin.category.policy.create', [
            'vehicleTypes' => $vehicleType,
            'engineDisplacements' => $engineDisplacement,
            'providers' => $provider
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * 
     * 
     */
    public function store(StoreRequest $request)
    {
        $policy = new InsurancePolicy();
        $policy->policyname = $request->policyname;
        $policy->description = $request->description;
        
        // Đối chiếu và lấy ID từ bảng VehicleTypes và EngineDisplacement
        $vehicleType = Vehicle::where('typename', $request->input('VehicleTypes'))->first();
        $engineDisplacement = EngineDisplacement::where('Displacement', $request->input('EngineDisplacement'))->first();
        $provider = Provider::where('providername', $request->input('provider'))->first();
        if ($vehicleType && $engineDisplacement && $provider) {
            $policy->vehicle_id = $vehicleType->vehicletype_id;
            $policy->displacement_id = $engineDisplacement->displacement_id;
            $policy->provider_id = $provider->provider_id;
        }

        $policy->price = $request->price;
        $policy->save();

        return redirect()->route('admin.category.policy.index')->with('success', 'Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * 
     * 
     */
    public function show(InsurancePolicy $insurancePolicy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * 
     * 
     */
    public function edit(int $id)
    {
        $category = InsurancePolicy::find($id);

        return view('admin.category.policy.edit', [
            'item' => $category
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     *
     *
     *
     */
    public function update(UpdateRequest $request, InsurancePolicy $insurancePolicy, int $id)
    {
        $policy = InsurancePolicy::find($id);
        $policy->policyname = $request->policyname;
        $policy->description = $request->description;
        
        // Đối chiếu và lấy ID từ bảng VehicleTypes và EngineDisplacement
        $vehicleType = Vehicle::where('typename', $request->input('VehicleTypes'))->first();
        $engineDisplacement = EngineDisplacement::where('Displacement', $request->input('EngineDisplacement'))->first();
        $provider = Provider::where('providername', $request->input('Provider'))->first();

        if ($vehicleType && $engineDisplacement && $provider) {
            $policy->vehicle_id = $vehicleType->vehicletype_id;
            $policy->displacement_id = $engineDisplacement->displacement_id;
            $policy->provider_id = $provider->provider_id;
        }

        $policy->price = $request->price;
        $policy->save();

        return redirect()->route('admin.category.policy.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy(int $id)
    {
        $insurancePolicy= InsurancePolicy::find($id);
        $insurancePolicy->delete();

        return redirect()->route('admin.category.policy.index')->with('success', 'Deleted Successfully!');
    }
}
