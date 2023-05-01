<?php

namespace App\Http\Controllers;

use App\Models\hsp;
use Illuminate\Http\Request;
use Illuminate\Http\validate;
use App\Http\Requests\hsprequest;

class hspcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index() 
    {
        
        return view('hsp.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('hsp.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(hsprequest $request)
    {
        $datos= $request->validated();
        // dd($datos);
        $medicion = hsp::create($datos);
        return redirect()->route('hsp.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(hsp $mediciones)
    {
        return view('hsp.show', compact('mediciones'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hsp $mediciones)
    {
        return view('hsp.edit', compact('mediciones'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(hsprequest $request, hsp $mediciones)
    {
        $datos= $request->validated();
        $mediciones-> update($datos);
        return redirect()-> route('hsp.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hsp $mediciones)
    {
        $mediciones->delete();
        return redirect()-> route('hsp.index');

    }
}
