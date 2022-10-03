<x-header 
hd-title="Pacientes"
hd-description="Módulo de pacientes"
>
<div class="container-fluid">
    <h1 class="text-muted mt-4">Gestión de Pacientes</h1>
    <div class="row">
        <div class="col-xl-12">
            <form action="{{ route('patients.index') }}" method="GET">
            @csrf
                <div class="row">
                    <div class="col-sm-4 my-1">
                        <input type="text" class="form-control" name="searchbox"  placeholder="Buscar Paciente">
                    </div>
                    <div class="col-auto my-1">
                        <input type="submit" class="btn btn-primary" value="Buscar">
                    </div>
                    <div class="col-auto my-1">
                        <a href="{{ route('patients.create') }}" class="btn btn-success" >Nuevo</a>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-xl-12 mt-1">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr class="table text-light" style="background-color:#0a417580;">
                            <th hidden></th>
                            <th>Documento</th>
                            <th>Nombre</th>
                            <th>Apellidos</th>
                            <th>Edad</th>
                            <th>Genero</th>
                            <th>Teléfono</th>
                            <th>Email</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>

                    @if (count($patients)<=0)
                        {{-- error por registros no encontrados --}}
                        <tr>
                            <td colspan="8">No hay resultados</td>
                        </tr>
                    @else
                        {{-- total registros --}}
                        @foreach ( $patients as $patient )
                            <tr>
                                <td hidden >{{$patient->id}}</td>
                                <td >{{$patient->dni}}</td>
                                <td >{{$patient->name}}</td>
                                <td >{{$patient->lastname}}</td>
                                <td >{{$patient->age}} Años</td>
                                <td >{{$patient->gender == 1 ? 'Hombre' : 'Mujer' ; }}</td>
                                <td >{{$patient->phone}}</td>
                                <td >{{$patient->email}}</td>
                                <td ><a href="" class="btn btn-warning btn-sm">Editar</a>
                                <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#modal-delete-{{$patient->id}}">
                                    Eliminar
                                </button>
                                </td>   
                            </tr>
                            {{-- {{ route('patients.destroy',[$patient->id]) }} --}}
                             @include('patients.Patien_d')
                        @endforeach
                    @endif
                    </tbody>
                </table>
                {{$patients->links()}}
        </div>
</div>
</x-header>
<x-footer/>