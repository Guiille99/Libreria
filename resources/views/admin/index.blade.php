@extends('layouts.plantilla-admin')
@section('content')
{{-- {{$users}} --}}
    {{-- DATOS --}}
    <div class="col-9 col-lg-10 pt-3">
        <h1 class="text-center py-3">Administración de Clientes</h1>
        <div class="row justify-content-center">
            <div class="col-7 col-md-3 bg-success text-center text-white d-flex flex-column py-4 position-relative">
                <a href="panel_admin_nuevo_cliente.html" class="h-100 w-100 d-block position-absolute top-0 start-0"></a>
                <i class="bi bi-plus-lg fs-1"></i>
                <p class="m-0">Nuevo</p>
            </div>
        </div>
        <div class="row justify-content-center py-3">
            <div class="col-md-10">
                <table class="table text-center">
                    <thead>
                        <tr>
                            <td class="text-center fs-2" colspan="100%">Lista de Clientes</td>
                        </tr>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Usuario</th>
                            <th>Email</th>
                            <th>Rol</th>
                            <th>Fecha creación</th>
                            <th>Última modificación</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->nombre}}</td>
                                <td>{{$user->apellidos}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->rol}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>{{$user->updated_at}}</td>
                                <td class="d-flex gap-2">
                                    {{-- <form action="" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" value="Eliminar">
                                    </form> --}}
                                    <button type="button" class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#EliminaModal">
                                        Eliminar
                                        <input type="hidden" name="curso" value="{{$curso}}">
                                    </button>

                                    <form action="" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="submit" class="btn btn-primary text-white" value="Modificar">
                                    </form>
                                </td>
                            </tr>

                            
                        @endforeach
                        </tbody>
                        <tfoot>
                            <td colspan="100%">{{$users->links()}}</td>
                        </tfoot>
                </table>

                {{-- MODAL PARA CONFIRMAR BORRADO DE USUARIO --}}
                <!-- Modal -->
                <div class="modal fade" id="EliminaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">¿Está seguro de que quiere eliminar el usuario?</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        {{-- <div class="modal-body">
                        ...
                        </div> --}}
                        <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                        <form action="{{route('user.destroy', $user)}}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-primary text-white">Confirmar</button>
                        </form>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection