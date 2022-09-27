@extends('components.footer')

@include('components.navbar')
<body class="mt-12">
    <div class="container-fluid">
        <h1 class="text-muted mt-4">Gestión de Pacientes</h1>
        <div class="row">
            <div class="col-xl-12">
                <form action="{{ route('patients.index') }}" method="GET">
                @csrf
                    <div class="row">
                        <div class="col-sm-4 my-1">
                            <input type="text" class="form-control" name="userseach"  placeholder="Buscar Paciente">
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
            <div class="col-xl-12">
            
            </div>
    </div>
    @section('footer')
        
    @endsection
</body>
</html>