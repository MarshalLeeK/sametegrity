<x-header>
@php
    
    

@endphp


@dump($columns)

@foreach ( $rows as $row )
    @dump($row)
    <p>
        {{$row['name'] }}
    </p>
@endforeach


</x-header>