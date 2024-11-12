<x-header hd-title="MENU" hd-description="MENU" />

<head>
    <!-- Fonts -->
    <style>
        .btn {
            display: table-caption;
            margin: 5px;
            width: 100%;
        }
    </style>
    <link rel="stylesheet" href="{{ URL::asset('css/indexLv.css') }}">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <div class="container-fluid adjust-content-center mt-3">
        <div class="row">
            <div class="col-1 col-sm-7 bg-light pt-5 p-3 mb-5 bg-white rounded">
                <!-- menu -->
                <div class="row justify-content-center bg-white py-2 p-5 mb-4  rounded" id="buttonGrid">
                    <!-- botones -->
                    <div class="btnMenuArea row justify-content-arround ">
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('patient') }}" class="text-white" title="Pacientes">
                                    <i class="bi bi-person-circle"></i>
                                    <label class="custom-control-label text-white"><b>Pacientes</b></label>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="http://192.168.1.22/samebit" target="_blank" class="text-white"
                                    title="Prioritaria">
                                    <i class="bi bi-clipboard2-pulse"></i>
                                    <label class="custom-control-label text-white"><b>Prioritaria</b></label>
                                </a>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('histories') }}" class="text-white" title="Historia">
                                    <i class="bi bi-ui-checks"></i>
                                    <label class="custom-control-label text-white"><b>Historia</b></label>
                                </a>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('user') }}" class="text-white" title="Usuarios">
                                    <i class="bi bi-people-fill"></i>
                                    <label class="custom-control-label text-white"><b>Usuarios</b></label>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('histories') }}" class="text-white " title="Agenda">
                                    <i class="bi bi-hospital"></i>
                                    <label class="custom-control-label text-white"><b>Agenda</b></label>
                                </a>
                            </div>
                        </div>
                        {{-- </div>

                        <div class="btnMenuArea row justify-content-between "> --}}
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="http://192.168.1.22/samebit" target="_blank" class="text-white" title="C-A-D">
                                    <i class="bi bi-file-earmark-person-fill"></i>
                                    <label class="custom-control-label text-white"><b>C-A-D</b></label>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('user') }}" class="text-white" title="Farmacia">
                                    <i class="bi bi-capsule"></i>
                                    <label class="custom-control-label text-white"><b>Farmacia</b></label>
                                </a>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('drugscategories') }}" class="text-white" title="Reportes">
                                    <i class="bi bi-body-text"></i>
                                    <label class="custom-control-label text-white"><b>Categorias</b></label>
                                </a>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow">
                                <a href="{{ route('diagnosis') }}" class="text-white" title="Tesoreria">
                                    <i class="bi bi-coin"></i>
                                    <label class="custom-control-label text-white"><b>Diagnósticos</b></label>
                                </a>

                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('questions') }}" class="text-white" title="Diagnósticos">
                                    <i class="bi bi-patch-question"></i>
                                    <label class="custom-control-label text-white"><b>Preguntas</b></label>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('replies') }}" class="text-white" title="Diagnósticos">
                                    <i class="bi bi-x-diamond-fill"></i>
                                    <label class="custom-control-label text-white"><b>Respuestas</b></label>
                                </a>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('forms') }}" class="text-white" title="Diagnosticos">
                                    <i class="bi bi-journal-bookmark-fill"></i>
                                    <label class="custom-control-label text-white"><b>Formatos</b></label>
                                </a>
                            </div>
                        </div>


                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('files') }}" class="text-white" title="Gestion Documental">
                                    <i class="bi bi-journals"></i>
                                    <label class="custom-control-label text-white"><b>Gestión Documental</b></label>
                                </a>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('noveltyList') }}" class="text-white" title="Novedades">
                                    <i class="bi bi-envelope-paper"></i>
                                    <label class="custom-control-label text-white"><b>Novedades</b></label>
                                </a>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('groups') }}" class="text-white" title="Grupos">
                                    <i class="bi bi-calendar2-week-fill"></i>
                                    <label class="custom-control-label text-white"><b>Grupos</b></label>
                                </a>
                            </div>
                        </div>


                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('headquarters') }}" class="text-white" title="Sedes">
                                    <i class="bi bi-building"></i>
                                    <label class="custom-control-label text-white"><b>Sedes</b></label>
                                </a>
                            </div>
                        </div>


                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('patientgroups') }}" class="text-white" title="Tester">
                                    <i class="bi bi-collection"></i>
                                    <label class="custom-control-label text-white"><b>Registro Grupos</b></label>
                                </a>
                            </div>
                        </div>
    
                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('patientgroups') }}" class="text-white" title="Tester">
                                    <i class="bi bi-clipboard2-minus"></i>
                                    <label class="custom-control-label text-white"><b>Pruebas</b></label>
                                </a>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('patientgroups') }}" class="text-white" title="Tester">
                                    <i class="bi bi-ticket"></i>
                                    <label class="custom-control-label text-white"><b>Sin asignar</b></label>
                                </a>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="btn btn-sm btn-primary border-secondary shadow" data-toggle="modal"
                                data-target="#BaseMdodal">
                                <a href="{{ route('patientgroups') }}" class="text-white" title="Tester">
                                    <i class="bi bi-ticket"></i>
                                    <label class="custom-control-label text-white"><b>Sin asignar</b></label>
                                </a>
                            </div>
                        </div>

                        

                    </div>

                    
                    <div class="w-100"> <br></div>

                    {{-- 
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-sm btn-primary btn-lg">
                        Launch
                    </button> --}}

                </div>
                <hr>
                <div class="row">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr class="table text-white" style="background-color:#0a4275;">
                                <th scope="col">#</th>
                                <th scope="col">Área</th>
                                <th scope="col">Asignada a</th>
                                <th scope="col">Ext</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Sistemas</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Facturación</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>20</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Enfermeria</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>30</td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Enfermeria</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>40</td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td>Asistencia</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>Gerencia</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>60</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Área #1</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>70</td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Área #1</td>
                                <td>Julian Rodriguez Rivera</td>
                                <td>70</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="col-1 col-sm-5 border-5 text-dark">
                <div class="col-1 col-sm-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">SAMEIN NOVEDADES</h1>
                </div>
                <div class="row">
                    <div class="col mb-2">
                        {{-- <div class="col">
                            <div class="card flex-md-row mb-3 shadow-md h-md-250">
                                <div class="card-body d-flex flex-column align-items-start">
                                    <strong class="d-inline-block mb-2 text-primary">Manejo de pacientes [presentado
                                        por:]</strong>
                                    <h3 class="mb-0">
                                        <a class="text-dark" href="#">Cultural</a>
                                    </h3>
                                    <div class="mb-1 text-muted">Nov 12</div>
                                    <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una
                                        noticia,blog,avance,recordatorio,etc</p>
                                    <a href="#">Clic para ver más</a>
                                    

                                    <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                                        data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]"
                                        src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;"
                                        src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true" />
                                </div>
                            </div>
                        </div> --}}

                        {{-- DIV CONTENEDOR PARA LAS NOVEDADES REGISTRADAS --}}

                <!-- Vista (index.blade.php) -->
                    <div id="noveltyCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($novelties as $index => $novelty)
                                <div class="carousel-item @if($index === 0) active @endif">
                                    <div class="card flex-md-row mb-3 shadow-md h-md-250">
                                        <div class="card-body d-flex flex-column align-items-start">
                                            <strong class="d-inline-block mb-2 text-primary">{{ $novelty->category }}</strong>
                                            <h3 class="mb-0">
                                                <a class="text-dark" href="#">{{ $novelty->title }}</a>
                                            </h3>
                                            <div class="mb-1 text-muted">{{ $novelty->date }}</div> <!-- Sin formateo -->
                                            <p class="card-text mb-auto">{{ $novelty->description }}</p>
                                            <a href="#">Clic para ver más</a>
                                        </div>
                                        <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2"
                                            src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail"
                                            style="width: 180px; height: 180px;">
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#noveltyCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#noveltyCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>


                        





                    </div>
                    
                   
                   
                </div>



                
            </div>

        </div>
    </div>

</body>
@section('footer')
@endsection

</html>
