@section('title', 'Registrar Vehiculo')

@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Vehiculo</h1>
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
                    {!! Form::open(['route' => 'vehiculo.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    

                    <div class="row">

                        <div class="col-md-6 mb-3">

                            <label class="form-label" for="pwd">Propietario Del Vehiculo:</label>
                            <select name="dueño_id" class="form-control">
                                <option value="" selected disabled>Seleccione una Propietario....</option>
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ Str::UPPER($persona->nombres) }} {{ Str::UPPER($persona->apellidos) }}</option>
                                @endforeach
                            </select>
    
                            @error('dueño_id')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-3">

                            <label class="form-label" for="pwd">Conductor:</label>
                            <select name="persona_id" class="form-control">
                                <option value="" selected disabled>Seleccione un Conductor.....</option>
                                @foreach ($personas as $persona)
                                    <option value="{{ $persona->id }}">{{ Str::UPPER($persona->nombres) }} {{ Str::UPPER($persona->apellidos) }}</option>
                                @endforeach
                            </select>
    
                            @error('persona_id')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror

                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">N° Placa:</label>
                            <input type="text" class="form-control" id="placa" name="placa"
                                placeholder="Ingrese El numero de placa" value="{{ old('placa') }}">
                            @error('placa')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">N° Flota:</label>
                            <input type="text" class="form-control" id="numero_flota" name="numero_flota"
                                placeholder="Ingrese El N° De Flota" value="{{ old('numero_flota') }}"  onkeypress="return solonumeros(event)">
                            @error('numero_flota')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                        </div>

                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Serie Motor:</label>
                            <input type="text" class="form-control" id="serie_motor" name="serie_motor"
        
                                    placeholder="Ingrese la Serie De Motor" value="{{ old('serie_motor') }}">                       
                                     @error('serie_motor')
                                    <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">N° De Seguridad Vial:</label>
                            <input type="text" class="form-control" id="carnet_seguridad_vial" name="carnet_seguridad_vial"
        
                                    placeholder="Ingrese el N° De Seguridad Vial" value="{{ old('carnet_seguridad_vial') }}" onkeypress="return solonumeros(event)">                       
                                     @error('carnet_seguridad_vial')
                                    <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                                @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Estado de SOAT :</label><br>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="soat" id="soat"
                                    checked="" value="{{old('soat',1,true)}}">
                            <label for="radio1" class="form-check-label pl-2">VIGENTE</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" class="form-check-input" name="soat" id="pubicacion" value="{{old('soat',2)}}">
                            <label for="radio2" class="form-check-label pl-2">NO VIGENTE</label>
                        </div>
                        @error('soat')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                        </div>




                    </div>
                                     
                    

                    

                    
                    
                    
                   

                   

                    <div class="grid grid-cols-2 gap-4 form-group">
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a href="{{route('vehiculo.index')}}" class="btn btn-danger">
                                Cancelar
                             </a>                             {!! Form::close() !!}
                        </div>



                    </div>
                </div>
@endsection


@section('scripts')
<script src="{{asset('js/validaciones/numeros.js')}}"></script>

<script src="{{asset('js/validaciones/letras.js')}}"></script>

    <script>
        $('.formulario').submit(function(e) {
            e.preventDefault()

            Swal.fire({
                title: 'Estas seguro de guardar?',
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
            })

        })
    </script>
@endsection