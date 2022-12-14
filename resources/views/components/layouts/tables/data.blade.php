@if (count($rows) <= 0)
    <tr>
        <td colspan="{{ count($countcol) + 1 }}">No hay resultados </td>
    </tr>
@else
    @foreach ($rows as $row)
        {{-- {{ $row->id }} --}}
        <tr>
            @foreach ($row as $key => $column)
                <td {{ $key == 'id' ? 'hidden' : 'class=align-middle text-muted' }}>
                    <strong>
                        @if ($key == 'gender')
                            {{ $column == '0' ? 'MUJER' : 'HOMBRE' }}
                        @elseif ($key == 'z_xOne')
                            {{ $column == '0' ? 'INACTIVO' : 'ACTIVO' }}
                        @else
                            {{ strlen($column) <= 100 ? strtoupper(trim($column)) : ucfirst(trim($column)) }}
                            {{-- {{ isset($) ? 'A' : 'B'; }} --}}
                        @endif
                    </strong>
                </td>
            @endforeach
            @if (!isset($hiddenButtons))
                <td class="align-middle">
                    <div class="row">
                        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                            <button class="btn btn-primary btn-md col-sm"
                                onclick="location.href = '{{ route($module . 'Show', $row->id) }}';">
                                <i class="bi bi-eye" title="Ver detalles del registro"></i>
                            </button>
                            <button class="btn btn-warning btn-md col-sm text-secondary"
                                onclick="location.href = '{{ route($module . 'Edit', $row->id) }}';">
                                <i class="bi bi-pencil-fill" title="Modificar registro"></i>
                            </button>
                            <button class="btn btn-danger btn-md col-sm" data-bs-toggle="modal"
                                data-bs-target="#modal-delete-{{ $row->id }}" type="button">
                                <i class="bi bi-trash3-fill" title="Eliminar/Inactivar Registro"></i>
                            </button>
                        </div>
                    </div>
                </td>
            @endif
        </tr>
        @if (!isset($hiddenButtons))
            <x-layouts.commitdelete :row="$row" :module="$module" />
        @endif
    @endforeach

@endif
