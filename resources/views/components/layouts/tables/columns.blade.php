@foreach ($columns as $column )
    <th> {{ Str::upper($column) }}</th>
@endforeach
@if (isset($HiddenButtons))
    <th class="text-center">OPCIONES</th>    
@endif