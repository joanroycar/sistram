@section('title', 'Dashboard')

@extends('layouts.panel')

@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Bienvenido al Sistema!</h1>
                        <p>Podras interactuar con las diferentes funciones
                        </p>
                    </div>

                </div>
            </div>
        </div>
    @endsection

    @section('content')
    <br>
    <div class="row">
        <div class="col-lg-4 col-md-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="bg-soft-info rounded p-3">
                        <a href="{{route('usuario.index')}}" class="">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M16.1583 8.23285C16.1583 10.5825 14.2851 12.4666 11.949 12.4666C9.61292 12.4666 7.73974 10.5825 7.73974 8.23285C7.73974 5.88227 9.61292 4 11.949 4C14.2851 4 16.1583 5.88227 16.1583 8.23285ZM11.949 20C8.51785 20 5.58809 19.456 5.58809 17.2802C5.58809 15.1034 8.49904 14.5396 11.949 14.5396C15.3802 14.5396 18.31 15.0836 18.31 17.2604C18.31 19.4362 15.399 20 11.949 20ZM17.9571 8.30922C17.9571 9.50703 17.5998 10.6229 16.973 11.5505C16.9086 11.646 16.9659 11.7748 17.0796 11.7946C17.2363 11.8216 17.3984 11.8369 17.5631 11.8414C19.2062 11.8846 20.6809 10.821 21.0883 9.21974C21.6918 6.84123 19.9198 4.7059 17.6634 4.7059C17.4181 4.7059 17.1835 4.73201 16.9551 4.77884C16.9238 4.78605 16.8907 4.80046 16.8728 4.82838C16.8513 4.8626 16.8674 4.90853 16.8889 4.93825C17.5667 5.8938 17.9571 7.05918 17.9571 8.30922ZM20.6782 13.5126C21.7823 13.7296 22.5084 14.1727 22.8093 14.8166C23.0636 15.3453 23.0636 15.9586 22.8093 16.4864C22.349 17.4851 20.8654 17.8058 20.2887 17.8886C20.1696 17.9066 20.0738 17.8031 20.0864 17.6833C20.3809 14.9157 18.0377 13.6035 17.4315 13.3018C17.4055 13.2883 17.4002 13.2676 17.4028 13.255C17.4046 13.246 17.4154 13.2316 17.4351 13.2289C18.7468 13.2046 20.1571 13.3847 20.6782 13.5126ZM6.43711 11.8413C6.60186 11.8368 6.76304 11.8224 6.92063 11.7945C7.03434 11.7747 7.09165 11.6459 7.02718 11.5504C6.4004 10.6228 6.04313 9.50694 6.04313 8.30913C6.04313 7.05909 6.43353 5.89371 7.11135 4.93816C7.13284 4.90844 7.14806 4.86251 7.12746 4.82829C7.10956 4.80127 7.07553 4.78596 7.04509 4.77875C6.81586 4.73192 6.58127 4.70581 6.33593 4.70581C4.07951 4.70581 2.30751 6.84114 2.91191 9.21965C3.31932 10.8209 4.79405 11.8845 6.43711 11.8413ZM6.59694 13.2545C6.59962 13.268 6.59425 13.2878 6.56918 13.3022C5.9621 13.6039 3.61883 14.9161 3.91342 17.6827C3.92595 17.8034 3.83104 17.9061 3.71195 17.889C3.13531 17.8061 1.65163 17.4855 1.19139 16.4867C0.936203 15.9581 0.936203 15.3457 1.19139 14.817C1.49225 14.1731 2.21752 13.73 3.32156 13.512C3.84358 13.385 5.25294 13.2049 6.5656 13.2292C6.5853 13.2319 6.59515 13.2464 6.59694 13.2545Z" fill="currentColor"></path>
                            </svg>
                        </a>
                     </div>
                     <div>
                        <span class="text-black">Total de Usuarios</span>
                     </div>
                  </div>
                  
                  <div class="text-center">
                   
                        <h2 class="counter" style="visibility: visible;">{{$users}}</h2>
                     <div>
                       
                        <span class="text-black">
                            <a href="{{route('usuario.index')}}" class="btn btn-soft-info ">Ir A Módulo Usuarios
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                            </a>
                        </span>
                     </div>
                  </div>
               </div>
               {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
            </div>
         </div>
         <div class="col-lg-4 col-md-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="bg-soft-success rounded p-3">
                        <a href="{{route('vehiculo.index')}}" class="">
                           <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                           width="30" height="30" viewBox="0 0 1280.000000 806.000000"
                           preserveAspectRatio="xMidYMid meet">
                          <metadata>
                          Created by potrace 1.15, written by Peter Selinger 2001-2017
                          </metadata>
                          <g transform="translate(0.000000,806.000000) scale(0.100000,-0.100000)"
                          fill="currentColor" stroke="none">
                          <path d="M6736 8049 c-1092 -74 -2057 -470 -2916 -1198 -188 -159 -476 -443
                          -656 -646 -119 -133 -241 -282 -414 -503 -296 -377 -501 -556 -734 -641 -47
                          -16 -187 -53 -313 -81 -340 -75 -481 -121 -698 -224 -229 -110 -368 -208 -517
                          -364 -245 -258 -394 -613 -452 -1082 -37 -298 -47 -701 -20 -878 61 -413 316
                          -750 723 -954 l95 -48 181 0 c100 0 184 2 187 5 3 3 2 26 -3 50 -22 118 -30
                          309 -20 448 25 314 83 530 216 802 115 237 242 411 431 595 330 320 725 516
                          1184 587 158 24 473 24 625 0 650 -106 1178 -456 1521 -1010 240 -386 352
                          -889 299 -1332 -8 -66 -15 -126 -15 -132 0 -10 257 -13 1250 -13 688 0 1250 1
                          1250 3 0 1 -7 52 -15 112 -17 128 -19 351 -5 480 65 580 362 1110 823 1467
                          644 498 1517 587 2252 229 655 -319 1099 -938 1191 -1661 13 -107 15 -174 10
                          -325 -4 -104 -9 -208 -13 -230 l-6 -40 54 46 c30 25 88 85 130 132 326 367
                          480 883 429 1432 -29 304 -122 576 -277 809 -74 111 -222 271 -308 332 -53 37
                          -55 41 -51 77 16 141 -54 476 -180 861 -75 230 -102 295 -198 481 -208 406
                          -517 826 -979 1333 -181 199 -320 298 -635 456 -711 356 -1636 569 -2722 626
                          -221 11 -528 11 -704 -1z m169 -832 c205 -58 380 -204 470 -391 67 -141 68
                          -150 72 -586 5 -424 -7 -720 -32 -840 -31 -150 -103 -259 -195 -299 l-49 -21
                          -1563 2 -1563 3 -57 23 c-62 25 -150 98 -174 144 -29 56 -36 130 -19 210 30
                          143 125 307 309 532 602 735 1130 1102 1737 1207 196 33 265 37 644 35 303 -2
                          370 -5 420 -19z m2100 -101 c179 -44 442 -134 543 -185 179 -90 400 -262 543
                          -422 316 -355 548 -820 550 -1104 1 -97 -12 -149 -50 -202 -39 -53 -80 -82
                          -153 -104 -57 -18 -110 -19 -986 -19 -911 0 -926 0 -968 20 -51 25 -88 77
                          -117 162 -21 62 -21 79 -25 757 -3 738 2 888 38 983 28 75 81 124 147 134 26
                          4 57 11 68 15 11 5 76 7 145 5 98 -4 155 -12 265 -40z"/>
                          <path d="M3148 3579 c-704 -68 -1305 -547 -1528 -1217 -64 -193 -81 -291 -87
                          -512 -9 -326 39 -556 172 -836 226 -471 668 -831 1176 -958 917 -230 1850 283
                          2144 1179 98 296 116 613 54 919 -180 893 -1021 1513 -1931 1425z m402 -969
                          c41 -12 113 -41 160 -65 168 -88 288 -211 370 -380 59 -123 80 -200 87 -330
                          23 -423 -282 -803 -704 -876 -38 -7 -117 -10 -187 -7 -105 4 -135 10 -223 40
                          -223 76 -383 215 -488 423 -65 130 -87 222 -88 375 -2 220 60 387 207 564 109
                          129 312 244 488 276 89 15 292 5 378 -20z"/>
                          <path d="M9880 3580 c-948 -99 -1656 -911 -1617 -1855 42 -994 874 -1763 1862
                          -1722 383 16 740 147 1040 381 108 86 275 261 357 376 375 530 432 1228 148
                          1815 -254 525 -756 898 -1330 990 -120 19 -349 26 -460 15z m316 -951 c276
                          -48 513 -230 629 -483 59 -127 78 -228 72 -386 -3 -102 -10 -152 -27 -205 -53
                          -166 -156 -319 -282 -420 -78 -62 -221 -135 -313 -161 -90 -25 -293 -30 -388
                          -10 -332 68 -595 333 -662 665 -23 110 -16 295 14 395 92 308 341 539 651 601
                          81 16 227 18 306 4z"/>
                          </g>
                          </svg>
                        </a>
                     </div>
                     <div>
                        <span class="text-black">Vehiculos</span>
                     </div>
                  </div>
                  
                  <div class="text-center">
                   
                        <h2 class="counter" style="visibility: visible;">{{$vehiculos}}</h2>
                     <div>
                       
                        <span class="text-black">
                            <a href="{{route('vehiculo.index')}}" class="btn btn-soft-success ">Ir a Módulo Vehiculos
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                            </a>
                        </span>
                     </div>
                  </div>
               </div>
               {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
            </div>
         </div>
         <div class="col-lg-4 col-md-4">
            <div class="card">
               <div class="card-body">
                  <div class="d-flex justify-content-between">
                     <div class="bg-soft-warning rounded p-3">
                        <a href="{{route('empresa.index')}}" class="" target="_blank">
                           <svg version="1.0" xmlns="http://www.w3.org/2000/svg"
                           width="30" height="30" viewBox="0 0 1280.000000 1280.000000"
                           preserveAspectRatio="xMidYMid meet">
                          <metadata>
                          Created by potrace 1.15, written by Peter Selinger 2001-2017
                          </metadata>
                          <g transform="translate(0.000000,1280.000000) scale(0.100000,-0.100000)"
                          fill="currentColor" stroke="none">
                          <path d="M6340 12450 c-812 -37 -1617 -248 -2355 -617 -209 -105 -282 -146
                          -510 -291 -251 -159 -556 -391 -790 -600 -212 -190 -558 -556 -711 -753 -278
                          -358 -559 -831 -739 -1244 -266 -607 -434 -1278 -485 -1934 -15 -200 -13 -726
                          5 -921 34 -383 127 -883 217 -1160 204 -635 452 -1167 746 -1600 108 -160 274
                          -386 340 -463 20 -24 73 -87 116 -141 100 -122 472 -489 631 -621 111 -93 255
                          -207 400 -316 396 -300 1062 -635 1625 -817 211 -69 454 -126 750 -176 409
                          -70 675 -98 970 -100 589 -5 1084 57 1602 200 245 68 512 158 671 228 67 30
                          133 57 147 61 45 13 503 242 630 315 221 127 461 297 720 509 375 306 706 648
                          966 996 197 263 332 467 466 705 377 666 637 1492 725 2305 25 234 25 913 0
                          1145 -68 612 -179 1066 -393 1593 -413 1020 -1077 1885 -1946 2534 -600 449
                          -1188 733 -1958 947 -312 86 -481 122 -830 175 -261 40 -675 56 -1010 41z
                          m638 -891 c173 -12 433 -52 677 -104 113 -24 506 -136 660 -188 453 -154 903
                          -395 1315 -706 300 -226 599 -512 846 -811 147 -179 164 -203 402 -600 180
                          -300 354 -656 464 -950 110 -295 209 -755 250 -1165 17 -169 17 -739 0 -905
                          -37 -357 -127 -792 -234 -1120 -294 -906 -862 -1723 -1618 -2331 -259 -208
                          -422 -321 -634 -439 -387 -215 -805 -386 -1221 -498 -588 -159 -1250 -202
                          -1845 -121 -421 57 -741 125 -982 208 -429 148 -890 372 -1198 582 -258 176
                          -478 356 -733 602 -240 230 -402 422 -617 729 -197 283 -333 534 -496 913
                          -347 811 -468 1707 -348 2575 121 876 445 1663 980 2379 164 219 507 572 769
                          791 479 400 971 683 1538 884 435 155 951 258 1387 279 166 8 505 6 638 -4z"/>
                          <path d="M6077 9950 c-80 -15 -128 -77 -131 -168 -1 -69 17 -317 50 -662 13
                          -140 28 -311 34 -380 6 -69 15 -172 20 -230 6 -58 15 -172 21 -255 5 -82 14
                          -190 19 -240 5 -49 14 -144 20 -210 5 -66 12 -138 15 -160 3 -22 10 -110 16
                          -195 10 -148 15 -198 38 -445 6 -60 18 -198 26 -305 27 -335 34 -414 39 -455
                          3 -22 10 -96 16 -165 6 -69 15 -168 21 -220 5 -52 14 -162 19 -245 13 -202 37
                          -490 50 -600 5 -49 12 -121 15 -160 3 -38 10 -115 16 -170 5 -55 14 -167 20
                          -250 11 -174 23 -319 38 -460 6 -55 16 -165 22 -245 6 -80 13 -148 17 -152 4
                          -4 142 -8 307 -9 341 -2 317 -9 296 86 -12 55 -38 236 -51 360 -5 44 -16 134
                          -25 200 -9 66 -21 152 -25 190 -5 39 -14 108 -20 155 -28 222 -28 210 -9 221
                          11 5 240 8 581 7 l563 -3 0 -60 c0 -57 -5 -92 -41 -285 -14 -79 -30 -184 -54
                          -355 -6 -38 -24 -148 -40 -245 -42 -244 -48 -280 -41 -284 13 -8 457 -10 469
                          -3 6 5 12 23 12 42 0 18 4 55 10 82 24 123 51 275 61 348 28 215 38 285 49
                          340 6 33 15 83 20 110 5 28 14 91 20 140 6 50 13 97 16 105 3 8 10 46 15 85 5
                          38 14 93 19 120 4 28 15 97 24 155 17 113 31 205 46 285 22 127 36 220 75 498
                          8 60 18 113 21 119 7 10 16 72 49 308 7 58 19 132 24 165 6 33 15 89 21 125 6
                          36 18 108 26 160 20 130 31 204 43 275 6 33 15 89 21 125 6 36 17 110 25 165
                          8 55 23 154 35 220 12 66 28 163 35 215 32 229 46 318 54 365 70 380 84 533
                          56 624 -34 111 -131 206 -255 250 -30 11 -120 43 -200 71 -80 28 -208 74 -285
                          101 -77 28 -189 68 -250 89 -60 22 -146 52 -190 67 -44 16 -84 31 -90 34 -5 4
                          -23 9 -40 13 -16 4 -43 13 -60 21 -16 7 -66 25 -110 40 -44 15 -143 50 -220
                          77 -77 28 -185 65 -240 84 -55 19 -109 39 -120 44 -11 5 -42 16 -70 25 -27 8
                          -59 19 -70 24 -39 17 -131 50 -170 61 -22 7 -85 29 -140 50 -55 21 -131 47
                          -170 59 -38 13 -83 29 -100 36 -42 19 -204 71 -240 77 -16 3 -47 2 -68 -2z
                          m992 -974 c8 -9 11 -79 9 -232 l-3 -219 -235 0 -235 0 -3 220 c-1 121 0 225 2
                          232 8 20 449 19 465 -1z m909 -445 c2 -173 -1 -226 -10 -233 -22 -13 -442 -10
                          -456 4 -13 13 -18 439 -5 452 4 3 110 5 237 4 l231 -3 3 -224z m800 -228 l2
                          -232 -177 -3 c-98 -2 -203 -1 -233 2 l-55 5 -3 224 c-2 173 1 226 10 233 7 4
                          112 7 233 5 l220 -2 3 -232z m-800 -846 c2 -210 1 -228 -15 -235 -10 -4 -114
                          -7 -231 -7 -178 0 -214 2 -222 15 -11 17 -14 443 -3 454 4 3 110 5 237 4 l231
                          -3 3 -228z m-910 -309 c13 -13 18 -421 6 -452 -5 -14 -35 -16 -228 -16 -159 0
                          -225 3 -234 12 -9 9 -12 73 -12 228 0 155 3 219 12 228 9 9 73 12 228 12 155
                          0 219 -3 228 -12z m1036 -630 c10 -40 7 -418 -4 -439 -10 -18 -23 -19 -220
                          -19 -114 0 -215 3 -224 6 -14 5 -16 35 -16 233 0 125 3 231 7 234 3 4 106 7
                          229 7 221 0 222 0 228 -22z m-526 -940 c4 -13 5 -120 2 -238 l-5 -215 -219 -3
                          c-153 -2 -223 1 -232 9 -11 9 -14 55 -14 218 0 113 3 216 6 229 6 22 6 22 230
                          22 224 0 225 0 232 -22z"/>
                          <path d="M5507 9748 c-36 -24 -119 -83 -184 -133 -64 -49 -135 -103 -158 -120
                          -24 -16 -139 -103 -257 -191 -241 -182 -280 -224 -337 -364 -33 -79 -35 -93
                          -36 -195 0 -60 6 -139 13 -175 12 -59 24 -137 52 -335 5 -38 14 -97 20 -130 5
                          -33 10 -61 10 -62 0 -2 256 -3 569 -3 461 0 571 -3 580 -13 7 -10 14 -238 21
                          -738 6 -398 15 -859 20 -1024 6 -165 14 -556 20 -870 12 -684 31 -1602 33
                          -1629 1 -12 14 -23 32 -29 17 -5 114 -42 217 -83 103 -41 190 -74 193 -74 4 0
                          4 15 1 34 -9 48 -45 445 -66 721 -5 72 -16 180 -24 240 -8 61 -17 146 -21 190
                          -3 44 -10 123 -15 175 -5 52 -16 183 -25 290 -17 217 -32 365 -46 456 -5 33
                          -9 84 -9 113 0 29 -4 82 -10 119 -5 37 -14 130 -20 207 -11 149 -23 291 -40
                          445 -10 90 -26 271 -50 550 -5 69 -14 159 -20 200 -5 41 -14 138 -20 215 -6
                          77 -15 176 -20 220 -5 44 -14 143 -21 220 -14 168 -24 276 -38 410 -14 124
                          -28 278 -41 460 -11 147 -44 478 -60 605 -5 41 -12 111 -15 154 -10 127 -52
                          185 -135 186 -37 0 -59 -8 -113 -42z"/>
                          <path d="M3575 7867 c-54 -14 -141 -103 -152 -154 -12 -59 -6 -186 16 -297 11
                          -56 27 -148 35 -206 28 -185 36 -233 56 -355 27 -167 39 -244 55 -360 8 -55
                          19 -125 25 -155 13 -71 28 -160 45 -285 29 -204 33 -232 48 -305 14 -70 26
                          -151 63 -410 8 -58 18 -125 23 -150 6 -25 15 -76 21 -115 6 -38 15 -95 21
                          -125 5 -30 14 -89 19 -130 5 -41 14 -97 20 -123 5 -26 14 -82 20 -125 19 -139
                          40 -276 45 -307 3 -16 10 -52 15 -80 16 -89 29 -168 45 -285 28 -203 57 -365
                          67 -377 13 -16 1614 -16 1626 1 8 11 3 449 -17 1406 -7 305 -16 785 -21 1065
                          -11 585 -27 1314 -36 1653 l-6 232 -997 -1 c-662 -1 -1009 -5 -1036 -12z m785
                          -677 c3 -30 3 -136 0 -235 l-5 -180 -230 0 -230 0 -3 224 c-2 158 1 228 9 237
                          10 12 54 14 233 12 l221 -3 5 -55z m724 -206 c14 -5 16 -35 16 -234 0 -199 -2
                          -229 -16 -234 -23 -9 -427 -7 -441 2 -19 12 -19 452 -1 463 15 10 418 12 442
                          3z m-546 -991 l2 -233 -229 0 c-150 0 -232 4 -236 11 -8 12 -7 438 1 451 3 4
                          107 7 232 6 l227 -3 3 -232z m450 -475 c17 -17 17 -439 0 -456 -17 -17 -439
                          -17 -456 0 -13 13 -18 449 -5 461 12 13 448 8 461 -5z m50 -965 c2 -217 1
                          -233 -15 -234 -77 -3 -437 2 -444 7 -15 9 -11 451 4 457 6 3 111 5 232 4 l220
                          -2 3 -232z"/>
                          <path d="M3173 7640 c-28 -16 -139 -158 -325 -415 -150 -207 -175 -457 -79
                          -795 12 -41 26 -97 31 -125 13 -62 91 -389 131 -545 16 -63 33 -135 38 -160 5
                          -25 14 -72 21 -105 6 -33 15 -69 20 -80 4 -11 13 -42 20 -70 6 -27 15 -66 21
                          -85 5 -19 13 -57 18 -85 12 -59 24 -109 44 -185 8 -30 22 -89 31 -130 16 -73
                          50 -212 121 -505 19 -77 42 -174 50 -215 9 -41 23 -100 31 -130 8 -30 21 -77
                          29 -105 7 -27 16 -71 20 -97 8 -56 13 -60 85 -82 30 -9 84 -28 120 -42 36 -14
                          74 -29 85 -34 42 -16 161 -59 183 -65 20 -6 23 -4 19 12 -3 10 -11 63 -17 118
                          -6 55 -15 123 -20 150 -18 94 -50 300 -60 380 -26 213 -31 254 -41 305 -10 56
                          -29 188 -54 380 -8 58 -19 128 -24 157 -6 28 -15 89 -21 135 -6 46 -16 115
                          -21 153 -5 39 -16 117 -24 175 -8 58 -19 132 -25 165 -14 84 -28 184 -41 290
                          -5 50 -14 113 -19 140 -20 116 -59 380 -80 542 -12 97 -48 345 -59 413 -6 30
                          -17 111 -26 180 -28 216 -54 331 -81 361 -22 24 -61 24 -101 -1z"/>
                          <path d="M9152 7118 c-6 -29 -13 -75 -17 -103 -3 -27 -10 -70 -15 -95 -5 -25
                          -21 -119 -35 -210 -14 -91 -30 -187 -35 -215 -6 -27 -24 -135 -41 -240 -18
                          -104 -36 -210 -40 -235 -5 -25 -13 -81 -19 -125 -12 -91 -26 -179 -47 -280
                          -14 -74 -36 -209 -53 -335 -6 -41 -19 -124 -30 -185 -11 -60 -24 -135 -30
                          -165 -5 -30 -12 -68 -15 -85 -3 -16 -12 -75 -20 -130 -8 -55 -20 -125 -26
                          -155 -13 -73 -27 -155 -44 -270 -8 -52 -24 -144 -35 -205 -11 -60 -27 -157
                          -36 -215 -8 -58 -20 -136 -26 -175 -6 -38 -12 -88 -12 -110 l-1 -40 533 -3
                          532 -2 14 32 c30 71 137 378 196 563 16 50 47 142 70 205 22 63 58 167 79 230
                          22 63 50 147 64 185 14 39 36 106 50 150 14 44 60 179 102 300 42 121 98 285
                          125 365 27 80 76 224 109 320 166 477 211 620 211 666 0 68 -48 162 -105 206
                          -55 43 -117 68 -245 98 -52 12 -108 27 -125 34 -16 7 -73 23 -125 35 -52 12
                          -140 35 -195 51 -157 44 -323 89 -410 111 -44 11 -121 33 -171 49 -50 17 -98
                          30 -106 30 -10 0 -18 -18 -26 -52z m663 -648 l0 -235 -219 -3 c-153 -2 -223 1
                          -232 9 -19 16 -20 439 -2 457 9 9 70 12 233 10 l220 -3 0 -235z m161 -661 c22
                          -18 20 -431 -2 -453 -13 -14 -47 -16 -220 -16 -123 0 -213 4 -225 10 -18 10
                          -19 23 -19 236 0 213 1 225 19 232 33 12 431 4 447 -9z m-218 -1028 c2 -173
                          -1 -226 -10 -233 -15 -9 -418 -11 -442 -2 -14 5 -16 36 -16 235 l0 229 233 -2
                          232 -3 3 -224z"/>
                          </g>
                          </svg>
                        </a>
                     </div>
                     <div>
                        <span class="text-black"> Empresas</span>
                     </div>
                  </div>
                  
                  <div class="text-center">
                   
                        <h2 class="counter" style="visibility: visible;">{{$empresas}}</h2>
                     <div>
                       
                        <span class="text-black">
                            <a href="{{route('empresa.index')}}" class="btn btn-soft-warning ">Ir A  Módulo Empresas
                                <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M10.835 12.0066L10.8366 12.3607C10.8487 13.7652 10.9334 15.0183 11.0794 15.8124C11.0794 15.8267 11.2387 16.6143 11.3401 16.8764C11.4994 17.2554 11.7874 17.577 12.1485 17.7808C12.4376 17.9262 12.7408 18 13.0583 18C13.3078 17.9884 13.7194 17.8629 14.0131 17.7576L14.2572 17.664C15.8739 17.0218 18.9644 14.9234 20.148 13.6402L20.2353 13.5505L20.6247 13.1302C20.8702 12.8085 21 12.4153 21 11.9923C21 11.6134 20.8844 11.2344 20.6531 10.9282C20.5839 10.829 20.4723 10.7017 20.3731 10.5942L19.994 10.1974C18.6895 8.87572 15.8652 7.02183 14.4012 6.40756C14.4012 6.39435 13.4914 6.01432 13.0583 6H13.0005C12.3361 6 11.7154 6.37892 11.3979 6.99137C11.3112 7.1588 11.228 7.48678 11.1648 7.77483L11.051 8.31871C10.9212 9.19332 10.835 10.535 10.835 12.0066ZM4.50325 10.4817C3.67308 10.4817 3 11.1613 3 11.9996C3 12.8378 3.67308 13.5175 4.50325 13.5175L8.20248 13.1903C8.85375 13.1903 9.38174 12.6583 9.38174 11.9996C9.38174 11.3419 8.85375 10.8088 8.20248 10.8088L4.50325 10.4817Z" fill="currentColor"></path>                            </svg>                        
                            </a>
                        </span>
                     </div>
                  </div>
               </div>
               {{-- <div id="chart-1" style="min-height: 80px;"><div id="apexchartslyp8hg45" class="apexcharts-canvas apexchartslyp8hg45 apexcharts-theme-light" style="width: 273px; height: 80px;"><svg id="SvgjsSvg1001" width="273" height="80" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1003" class="apexcharts-inner apexcharts-graphical" transform="translate(0, 0)"><defs id="SvgjsDefs1002"><clipPath id="gridRectMasklyp8hg45"><rect id="SvgjsRect1019" width="280" height="83" x="-3.5" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMasklyp8hg45"></clipPath><clipPath id="nonForecastMasklyp8hg45"></clipPath><clipPath id="gridRectMarkerMasklyp8hg45"><rect id="SvgjsRect1020" width="277" height="84" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><linearGradient id="SvgjsLinearGradient1025" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1026" stop-opacity="0.5" stop-color="rgba(52,78,209,0.5)" offset="0"></stop><stop id="SvgjsStop1027" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop><stop id="SvgjsStop1028" stop-opacity="0" stop-color="rgba(255,255,255,0)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1010" x1="272.5" y1="0" x2="272.5" y2="80" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="272.5" y="0" width="1" height="80" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1031" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1032" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"></g></g><g id="SvgjsG1038" class="apexcharts-grid"><g id="SvgjsG1039" class="apexcharts-gridlines-horizontal" style="display: none;"><line id="SvgjsLine1041" x1="0" y1="0" x2="273" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1042" x1="0" y1="20" x2="273" y2="20" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1043" x1="0" y1="40" x2="273" y2="40" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1044" x1="0" y1="60" x2="273" y2="60" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1045" x1="0" y1="80" x2="273" y2="80" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1040" class="apexcharts-gridlines-vertical" style="display: none;"></g><line id="SvgjsLine1047" x1="0" y1="80" x2="273" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1046" x1="0" y1="1" x2="0" y2="80" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1021" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1022" class="apexcharts-series" seriesName="series1" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1029" d="M0 80L0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 80M273 10C273 10 273 10 273 10 " fill="url(#SvgjsLinearGradient1025)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 80L 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10C 273 10 273 10 273 80M 273 10z" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><path id="SvgjsPath1030" d="M0 20C24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C92.98960573476703 65 113.14659498207885 30 136.663082437276 30C160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C229.38709677419354 50 249.51612903225808 10 273 10C273 10 273 10 273 10 " fill="none" fill-opacity="1" stroke="#344ed1" stroke-opacity="1" stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMasklyp8hg45)" pathTo="M 0 20C 24.31559139784946 20 45.15752688172043 65 69.47311827956989 65C 92.98960573476703 65 113.14659498207885 30 136.663082437276 30C 160.89713261648745 30 181.66917562724015 50 205.90322580645162 50C 229.38709677419354 50 249.51612903225808 10 273 10" pathFrom="M -1 80L -1 80L 69.47311827956989 80L 136.663082437276 80L 205.90322580645162 80L 273 80"></path><g id="SvgjsG1023" class="apexcharts-series-markers-wrap" data:realIndex="0"><g class="apexcharts-series-markers"><circle id="SvgjsCircle1053" r="0" cx="273" cy="10" class="apexcharts-marker wyn985fgq no-pointer-events" stroke="#ffffff" fill="#344ed1" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle></g></g></g><g id="SvgjsG1024" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine1048" x1="0" y1="0" x2="273" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1049" x1="0" y1="0" x2="273" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1050" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1051" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1052" class="apexcharts-point-annotations"></g></g><rect id="SvgjsRect1009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1037" class="apexcharts-yaxis" rel="0" transform="translate(-18, 0)"></g><g id="SvgjsG1004" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend" style="max-height: 40px;"></div><div class="apexcharts-tooltip apexcharts-theme-light" style="left: 155.688px; top: 13px;"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">19/12/18 06:30</div><div class="apexcharts-tooltip-series-group apexcharts-active" style="order: 1; display: flex;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(52, 78, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label">series1: </span><span class="apexcharts-tooltip-text-y-value">70</span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div> --}}
            </div>
         </div>
    </div>

        
    @endsection
   
    
