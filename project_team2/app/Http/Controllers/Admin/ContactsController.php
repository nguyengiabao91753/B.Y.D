<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Contacts\Storerequest;
use App\Http\Controllers\Controller;
use App\Models\Contacts;
use Illuminate\Http\Request;
use function League\Flysystem\delete;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.modules.contact.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.modules.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storerequest $request)
    {
        //
        $contacts = new Contacts();

        $contacts->id = $request->id;
        $contacts->firstname = $request->firstname;
        $contacts->lastname = $request->lastname;       
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->description = $request->description;
        $contacts->save();
        return redirect()->route('admin.contact.index')->with('success','success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contacts $contacts)
    {
        //
        return view('admin.contact.show',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
        $contacts = Contacts::find($id);
        return view('admin.contact.edit',['contracts'=>$contacts]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        //
        $contacts = Contacts::find($id);
        $contacts->firstname = $request->firstname;
        $contacts->lastname = $request->lastname;       
        $contacts->email = $request->email;
        $contacts->phone = $request->phone;
        $contacts->description = $request->description;
        $contacts->save();
        return redirect()->route('admin.contact.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $contacts= contacts::find($id);
        $contacts->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Deleted Successfully!');
    }
}