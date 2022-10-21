<div class="modal fade" id="modal-delete-{{$row->id}}" tabindex="-1" aria-labelledby="" aria-hidden="true" >
    <div class="modal-dialog">
      <form action="{{route( $module.'Destroy', $row->id )}}" method="POST">
          @csrf
          @method('DELETE')
          <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="">Eliminar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¡Está seguro de eliminar al registro: {{$row->name}}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Eliminar</button>
            </div>
          </div>
      </form>
    </div>
</div>