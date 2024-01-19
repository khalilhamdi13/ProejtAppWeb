<?php

namespace App\Http\Controllers;

use App\Models\contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $contact = contact::all();
return view('view')->with('contact', $contact);
    }

    /**
     * Show the form for creating a new resource.
     */

     function save(contactRequest $request)
     {
         try {

             $message = 'contact saved successfully.';
             $contact =new Contact;
             $contact->setAttribute('Nom', $request->Nom);
             $contact->setAttribute('Prenom', $request->Prenom);
             $contact->setAttribute('Addresse', $request->Addresse);
             $contact->setAttribute('Email', $request->Email);
             $contact->setAttribute('Region', $request->Region);
             $contact->setAttribute('Message', $request->Message);
             $contact->save();

             return redirect()->back()->with('success_message', $message);
         } catch(\Exception $e) {
             $message = $e->getMessage();
         }

         return redirect()->back()->with('error_message', $message);
     }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contact $contact)
    {
        //
    }
}
