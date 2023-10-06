<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\Admin\Contact\Storerequest;
use App\Http\Requests\Admin\Contact\UpdateRequest;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use PSpell\Config;

use function League\Flysystem\delete;

class ContactsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $contacts = Contact::orderBy('created_at','DESC')->get();
        return view('admin.modules.contact.index',[
            'contacts'=>$contacts
        ]);
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
        $contact = new Contact();

        // $contact->id = $request->id;
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;       
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('admin.contact.index')->with('success','Create Contact successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contacts)
    {
        //
        return view('admin.contact.show',compact('contacts'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $contact = Contact::find($id);
        return view('admin.modules.contact.edit',[
            'id'=>$id,
            'contact'=>$contact
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateRequest $request, $id)
    {
        //
        $contact = Contact::find($id);
        if($contact == null){
            abort(404);
        };
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;       
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('admin.contact.index')->with('success','success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
        $contacts= contact::find($id);
        $contacts->delete();

        return redirect()->route('admin.contact.index')->with('success', 'Deleted Successfully!');
    }
}