<?php

namespace App\Http\Controllers;

use App\Models\Resolucion;
use Illuminate\Http\Request;

class ResolucionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:resolucion.index')->only('index','estado');
        $this->middleware('can:resolucion.create')->only('create','store');
        $this->middleware('can:resolucion.edit')->only('edit','update');
        $this->middleware('can:resolucion.show')->only('show');
        $this->middleware('can:resolucion.destroy')->only('destroy','activar');


    }
    public function index()
    {
        $resoluciones = Resolucion::all();
        return view('resoluciones.index', compact('resoluciones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('resoluciones.create');
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
            'nombre' => 'required|max:200|unique:resolucions',
            'descripcion' => 'max:200',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',

            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',

        ]);
        $resolucion = Resolucion::create($request->all());
        return redirect()->route('resolucion.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function show(Resolucion $resolucion)
    {
        return view('resoluciones.show', compact('resolucion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function edit(Resolucion $resolucion)
    {
        return view('resoluciones.edit',compact('resolucion'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Resolucion  $resolucion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resolucion $resolucion)
    {
        $request->validate([
            'nombre' => 'required|max:200|unique:resolucions,nombre,'.$resolucion->id,
            'descripcion' => 'max:200',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',

            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',

        ]);
        $resolucion->update($request->all());

        return redirect()->route('resolucion.index')->with('editar', 'ok');

    }

    public function destroy(Resolucion $resolucion)
    {
        $resolucion->status = 2;
        $resolucion->save();
        return redirect()->route('resolucion.index')->with('activar', 'ok');
    
    }
    public function activar(Resolucion $resolucion)
    {
        $resolucion->status = 1;
        $resolucion->save();
        return redirect()->route('resolucion.index')->with('activar', 'ok');
    
    }
}
