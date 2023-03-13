<?php

namespace App\Http\Controllers;

use App\Models\Zona;
use Illuminate\Http\Request;

class ZonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:zona.index')->only('index','estado');
        $this->middleware('can:zona.create')->only('create','store');
        $this->middleware('can:zona.edit')->only('edit','update');
        $this->middleware('can:zona.show')->only('show');
        $this->middleware('can:zona.destroy')->only('destroy','activar');


    }
    
    public function index()
    {
        $zonas = Zona::get();
        return view('zonas.index',compact('zonas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zonas.create');
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
            'nombre' => 'required|max:200|numeric|unique:zonas',
            'descripcion' => 'max:200',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.numeric'=>'El campo nombre tiene que ser de tipo numerico.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',

            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',

        ]);
        $zona = Zona::create($request->all());
        return redirect()->route('zona.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function show(Zona $zona)
    {
        return view('zonas.show', compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function edit(Zona $zona)
    {        

        
        return view('zonas.edit',compact('zona'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zona $zona)
    {
        $request->validate([
            'nombre' => 'required|max:200|numeric|unique:zonas,nombre,'.$zona->id,
            'descripcion' => 'max:200',
            
        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.numeric'=>'El campo nombre tiene que ser de tipo numerico.',
            'nombre.unique'=>'El campo nombre no tiene que repetirse.',

            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',

        ]);
        $zona->update($request->all());

        return redirect()->route('zona.index')->with('editar', 'ok');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zona  $zona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zona $zona)
    {
        $zona->status = 2;
        $zona->save();
        return redirect()->route('zona.index')->with('activar', 'ok');
    
    }
    public function activar(Zona $zona)
    {
        $zona->status = 1;
        $zona->save();
        return redirect()->route('zona.index')->with('activar', 'ok');
    
    }
}
