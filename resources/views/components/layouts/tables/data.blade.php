@if ( count($rows)<=0 )
    <tr>
        <td colspan="{{ count($countcol)  + 1}}">No hay resultados </td>
    </tr>
@else

    @foreach ( $rows as $row )
        <tr>
            @foreach ( $row as $key => $column )

                @if ( $key == 'id')
                    <td hidden> {{ $column }} </td>
                @elseif ($key == 'gender')   
                    <td > {{ $column == '0' ? "Mujer" : "Hombre" }} </td>
                @else
                    <td > {{ $column }} </td>
                @endif
            @endforeach

            <td>
                <div class="row col-sm-12 justify-content-around">
                    <button class="btn btn-primary btn-md col-sm-3 text-white" onclick="location.href = '{{ route( $module.'Show', $row->id )}}';">
                        <i class="bi bi-textarea-resize"></i>
                    </button>
                    <button class="btn btn-warning btn-md col-sm-3 text-white" onclick="location.href = '{{ route( $module.'Edit', $row->id )}}';">
                        <i class="bi bi-pen-fill"></i>
                    </button>
                    <button class="btn btn-danger btn-md col-sm-3" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$row->id}}" type="button">
                        <i class="bi bi-trash3-fill"></i>
                    </button>
                </div>
            </td>   
        </tr>

        <x-layouts.commitdelete 
            :row="$row"
        />
    @endforeach
@endif
