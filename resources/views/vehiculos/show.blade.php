
@section('title', 'Ver Vehiculo')

@extends('layouts.panel')


@section('header')
    
    <div class="container-fluid iq-container">
      <div class="row">
          <div class="col-md-12">
              <div class="flex-wrap d-flex justify-content-between align-items-center">
                  <div>
                      <h1>VER VEHICULO!</h1>
                  </div>
                  
              </div>
          </div>
      </div>
  </div>
  <div class="iq-header-img">
   <img src="/images/dashboard/top-header.png" alt="header" class="theme-color-default-img img-fluid w-100 h-100 animated-scaleX">
   
</div>
@endsection


@section('content')


<div class="row">
   <div class="col-lg-12">
      <div class="card">
           <div class="card-body">
              <div class="d-flex flex-wrap align-items-center justify-content-between">
                 <div class="d-flex flex-wrap align-items-center">
                    <div class="profile-img position-relative me-3 mb-3 mb-lg-0 profile-logo profile-logo1">
                       <img src="/images/avatars/01.png" alt="User-Profile" class="theme-color-default-img img-fluid rounded-pill avatar-100">
                       <img src="/images/avatars/avtar_1.png" alt="User-Profile" class="theme-color-purple-img img-fluid rounded-pill avatar-100">
                       <img src="/images/avatars/avtar_2.png" alt="User-Profile" class="theme-color-blue-img img-fluid rounded-pill avatar-100">
                       <img src="/images/avatars/avtar_4.png" alt="User-Profile" class="theme-color-green-img img-fluid rounded-pill avatar-100">
                       <img src="/images/avatars/avtar_5.png" alt="User-Profile" class="theme-color-yellow-img img-fluid rounded-pill avatar-100">
                       <img src="/images/avatars/avtar_3.png" alt="User-Profile" class="theme-color-pink-img img-fluid rounded-pill avatar-100">
                    </div>
                    <div class="d-flex flex-wrap align-items-center mb-3 mb-sm-0">
                       <h4 class="me-2 h4">{{$vehiculo->placa}}</h4>
                       <span> - N° Placa</span>
                    </div>
                 </div>
                 <ul class="d-flex nav nav-pills mb-0 text-center profile-tab" data-toggle="slider-tab" id="profile-pills-tab" role="tablist">
                    <li class="nav-item">
                       <a class="nav-link active show" data-bs-toggle="tab" href="#profile-feed" role="tab" aria-selected="false">Vehiculo</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#profile-activity" role="tab" aria-selected="false">Genera QR</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#profile-friends" role="tab" aria-selected="false">Datos Propietario y Conductor</a>
                    </li>
                    <li class="nav-item">
                       <a class="nav-link" data-bs-toggle="tab" href="#profile-profile" role="tab" aria-selected="false">Zonas</a>
                    </li>
                 </ul>
              </div>
           </div>
      </div>
   </div>
   
   <div class="col-lg-12">
      <div class="profile-content tab-content">
        <div id="profile-feed" class="tab-pane fade active show">

         <div class="card">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Datos de Vehiculo</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="row">
                  <div class="col-md-6">
                     <ul class="list-inline m-0 p-0">

                        <li class="d-flex mb-4 align-items-center active">
                           <img src="/images/placa/placa.png" alt="story-img" class="rounded-pill avatar-70 p-1 border bg-soft-light img-fluid">
                           <div class="ms-3">
                              <h5>{{$vehiculo->placa}}</h5>
                              <p class="mb-0">N° De Placa</p>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <img src="/images/placa/placa.png" alt="story-img" class="rounded-pill avatar-70 p-1 border img-fluid bg-soft-danger">
                           <div class="ms-3">
                              @if($vehiculo->placa_sustituida != null )

                              <h5>

                                 {{$vehiculo->placa_sustituida}}
                              </h5>
                                 @else 
                                 <h6 style="color: red"> No Hay Placa Sustituida</h6>

                                 @endif



                             
                              <p class="mb-0">Placa Sustituida</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <img src="/images/placa/moto.png" alt="story-img" class="rounded-pill avatar-70 p-1 border bg-soft-primary img-fluid">
                           <div class="ms-3">
                              <h5>{{$vehiculo->numero_flota}}</h5>
                              <p class="mb-0">N° Flota</p>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="col-md-6">
                     <ul class="list-inline m-0 p-0">
                        <li class="d-flex mb-4 align-items-center active">
                           <img src="/images/placa/motor.png" alt="story-img" class="rounded-pill avatar-70 p-1 border bg-soft-light img-fluid">
                           <div class="ms-3">
                              <h5>{{$vehiculo->serie_motor}}</h5>
                              <p class="mb-0">Serie De Motor</p>
                           </div>
                        </li>
                        <li class="d-flex mb-4 align-items-center">
                           <img src="/images/icons/03.png" alt="story-img" class="rounded-pill avatar-70 p-1 border img-fluid bg-soft-danger">
                           <div class="ms-3">
                              <h5>{{$vehiculo->carnet_seguridad_vial}}</h5>
                              <p class="mb-0">N° Carnet De Seguridad Vial</p>
                           </div>
                        </li>
                        <li class="d-flex align-items-center">
                           <img src="/images/placa/soat.png" alt="story-img" class="rounded-pill avatar-70 p-1 border bg-soft-primary img-fluid">
                           <div class="ms-3">

                               @if($vehiculo->soat == 1)

                               <h6 class="btn btn-success">VIGENTE</h6>



                               @else
                               <h6 class="btn btn-danger">NO VIGENTE</h6>

                               @endif




                              <p class="mb-0">Estado de Soat</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>

               <
            </div>
         </div>



           
           
        </div>
        <div id="profile-activity" class="tab-pane fade">
              
              <div class="row">
               <div class="col-lg-12">
                   <div class="card">
                       <div class="card-header">
                          <div class="header-title">
                             <h4 class="card-title">Vehiculo | </h4>
                          </div>
                       </div>
                       <div class="card-body">
                          <div class="text-center">
                             <div class="user-profile">
                                <div class="visible-print text-center">
                                   {!! QrCode::size(250)->generate('https://sistram.zvkaypzu.lucusvirtual.es/view-verification/'.$vehiculo->uuid.'?');!!}
                                   <p></p>
                                   {{-- <p>MSJL Copyright Derechos Reservados.</p> --}}
                                   <a href="{{route('vehiculo.pdf',$vehiculo)}}" class="jsgrid-button jsgrid-edit-button"> 
                                    {{-- <svg style="color: red" width="32" viewBox="0 0 24 24" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.92574 16.39H14.3119C14.7178 16.39 15.0545 16.05 15.0545 15.64C15.0545 15.23 14.7178 14.9 14.3119 14.9H8.92574C8.5198 14.9 8.18317 15.23 8.18317 15.64C8.18317 16.05 8.5198 16.39 8.92574 16.39ZM12.2723 9.9H8.92574C8.5198 9.9 8.18317 10.24 8.18317 10.65C8.18317 11.06 8.5198 11.39 8.92574 11.39H12.2723C12.6782 11.39 13.0149 11.06 13.0149 10.65C13.0149 10.24 12.6782 9.9 12.2723 9.9ZM19.3381 9.02561C19.5708 9.02292 19.8242 9.02 20.0545 9.02C20.302 9.02 20.5 9.22 20.5 9.47V17.51C20.5 19.99 18.5099 22 16.0545 22H8.17327C5.59901 22 3.5 19.89 3.5 17.29V6.51C3.5 4.03 5.5 2 7.96535 2H13.2525C13.5099 2 13.7079 2.21 13.7079 2.46V5.68C13.7079 7.51 15.203 9.01 17.0149 9.02C17.4381 9.02 17.8112 9.02316 18.1377 9.02593C18.3917 9.02809 18.6175 9.03 18.8168 9.03C18.9578 9.03 19.1405 9.02789 19.3381 9.02561ZM19.6111 7.566C18.7972 7.569 17.8378 7.566 17.1477 7.559C16.0527 7.559 15.1507 6.648 15.1507 5.542V2.906C15.1507 2.475 15.6685 2.261 15.9646 2.572C16.5004 3.13476 17.2368 3.90834 17.9699 4.67837C18.7009 5.44632 19.4286 6.21074 19.9507 6.759C20.2398 7.062 20.0279 7.565 19.6111 7.566Z"
                                            fill="currentColor"></path>
                                    </svg> --}}

                               <svg style="color: red"  fill="red" height="32" width="32" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                                    viewBox="0 0 29.978 29.978" xml:space="preserve">
                                <g>
                                   <path d="M25.462,19.105v6.848H4.515v-6.848H0.489v8.861c0,1.111,0.9,2.012,2.016,2.012h24.967c1.115,0,2.016-0.9,2.016-2.012
                                      v-8.861H25.462z"/>
                                   <path d="M14.62,18.426l-5.764-6.965c0,0-0.877-0.828,0.074-0.828s3.248,0,3.248,0s0-0.557,0-1.416c0-2.449,0-6.906,0-8.723
                                      c0,0-0.129-0.494,0.615-0.494c0.75,0,4.035,0,4.572,0c0.536,0,0.524,0.416,0.524,0.416c0,1.762,0,6.373,0,8.742
                                      c0,0.768,0,1.266,0,1.266s1.842,0,2.998,0c1.154,0,0.285,0.867,0.285,0.867s-4.904,6.51-5.588,7.193
                                      C15.092,18.979,14.62,18.426,14.62,18.426z"/>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                   <g>
                                   </g>
                                 </g>
                                </svg>



                                    <b style="color:black">Descargar QR</b>
                                 </a> 
                               </div>
                             </div>
                             <div class="mt-3">
                                <h3 class="d-inline-block">{{$vehiculo->personas->nombres}} {{$vehiculo->personas->apellidos}}</h3>
                          </div>
                          </div>
                       </div>
                    </div>
                </div>
                
            </div>
              
        </div>
        <div id="profile-friends" class="tab-pane fade">
           <div class="card">
              {{-- <div class="card-header">
                 <div class="header-title">
                    <h4 class="card-title">Friends</h4>
                 </div>
              </div> --}}
              <div class="card-body">
               <div class="row">
                 <div class="col-lg-6">
                   <div class="card">
                       <div class="card-header">
                          <div class="header-title">
                             <h4 class="card-title">DATOS DEL PROPIETARIO</h4>
                          </div>
                       </div>
                       <div class="card-body" >
                          <div class="user-bio">
                             <p>LOS DATOS DEL PROPIETARIO SON LOS SIGUIENTES:</p>
                          </div>
                          <div class="mt-2">
                          <h6 class="mb-1">Nombres:</h6>
                          <p>{{$vehiculo->propietario->nombres}}</p>
                          </div>
                          <div class="mt-2">
                          <h6 class="mb-1">Apellidos:</h6>
                          <p>{{$vehiculo->propietario->apellidos}}</p>
                          </div>
                          <div class="mt-2">
                          <h6 class="mb-1">CEDULA:</h6>
                          <p>{{$vehiculo->propietario->tipodocumentos->siglas}} | <b>{{$vehiculo->propietario->cedula}}</b> </p>
                          </div>
                          <div class="mt-2">
                          </div>
                          
                          
                           
                    </div>
                 </div>
                </div>

                <div class="col-lg-6">
                  <div class="card">
                      <div class="card-header">
                         <div class="header-title">
                            <h4 class="card-title">DATOS DEL CONDUCTOR</h4>
                         </div>
                      </div>
                      <div class="card-body" >
                         <div class="user-bio">
                            <p>LOS DATOS DEL CONDUCTOR SON LOS SIGUIENTES:</p>
                         </div>
                         <div class="mt-2">
                           <h6 class="mb-1">Empresa Perteneciente:</h6>
                         <p>{{$vehiculo->personas->empresa->razon_social}} | <b>{{$vehiculo->personas->empresa->ruc}}</b> </p>
                         </div>
                         <div class="mt-2">
                         <h6 class="mb-1">Nombres:</h6>
                         <p>{{$vehiculo->personas->nombres}}</p>
                         </div>
                         <div class="mt-2">
                         <h6 class="mb-1">Apellidos:</h6>
                         <p>{{$vehiculo->personas->apellidos}}</p>
                         </div>
                         <div class="mt-2">
                         <h6 class="mb-1">CEDULA:</h6>
                         <p>{{$vehiculo->personas->tipodocumentos->siglas}} | <b>{{$vehiculo->personas->cedula}}</b> </p>
                         </div>
                         
                         

                         
                          
                   </div>
                </div>
               </div>
            </div>
              </div>
           </div>
        </div>
        <div id="profile-profile" class="tab-pane fade">
           <div class="card">
              <div class="card-header">
                 <div class="header-title">
                    <h4 class="card-title">  Zonas Permitidas</h4>
                 </div>
              </div>

             <div class="card-body">

               <ul>
                  @foreach ($vehiculo->personas->empresa->zona->paraderos as $paradero)
              <li>       {{$paradero->nombre}} <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
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
     </div>
   </div>
   
