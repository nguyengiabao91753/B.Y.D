<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Admin\Insurance;
use App\Models\Category;
use App\Models\Policy;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{
    public function index_car()
    {
        $policy = Policy::select('id','image', 'name', 'description')->where(function ($query) {
            $query->where('name', 'like', '%Car%');
        })
            ->get();
        return view('client.page.car_insurance', [
            'policy' => $policy
        ]);
    }

    public function index_bike()
    {
        $policy = Policy::select('id', 'image', 'name', 'description')->where(function ($query) {
            $query->where('name', 'like', '%Motorcycles%');
        })
            ->get();
        return view('client.page.bike_insurance', [
            'policy' => $policy
        ]);
    }


    public function index_form(int $id)
    {
        $policy = Policy::select('id','image', 'name', 'description')->find($id);
        // $policyID = $policy->pluck('id');
        $insurance = Insurance::with('policy')->select('id', 'brand', 'model', 'value')->where('policy_id', $id)->get();

        $uniqueBrands = $insurance->unique('brand');
        $uniqueModels = $insurance->unique('model');
        $uniqueValues = $insurance->unique('value');


        return view('client.page.form_insurance', [
            'policy' => $policy,
            'uniqueBrands' => $uniqueBrands,
            'uniqueModels' => $uniqueModels,
            'uniqueValues' => $uniqueValues,

        ]);
    }

    public function index_plan(Request $request)
    {
        $policy_id = $request->input('policy');
        $brand = $request->input('brand');
        $model = $request->input('model');
        $value = $request->input('value');

        $insurance = Insurance::with('provider', 'policy')->where('policy_id', $policy_id)
            ->when($brand, function ($query, $brand) {
                return $query->where('brand', $brand);
            })
            ->when($model, function ($query, $model) {
                return $query->where('model', $model);
            })
            ->when($value, function ($query, $value) {
                return $query->where('value', $value);
            })
            ->get();

        return view('client.page.plan_insurance', [
            'insurance' => $insurance
        ]);
    }
}
