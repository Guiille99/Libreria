{{-- MODAL PARA CONFIRMAR BORRADO DE USUARIO --}}
<!-- Modal -->

<div class="modal fade" id="modal-delete-{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <form action="{{route('user.destroy', $user)}}" method="post">
            @csrf
            @method('delete')
            {{-- <input type="submit" value="Eliminar"> --}}
        
            <div class="modal-content">
                <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Eliminación de registro</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    ¿Está seguro de que quiere eliminar el usuario {{$user->username}}?
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                {{-- <form action="{{route('user.destroy', $user)}}" method="post"> --}}
                    {{-- @csrf --}}
                    {{-- @method('delete') --}}
                <button type="submit" class="btn btn-primary text-white">Confirmar</button>
                {{-- </form> --}}
                </div>
            </div>  
        </form>
{{-- prueba --}}
    </div>
</div>