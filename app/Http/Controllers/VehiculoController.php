<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Vehiculo;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade\Pdf;

class VehiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('can:vehiculo.index')->only('index','estado');
        $this->middleware('can:vehiculo.create')->only('create','store');
        $this->middleware('can:vehiculo.edit')->only('edit','update');
        $this->middleware('can:vehiculo.show')->only('show','descargar_pdf');
        $this->middleware('can:vehiculo.destroy')->only('destroy','activar');
    }
    public function index()
    {
        
        $vehiculos = Vehiculo::all();
        return view('vehiculos.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::get();

        return view('vehiculos.create', compact('personas'));
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
             'dueño_id' => 'required|not_in:Seleccione una Propietario....',
             'persona_id' => 'required|not_in:Seleccione un Conductor.....',
             'placa' => 'required|size:6',
             'numero_flota' => 'required|numeric',
             'serie_motor' => 'required|size:17',
             'carnet_seguridad_vial' => 'required|numeric',
             'soat' => 'required|in:1,2',      
         ],[
            'dueño_id.required'=>'Seleccione un Propietario, por favor.',
            'persona_id.required'=>'Seleccione un Conductor, por favor.',

             'placa.required'=>'El campo N° Placa es requerido.',
             'placa.size'=>'El campo debe contener 6 caracteres.',

            'numero_flota.required'=>'El campo N° De Flota es requerido.',
             'numero_flota.numeric'=>'El campo debe ser de tipo Numerico',


             'serie_motor.required'=>'El campo Seria De Motor es requerido.',
             'serie_motor.size'=>'El campo debe contener 17 caracteres.',

             'carnet_seguridad_vial.required'=>'El campo N° Carnet De Seguridad Vial es requerido.',
             'carnet_seguridad_vial.numeric'=>'El campo debe ser de tipo Numerico',

             'soat.required'=>'Selecion un opción del estado del SOAT.'

         ]);
        $vehiculo = Vehiculo::create($request->all()+[
            'persona_sustituida_id'=> $request->persona_id,
            'uuid'=>((string) Str::uuid()),
        ]);
        return redirect()->route('vehiculo.index')->with('guardar', 'ok');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculo $vehiculo)
    {

        return view('vehiculos.show',compact('vehiculo'));
    }
    public function verificacion(Vehiculo $vehiculo){
        if($vehiculo->status == 2){
            return view('vehiculos.verificacion.error');

        }else{
            return view('vehiculos.verificacion.index',compact('vehiculo'));

        }
        
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehiculo $vehiculo)
    {
        $personas = Persona::pluck('nombres','id');

        return view('vehiculos.edit', compact('vehiculo','personas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehiculo $vehiculo)
    {
        $request->validate([
            'dueño_id' => 'required|not_in:Seleccione una Propietario....',
            'persona_id' => 'required|not_in:Seleccione un Conductor.....',
            'placa' => 'required|size:6',
            'numero_flota' => 'required|numeric',
            'serie_motor' => 'required|size:17',
            'carnet_seguridad_vial' => 'required|numeric',
            'soat' => 'required|in:1,2',      
        ],[
           'dueño_id.required'=>'Seleccione un Propietario, por favor.',
           'persona_id.required'=>'Seleccione un Conductor, por favor.',

            'placa.required'=>'El campo N° Placa es requerido.',
            'placa.size'=>'El campo debe contener 6 caracteres.',

           'numero_flota.required'=>'El campo N° De Flota es requerido.',
            'numero_flota.numeric'=>'El campo debe ser de tipo Numerico',


            'serie_motor.required'=>'El campo Seria De Motor es requerido.',
            'serie_motor.size'=>'El campo debe contener 17 caracteres.',

            'carnet_seguridad_vial.required'=>'El campo N° Carnet De Seguridad Vial es requerido.',
            'carnet_seguridad_vial.numeric'=>'El campo debe ser de tipo Numerico',

            'soat.required'=>'Selecion un opción del estado del SOAT.'

        ]);
        $vehiculo->update($request->all());
        return redirect()->route('vehiculo.index')->with('editar', 'ok');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculo  $vehiculo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehiculo $vehiculo)
    {
        $vehiculo->status = 2;
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('activar', 'ok');
    
    }
    public function activar(Vehiculo $vehiculo)
    {
        $vehiculo->status = 1;
        $vehiculo->save();
        return redirect()->route('vehiculo.index')->with('activar', 'ok');
    
    }

    public function descargar_pdf(Vehiculo $vehiculo){

        $pdf = Pdf::loadView('vehiculos.pdf.index', compact('vehiculo'));
        
        return $pdf->download('Licencia_QR_Transporte.pdf');
    }
}
