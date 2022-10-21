@if ( count($rows)<=0 )
    <tr>
        <td colspan="{{ count($countcol)  + 1}}">No hay resultados </td>
    </tr>
@else

    @foreach ( $rows as $row )
        <tr>
            @foreach ( $row as $key => $column )

            <td {{ $key == 'id' ? 'hidden' : 'class="align-middle text-muted"'; }} > 
                <strong>
                    @if ( $key == 'gender')
                        {{ $column == '0' ? "MUJER" : "HOMBRE" }}
                    @elseif ($key == 'z_xOne')   
                        {{ $column == '0' ? "INACTIVO" : "ACTIVO" }}
                    @else
                        {{ Str::upper(trim($column)) }}

                    @endif
                </strong>
            </td>
            @endforeach

            @if ( $HiddenButtons = "")
                <td>
                    <div class="row col-sm-12 justify-content-around">
                        <button class="btn btn-primary btn-md col-sm-4 text-white" onclick="location.href = '{{ route( $module.'Show', $row->id )}}';">
                            <i class="bi bi-eye"></i>
                        </button>
                        <button class="btn btn-warning btn-md col-sm-4 text-white" onclick="location.href = '{{ route( $module.'Edit', $row->id )}}';">
                            <i class="bi bi-pen-fill" title="modificar"></i>
                        </button>
                        <button class="btn btn-danger btn-md col-sm-3" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$row->id}}" type="button">
                            <i class="bi bi-trash3-fill" title="Eliminar"></i>
                        </button>
                    </div>
                </td>
            @endif
               
        </tr>
        {{-- ( $module.'.destroy', $row->id) --}}
        @if ( $HiddenButtons = "")

            <x-layouts.commitdelete 
                :row="$row"
                :module="$module"
            />
        
        @endif
    @endforeach

@endif
