<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use App\Models\Resolucion;
use App\Models\TipoOrganizacion;
use App\Models\Zona;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('can:empresa.index')->only('index','estado');
        $this->middleware('can:empresa.create')->only('create','store');
        $this->middleware('can:empresa.edit')->only('edit','update');
        $this->middleware('can:empresa.show')->only('show');
        $this->middleware('can:empresa.destroy')->only('destroy','activar');


    }
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $resoluciones = Resolucion::get();
        $tipo_organizaciones = TipoOrganizacion::get();
        $zonas = Zona::get();
        return view('empresas.create', compact('resoluciones','tipo_organizaciones','zonas'));
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
            'resolucion_id'=>'required|not_in:Seleccione una Resolucion .....',
            'tipo_organizacion_id'=>'required|not_in:Seleccione un Tipo De Organizacion .....',
            'ruc' => 'required|numeric',
            'razon_social' => 'required|max:200',
            'cantidad_conductor' => 'required|numeric',
            'cantidad_paradero' => 'required|numeric',

            'zona_id'=>'required|not_in:Seleccione una Zona .....',

        ],[
            'resolucion_id.required'=>'Seleccione Una Resolución por favor.',
            'tipo_organizacion_id.required'=>'Seleccione Un Tipo De Organización por favor.',

            'ruc.required'=>'El campo RUC es requerido.',
            'ruc.numeric'=>'Ingrese información que se de tipo numerico.',

            'razon_social.required'=>'El campo Razon Social es requerido.',
            'razon_social.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'zona_id.required'=>'Seleccione Una Zona por favor.',

            'cantidad_conductor.required'=>'El campo Cantidad De Conductores es requerido.',
            'cantidad_conductor.numeric'=>'Ingrese información que se de tipo numerico.',

            'cantidad_paradero.required'=>'El campo Cantidad De Paraderos es requerido.',
            'cantidad_paradero.numeric'=>'Ingrese información que se de tipo numerico.',

        ]);
        $empresa = Empresa::create($request->all()+[
            'nueva_resolucion_id'=> $request->resolucion_id
        ]);
        return redirect()->route('empresa.index')->with('guardar', 'ok');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(Empresa $empresa)
    {
        return view('empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function edit(Empresa $empresa)
    {
        $resoluciones = Resolucion::pluck('nombre', 'id');
        $tipo_organizaciones = TipoOrganizacion::pluck('nombre', 'id');
        $zonas = Zona::pluck('nombre', 'id');
        return view('empresas.edit', compact('resoluciones','tipo_organizaciones','zonas','empresa'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Empresa $empresa)
    {
        $request->validate([
            'nueva_resolucion_id'=>'required|not_in:Seleccione una Resolucion .....',

            'tipo_organizacion_id'=>'required|not_in:Seleccione un Tipo De Organizacion .....',
            'ruc' => 'required|numeric',
            'razon_social' => 'required|max:200',
            'cantidad_conductor' => 'required|numeric',
            'cantidad_paradero' => 'required|numeric',

            'zona_id'=>'required|not_in:Seleccione una Zona .....',

        ],[
            'resolucion_id.required'=>'Seleccione Una Resolución por favor.',
            'nueva_resolucion_id.required'=>'Seleccione Una Resolución por favor.',

            'tipo_organizacion_id.required'=>'Seleccione Un Tipo De Organización por favor.',

            'ruc.required'=>'El campo RUC es requerido.',
            'ruc.numeric'=>'Ingrese información que se de tipo numerico.',

            'razon_social.required'=>'El campo RUC es requerido.',
            'razon_social.max'=>'Ingrese como máximo 200 caracteres, por favor.',
            'zona_id.required'=>'Seleccione Una Zona por favor.',

            'cantidad_conductor.required'=>'El campo Cantidad De Conductores es requerido.',
            'cantidad_conductor.numeric'=>'Ingrese información que se de tipo numerico.',

            'cantidad_paradero.required'=>'El campo Cantidad De Paraderos es requerido.',
            'cantidad_paradero.numeric'=>'Ingrese información que se de tipo numerico.',

        ]);
        $empresa->update($request->all());

        return redirect()->route('empresa.index')->with('editar', 'ok');


        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empresa  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Empresa $empresa)
    {
        $empresa->status = 2;
        $empresa->save();
        return redirect()->route('empresa.index')->with('eliminar', 'ok');
    
    }
    public function activar(Empresa $empresa)
    {
        $empresa->status = 1;
        $empresa->save();
        return redirect()->route('empresa.index')->with('activar', 'ok');
    
    }
}
