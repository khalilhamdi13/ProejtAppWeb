<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projetsController extends Controller
{
    //

    public function index()
    {
        $companies = projets::orderBy('id','desc')->paginate(5);
        return view('projets.index', compact('projets'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function create()
    {
        return view('projets.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @return \Illuminate\Http\Response
    */
    public function store(Request $request)
    {
        $request->validate([
            'Categorie' => 'required',
            'description' => 'required',
            'date' => 'required',
            'addresse' => 'required',
            'image' => 'required',
            'prix' => 'required',
        ]);

        Company::create($request->post());

        return redirect()->route(' projets.index')->with('success',' projets has been created successfully.');
    }

    /**
    * Display the specified resource.
    *
    * @param  \App\ projets  $company
    * @return \Illuminate\Http\Response
    */
    public function show( projets $projets)
    {
        return view(' projets.show',compact('projets'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  \App\projets  $company
    * @return \Illuminate\Http\Response
    */
    public function edit(Company $company)
    {
        return view('projets.edit',compact('company'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  \Illuminate\Http\Request  $request
    * @param  \App\company  $company
    * @return \Illuminate\Http\Response
    */
    public function update(Request $request, Company $company)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
        ]);

        $company->fill($request->post())->save();

        return redirect()->route('companies.index')->with('success','Company Has Been updated successfully');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  \App\Company  $company
    * @return \Illuminate\Http\Response
    */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect()->route('companies.index')->with('success','Company has been deleted successfully');
    }

}
