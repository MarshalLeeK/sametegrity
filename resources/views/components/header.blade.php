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
    <title>SAMEIN - {{ $hdTitle ?? 'ND' }}</title>

    @php
        $route = Route::current()->uri;
    @endphp

</head>

<body>


    @if ($route != '/')
        <x-layouts.navbar :route="$route ?? 'menu'" :view="$view ?? 'L'" :module="$module ?? 'MDL-ND'" :row="$row ?? 'ROW-ND'" />
    @endif

    {{ $slot }}

    @if ($route != '/')
        <br>
        <x-footer />
    @endif
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>
