
@section('title', 'Ver Empresas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Ver Empresa</h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    {{-- <div class="row">
        <div class="col-sm-12 col-lg-12">
            <div class="card">
                
                <div class="card-body">
                    
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
        </div> --}}
        
        <div class="card">
            
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Datos de Empresa</h4>
               </div>
            </div>
            <div class="card-body">
                
                <br>
                <br>
               <div class="row">
                  <div class="col-md-4">
                     <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-1">Tipo Organización:</p>
                               <h6>{{$empresa->tipo_organizacion->nombre}}</h6>
 
                            </div>
                         </li>
                        <li class="d-flex mb-4 align-items-center active">
                           <div class="ms-3">
                              <p class="mb-0">Razon Social:</p>
                              <h6>{{$empresa->razon_social}}  </h6>

                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">RUC:</p>
                               <h6>{{$empresa->ruc}}  </h6>
 
                            </div>
                         </li>
                        
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center active">
                           <div class="ms-3">
                            <p class="mb-0">ZONA:</p>

                              <h6>{{$empresa->zona->nombre}}</h6><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdropLive">
                                Ver Parderos
                                
                            </button>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <div class="ms-3">
                            <p class="mb-1">Resolución:</p>

                              <h6>{{$empresa->resolucion->nombre}}</h6>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">

                            <div class="ms-3">
                               @if($empresa->resolucionnueva->id != $empresa->resolucion->id )
                               <p class="mb-0">Resolución Sustituida</p>

                               <h5>
 
                                {{$empresa->resolucionnueva->nombre}}
                               </h5>
                                  @else 
                                  <p class="mb-0">Resolución Sustituida</p>

                                  <h6 style="color: red"> No Hay Resolución sustituta</h6>
 
                                  @endif
 
 
 
                              
                            </div>
                         </li>
                     </ul>
                  </div>

                  <div class="col-md-4">
                    <ul class="list-inline m-0 p-0">
                       <li class="d-flex mb-4 align-items-center active">
                          <div class="ms-3">
                           <p class="mb-0">Cantidad Paraderos:</p>

                             <h6>{{$empresa->cantidad_paradero}}</h6>
                          </div>
                       </li>
                       <li class="d-flex mb-4 align-items-center">
                          <div class="ms-3">
                           <p class="mb-1">Cantidad De Conductores:</p>

                             <h6>{{$empresa->cantidad_conductor}}</h6>
                          </div>
                       </li>
                       
                    </ul>
                 </div>
               </div>
               <a href="{{ route('empresa.index') }}" class="btn btn-danger" style="float: right">
                Volver a Lista de Empresas
            </a>
               
            </div>
         </div>
        
        
        
           
           
        </div>
        <div class="modal fade" id="staticBackdropLive" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLiveLabel" style="display: none;" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLiveLabel">PARADEROS PERMITIDOS DE LA ZONA <b>{{$empresa->zona->nombre}}</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                           <div class="header-title">
                              <h6 class="card-title">  Paraderos Permitidos</h6>
                           </div>
                        </div>
          
                       <div class="card-body">
          
                         <ul>
                            @foreach ($empresa->zona->paraderos as $paradero)
                        <li style="font-size: 10px">       {{$paradero->nombre}} <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                         width="30" height="30" viewBox="0 0 512.000000 512.000000"
                         preserveAspectRatio="xMidYMid meet">
                        <metadata>
                        Created by potrace 1.16, written by Peter Selinger 2001-2019
                        </metadata>
                        <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)"
                        fill="red" stroke="none">
                        <path d="M2324 5104 c-427 -71 -802 -354 -995 -749 -107 -220 -145 -406 -136
                        -661 7 -186 24 -264 116 -534 194 -569 1149 -3155 1165 -3155 10 0 468 1065
                        850 1975 567 1350 606 1465 606 1774 0 350 -128 676 -369 938 -190 208 -488
                        367 -773 413 -114 18 -353 18 -464 -1z m353 -299 c166 -11 372 -93 521 -204
                        390 -294 532 -806 350 -1257 -134 -333 -450 -587 -807 -649 -585 -103 -1147
                        305 -1237 895 -18 120 -18 190 1 313 73 484 474 864 955 906 52 4 104 7 115 5
                        11 -2 57 -5 102 -9z"/>
                        <path d="M2035 4484 c-45 -23 -66 -45 -86 -89 -17 -37 -19 -78 -19 -583 0
                        -513 1 -545 19 -580 10 -20 28 -46 40 -56 17 -15 21 -31 21 -78 0 -90 41 -116
                        165 -106 73 6 95 26 95 90 l0 48 290 0 290 0 0 -32 c0 -55 11 -76 45 -92 43
                        -21 138 -20 181 0 34 16 34 17 34 84 0 55 4 70 21 86 12 10 30 36 40 56 18 35
                        19 67 19 580 0 611 1 595 -76 654 l-37 29 -506 3 c-445 2 -510 0 -536 -14z
                        m785 -94 c0 -19 -7 -20 -260 -20 -253 0 -260 1 -260 20 0 19 7 20 260 20 253
                        0 260 -1 260 -20z m258 -309 c2 -173 -1 -226 -10 -233 -15 -9 -988 -11 -1012
                        -2 -14 5 -16 35 -16 228 0 123 3 226 7 229 3 4 236 6 517 5 l511 -3 3 -224z
                        m-678 -586 l0 -55 -165 0 -165 0 0 55 0 55 165 0 165 0 0 -55z m660 0 l0 -55
                        -160 0 -160 0 0 55 0 55 160 0 160 0 0 -55z m-320 -300 l0 -45 -155 0 -155 0
                        0 45 0 45 155 0 155 0 0 -45z"/>
                        </g>
                        </svg>    </li>
                            
                        @endforeach
                           
                         </ul>
                       </div>
                        
                     </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                </div>
                </div>
            </div>
            </div>
@endsection

    

















