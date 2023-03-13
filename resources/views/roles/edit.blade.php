@section('title', 'Editar Roles')
@extends('layouts.panel')
@section('header')
    <div class="container-fluid iq-container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-wrap d-flex justify-content-between align-items-center" style="color: black">
                    <div>
                        <h1>Editar Roles</h1>
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
                <div class="card-body">
                    {!! Form::model($role, [
                        'route' => ['role.update', $role],
                        'method' => 'put',
                        'files' => true,
                        'class' => 'formulario',
                    ]) !!}

                    <div class="form-group">
                        <label class="form-label" for="pwd">Nombre:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Ingrese El Nombre" value="{{ $role->name }}">
                        @error('name')
                            <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                        @enderror
                    </div>

                    <label class="form-label" for="pwd"><strong> Elegir Permisos:</strong></label>

                    @error('permissions')
                        <strong class="text-sm text-red-600" style="color: red">{{ $message }}</strong>
                    @enderror
                    
                    {{-- @foreach ($permissions as $permission)
                        <div class="form-group">
                            <label>
                                {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1']) !!}
                                {{ $permission->description }}
                            </label>
                        </div>
                    @endforeach --}}

                    @php
    $chunks = $permissions->chunk(ceil($permissions->count() / 10));
    $headers = ['MÓDULO USUARIOS','MÓDULO ROLES' ,'MÓDULO TP. ORGANIZACION','MÓDULO RESOLUCIONES', 'MÓDULO EMPRESAS','MÓDULO ZONAS', 'MÓDULO PARADEROS', 'MÓDULO PERSONAS', 'MÓDULO VEHICULOS', 'MENU PRINCIPAL',];
@endphp

<div class="row">
    @foreach ($chunks as $key => $chunk)
        <div class="col-md-4">
            <br>
            <h6 class="btn btn-primary" style="font-size: 10px">{{ $headers[$key] }}</h6>
            <br>
            <br>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>
                                {!! Form::checkbox('check_all_' . $key, 1, null, ['class' => 'check-all', 'data-column' => $key]) !!}
                            </th>
                            <th>Seleccionar todos los permisos</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($chunk as $permission)
                            <tr>
                                <td>
                                    {!! Form::checkbox('permissions[]', $permission->id, null, ['class' => 'mr-1', 'data-column' => $key]) !!}
                                </td>
                                <td>{{ $permission->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endforeach
</div>

<br>

                    <button type="submit" class="btn btn-primary">Actualizar</button>
                    <a href="{{route('role.index')}}" class="btn btn-danger">
                        Cancelar
                     </a>                     {!! Form::close() !!}
                </div>



            </div>
        </div>
    @endsection

    @section('scripts')
    <script>
        $('.formulario').submit(function(e) {
            e.preventDefault()

            Swal.fire({
                title: '¿Estas seguro de actualizar este rol?',
                icon: 'info',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si!',
                cancelButtonText: 'Cancelar',
            }).then((result) => {
                if (result.value) {


                    this.submit()

                }
            })

        })
    </script>
        <script>
            $(document).ready(function() {
                // Manejador de eventos para los checkboxes "Marcar Todo"
                $('.check-all').change(function() {
                    var column = $(this).data('column');
                    var checked = $(this).is(':checked');
                    $('table:eq(' + column + ') tbody tr td input[type="checkbox"]').prop('checked', checked);
                });
    
                // Manejador de eventos para los checkboxes de cada fila
                $('table tbody tr td input[type="checkbox"]').change(function() {
                    var column = $(this).data('column');
                    var checked = $(this).is(':checked');
                    var all_checked = true;
                    var all_unchecked = true;
                    $('table:eq(' + column + ') tbody tr').each(function() {
                        if ($(this).find('td:eq(' + column + ') input[type="checkbox"]').is(':checked')) {
                            all_unchecked = false;
                        } else {
                            all_checked = false;
                        }
                    });
                    $('table:eq(' + column + ') thead th:eq(0) input[type="checkbox"]').prop('checked', all_checked);
                    $('table:eq(' + column + ') thead th:eq(0) input[type="checkbox"]').prop('indeterminate', (!all_checked && !all_unchecked));
                });
            });
        </script>
@endsection
