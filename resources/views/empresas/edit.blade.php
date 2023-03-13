@section('title', 'Editar Paraderos')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Editar Empresa</h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                
                <div class="card-body">
                    {!! Form::model($empresa, [
                        'route' => ['empresa.update', $empresa],
                        'method' => 'put',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}



<div class="row">
    <div class="col-md-6 mb-3">
        <label class="form-label" for="pwd">Resolucion:</label>

        {!! Form::select('resolucion_id', $resoluciones, null, ['class' => 'form-control', 'disabled'=> 'true']) !!}
    
        @error('resolucion_id')
            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
        @enderror
    </div>
    <div class="col-md-6 mb-3">
        <label class="form-label" for="pwd">Nueva Resolucion:</label>

        {!! Form::select('nueva_resolucion_id', $resoluciones, null, ['class' => 'form-control']) !!}
    
        @error('resolucion_id')
            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
        @enderror
    </div>
    

    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">Tipo De Organización:</label>
     {!! Form::select('tipo_organizacion_id', $tipo_organizaciones, null, ['class' => 'form-control']) !!}


     @error('tipo_organizacion_id')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">RUC:</label>
     <input type="text" class="form-control" id="ruc" name="ruc"
         placeholder="Ingrese El RUC" value="{{ $empresa->ruc }}">
     @error('ruc')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">Razon Social:</label>
 
     <input type="text" class="form-control" id="razon_social" name="razon_social"
     placeholder="Ingrese la razon social" value="{{ $empresa->razon_social}}">
     @error('razon_social')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">Cantidad De Conductores:</label>
 
     <input type="number" class="form-control" id="cantidad_conductor" name="cantidad_conductor"
     placeholder="Ingrese la Cantidad De Conductores" value="{{ $empresa->cantidad_conductor}}">
     @error('cantidad_conductor')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">Cantidad De Paraderos:</label>
 
     <input type="number" class="form-control" id="cantidad_paradero" name="cantidad_paradero"
     placeholder="Ingrese La Cantidad De Paraderos" value="{{ $empresa->cantidad_paradero}}">
     @error('cantidad_paradero')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
    <div class="col-md-6 mb-3">
     <label class="form-label" for="pwd">Zona:</label>
     {!! Form::select('zona_id', $zonas, null, ['class' => 'form-control']) !!}


     @error('zona_id')
         <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
     @enderror
    </div>
 </div>
                    

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{ route('empresa.index') }}" class="btn btn-danger">
                        Cancelar
                    </a>                    {!! Form::close() !!}
                </div>



            </div>
        </div>
    @endsection

    @section('scripts')
                <script>
                    
                    $('.formulario').submit(function(e) {
                        e.preventDefault()

                        Swal.fire({
                            title: 'Estas seguro de actualizar?',
                            text: "¡No podrás revertir esto!",
                            icon: 'info',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, Guardar!',
                            cancelButtonText: 'Cancelar',
                        }).then((result) => {
                            if (result.value) {


                                this.submit()

                            }
                        });

                    });

                </script>

    @endsection
