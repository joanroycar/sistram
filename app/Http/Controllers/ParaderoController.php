<?php

namespace App\Http\Controllers;

use App\Models\Paradero;
use App\Models\Zona;
use Illuminate\Http\Request;

class ParaderoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:paradero.index')->only('index','estado');
        $this->middleware('can:paradero.create')->only('create','store');
        $this->middleware('can:paradero.edit')->only('edit','update');
        $this->middleware('can:paradero.show')->only('show');
        $this->middleware('can:paradero.destroy')->only('destroy','activar');


    }
    public function index()
    {
        $paraderos = Paradero::all();
        return view('paraderos.index',compact('paraderos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $zonas = Zona::where('status',1)->get();

        return view('paraderos.create', compact('zonas'));
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
            'nombre' => 'required|max:200',
            'descripcion' => 'max:200',
            'zona_id'=>'required|not_in:Seleccione una Zona .....',

        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',

            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'zona_id.required'=>'Seleccione Una Zona por favor.'
        ]);
        $paradero = Paradero::create($request->all());
        return redirect()->route('paradero.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paradero  $paradero
     * @return \Illuminate\Http\Response
     */
    public function show(Paradero $paradero)
    {
        $zonas = Zona::pluck('nombre', 'id');

        return view('paraderos.show', compact('paradero','zonas'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paradero  $paradero
     * @return \Illuminate\Http\Response
     */
    public function edit(Paradero $paradero)
    {
        $zonas = Zona::pluck('nombre', 'id');

        return view('paraderos.edit', compact('paradero','zonas'));
    }

    
    public function update(Request $request, Paradero $paradero)
    {
        $request->validate([
            'nombre' => 'required|max:200',
            'descripcion' => 'max:200',
            'zona_id'=>'required|not_in:Seleccione una Zona .....',

        ],[
            'nombre.required'=>'El campo nombre es requerido.',
            'nombre.max'=>'Ingrese como máximo 200 caracteres, por favor.',

            'descripcion.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'zona_id.required'=>'Seleccione Una Zona por favor.'
        ]);
        $paradero->update($request->all());
        return redirect()->route('paradero.index')->with('editar', 'ok');

    }

    public function destroy(Paradero $paradero)
    {
        $paradero->status = 2;
        $paradero->save();
        return redirect()->route('paradero.index')->with('activar', 'ok');
    
    }
    public function activar(Paradero $paradero)
    {
        $paradero->status = 1;
        $paradero->save();
        return redirect()->route('paradero.index')->with('activar', 'ok');
    
    }
}
