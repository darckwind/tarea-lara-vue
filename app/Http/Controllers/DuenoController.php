<?php

namespace App\Http\Controllers;

use App\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{

    /**
     * mediante $this->>middleware(auth); se garantisa el acceso unicacmente cuando se encuentre logeado el usuario
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client');
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
            'rut' => 'required',
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        $dueno = new Dueno();
        $dueno->rut = $request->input('rut');
        $dueno->nombre = $request->input('nombre');
        $dueno->direccion = $request->input('direccion');
        $dueno->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function show(Dueno $dueno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function edit(Dueno $dueno)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dueno $dueno)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dueno $dueno)
    {
        //
    }
}
