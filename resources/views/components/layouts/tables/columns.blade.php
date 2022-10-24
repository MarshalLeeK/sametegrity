@foreach ($columns as $column )
    <th> {{ Str::upper($column) }}</th>
@endforeach
@if ( !isset($hiddenButtons) )
    <th class="text-center">OPCIONES</th>    
@endif