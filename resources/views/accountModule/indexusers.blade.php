@extends('components.footer')

@include('components.navbar')
<body class="mt-12">
    <div class="container">
        <h1 class="text-muted mt-4">Gestión de usuarios</h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('sametegrity.index') }}" method="GET">
                @csrf
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
                                    <td><a href="{{route('sametegrity.edit', $user->id)}}" class="btn btn-warning btn-sm">Editar</a>
                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$user->id}}">
                                        Eliminar
                                    </button>
                                    </td>   
                                </tr>
                                 @include('accountModule.deleteuser')
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                    {{$accounts->links()}}
            </div>
        </div>
    </div>
    @section('footer')
        
    @endsection
</body>
</html>