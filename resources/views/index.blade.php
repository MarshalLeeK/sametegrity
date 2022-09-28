@extends('components.footer')

 <head>
<!-- Fonts -->
<link rel="stylesheet" href="{{URL::asset('css/indexLv.css')}}">
@include('components.navbar')

</head>
<body>   
    <div class="container-fluid adjust-content-center mt-3">
        <div class="row">
            <div class="col-6 bg-light pt-5 shadow-sm p-3 mb-5 bg-white rounded">
                    <!-- menu -->
                <div class="row justify-content-center py-2 shadow p-5 mb-4 bg-white rounded">
                    <!-- botones -->
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-primary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('patients.index')}}" class="text-white" title="Pacientes">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M8 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M1 1a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h.5a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5.5.5 0 0 1 1 0 .5.5 0 0 0 .5.5h.5a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H6.707L6 1.293A1 1 0 0 0 5.293 1H1Zm0 1h4.293L6 2.707A1 1 0 0 0 6.707 3H15v10h-.085a1.5 1.5 0 0 0-2.4-.63C11.885 11.223 10.554 10 8 10c-2.555 0-3.886 1.224-4.514 2.37a1.5 1.5 0 0 0-2.4.63H1V2Z"/>                                
                                </svg>
                                <label class="custom-control-label text-white" ><b>Pacientes</b></label>
                            </a>

                        </div>
                    </div>
                    
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-secondary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="http://192.168.1.22/samebit" target="_blank" class="text-white" title="Prioritaria">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
                                    <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5ZM9.98 5.356 11.372 10h.128a.5.5 0 0 1 0 1H11a.5.5 0 0 1-.479-.356l-.94-3.135-1.092 5.096a.5.5 0 0 1-.968.039L6.383 8.85l-.936 1.873A.5.5 0 0 1 5 11h-.5a.5.5 0 0 1 0-1h.191l1.362-2.724a.5.5 0 0 1 .926.08l.94 3.135 1.092-5.096a.5.5 0 0 1 .968-.039Z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Prioritaria</b></label>
                            </a>

                        </div>
                    </div>

                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-primary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="http://192.168.1.22/asist-top" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M7 4.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm-.861 1.542 1.33.886 1.854-1.855a.25.25 0 0 1 .289-.047l1.888.974V7.5a.5.5 0 0 1-.5.5H5a.5.5 0 0 1-.5-.5V7s1.54-1.274 1.639-1.208zM5 9a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z"/>
                                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Asistop</b></label>
                            </a>

                        </div>
                    </div>

                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-secondary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('accountModule')}}" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Usuarios</b></label>
                            </a>

                        </div>
                    </div>
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-primary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('sametegrity.index')}}" class="text-white" title="ModuloPendient">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                <path d="M8.5 5.034v1.1l.953-.55.5.867L9 7l.953.55-.5.866-.953-.55v1.1h-1v-1.1l-.953.55-.5-.866L7 7l-.953-.55.5-.866.953.55v-1.1h1ZM13.25 9a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM13 11.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Zm.25 1.75a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5Zm-11-4a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5A.25.25 0 0 0 3 9.75v-.5A.25.25 0 0 0 2.75 9h-.5Zm0 2a.25.25 0 0 0-.25.25v.5c0 .138.112.25.25.25h.5a.25.25 0 0 0 .25-.25v-.5a.25.25 0 0 0-.25-.25h-.5ZM2 13.25a.25.25 0 0 1 .25-.25h.5a.25.25 0 0 1 .25.25v.5a.25.25 0 0 1-.25.25h-.5a.25.25 0 0 1-.25-.25v-.5Z"/>
                                <path d="M5 1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1v1a1 1 0 0 1 1 1v4h3a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h3V3a1 1 0 0 1 1-1V1Zm2 14h2v-3H7v3Zm3 0h1V3H5v12h1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3Zm0-14H6v1h4V1Zm2 7v7h3V8h-3Zm-8 7V8H1v7h3Z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Médicos</b></label>
                            </a>

                        </div>
                    </div>
                    
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-secondary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="http://192.168.1.22/samebit" target="_blank" class="text-white" title="Prioritaria">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M10 9.05a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z"/>
                                    <path d="M2 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H2ZM1 3a1 1 0 0 1 1-1h2v2H1V3Zm4 10V2h9a1 1 0 0 1 1 1v9c0 .285-.12.543-.31.725C14.15 11.494 12.822 10 10 10c-3.037 0-4.345 1.73-4.798 3H5Zm-4-2h3v2H2a1 1 0 0 1-1-1v-1Zm3-1H1V8h3v2Zm0-3H1V5h3v2Z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>CAD</b></label>
                            </a>

                        </div>
                    </div>

                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-primary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="http://192.168.1.22/asist-top" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M12 0H4a2 2 0 0 0-2 2v4h12V2a2 2 0 0 0-2-2zm2 7h-4v2h4V7zm0 3h-4v2h4v-2zm0 3h-4v3h2a2 2 0 0 0 2-2v-1zm-5 3v-3H6v3h3zm-4 0v-3H2v1a2 2 0 0 0 2 2h1zm-3-4h3v-2H2v2zm0-3h3V7H2v2zm4 0V7h3v2H6zm0 1h3v2H6v-2z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Reportes</b></label>
                            </a>

                        </div>
                    </div>

                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-secondary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('sametegrity.index')}}" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path fill-rule="evenodd" d="M1.828 8.9 8.9 1.827a4 4 0 1 1 5.657 5.657l-7.07 7.071A4 4 0 1 1 1.827 8.9Zm9.128.771 2.893-2.893a3 3 0 1 0-4.243-4.242L6.713 5.429l4.243 4.242Z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Farmacia</b></label>
                            </a>

                        </div>
                    </div>
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-primary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('sametegrity.index')}}" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Tesoreria</b></label>
                            </a>

                        </div>
                    </div>
                    <div class="grid col align-content-center justify-content-center">
                        <div class="btn btn-secondary pb-1 border-secundary shadow mb-2 rounded">
                            <a href="{{ route('sametegrity.index')}}" class="text-white" title="Usuarios">
                                <svg xmlns="http://www.w3.org/2000/svg" width="120" height="120" fill="currentColor" class="bi bi-person-rolodex" viewBox="0 0 18 18">
                                    <path d="M7.068.727c.243-.97 1.62-.97 1.864 0l.071.286a.96.96 0 0 0 1.622.434l.205-.211c.695-.719 1.888-.03 1.613.931l-.08.284a.96.96 0 0 0 1.187 1.187l.283-.081c.96-.275 1.65.918.931 1.613l-.211.205a.96.96 0 0 0 .434 1.622l.286.071c.97.243.97 1.62 0 1.864l-.286.071a.96.96 0 0 0-.434 1.622l.211.205c.719.695.03 1.888-.931 1.613l-.284-.08a.96.96 0 0 0-1.187 1.187l.081.283c.275.96-.918 1.65-1.613.931l-.205-.211a.96.96 0 0 0-1.622.434l-.071.286c-.243.97-1.62.97-1.864 0l-.071-.286a.96.96 0 0 0-1.622-.434l-.205.211c-.695.719-1.888.03-1.613-.931l.08-.284a.96.96 0 0 0-1.186-1.187l-.284.081c-.96.275-1.65-.918-.931-1.613l.211-.205a.96.96 0 0 0-.434-1.622l-.286-.071c-.97-.243-.97-1.62 0-1.864l.286-.071a.96.96 0 0 0 .434-1.622l-.211-.205c-.719-.695-.03-1.888.931-1.613l.284.08a.96.96 0 0 0 1.187-1.186l-.081-.284c-.275-.96.918-1.65 1.613-.931l.205.211a.96.96 0 0 0 1.622-.434l.071-.286zM12.973 8.5H8.25l-2.834 3.779A4.998 4.998 0 0 0 12.973 8.5zm0-1a4.998 4.998 0 0 0-7.557-3.779l2.834 3.78h4.723zM5.048 3.967c-.03.021-.058.043-.087.065l.087-.065zm-.431.355A4.984 4.984 0 0 0 3.002 8c0 1.455.622 2.765 1.615 3.678L7.375 8 4.617 4.322zm.344 7.646.087.065-.087-.065z"/>
                                </svg>
                                <label class="custom-control-label text-white" ><b>Administración</b></label>
                            </a>

                        </div>
                    </div>
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

            <div class="col-6 border-5 text-dark">
                <div class="col-12 text-center">
                    <h1 class="text-white" style="background-color:#0a4275">SAMEIN NOVEDADES</h1>
                </div>
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Cursos</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Informativo</a>
                            </h3>
                            <div class="mb-1 text-muted">Sep 26 2022</div>
                            <p class="card-text mb-auto">Sí aún no ha realizado el curso de reinducción puede ir a la página dando clic al enlace</p>
                            <a href="http://colegiosvirtuales.arlsura.com" target='_blank'>Ir a sura</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" alt="Thumbnail [160*160]" style="width: 200px; height: 200Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Laboral</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una noticia,blog,avance,recordatorio,etc</p>
                            <a href="#">Clic para ver más</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]" src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
                        </div>
                    </div>
                </div>  
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Manejo de pacientes [presentado por:]</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Cultural</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una noticia,blog,avance,recordatorio,etc</p>
                            <a href="#">Clic para ver más</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]" src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Policial</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una noticia,blog,avance,recordatorio,etc</p>
                            <a href="#">Clic para ver más</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]" src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
                        </div>
                    </div>
                </div> 
                <div class="row mb-2">
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Cronologpia</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Featured post</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 12</div>
                            <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una noticia,blog,avance,recordatorio,etc</p>
                            <a href="#">Clic para ver más</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]" src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-3 shadow-sm h-md-250">
                            <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-success">Proximos eventos</strong>
                            <h3 class="mb-0">
                                <a class="text-dark" href="#">Post title</a>
                            </h3>
                            <div class="mb-1 text-muted">Nov 11</div>
                            <p class="card-text mb-auto">Aquí va el contenido que se desee ingresar como una noticia,blog,avance,recordatorio,etc</p>
                            <a href="#">Clic para ver más</a>
                            </div>
                            <img class="card-img-right flex-auto d-none d-lg-block mt-4 mx-2" data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]" src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;" src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true">
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
