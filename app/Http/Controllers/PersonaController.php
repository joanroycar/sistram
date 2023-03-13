<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Persona;
use App\Models\TipoDocumento;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:persona.index')->only('index','estado');
        $this->middleware('can:persona.create')->only('create','store');
        $this->middleware('can:persona.edit')->only('edit','update');
        $this->middleware('can:persona.show')->only('show');
        $this->middleware('can:persona.destroy')->only('destroy','activar');


    }
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empresas = Empresa::get();
        $tipoDocumentos = TipoDocumento::get();
        return view('personas.create',compact('tipoDocumentos','empresas'));
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
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'tipo_documento_id' => 'required|not_in:Seleccione un Tipo De Documento......',
            'empresa_id' => 'required|not_in:Seleccione una Empresa......',
            'cedula' => 'required|numeric',
            'telefono' => 'max:9',
            'domicilio' => 'max:100',
            
        ],[
            'nombres.required'=>'El campo nombre es requerido.',
            'nombres.max'=>'El maximo de caracteres es de 100.',

            'apellidos.required'=>'El campo apellidos es requerido.',
            'apellidos.max'=>'El maximo de caracteres es de 100.',
            'empresa_id.required'=>'Seleccione una empresa, por favor.',

            'tipo_documento_id.required'=>'Seleccione un Tipo De Documento, por favor.',
            'cedula.required'=>'El campo cedula es requerido..',
            'cedula.size' => 'El campo debe contener 8 caracteres.',
            'cedula.numeric' => 'Ingrese en el campo solo numeros, por favor.',

            'telefono.max' => 'El campo debe contener 9 caracteres.',

        ]);
        $persona = Persona::create($request->all());


        return redirect()->route('persona.index')->with('guardar', 'ok');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    {
        return view('personas.show', compact('persona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        
        $empresas = Empresa::pluck('razon_social', 'id');;
        $tipoDocumentos = TipoDocumento::pluck('nombre', 'id');
        return view('personas.edit', compact('persona','empresas','tipoDocumentos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        $request->validate([
            'nombres' => 'required|max:100',
            'apellidos' => 'required|max:100',
            'tipo_documento_id' => 'required|not_in:Seleccione un Tipo De Documento......',
            'empresa_id' => 'required|not_in:Seleccione una Empresa......',
            'cedula' => 'required|size:8',
            'telefono' => 'max:9',
            'domicilio' => 'max:100',
            
        ],[
            'nombres.required'=>'El campo nombre es requerido.',
            'nombres.max'=>'El maximo de caracteres es de 100.',

            'apellidos.required'=>'El campo apellidos es requerido.',
            'apellidos.max'=>'El maximo de caracteres es de 100.',
            'empresa_id.required'=>'Selecciones una empresa, por favor.',

            'tipo_documento_id.required'=>'Selecciones un Tipo De Documento, por favor.',
            'cedula.required'=>'El campo cedula es requerido..',
            'cedula.size' => 'El campo debe contener 8 caracteres.',

            'telefono.max' => 'El campo debe contener 9 caracteres.',

        ]);
        $persona->update($request->all());

        return redirect()->route('persona.index')->with('editar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    
    public function destroy(Persona $persona)
    {
        $persona->status = 2;
        $persona->save();
        return redirect()->route('persona.index')->with('activar', 'ok');
    
    }
    public function activar(Persona $persona)
    {
        $persona->status = 1;
        $persona->save();
        return redirect()->route('persona.index')->with('activar', 'ok');
    
    }
}
