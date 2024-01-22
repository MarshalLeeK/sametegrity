<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if (($csrf ?? '') == 1)
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $hdMetaDescription ?? 'Default' }} meta description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ URL::asset(Request::Path() != '/' ? 'css/structure.css' : 'css/guessStructure.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"
        integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <link rel="icon" href="{{ URL::asset('img/bluebanner.png') }}">
    <title>SAMEIN Listado Uploads</title>
</head>
<body>

    <!---Se imprime la lista desde la base de datos que contiene las novedades registradas--->

<div  class="container p-5">
    <a href="{{ route('dos') }}"> Agregar nuevo </a>
 <ul>
    @foreach ($datos as $dato)

    <li>

        <div class="col">
            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">{{ $dato->name}}
                     <br>[presentado
                        por:]{{ $dato->published_by}}</strong>
                    <h3 class="mb-0">
                        <a class="text-dark" href="#">{{ $dato->id}}</a>
                    </h3>
                    <div class="mb-1 text-muted">{{ $dato->date}}</div>
                    <p class="card-text mb-auto">{{ $dato->description}}</p>
                    <a href="#">Clic para ver más</a>

                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                        data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]"
                        src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;"
                        src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true" />
                </div>
            </div>
        </div>
    </li>

    @endforeach
</ul> 
{{-- {{ $datos->links() }} --}}

</div> 


<div class="container">
    <table class="table">
        <thead>
            <th>Codigo</th>
            <th>Name</th>
            <th>Descripcion</th>
            <th>File</th>
            <th>Date</th>
            <th>Published_by</th>
            <th>Created_at</th>
            <th>Updated_at</th>
            <th>Route</th>
            <th>VER</th>
        </thead>
        <tbody>
            @foreach ( $datos as $dato )
            <tr>
                <td>{{ $dato->id }}</td>
                <td>{{ $dato->name }}</td>
                <td>{{ $dato->description }}</td>
                <td>{{ $dato->file }}</td>
                <td>{{ $dato->date}}</td>
                <td>{{ $dato->published_by }}</td>
                <td>{{ $dato->created_at }}</td>
                <td>{{ $dato->updated_at}}</td>
                <td>{{ $dato->route }}</td>
                {{-- <td><a href="Archivos/{{ $dato->file} }}" target="blank_"> Ver Documento  </a></td> --}}
                <td><a class="btn btn-danger" href="Archivos/{{ $dato->file }}" target="blank"> Ver Documento  </a> </td>
            </tr>
                
            @endforeach
        </tbody>
    </table>
</div>
    
</body>
</html>