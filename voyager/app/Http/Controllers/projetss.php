<?php

namespace App\Http\Controllers;

use App\Models\projets;
use Illuminate\Http\Request;

class projetss extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $projets=projets::orderBy('created_at','desc')->take(6)->get();
        return view('blog.index',['Myprojets'=>$projets]);

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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(projets $projets)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(projets $projets)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, projets $projets)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(projets $projets)
    {
        //
    }
}
