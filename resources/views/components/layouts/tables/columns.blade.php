@foreach ($columns as $column )
    <th> {{ Str::upper($column) }}</th>
@endforeach
<th class="text-center">OPCIONES</th>
