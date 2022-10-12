{{-- $apires = Resulado Json
$item = row de el resultado de json
$headerlib = nombre de el encabezado respectivo de la libreria ['city','state','country'] --}}

@foreach ( $apires as $item )
    <option value="{{ $item[ $headerlib.'_name'] }}" >{{ $item[ $headerlib.'_name'] }}</option>
@endforeach