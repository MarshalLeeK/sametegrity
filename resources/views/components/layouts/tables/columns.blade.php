@foreach ($columns as $column )
    <th> {{ Str::upper($column) }}</th>
@endforeach
@if ($hiddenOption == "")
    <th class="text-center">OPCIONES</th>    
@endif