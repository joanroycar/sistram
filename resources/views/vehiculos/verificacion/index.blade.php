

<!doctype html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>MSJL | VERIFICACIÓN MOTOTAXI</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="/images/favicon.ico" />
      
      <!-- Library / Plugin Css Build -->
      <link rel="stylesheet" href="/css/core/libs.min.css" />
      
      
      <!-- Hope Ui Design System Css -->
      <link rel="stylesheet" href="/css/hope-ui.min.css?v=1.2.0" />
      
      <!-- Custom Css -->
      <link rel="stylesheet" href="/css/custom.min.css?v=1.2.0" />
      
      <!-- Dark Css -->
      <link rel="stylesheet" href="/css/dark.min.css"/>
      
      <!-- Customizer Css -->
      <link rel="stylesheet" href="/css/customizer.min.css" />
      
      <!-- RTL Css -->
      <link rel="stylesheet" href="/css/rtl.min.css"/>
      
  </head>
  <body class="   boxed-fancy">
    <div class="boxed-inner">
      <!-- loader Start -->
      <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body"></div>
        </div>      </div>
      <!-- loader END -->
      <span class="screen-darken"></span>
      <main class="main-content">
        <!--Nav Start-->
        <nav class="nav navbar navbar-expand-lg navbar-light iq-navbar" style="justify-content: center;">
          <div class="row">
            <div class="col-lg-12">
                <center>
                    <div class="container-fluid navbar-inner">
            
                        <a href="" class="logo-center navbar-brand ">
                            <!--Logo start-->

                            <img src="https://web.munisjl.gob.pe/web/images/logotipo_MSJL2-1.png" alt="">
                            {{-- <svg width="50" class="text-primary" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-0.757324" y="19.2427" width="28" height="4" rx="2" transform="rotate(-45 -0.757324 19.2427)" fill="currentColor"/>
                                <rect x="7.72803" y="27.728" width="28" height="4" rx="2" transform="rotate(-45 7.72803 27.728)" fill="currentColor"/>
                                <rect x="10.5366" y="16.3945" width="16" height="4" rx="2" transform="rotate(45 10.5366 16.3945)" fill="currentColor"/>
                                <rect x="10.5562" y="-0.556152" width="28" height="4" rx="2" transform="rotate(45 10.5562 -0.556152)" fill="currentColor"/>
                            </svg> --}}
                            <!--logo End-->        
                            {{-- <h4 class="logo-title">SJL</h4> --}}
                        </a>
                        
                        
                      </div>
                </center>

            </div>

          </div>
        </nav>        <!--Nav End-->
        <div class="conatiner-fluid content-inner pb-0">
<div class="row">
   
    <div class="col-lg-12">
        <center>
            <div class="card">
                <div class="card-header">
                   <div class="header-title">
                      <h4 class="card-title"><b>DATOS DEL VEHICULO</b></h4>
                   </div>
                </div>
                <div class="card-body" >
                  <div class="mt-2">
                    <h6 class="mb-1">ESTADO DE VEHICULO:</h6>
                    @if($vehiculo->permiso_estatus == 1)
                    <p class="btn btn-success btn-sm rounded-pill">HABILITADO PARA CIRCULAR</p>

                    @else
                    <p class="btn btn-danger rounded-pill">NO HABILITADO PARA CIRCULAR</p>

                    @endif
                    </div>
                  <div class="row">
                    <center>
                    <div class="col-md-12">
                      
                       <div class="mt-2">
                       <h6 class="mb-1">N° Placa:</h6>
                       <p>{{$vehiculo->placa}}</p>
                       </div>
                      
                    </div>
                  </center>

                  <div class="col-md-4">
                    <div class="mt-2">
                      <h6 class="mb-1 btn btn-primary">Credencial De Propietario:</h6>
                      <br>
                      <p><b>Nombres y Apelidos</b></p>
                      <p>{{$vehiculo->propietario->nombres}} {{$vehiculo->propietario->apellidos}}</p>
                      <p><b>Cedula</b></p>
   
                          <p>{{$vehiculo->propietario->cedula}}</p>
                      </div>
                  </div>

                  <div class="col-md-4">
                    <div class="mt-2">
                      <h6 class="mb-1">N° Serie Motor:</h6>
                      <p>{{$vehiculo->serie_motor}}</p>
                      </div>
                      <div class="mt-2">
                        <h6 class="mb-1">Estado De SOAT:</h6>
                        @if($vehiculo->soat == 1)
                           <h6 class="btn btn-success">VIGENTE</h6>
                         @else
                           <h6 class="btn btn-danger">NO VIGENTE</h6>
     
                                    @endif
                        </div>
                       <div class="mt-2">
                       <h6 class="mb-1">N° Carnet De Seguridad Vial:</h6>
                       <p>{{$vehiculo->carnet_seguridad_vial}}</p>
                       </div>
                       <div class="mt-2">
                       <h6 class="mb-1">N° Flota:</h6>
                       <p>{{$vehiculo->numero_flota}}</p>
                       </div>
                  </div>

                  <div class="col-md-4">
                    <div class="mt-2">
                      <h6 class="mb-1 btn btn-primary">Credencial De Conductor:</h6>
                      <br>
                      <p ><b>Nombres y Apelidos</b></p>
                      <p>{{$vehiculo->personas->nombres}} {{$vehiculo->personas->apellidos}}</p>
                      <p><b>Cedula</b></p>
   
                      <p>{{$vehiculo->personas->cedula}}</p>
                      </div>
                  </div>

                  </div>
                  
                   




                    





                   
                   
                  
                   
                   
             </div>
          </div>
        </center>
     </div>
</div>
        </div>
        
              </main>
      <!-- Wrapper End-->
    </div>
    <!-- Library Bundle Script -->
    <script src="/js/core/libs.min.js"></script>
    
    <!-- External Library Bundle Script -->
    <script src="/js/core/external.min.js"></script>
    
    <!-- Widgetchart Script -->
    <script src="/js/charts/widgetcharts.js"></script>
    
    <!-- mapchart Script -->
    <script src="/js/charts/vectore-chart.js"></script>
    <script src="/js/charts/dashboard.js" ></script>
    
    <!-- fslightbox Script -->
    <script src="/js/plugins/fslightbox.js"></script>
    
    <!-- Settings Script -->
    <script src="/js/plugins/setting.js"></script>
    
    <!-- Slider-tab Script -->
    <script src="/js/plugins/slider-tabs.js"></script>
    
    <!-- Form Wizard Script -->
    <script src="/js/plugins/form-wizard.js"></script>
    
    <!-- AOS Animation Plugin-->
    
    <!-- App Script -->
    <script src="/js/hope-ui.js" defer></script>
  </body>
</html>