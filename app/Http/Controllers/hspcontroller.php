<?php

namespace App\Http\Controllers;

use App\Models\hsp;
use Illuminate\Http\Request;
use Illuminate\Http\validate;

class hspcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $horas =hsp::orderByDesc('id');
        // return view('index', compact('horas'));
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
    public function store(Request $request)
    {
        $datos= $request->validate(
        [
            'hsp' => 'required|max:60',
            'fecha_medicion' => 'required|date_format:Y-m-d\TH:i'
        ]);
        // dd($datos);
        $medicion = hsp::create($datos);
        return redirect('software');

    }

    /**
     * Display the specified resource.
     */
    public function show(hsp $hsp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(hsp $hsp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, hsp $hsp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(hsp $hsp)
    {
        //
    }
}
