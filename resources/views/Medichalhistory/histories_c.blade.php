<x-header hd-title="Nueva Historia" hd-meta-description="Nueva Historia" :module="$module" :view="$view">
    <form id="patientform" action="{{ route($module . 'Save') }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf

        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" alias="HISTORIA CLINICA" action='' />
            <div class="container">
                <main>
                    <div class="row g-4">
                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-2" fieldname='patient_dni'
                            showname='Documento' />
                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-3" fieldname='fk_patient'
                            showname='Paciente' />

                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-2" fieldname='age' showname='Edad'
                            type='number' enable=0 />

                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-3" fieldname='fk_eps'
                            showname='Entidad' />

                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-2" fieldname='fk_epstype'
                            showname='Régimen' />

                        {{-- PROX VERSIÓN --}}
                        {{-- Aqui se van a generar los botones con una consulta SQL que traiga los nombres de las columnas 
                        que coincidan  --}}

                        <div class="container-sm mt-2">
                            <div class="row no-gutters">
                                <div class="col-12 col-sm-6 col-md-10">
                                    <div class="row">
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="check btn btn-primary" title="Violencia"
                                                id="violence" onclick="logic(this);">
                                                <i class="bi bi-bandaid-fill">
                                                    <input type="check" name="violence" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Código Fucsia"
                                                id="abused" onclick="logic(this);">
                                                <i class="bi bi-balloon-fill">

                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Medicina Laboral"
                                                id="fromwork" onclick="logic(this);">
                                                <i class="bi bi-prescription2">
                                                    <input type="check" name="fromwork" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Tutela"
                                                id="guardianship" onclick="logic(this);">
                                                <i class="bi bi-file-earmark-zip-fill">
                                                    <input type="check" name="guardianship" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Privados Libertad"
                                                id="gaoler" onclick="logic(this);">
                                                <i class="bi bi-door-closed-fill">
                                                    <input type="check" name="gaoler" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="ICBF" id="icbf"
                                                onclick="logic(this);">
                                                <i class="bi bi-file-earmark-person-fill">
                                                    <input type="check" name="icbf" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Gestante"
                                                id="pregnant" onclick="logic(this);">
                                                <i class="bi bi-flower1">
                                                    <input type="check" name="pregnant" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Riesgo Suicida"
                                                id="suicide" onclick="logic(this);">
                                                <i class="bi bi-exclamation-diamond-fill">
                                                    <input type="check" name="suicide" value="" hidden>
                                                </i>
                                            </button>
                                        </div>

                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Asesoria Virtual"
                                                id="virtualadvice" onclick="logic(this);">
                                                <i class="bi bi-pc-display">
                                                    <input type="check" name="virtualadvice" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Consulta Externa"
                                                id="external" onclick="logic(this);">
                                                <i class="bi bi-person-video2">
                                                    <input type="check" name="external" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Hospitalización"
                                                id="hospitalitation" onclick="logic(this);">
                                                <i class="bi bi-h-circle-fill">
                                                    <input type="check" name="hospitalitation" value=""
                                                        hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Red Externa"
                                                id="external" onclick="logic(this);">
                                                <i class="bi bi-file-medical-fill">
                                                    <input type="check" name="external" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="CENPI (<14)"
                                                id="cenpi" onclick="logic(this);">
                                                <i class="bi bi-emoji-laughing-fill">
                                                    <input type="check" name="cenpi" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="SRPA (Adolecentes)"
                                                id="srpa" onclick="logic(this);">
                                                <i class="bi bi-earbuds">
                                                    <input type="check" name="srpa" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Búsqueda Activa"
                                                id="activeselection" onclick="logic(this);">
                                                <i class="bi-binoculars-fill">
                                                    <input type="check" name="activeselection" value=""
                                                        hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Directo Prestador"
                                                id="through" onclick="logic(this);">
                                                <i class="bi bi-signpost-fill">
                                                    <input type="check" name="through" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Particular"
                                                id="particular" onclick="logic(this);">
                                                <i class="bi bi-clipboard2-pulse-fill">
                                                    <input type="check" name="particular" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                        <div class="col-sm-auto p-1">
                                            <button type="button" class="btn btn-primary" title="Punta Piramide"
                                                id="pyramid" onclick="logic(this);">
                                                <i class="bi bi-triangle-half">
                                                    <input type="check" name="pyramid" value="" hidden>
                                                </i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-6 col-md-2">
                                    <div class="row-col">
                                        <button type="button" class="btn btn-primary" title="Asistió"
                                            id="participate" onclick="logic(this);">
                                            <i class="bi bi-check-circle-fill">
                                                <input type="check" name="participate" value="" hidden>
                                            </i>
                                        </button>
                                        <button type="button" class="btn btn-secondary" title="Teléconsulta"
                                            id="virtual" onclick="logic(this);">
                                            <i class="bi bi-webcam-fill">
                                                <input type="check" name="virtual" value="" hidden>
                                            </i>
                                        </button>
                                    </div>
                                </div>


                                <hr class="h-100">
                            </div>

                        </div>
                        <div class="d-inline-flex g-6 mt-auto">
                            <div class="container-fluid col-md-4 col-lg-4 order-md-end p-2">
                                <div class="table-responsive">
                                    <table class="table table-striped mb-1">
                                        <thead>
                                            <tr class="table text-light">
                                                <x-layouts.tables.columns :columns="$columns" hidden-buttons="1" />
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <x-layouts.tables.data :rows="$patients" :countcol="$columns" :module="$module"
                                                hidden-buttons="1" />
                                        </tbody>
                                    </table>
                                </div>
                                {{ $patients->withQueryString()->links() }}
                            </div>

                            <div class="container-fluid col-md-8 col-lg-8">



                                <div class="col-sm-12 m-2">
                                    <nav id="patientoptions">
                                        <div class="nav nav-tabs" id="nav-tab" role="tablist">


                                            <li class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-consulta"
                                                type="button" role="tab" aria-selected="false"
                                                title="Consulta">
                                                <i class="histonav bi-ui-radios"></i>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#nav-antecedentes" type="button" role="tab"
                                                aria-selected="false" title="Antecedentes">
                                                <i class="histonav bi-shield-lock-fill"></i>
                                            </li>
                                            <li class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#nav-diagnostico" type="button" role="tab"
                                                aria-selected="false" title="Diagnóstico">
                                                <i class="histonav bi-file-post"></i>
                                            </li>
                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false" title="Tratamiento">
                                                    <i class="histonav bi-heart-pulse-fill"></i></a>
                                                <ul class="dropdown-menu">
                                                    <sub class="dropdown-header">Tratamiento</sub>
                                                    <li>
                                                        <hr class="dropdown-divider">
                                                    </li>
                                                    <li class="dropdown-item" href="#nav-medicamento"
                                                        data-bs-toggle="tab" data-bs-toggle="#nav-medicamento"
                                                        aria-selected="false">
                                                        <i class="histonav bi-capsule"></i> Médicamentos
                                                    </li>
                                                    <li class="dropdown-item" href="#nav-suministros"
                                                        data-bs-toggle="tab" data-bs-toggle="#nav-suministros"
                                                        aria-selected="false"><i
                                                            class="histonav bi-box-seam-fill"></i> Suministros
                                                    </li>
                                                    <li class="dropdown-item" href="#nav-recomendaciones"
                                                        data-bs-toggle="tab" data-bs-toggle="#nav-recomendaciones"
                                                        aria-selected="false"><i
                                                            class="histonav bi-chat-left-text-fill"></i>
                                                        Recomendaciones
                                                    </li>

                                                    <li class="dropdown-item" href="#nav-Incapacidad"
                                                        data-bs-toggle="tab" data-bs-toggle="#nav-Incapacidad"
                                                        aria-selected="false"><i class="histonav bi-virus"></i>
                                                        Incapacidad</li>
                                                </ul>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-ayudadx"
                                                type="button" role="tab" aria-selected="false"
                                                title="Ayuda Dx. Procedimientos y Drogodependencia">
                                                <i class="histonav bi-file-earmark-medical-fill"></i>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                                                    aria-expanded="false" title="Remisiones">
                                                    <i class="histonav bi-file-text"></i> </a>
                                                <ul class="dropdown-menu dropdown-menu-right">
                                                    <sub class="dropdown-header">Remisiones</sub>
                                                    <a class="dropdown-item" href="#nav-remsion"
                                                        data-bs-toggle="tab">Remision#1</a>
                                                    <a class="dropdown-item" href="#nav-remsion"
                                                        data-bs-toggle="tab">Remision#2</a>
                                                    <a class="dropdown-item" href="#nav-remsion"
                                                        data-bs-toggle="tab">Remision#3</a>
                                                    <a class="dropdown-item" href="#nav-remsion"
                                                        data-bs-toggle="tab">Remision#4</a>
                                                </ul>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-notas"
                                                type="button" role="tab" aria-selected="false"
                                                title="Notas Aclaratorias">
                                                <i class="histonav bi-chat-dots-fill"></i>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab"
                                                data-bs-target="#nav-autorizacion" type="button" role="tab"
                                                aria-selected="false" title="Autorización">
                                                <i class="histonav bi-postage-fill"></i>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-solicitud"
                                                type="button" role="tab" aria-selected="false"
                                                title="Solicitúd Autorización Servicios Salud">
                                                <i class="histonav bi-hospital"></i>
                                            </li>

                                            <li class="nav-link" data-bs-toggle="tab" data-bs-target="#nav-archivos"
                                                type="button" role="tab" aria-selected="false"
                                                title="Archivos">
                                                <i class="histonav bi-file-earmark-zip-fill"></i>
                                            </li>

                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">

                                        <div class="tab-pane fade" id="nav-consulta" role="tabpanel"
                                            aria-labelledby="nav-consulta">
                                            <div class="container">
                                                <div class="row bg-liht">
                                                    <div class="row p-2">
                                                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                            fieldname="dniaccompanist" showname="Documento"
                                                            type="numb" />

                                                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-4"
                                                            fieldname="accompanist" showname="Acompañante" />

                                                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                            fieldname="kinred" showname="Parentesco" />

                                                        <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                            fieldname="phoneaccompanist" showname="Teléfono"
                                                            type="numb" />

                                                    </div>
                                                    <div class="row p-2">
                                                        <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                            fieldname="motive" showname="Motivo Consulta"
                                                            type="numb" />
                                                    </div>

                                                    <div class="row p-2">
                                                        <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                            fieldname="sthink" showname="Enfermedad Actual"
                                                            type="numb" />
                                                    </div>

                                                    <div class="row p-2">
                                                        <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                            fieldname="motive" showname="Exámen Mental"
                                                            type="numb" />
                                                    </div>

                                                    <div class="row p-2">
                                                        <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                            fieldname="sthink" showname="Plan Analisis"
                                                            type="numb" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-antecedentes" role="tabpanel"
                                            aria-labelledby="nav-antecedentes">
                                            <div class="table-responsive">
                                                <table class="table caption-top">
                                                    <caption>Listado de antecedentes</caption>
                                                    <thead>
                                                        <tr class="text-white">
                                                            <th scope="col">#</th>
                                                            <th scope="col">Nombre</th>
                                                            <th scope="col">Personal</th>
                                                            <th scope="col">Familiar</th>
                                                            <th colspan="2">Observación</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Agresiones</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">2</th>
                                                            <td>Hipertensivos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">3</th>
                                                            <td>Tóxicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">4</th>
                                                            <td>Transtornos Mentales</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">5</th>
                                                            <td>Cancer</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">6</th>
                                                            <td>Venereas</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">7</th>
                                                            <td>Diabetes</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">8</th>
                                                            <td>Quirurgicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">9</th>
                                                            <td>Alergicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">10</th>
                                                            <td>Defecto visual</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">11</th>
                                                            <td>Farmacologicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">12</th>
                                                            <td>Endocrinos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">13</th>
                                                            <td>Infeccionsos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">14</th>
                                                            <td>GastroIntestinales</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">15</th>
                                                            <td>Patologicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">16</th>
                                                            <td>Traumaticos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">17</th>
                                                            <td>Neurologicos</td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td> <button class="btn btn-secondary btn-md"
                                                                    type="button"> <i class="bi bi-check-circle-fill"
                                                                        title="Personal"></i> </button></td>
                                                            <td colspan="2">
                                                                <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade" id="nav-diagnostico" role="tabpanel"
                                            aria-labelledby="nav-diagnostico">
                                            <div class="row p-2">
                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                    fieldname="type" showname="Tipo" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                    fieldname="typediagnosys" showname="Tipo Diagnóstico" />
                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-4"
                                                    fieldname="external" showname="Causa externa" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="risk" showname="Nivel Riesgo" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-12"
                                                    fieldname="type_session" showname="Tipo Consulta" />

                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="diagnosisimp" showname="Impresión Diagnóstica" />
                                            </div>
                                            <hr class="h-100 m-1">
                                            <div class="row p-2">
                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-12"
                                                    fieldname="diagnosis" showname="Diágnostico Principal" />
                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="diagnosisobservation" showname="Observación" />
                                            </div>
                                            <div class="row p-2">
                                                <div class="table-responsive">
                                                    <table class="table caption-top">
                                                        <caption>Diágnosticos asociados</caption>
                                                        <thead>
                                                            <tr class="text-white">
                                                                <th scope="col">#</th>
                                                                <th scope="col">Código</th>
                                                                <th scope="col">Diágnostico</th>
                                                                <th scope="col">Observación</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>F-399</td>

                                                                <td> Trastorno recurrente no especificado </button></td>
                                                                {{-- <td> <x-layouts.miscellaneous.inputtextarea rows=1 /> </td> --}}
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>F-318</td>
                                                                <td> Otros trastornos afectivos bipolares</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea rows=1 />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>F-322</td>
                                                                <td> Episodio depresivo grave sin sintomas psicoticos
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea rows=1 />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            <sub>
                                                <div class="row p-2">
                                                    <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                        fieldname="checkout" showname="Salida" type="date" />

                                                    <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                        fieldname="redirect" showname="Destino" />

                                                </div>
                                            </sub>
                                        </div>
                                        {{-- T-BEG --}}
                                        <div class="tab-pane fade" id="nav-medicamento" role="tabpanel"
                                            aria-labelledby="nav-medicamento">
                                            <div class="row-inline m-1">
                                                <div class="table-responsive border-top">
                                                    <table class="table">
                                                        <caption>Medicamentos</caption>
                                                        <thead>
                                                            <tr class="text-white">
                                                                <th>Imp</th>
                                                                <th>Medicamento</th>
                                                                <th>Comercial</th>
                                                                <th>Cont</th>
                                                                <th>M</th>
                                                                <th>T</th>
                                                                <th>N</th>
                                                                <th>Cantidad</th>
                                                                <th>Aplicar-días</th>
                                                                <th>Suspendido</th>
                                                                <th>Via</th>
                                                                <th>Prescripción</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-middle">
                                                            <tr>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td> Birideno 2mg tableta </button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>1</td>
                                                                <td>0</td>
                                                                <td>0</td>
                                                                <td>180</td>
                                                                <td>2</td>
                                                                <td>25/Oct/2022</td>
                                                                <td>VO</td>
                                                                <td>1 tableta diaria por 7 días</td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td> Otros trastornos afectivos bipolares</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>0</td>
                                                                <td>1</td>
                                                                <td>0</td>
                                                                <td>250</td>
                                                                <td>4</td>
                                                                <td> </td>
                                                                <td>VO</td>
                                                                <td>2 tabletas cada 3 dias por 15 días</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-suministros" role="tabpanel"
                                            aria-labelledby="nav-suministros">
                                            <div class="row-inline m-1">
                                                <div class="table-responsive">
                                                    <table class="table caption-top">
                                                        <caption>Suministros</caption>
                                                        <thead>
                                                            <tr class="text-white">
                                                                <th>Imp</th>
                                                                <th>Medicamento</th>
                                                                <th>Comercial</th>
                                                                <th>Cantidad</th>
                                                                <th>Aplicar-días</th>
                                                                <th>Suspendido</th>
                                                                <th>Prescripción</th>
                                                                <th>NO POS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-middle">
                                                            <tr>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td> Birideno 2mg tableta </button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td>180</td>
                                                                <td>2</td>
                                                                <td>25/Oct/2022</td>
                                                                <td>1 tableta diaria por 7 días</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td> Birideno 2mg tableta </button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td>180</td>
                                                                <td>2</td>
                                                                <td>25/Oct/2022</td>
                                                                <td>1 tableta diaria por 7 días</td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-recomendaciones" role="tabpanel"
                                            aria-labelledby="nav-recomendaciones">
                                            <div class="row p-2">
                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="recomended" rows="24"
                                                    showname="Recomendaciones" />
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-Incapacidad" role="tabpanel"
                                            aria-labelledby="nav-Incapacidad">
                                            <div class="row m-2 p-1">

                                                <x-layouts.miscellaneous.inputDiv div-class="form-group col-3"
                                                    fieldname="disability" showname="Desde" type="date" />

                                                <x-layouts.miscellaneous.inputDiv div-class="form-group col-2"
                                                    fieldname="disabilitydays" showname="Días" type="number" />

                                                <x-layouts.miscellaneous.inputDiv div-class="form-group col-7"
                                                    fieldname="disabilitytype" showname="Tipo" />

                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="disabilityrazon" showname="Motivo - Justificación"
                                                    rows="20" />

                                            </div>
                                        </div>
                                        {{-- T-END --}}

                                        <div class="tab-pane fade" id="nav-ayudadx" role="tabpanel"
                                            aria-labelledby="nav-ayudadx">
                                            <div class="row p-2">
                                                <div class="table-responsive">
                                                    <table class="table caption-top">
                                                        <caption>Ayudas Dx procedimientos y drogodependencia</caption>
                                                        <thead>
                                                            <tr class="text-white">
                                                                <th scope="col">Imp</th>
                                                                <th scope="col">Código</th>
                                                                <th scope="col">Exámen / Diagnóstico</th>
                                                                <th scope="col">Cantidad</th>
                                                                <th scope="col">Observación</th>
                                                                <th scope="col">NO POS</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td scope="row">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>903703</td>
                                                                <td> Vitamina B12[CIANOBLAMINA]</button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="number" />
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea rows=1 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td scope="row">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>904902</td>
                                                                <td> HORMONA ESTIMULANTE DE LA TIROIDES</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="number" />
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea rows=1 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>903105</td>
                                                                <td> ACIDO FOLICO [FOLATOS] EN SUERO</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="number" />
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea rows=1 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td scope="row">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                                <td>906916</td>
                                                                <td> SEROLOGIA [FOLATOS] EN SUERO</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="number" />
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputtextarea rows=1 />
                                                                </td>
                                                                <td>
                                                                    <button type="button" class="btn btn-secondary"
                                                                        title="Teléconsulta"id="virtual"
                                                                        onclick="logic(this);">
                                                                        <i class="bi  bi-check-circle-fill"></i>
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="observationHelp" showname="Observación"
                                                    rows="8" />
                                            </div>
                                        </div>

                                        {{-- RM-BEG --}}
                                        <div class="tab-pane fade" id="nav-remsion" role="tabpanel"
                                            aria-labelledby="nav-remision">
                                            <div class="row m-1">

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                    fieldname="remisionto" showname="Remitido A" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-9"
                                                    fieldname="remisionto" showname="Motivo" />
                                            </div>

                                            <x-layouts.miscellaneous.textareaDiv div-class="form-group p-2"
                                                fieldname="remisionevaluation" showname="Evaluación de atención"
                                                rows="10" />

                                            <x-layouts.miscellaneous.textareaDiv div-class="form-group p-2"
                                                fieldname="remisionlab" showname="Resultado Laboratorio"
                                                rows="8" />
                                        </div>
                                        {{-- RM-END --}}

                                        <div class="tab-pane fade" id="nav-notas" role="tabpanel"
                                            aria-labelledby="nav-notas">
                                            <div class="row-inline m-1">
                                                <div class="table-responsive">
                                                    <table class="table caption-top">
                                                        <caption>Notas Aclaratorias</caption>
                                                        <thead>
                                                            <tr class="text-white">
                                                                <th>Fecha</th>
                                                                <th>Realizado</th>
                                                                <th>Motivo</th>
                                                                <th colspan="2">Observaciones</th>
                                                                <th>Archivo</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-middle">
                                                            <tr>
                                                                <td>25/Oct/2022
                                                                </td>
                                                                <td> Birideno 2mg tableta </button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td colspan="2">Lorem ipsum dolor sit amet
                                                                    consectetur, adipisicing elit. Maxime, dicta
                                                                    laboriosam eveniet ipsam nulla placeat itaque
                                                                    repellendus hic accusamus inventore doloribus
                                                                    nostrum obcaecati, aperiam, in molestias mollitia
                                                                    architecto voluptas porro.</td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control" type="file"
                                                                        field-name="noteFile"
                                                                        data-browse-on-zone-click="true" multiple />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>25/Oct/2022
                                                                </td>
                                                                <td> Birideno 2mg tableta </button></td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputTextarea cols=1
                                                                        rows=2 />
                                                                </td>
                                                                <td colspan="2">Lorem, ipsum dolor sit amet
                                                                    consectetur adipisicing elit. Saepe aspernatur dicta
                                                                    maiores excepturi id accusamus magnam eaque dolorem
                                                                    beatae modi suscipit assumenda, cumque, molestiae
                                                                    hic consequatur fugiat distinctio ab blanditiis?
                                                                </td>
                                                                <td>
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="file" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tab-pane fade p-2" id="nav-autorizacion" role="tabpanel"
                                            aria-labelledby="nav-autorizacion">

                                            <div class="row">

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="authId" showname="Número" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="authby" showname="Autorizado por" />


                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="authLvl" showname="Nivel" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="authWks" showname="Semanas" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-8"
                                                    fieldname="authIPS" showname="IPS" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-4"
                                                    fieldname="authType" showname="Tipo Atención" type="number" />

                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="remisionlab" showname="Observación" rows="15" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-4"
                                                    fieldname="callto" showname="llamar a" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-8"
                                                    fieldname="authCreate" showname="Elaborado por" />
                                            </div>


                                        </div>
                                        <div class="tab-pane fade show active p-2" id="nav-solicitud" role="tabpanel"
                                            aria-labelledby="nav-solicitud">
                                            <div class="row">
                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="formID" showname="Número" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-7"
                                                    fieldname="formPlace" showname="Entidad Solicitud" />


                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-3"
                                                    fieldname="formCode" showname="Codigo" type="number" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="formCover" showname="Covertura en Salud" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="formOrigen" showname="Origen Atención" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="formCover" showname="Tipo Servicios Solicitados" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="formOrigen" showname="Prioridad Atención" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-6"
                                                    fieldname="formCover" showname="Ubicación Paciente" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-4"
                                                    fieldname="formOrigen" showname="Servicio" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group col-2"
                                                    fieldname="formCover" showname="Cama" type="number" />

                                                <x-layouts.miscellaneous.textareaDiv div-class="form-group"
                                                    fieldname="formjustify" showname="Justificación Clinica"
                                                    rows="2" />

                                                <x-layouts.miscellaneous.inputdiv div-class="form-group"
                                                    fieldname="formCover" showname="Manejo Integral" />

                                                <div class="table-responsive border-top mt-1">
                                                    <table class="table">
                                                        <thead>
                                                            <tr class="text-white rounded-top">
                                                                <th>Código</th>
                                                                <th>Servicio</th>
                                                                <th class="col-1">Cantidad</th>
                                                                <th colspan="2">Observaciones</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="align-middle">
                                                            <tr>
                                                                <td>ABC000</td>
                                                                <td>SERVICIO</td>
                                                                <td colspan="1" class="text-center">
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                    />
                                                                </td>
                                                                <td colspan="2">
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end"
                                                                        type="number" />
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>ABC001</td>
                                                                <td>SERVICIO # 2</td>
                                                                <td class="text-center">
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end" />
                                                                </td>
                                                                <td colspan="2">
                                                                    <x-layouts.miscellaneous.inputField
                                                                        input-class="form-control text-end" />
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="nav-archivos" role="tabpanel"
                                            aria-labelledby="nav-archivos">
                                            Archivos
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-0">
                        <label for="observation">Observación</label>
                        <textarea class="form-control" id="observation" name="observation" rows="15" placeholder="Observación">{{ empty(old('observation')) ? '' : old('observation') }}</textarea>
                    </div>
                </main>
                <x-layouts.formSave :module="$module" />
            </div>
        </div>
    </form>
    <script src="{{ asset('js/patiencrud.js') }}"></script>
</x-header>
