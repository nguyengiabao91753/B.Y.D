<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\StoreRequest;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category = Category::orderBy('created_at','DESC')->get();
        return view('admin.modules.category.index',[
            'categories'=>$category
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select('id','parent_id','name')->get();
        return view('admin.modules.category.create',[
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $category = new Category();
        $category->parent_id=$request->parent_id;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('admin.category.index')->with('success','Create Successfully!');
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
        $category = Category::find($id);
        $categories = Category::select('id','parent_id','name')->get();
        return view('admin.modules.category.edit',[
            
            'category'=>$category,
            'categories' =>$categories
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,  $id)
    {
        $category = Category::find($id);
        if($category == null){
            abort(404);
        }
        $category->parent_id=$request->parent_id;
        $category ->name = $request->name;

        $category->save();
        return redirect()->route('admin.category.index')->with('success','Update Successfully!');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $category = Category::find($id);
        if($category == null){
            abort(404);
        }

        $category->delete();

        return redirect()->route('admin.category.index')->with('success','Delete Successfully!');
    }
}
