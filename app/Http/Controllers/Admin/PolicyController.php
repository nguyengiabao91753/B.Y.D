<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Policy\UpdateRequest;
use App\Http\Requests\Admin\Policy\StoreRequest;
use App\Models\Policy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PolicyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $policy = Policy::orderBy('created_at', 'DESC')->get();
        return view('admin.modules.policy.index', [
            'policies' => $policy
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
        $file = $request->image;
        $fileName = time() . '-' . $file->getClientOriginalName();

        $policy->name = $request->name;
        $policy->description = $request->description;
        $policy->image = $fileName;

        $file->move(public_path('uploads/'), $fileName);
        $policy->save();
        return redirect()->route('admin.policy.index')->with('success', 'Create Successfully!');
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
        return view('admin.modules.policy.edit', [

            'policy' => $policy
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request,int  $id)
    {
        $policy = Policy::find($id);

        if ($policy == null) {
            abort(404);
        }

        $file = $request->image;

        if (!empty($file)) {
            $request->validate([
                'image' => 'required|mimes:jpg,png,bmp,jpeg'
            ], [
                'image.required' => 'Please enter provider image',
                'image.mimes' => 'Image must be jpg,png,bmp,jpeg'
            ]);

            // $old_image_path = public_path('uploads/' . $policy->image);
            // if (file_exists($old_image_path)) {
            //     unlink($old_image_path);
            // }

            $fileName = time() . '-' . $file->getClientOriginalName();
            $policy->image = $fileName;
            $file->move(public_path('uploads/'), $fileName);
        }

        $policy->name = $request->name;
        $policy->description = $request->description;

        $policy->save();
        return redirect()->route('admin.policy.index')->with('success', 'Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $policy = Policy::find($id);
        // if($policy == null){
        //     abort(404);
        // }

        // $policy->delete();

        $policy->status = 2;
        $policy->save();

        return redirect()->route('admin.policy.index')->with('success', 'Delete Successfully!');
    }

    public function restore(int $id)
    {
        $policy = Policy::find($id);
        // if($policy == null){
        //     abort(404);
        // }

        // $policy->delete();


        

        $policy->status = 1;
        $policy->save();

        return redirect()->route('admin.policy.index')->with('success', 'Restore Successfully!');
    }

    public function destroy_frv(int $id)
    {
        $policy = Policy::find($id);
        // if($policy == null){
        //     abort(404);
        // }

        // $policy->delete();

        $policy->status = 3;
        $policy->save();

        return redirect()->route('admin.policy.index')->with('success', 'Delete Successfully!');
    }
}