</div>

 {{-- <div class="row">
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">Vehiculo | {{$vehiculo->numero_placa}}</h4>
               </div>
            </div>
            <div class="card-body">
               <div class="text-center">
                  <div class="user-profile">
                     <div class="visible-print text-center">
                        {!! QrCode::size(250)->generate('http://licenciasmsjl.test/view-verification/'.$vehiculo->placa.'?');!!}
                        <p>MSJL Copyright Derechos Reservados.</p>
            
                    </div>
                  </div>
                  <div class="mt-3">
                     <h3 class="d-inline-block">{{$vehiculo->personas->nombres}} {{$vehiculo->personas->apellidos}}</h3>
               </div>
               </div>
            </div>
         </div>
     </div>
     <div class="col-lg-6">
        <div class="card">
            <div class="card-header">
               <div class="header-title">
                  <h4 class="card-title">DATOS DEL VEHICULO</h4>
               </div>
            </div>
            <div class="card-body" >
               <div class="user-bio">
                  <p>LOS DATOS DEL VEHICULO SON LOS SIGUIENTES:</p>
               </div>
               <div class="mt-2">
               <h6 class="mb-1">N° PLACA:</h6>
               <p>{{$vehiculo->numero_placa}}</p>
               </div>
               <div class="mt-2">
               <h6 class="mb-1">CILINDRAJE:</h6>
               <p>{{$vehiculo->cilindraje}}</p>
               </div>
               <div class="mt-2">
               <h6 class="mb-1">POTENCIA:</h6>
               <p>{{$vehiculo->potencia}}</p>
               </div>
               <div class="mt-2">
               <h6 class="mb-1">N° ASIENTOS:</h6>
               <p>{{$vehiculo->numero_asientos}}</p>
               </div>
               <div class="mt-2">
               <h6 class="mb-1">VELOCDAD MAXIMA:</h6>
               <p>{{$vehiculo->velocidad_maxima}}</p>
               </div>
               <div class="mt-2">
                <h6 class="mb-1">PESO BRUTO:</h6>
                <p>{{$vehiculo->peso_bruto}}</p>
                </div>
                <div class="mt-2">
                    <h6 class="mb-1">CARGA UTIL:</h6>
                    <p>{{$vehiculo->carga_util}}</p>
                    </div>
         </div>
      </div>
     </div>
 </div> --}}
@endsection