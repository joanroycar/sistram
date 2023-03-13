@section('title', 'Registrar Empresa')

@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Registrar Empresa</h1>
                    </div>
                    {{-- <div>
                  <a href="{{route('categoria.create')}}" class="btn btn-link  btn-soft-primary">
                    <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.5 12.5537C12.2546 12.5537 14.4626 10.3171 14.4626 7.52684C14.4626 4.73663 12.2546 2.5 9.5 2.5C6.74543 2.5 4.53737 4.73663 4.53737 7.52684C4.53737 10.3171 6.74543 12.5537 9.5 12.5537ZM9.5 15.0152C5.45422 15.0152 2 15.6621 2 18.2464C2 20.8298 5.4332 21.5 9.5 21.5C13.5448 21.5 17 20.8531 17 18.2687C17 15.6844 13.5668 15.0152 9.5 15.0152ZM19.8979 9.58786H21.101C21.5962 9.58786 22 9.99731 22 10.4995C22 11.0016 21.5962 11.4111 21.101 11.4111H19.8979V12.5884C19.8979 13.0906 19.4952 13.5 18.999 13.5C18.5038 13.5 18.1 13.0906 18.1 12.5884V11.4111H16.899C16.4027 11.4111 16 11.0016 16 10.4995C16 9.99731 16.4027 9.58786 16.899 9.58786H18.1V8.41162C18.1 7.90945 18.5038 7.5 18.999 7.5C19.4952 7.5 19.8979 7.90945 19.8979 8.41162V9.58786Z" fill="currentColor"></path>                            </svg>                        
                      Registrar
                  </a>
              </div> --}}
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
                    {!! Form::open(['route' => 'empresa.store', 'autocomplete' => 'off', 'files' => true, 'class' => 'formulario']) !!}
                    

                        <div class="row">
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Resolución:</label>
                            <select name="resolucion_id" class="form-control">
                                <option value="" selected disabled>Seleccione una Resolucion .....</option>
                                @foreach ($resoluciones as $resolucion)
                                    <option value="{{ $resolucion->id }}">{{ $resolucion->nombre }}</option>
                                @endforeach
                            </select>
    
                            @error('resolucion_id')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Tipo De Organización:</label>
                            <select name="tipo_organizacion_id" class="form-control">
                                <option value="" selected disabled>Seleccione un Tipo De Organizacion .....</option>
                                @foreach ($tipo_organizaciones as $tipo_organizacion)
                                    <option value="{{ $tipo_organizacion->id }}">{{ $tipo_organizacion->nombre }}</option>
                                @endforeach
                            </select>
    
                            @error('tipo_organizacion_id')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">RUC:</label>
                            <input type="text" class="form-control" id="ruc" name="ruc"
                                placeholder="Ingrese El RUC" value="{{ old('ruc') }}" onkeypress="return solonumeros(event)" minlength="11" maxlength="11" required>
                            @error('ruc')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Razon Social:</label>
                        
                            <input type="text" class="form-control" id="razon_social" name="razon_social"
                            placeholder="Ingrese la razon social" value="{{ old('razon_social') }}">
                            @error('razon_social')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Cantidad De Conductores:</label>
                        
                            <input type="number" class="form-control" id="cantidad_conductor" name="cantidad_conductor"
                            placeholder="Ingrese la Cantidad De Conductores" value="{{ old('cantidad_conductor') }}" min="1" pattern="^[0-9]+">
                            @error('cantidad_conductor')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
                            <label class="form-label" for="pwd">Cantidad De Paraderos:</label>
                        
                            <input type="number" class="form-control" id="cantidad_paradero" name="cantidad_paradero"
                            placeholder="Ingrese La Cantidad De Paraderos" value="{{ old('cantidad_paradero') }}" min="1">
                            @error('cantidad_paradero')
                                <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                            @enderror
                           </div>
                           <div class="col-md-6 mb-3">
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
                           </div>
                        </div>
                        
                    
                    

                   
                    
                    

                    <div class="grid grid-cols-2 gap-4 form-group">
                        
                        <div>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                            <a href="{{route('empresa.index')}}" class="btn btn-danger">
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
