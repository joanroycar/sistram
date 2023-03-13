@section('title', 'Registrar Zona')

@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Zona</h1>
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
                {{-- <div class="card-header d-flex justify-content-between">
                <div class="header-title">
                    <h4 class="card-title">Basic Form</h4>
                </div>
            </div> --}}
                <div class="card-body">
                    {!! Form::open(['route' => 'paradero.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    
                    <label class="form-label" for="pwd">Zona:</label>
                        <select name="zona_id" class="form-control">
                            <option value="" selected disabled>Seleccione una Zona .....</option>
                            @foreach ($zonas as $zona)
                                <option value="{{ $zona->id }}">{{ $zona->nombre }}</option>
                            @endforeach
                        </select>

                        @error('zona_id')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    <div class="form-group">
                        <label class="form-label" for="pwd">Nombres:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingrese El nombre" value="{{ old('nombre') }}">
                        @error('nombre')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripcion:</label>
                        

                            <textarea name="descripcion" class="form-control" id="descripcion" cols="5" rows="5" value="{{ old('descripcion') }}"></textarea>
                        @error('descripcion')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

            

                    <div class="grid grid-cols-2 gap-4 form-group">
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a href="{{route('paradero.index')}}" class="btn btn-danger">
                                Cancelar
                             </a>                             {!! Form::close() !!}
                        </div>



                    </div>
                </div>
@endsection
@section('scripts')
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