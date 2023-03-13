<?php

namespace App\Http\Controllers;

use App\Models\TipoOrganizacion;
use Illuminate\Http\Request;

class TipoOrganizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:tipo-organizacion.index')->only('index','estado');
        $this->middleware('can:tipo-organizacion.create')->only('create','store');
        $this->middleware('can:tipo-organizacion.edit')->only('edit','update');
        $this->middleware('can:tipo-organizacion.show')->only('show');
        $this->middleware('can:tipo-organizacion.destroy')->only('destroy','activar');


    }
    public function index()
    {
        $tipo_organizaciones = TipoOrganizacion::get();
        return view('tipo_organizaciones.index',compact('tipo_organizaciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tipo_organizaciones.create');

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
            'nombre' => 'required|max:200|unique:tipo_organizacions',
            'siglas' => 'required|max:10',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',
            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'siglas.required'=>'El campo siglas es requerido.',
            'siglas.max'=>'Ingrese como máximo 10 caracteres, por favor.',

        ]);
        $tipoOrganizacion = TipoOrganizacion::create($request->all());
        return redirect()->route('tipo-organizacion.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoOrganizacion  $tipoOrganizacion
     * @return \Illuminate\Http\Response
     */
    public function show(TipoOrganizacion $tipoOrganizacion)
    {
        return view('tipo_organizaciones.show', compact('tipoOrganizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoOrganizacion  $tipoOrganizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoOrganizacion $tipoOrganizacion)
    {
        return view('tipo_organizaciones.edit', compact('tipoOrganizacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TipoOrganizacion  $tipoOrganizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TipoOrganizacion $tipoOrganizacion)
    {
        $request->validate([
            'nombre' => 'required|max:200|unique:tipo_organizacions,nombre,'.$tipoOrganizacion->id,
            'siglas' => 'required|max:10',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',
            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'siglas.required'=>'El campo siglas es requerido.',
            'siglas.max'=>'Ingrese como máximo 10 caracteres, por favor.',

        ]);
        $tipoOrganizacion->update($request->all());
        return redirect()->route('tipo-organizacion.index')->with('editar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoOrganizacion  $tipoOrganizacion
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(TipoOrganizacion $tipo_organizacion)
    {
        $tipo_organizacion->status = 2;
        $tipo_organizacion->save();
        return redirect()->route('tipo-organizacion.index')->with('activar', 'ok');
    
    }
    public function activar(TipoOrganizacion $tipo_organizacion)
    {
        $tipo_organizacion->status = 1;
        $tipo_organizacion->save();
        return redirect()->route('tipo-organizacion.index')->with('activar', 'ok');
    
    }
}
