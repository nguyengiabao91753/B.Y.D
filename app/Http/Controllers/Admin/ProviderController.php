<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Provider\StoreRequest;
use App\Http\Requests\Admin\Provider\UpdateRequest;
use App\Models\Admin\Insurance;
use App\Models\Policy;
use App\Models\Provider;
use App\Models\ProviderImages;
use Illuminate\Http\Request;

class ProviderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $providers = Provider::orderBy('created_at','DESC')->get();
        return view('admin.modules.provider.index',[
            'providers'=>$providers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.modules.provider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        
        $provider = new Provider();

        $file =$request->image;
        $fileName = time() . '-' . $file->getClientOriginalName();

        $provider->name=$request->name;
        $provider->image= $fileName;
        $provider->save();

        $file->move(public_path('uploads/'),$fileName);

        return redirect()->route('admin.provider.index')->with('success','Create Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        //
        $provider = Provider::find($id);

        if($provider ==null){
            abort(404);
        }

        $providers=Provider::orderBy('created_at','DESC')->get();
        $insurance = Insurance::with('provider','policy')->select('provider_id', 'policy_id','rate','price')->where('provider_id', $id)->get();
        return view('admin.modules.provider.show',[
            'id'=>$id,
            'provider'=>$provider,
            'providers'=>$providers,
            'insurance'=>$insurance
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        
        $provider= Provider::find($id);

        if($provider ==null){
            abort(404);
        }

        return view('admin.modules.provider.edit',[
            'id'=>$id,
            'provider'=>$provider
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, string $id)
    {
        //
        $provider = Provider::find($id);

        if($provider ==null){
            abort(404);
        }
        $file =$request->image;

        if(!empty($file)) {
            $request->validate([
                'image'=>'required|mimes:jpg,png,bmp,jpeg'  
            ], [
                'image.required'=>'Please enter provider image',
                'image.mimes'=>'Image must be jpg,png,bmp,jpeg'
            ]);
            $old_image_path=public_path('uploads/'.$provider->image);
            if(file_exists($old_image_path)) {
                unlink($old_image_path);
            }

            $fileName = time() . '-' . $file->getClientOriginalName();
            $provider->image= $fileName;
            $file->move(public_path('uploads/'),$fileName);
        }

        $provider->name=$request->name;
        $provider->save();

        return redirect()->route('admin.provider.index')->with('success','Update Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $provider =Provider::find($id);

        if($provider == null) {
            abort(404);
        }
            $old_image_path=public_path('uploads/'.$provider->image);
            if(file_exists($old_image_path)) {
                unlink($old_image_path);
            }
        $provider->delete();
        return redirect()->route('admin.provider.index')->with('success','Delete Successfully!');
    }
}
