@if ( count($rows)<=0 )
    <tr>
        <td colspan="{{ count($countcol)  + 1}}">No hay resultados </td>
    </tr>
@else

    @foreach ( $rows as $row )
        <tr>
            @foreach ( $row as $key => $column )
                <td {{ $key == 'id' ? 'hidden' : '' ;}} > {{ $column }} </td>
            @endforeach
            <td>
            <div class="row col-sm-12 justify-content-around">
                <button class="btn btn-warning btn-md col-sm-5 text-white" onclick="location.href = '{{ route( $module.'Edit', $row->id )}}';">
                    Modificar
                </button>
                <button class="btn btn-danger btn-md col-sm-5" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$row->id}}" type="button">
                    Eliminar
                </button>
            </div>

            </td>   
        </tr>

        <x-layouts.commitdelete 
            :row="$row"
        />
    @endforeach
@endif
