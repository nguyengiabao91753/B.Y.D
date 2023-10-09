<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Insurance\StoreRequest;
use App\Http\Requests\Admin\Insurance\UpdateRequest;
use App\Models\Admin\Insurance;
use App\Models\Category;
use App\Models\Policy;
use App\Models\Provider;
use Illuminate\Http\Request;

class InsuranceCotroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $insurances = Insurance::orderBy('created_at','DESC')->get();
        $insurances = Insurance::with('category', 'policy', 'provider')->get();


        return view('admin.modules.insurance.index', [
            'insurances' => $insurances
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $providers = Provider::all();
        $policies = Policy::all();
        $categories = Category::all();
        return view('admin.modules.insurance.create', [
            'providers' => $providers,
            'policies' => $policies,
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $insurance = new Insurance();
        $insurance->provider_id = $request->provider_id;
        $insurance->policy_id = $request->policy_id;
        $insurance->category_id = $request->category_id;
        $insurance->brand = $request->brand;
        $insurance->model = $request->model;
        $insurance->value = $request->value;
        $insurance->price = $request->price;
        $insurance->rate = $request->rate;

        $insurance->save();
        return redirect()->route('admin.insurance.index')->with('success', 'Create Successfully!');
    }




    public function getBrand($categoryId=0)
    {
        $brands = Category::select('id', 'name')->where('parent_id', $categoryId)
            ->where(function ($query) {
                $query->where('name', 'like', '%brand%');
            })
            ->get();

        $brandIds = $brands->pluck('id');

        $brand['data'] = Category::select('id','name')->where('parent_id', $brandIds)->get();

        return response()->json($brand);
    }

    public function getModel($categoryId=0)
    {
        $models = Category::select('id', 'name')->where('parent_id', $categoryId)
            ->where(function ($query) {
                $query->where('name', 'like', '%model%');
            })
            ->get();

        $modelIds = $models->pluck('id');

        $model['data'] = Category::select('id','name')->where('parent_id', $modelIds)->get();

        return response()->json($model);
    }

    public function getValue($categoryId=0)
    {
        $values = Category::select('id', 'name')->where('parent_id', $categoryId)
            ->where(function ($query) {
                $query->where('name', 'like', '%Value%');
            })
            ->get();

        $valueIds = $values->pluck('id');

        $value['data'] = Category::select('id','name')->where('parent_id', $valueIds)->get();

        return response()->json($value);
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
        $insurance = Insurance::find($id);
        $providers = Provider::all();
        $policies = Policy::all();
        $categories = Category::all();
        return view('admin.modules.insurance.edit', [
            'providers' => $providers,
            'policies' => $policies,
            'categories' => $categories,
            'insurance' => $insurance
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $insurance = Insurance::find($id);
        if ($insurance == null) {
            abort(404);
        }
        $insurance->provider_id = $request->provider_id;
        $insurance->policy_id = $request->policy_id;
        $insurance->category_id = $request->category_id;
        $insurance->brand = $request->brand;
        $insurance->model = $request->model;
        $insurance->pkr = $request->pkr;
        $insurance->price = $request->price;
        $insurance->rate = $request->rate;

        $insurance->save();
        return redirect()->route('admin.insurance.index')->with('success', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $insurance = Insurance::find($id);
        if ($insurance == null) {
            abort(404);
        }

        $insurance->delete();

        return redirect()->route('admin.insurance.index')->with('success', 'Delete Successfully!');
    }
}
