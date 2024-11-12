@foreach ($columns as $key => $column)
    @if ($key != 'slug')
        <th> {{ Str::upper($column) }}</th>
    @endif
@endforeach
@if (!isset($hiddenButtons))
    <th class="text-center">PDF</th>
    <th class="text-center">OPCIONES</th>
    
@endif

