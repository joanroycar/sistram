@section('title', 'Registrar Persona')

@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Persona</h1>
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
                    {!! Form::model($persona, [
                        'route' => ['persona.update', $persona],
                        'method' => 'put',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}                    
                    <div class="form-group">
                        <label class="form-label" for="pwd">Nombres:</label>
                        <input type="text" class="form-control" id="nombres" name="nombres"
                            placeholder="Ingrese El nombre" value="{{ $persona->nombres}}">
                        @error('nombres')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos"
                            placeholder="Ingrese El apellido" value="{{ $persona->apellidos }}">
                        @error('apellidos')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    
                    <div class="form-group">
                        <label class="form-label" for="pwd">Empresa:</label>
                        {!! Form::select('empresa_id', $empresas, null, ['class' => 'form-control']) !!}


                        @error('empresa_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="pwd">Tipo Documento:</label>
                        {!! Form::select('tipo_documento_id', $tipoDocumentos, null, ['class' => 'form-control']) !!}


                        @error('tipo_documento_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Cedula:</label>
                    <input type="text" class="form-control" id="cedula" name="cedula"

                            placeholder="Ingrese la cedula" value="{{ $persona->cedula}}">                       
                             @error('cedula')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Telefono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono"
                            placeholder="Ingrese El Telefono" value="{{ $persona->telefono }}">
                        @error('telefono')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Domicilio:</label>
                        <input type="text" class="form-control" id="domicilio" name="domicilio"
                            placeholder="Ingrese El Domicilio" value="{{$persona->domicilio}}" >
                        @error('domicilio')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                   

                   

                    <div class="grid grid-cols-2 gap-4 form-group">
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a href="{{route('persona.index')}}" class="btn btn-danger">
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