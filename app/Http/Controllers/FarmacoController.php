<?php

namespace App\Http\Controllers;

use App\Farmaco;
use Illuminate\Http\Request;

class FarmacoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'gramaje' => 'required',
            'nombre' => 'required',
            'coste' => 'required',
            'tipo' => 'required'
        ]);

        $farm =  new Farmaco();
        $farm->nombre = $request->input('nombre');
        $farm->gramaje = $request->input('gramaje');
        $farm->tipo = $request->input('tipo');
        $farm->costo = $request->input('coste');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Farmaco  $farmaco
     * @return \Illuminate\Http\Response
     */
    public function show(Farmaco $farmaco)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Farmaco  $farmaco
     * @return \Illuminate\Http\Response
     */
    public function edit(Farmaco $farmaco)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Farmaco  $farmaco
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Farmaco $farmaco)
    {
        $request->validate([
            'gramaje' => 'required',
            'nombre' => 'required',
            'coste' => 'required',
            'tipo' => 'required'
        ]);

        $farmaco->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Farmaco  $farmaco
     * @return \Illuminate\Http\Response
     */
    public function destroy(Farmaco $farmaco)
    {
        $farmaco -> delete();
    }
}
