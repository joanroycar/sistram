@section('title', 'Ver Zonas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Ver Zona</h1>
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
                    <a href="{{ route('zona.index') }}" class="btn btn-danger" style="float: right">
                        Volver a Lista de Zonas
                    </a>
                    <br>
                    <br>
                    
                    <div class="form-group">
                        <label class="form-label" for="pwd">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre"
                            placeholder="Ingrese El Nombre" value="{{ $zona->nombre }}" disabled>
                        @error('nombre')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label class="form-label" for="pwd">Descripción:</label>
                        <textarea name="descripcion" class="form-control" id="descripcion" cols="5" rows="5" disabled>{{ $zona->descripcion }}</textarea>

                        @error('slug')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-header">
                               <div class="header-title">
                                  <h4 class="card-title">  Paraderos Permitidos</h4>
                               </div>
                            </div>
              
                           <div class="card-body">
              
                             <ul>
                                @foreach ($zona->paraderos as $paradero)
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
