<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Http\Requests\Admin\Contact\Storerequest;



class Contact_usController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::orderBy('created_at','DESC')->get();
        return view('client.page.contact',[
            'contacts'=>$contacts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Storerequest $request)
    {
        //
        $contact = new Contact();

        $contact->id = $request->id;
        $contact->firstname = $request->firstname;
        $contact->lastname = $request->lastname;       
        $contact->email = $request->email;
        $contact->phone = $request->phone;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->route('/contact_us')->with('success','Create Contact successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
