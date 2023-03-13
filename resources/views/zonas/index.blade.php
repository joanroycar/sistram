@section('title', 'Módulo Zonas')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Zonas</h1>
                    </div>
                    @can('zona.create')
                    <div>
                        

                        <a href="{{ route('zona.create') }}" class="btn btn-primary" style="color: white; border-radius: 12px">
                            <svg width="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33 2H16.66C20.06 2 22 3.92 22 7.33V16.67C22 20.06 20.07 22 16.67 22H7.33C3.92 22 2 20.06 2 16.67V7.33C2 3.92 3.92 2 7.33 2ZM12.82 12.83H15.66C16.12 12.82 16.49 12.45 16.49 11.99C16.49 11.53 16.12 11.16 15.66 11.16H12.82V8.34C12.82 7.88 12.45 7.51 11.99 7.51C11.53 7.51 11.16 7.88 11.16 8.34V11.16H8.33C8.11 11.16 7.9 11.25 7.74 11.4C7.59 11.56 7.5 11.769 7.5 11.99C7.5 12.45 7.87 12.82 8.33 12.83H11.16V15.66C11.16 16.12 11.53 16.49 11.99 16.49C12.45 16.49 12.82 16.12 12.82 15.66V12.83Z" fill="currentColor"></path>                            </svg>   
                              Registrar
                          </a>

                    </div>
                    @endcan
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <div class="header-title">
                        <h4 class="card-title"> Lista De Zonas </h4>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-striped" data-toggle="data-table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nombres</th>
                                    
                                    <th class="text-center ">Acciones</th>
                                    @can('zona.destroy')

                                    <th class="text-center"></th>
                                    @endcan
                                    {{-- <th>Estado</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($zonas as $zona)
                                    <tr>
                                        <td>
                                                    {{ $zona->id }}
                                                    @can('zona.show')

                                                    <a href="{{ route('zona.show', $zona) }}"> <svg width="32"
                                                        viewBox="0 0 24 24" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M8.09756 12C8.09756 14.1333 9.8439 15.8691 12 15.8691C14.1463 15.8691 15.8927 14.1333 15.8927 12C15.8927 9.85697 14.1463 8.12121 12 8.12121C9.8439 8.12121 8.09756 9.85697 8.09756 12ZM17.7366 6.04606C19.4439 7.36485 20.8976 9.29455 21.9415 11.7091C22.0195 11.8933 22.0195 12.1067 21.9415 12.2812C19.8537 17.1103 16.1366 20 12 20H11.9902C7.86341 20 4.14634 17.1103 2.05854 12.2812C1.98049 12.1067 1.98049 11.8933 2.05854 11.7091C4.14634 6.88 7.86341 4 11.9902 4H12C14.0683 4 16.0293 4.71758 17.7366 6.04606ZM12.0012 14.4124C13.3378 14.4124 14.4304 13.3264 14.4304 11.9979C14.4304 10.6597 13.3378 9.57362 12.0012 9.57362C11.8841 9.57362 11.767 9.58332 11.6597 9.60272C11.6207 10.6694 10.7426 11.5227 9.65971 11.5227H9.61093C9.58166 11.6779 9.56215 11.833 9.56215 11.9979C9.56215 13.3264 10.6548 14.4124 12.0012 14.4124Z"
                                                            fill="currentColor"></path>
                                                    </svg> 
                                                    </a>
                                                    @endcan
                                                    
                                        </td>

                                        <td>
                                            {{ $zona->nombre }}</td>

                                       
                                        <td class="text-center">
                                            <ul class="table-controls">
                                                    <form action="{{ route('zona.destroy', $zona) }}" method="POST"
                                                    class="casino formulario">
                                                    @csrf
                                                    @method('DELETE')
                                                    @can('zona.edit')
                                                    <a href="{{ route('zona.edit', $zona) }}" class="bs-tooltip"
                                                        data-bs-toggle="tooltip" data-bs-placement="top" title="Editar"
                                                        data-original-title="Edit"><svg xmlns="http://www.w3.org/2000/svg"
                                                            width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            class="feather feather-edit-2 p-1 br-8 mb-1">
                                                            <path
                                                                d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                            </path>
                                                        </svg></a>
                                                        @endcan
                                                        @can('zona.destroy')

                                                            <button type="submit"
                                                            class="btn btn-danger {{ $zona->status == '2' ? 'disabled' : '' }}"
                                                            style="">Dar de Baja</button>
                                                            @endcan
                                                        </form>
                                                    
                                                
                                               
                                            </ul>
                                        </td>
                                        @can('zona.destroy')

                                        <td class="text-center">
                                            <ul class="table-controls">
                                                <form action="{{ route('zona.activar', $zona) }}" method="POST"
                                                    class="casino formulario2">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit"
                                                        class="btn btn-success {{ $zona->status == '1' ? 'disabled' : '' }}"
                                                        style="">Habilitar</button>
                                                </form>
                                            </ul>
                                        </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')

@if(session('editar'))
 
    <script>
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  
})
Toast.fire({
  icon: 'success',
  title: 'Se Actualizo Satisfactoriamente!!'
})

    </script>
   @endif


   
@endsection