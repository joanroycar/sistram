
@section('title', 'Ver Persona')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Ver Persona</h1>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')     
        <div class="card">
            
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Datos de Persona</h4>
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
                              <p class="mb-1">Nombres:</p>
                              <h6>{{$persona->nombres}}</h6>

                           </div>
                        </li>
                       <li class="d-flex mb-4 align-items-center active">
                          <div class="ms-3">
                             <p class="mb-0">Apellidos:</p>
                             <h6>{{$persona->apellidos}}  </h6>

                          </div>
                       </li>
                       
                        <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">Tipo Documento:</p>
                               <h6>{{$persona->tipodocumentos->nombre}}  </h6>
 
                            </div>
                         </li>
                         <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">N° De Cedula:</p>
                               <h6>{{$persona->cedula}}  </h6>
 
                            </div>
                         </li>
                         <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">N° De Celular:</p>
                               @if($persona->telefono == null)
                               <h6 class="text-danger"> No hay datos
                            </h6>
                               @else
                               <h6>{{$persona->telefono}} </h6>
                               @endif
                            </div>
                         </li>
                         <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">Domicilio:</p>
                               
                                 @if($persona->domicilio == null)
                                 <h6 class="text-danger"> No hay datos
                              </h6>
                                 @else
                                 <h6>{{$persona->domicilio}} </h6>
                                 @endif
                                 
                              
 
                            </div>
                         </li>
                    </ul>
                 </div>
                  <div class="col-md-4">
                     <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-1">Organización:</p>
                               <h6>{{$persona->empresa->tipo_organizacion->nombre}}</h6>
 
                            </div>
                         </li>
                        <li class="d-flex mb-4 align-items-center active">
                           <div class="ms-3">
                              <p class="mb-0">Razon Social:</p>
                              <h6>{{$persona->empresa->razon_social}}  </h6>

                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center active">
                            <div class="ms-3">
                               <p class="mb-0">RUC:</p>
                               <h6>{{$persona->empresa->ruc}}  </h6>
 
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
        
@endsection

    

















