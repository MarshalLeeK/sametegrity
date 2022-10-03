<!-- Modal -->
<div class="modal fade" id="modal-delete-{{$patient->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <form action="{{route('patients.destroy', $patient->id)}}" method="POST">
          @csrf
          @method('DELETE')
  
          <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Eliminar Paciente</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              ¡Está seguro de eliminar al ususuario {{$patient->name." ".$patient->lastname}}
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
              <input type="submit" class="btn btn-danger btn-sm" value="Eliminar">      
          </div>
          </div>
      </form>
    </div>
  </div>