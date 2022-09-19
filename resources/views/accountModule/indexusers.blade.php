@extends('components\header')
@extends('components\footer')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios registrados</title>
</head>
<body>
    <div class="container">
        <h4 class="text-muted mt-4">Gestión de usuarios</h4>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('sametegrity.index') }}" method="GET">
                    <div class="row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="userseach" value="{{ $searchbox }}">
                        </div>
                        <div class="col-auto my-1">
                            <input type="submit" class="btn btn-primary" value="Buscar">
                        </div>
                        <div class="col-auto my-1">
                            <a href="{{ route('sametegrity.create') }}" class="btn btn-success" >Nuevo</a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-xl-12">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Documento</th>
                                <th>Nombre</th>
                                <th>Apellidos</th>
                                <th>Email</th>
                                <th>Nombre de usuario</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody>
                        @if (count($accounts)<=0)
                            <tr>
                                <td colspan="7">No hay resultados</td>
                            </tr>
                        @else
                            @foreach ( $accounts as $user )
                                <tr>
                                    <td>{{$user->id}}</td>
                                    <td>{{$user->dni}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->lastname}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->username}}</td>
                                    <td><a href="{{route('sametegrity.edit', $user->id)}}" class="btn btn-warning">Editar</a> | 
                                    <form href="{{route('sametegrity.destroy', $user->id)}}">
                                        @csrf
                                        @method('DELETE')
                                        <input type="submit" class="btn btn-danger " value="Eliminar">
                                    </form>
                                    </td>   
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$accounts->links()}}
            </div>
        </div>
    </div>
</body>
</html>