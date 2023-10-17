<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // return 1;
        $contacts = ContactUs::get();
        return view ('backend.contact.index',compact('contacts'));
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
    public function store(Request $request)
    {
        
        $contact = new ContactUs();

        $contact->Name = $request->name;
        $contact->Email = $request->email;
        $contact->Phone = $request->phone;
        $contact->Comment = $request->comment;
        $contact->save();
        return redirect()->back();


    }

    /**
     * Display the specified resource.
     */
    public function show(ContactUs $contactUs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ContactUs $contactUs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ContactUs $contactUs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ContactUs $contactUs,$id)
    {
        $data = $contactUs::find($id);
        $data->delete();
        // return redirect()->back();
        return redirect()->back()->with('delete', "Deleted Successfully");
    }
}
