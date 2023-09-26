<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Policy\StoreRequest;
use App\Http\Requests\Admin\Category\Policy\UpdateRequest;
use App\Models\EngineDisplacement;
use App\Models\InsurancePolicy;
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
        return view('admin.category.policy.create', [
            'vehicleTypes' => $vehicleType,
            'engineDisplacements' => $engineDisplacement
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
        $policy->PolicyName = $request->PolicyName;
        $policy->PolicyDescription = $request->PolicyDescription;

        // Đối chiếu và lấy ID từ bảng VehicleTypes và EngineDisplacement
        $vehicleType = Vehicle::where('TypeName', $request->input('VehicleType'))->first();
        $engineDisplacement = EngineDisplacement::where('Displacement', $request->input('EngineDisplacement'))->first();

        if ($vehicleType && $engineDisplacement) {
            $policy->VehicleTypeID = $vehicleType->VehicleTypeID;
            $policy->DisplacementID = $engineDisplacement->DisplacementID;
        }

        $policy->Price = $request->Price;
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
        $policy->PolicyName = $request->PolicyName;
        $policy->PolicyDescription = $request->PolicyDescription;

        // Đối chiếu và lấy ID từ bảng VehicleTypes và EngineDisplacement
        $vehicleType = Vehicle::where('TypeName', $request->input('VehicleType'))->first();
        $engineDisplacement = EngineDisplacement::where('Displacement', $request->input('EngineDisplacement'))->first();

        if ($vehicleType && $engineDisplacement) {
            $policy->VehicleTypeID = $vehicleType->VehicleTypeID;
            $policy->DisplacementID = $engineDisplacement->DisplacementID;
        }

        $policy->Price = $request->Price;
        $policy->save();

        return redirect()->route('admin.category.policy.index')->with('success', 'Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     *
     *
     */
    public function destroy(InsurancePolicy $insurancePolicy)
    {
        $insurancePolicy->delete();
        return redirect()->route('admin.category.policy.index')
            ->with('success','Delete Successfully!');
    }
}
