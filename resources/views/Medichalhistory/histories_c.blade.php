<x-header
hd-title="Nueva Historia"
hd-meta-description="Nueva Historia"
:module="$module"
:view="$view"
>
<form id="patientform" action="{{ route( $module.'Save') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
        
        <div class="container bg-light border">
            <x-layouts.tittlebar
            class="row h-100 text-center text-white"
            alias="HISTORIA"
            action='NUEVA'/>
            <div class="container">

                <main>

                <div class="row col-12">

                    <x-layouts.miscellaneous.inputdiv 
                    div-class="form-group col-2"
                    fieldname='patient_dni'
                    showname='Documento'
                    />
                    <x-layouts.miscellaneous.inputdiv 
                    div-class="form-group col-3"
                    fieldname='fk_patient'
                    showname='Paciente'
                    />
                    
                    <x-layouts.miscellaneous.inputdiv 
                    div-class="form-group col-2"
                    fieldname='age'
                    showname='Edad'
                    type='number'
                    enable=0
                    />
                    
                    <x-layouts.miscellaneous.inputdiv 
                    div-class="form-group col-3"
                    fieldname='fk_eps'
                    showname='Entidad'
                    />

                    <x-layouts.miscellaneous.inputdiv 
                    div-class="form-group col-2"
                    fieldname='fk_epstype'
                    showname='Regimen'
                    />

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
                                                        <input type="check" name="abused" value="" hidden>
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
                                                <button type="button" class="btn btn-primary" title="ICBF"
                                                id="icbf" onclick="logic(this);">                                                
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
                                                        <input type="check" name="hospitalitation" value="" hidden>
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
                                                        <input type="check" name="activeselection" value="" hidden>
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
                <div class="row g-5 mt-auto">
                    <div class="container-fluid col-md-5 col-lg-4 order-md-end p-2">
                        <div class="table-responsive">
                            <table class="table table-striped mb-1">
                                <thead>
                                    <tr class="table text-light">
                                        <x-layouts.tables.columns 
                                            :columns="$columns"
                                            hidden-buttons="1"

                                        />
                                    </tr>
                                </thead>
                                <tbody>
                                    <x-layouts.tables.data 
                                        :rows="$patients"
                                        :countcol="$columns"
                                        :module="$module"
                                        hidden-buttons="1"
                                    />
                                </tbody>
                            </table>
            
                      {{-- <form class="card p-2">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Promo code">
                          <button type="submit" class="btn btn-primary">Redeem</button>
                        </div>
                      </form> --}}
                        </div>
                        {{$patients->withQueryString()->links()}}
                    </div>

                    <div class="container-fluid col-md-7 col-lg-8">
                      
                        <div class="row">
                            

                            <div class="col-sm-12 mt-2 mb-2">
                                <nav id="patientoptions">
                                    <div class="nav nav-tabs" id="nav-tab"role="tablist">
                                        <button class="nav-link active" id="nav-medicalbond-tab"data-bs-toggle="tab"data-bs-target="#nav-medicalbond"
                                            type="button"role="tab"aria-controls="nav-medicalbond"aria-selected="true" title="Consulta">
                                            <i class="bi-ui-radios"><input type="check" name="abused" value="" hidden></i> 
                                        </button>
                                        
                                        <button class="nav-link" id="nav-legal-tab" data-bs-toggle="tab" data-bs-target="#nav-legal"
                                            type="button" role="tab" aria-controls="nav-income" aria-selected="false" title="Antecedentes">
                                            <i class="histonav bi-shield-shaded">
                                                <input type="check" name="abused" value="" hidden>
                                            </i> </button>

                                        <button class="nav-link" id="nav-income-tab" data-bs-toggle="tab" data-bs-target="#nav-income"
                                            type="button" role="tab" aria-controls="nav-income" aria-selected="false" title="diagnóstico">
                                            <i class="histonav bi-journal-medical">
                                                <input type="check" name="abused" value="" hidden>
                                            </i> </button>
                                            
                                        <button class="nav-link" id="nav-files-tab" data-bs-toggle="tab" data-bs-target="#nav-files"
                                            type="button" role="tab" aria-controls="nav-files" aria-selected="false" title="tratamiento">
                                            <i class="histonav bi-capsule">
                                                <input type="check" name="abused" value="" hidden>
                                            </i> </button>

                                        <button class="nav-link" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence"
                                            type="button" role="tab" aria-controls="nav-presence" aria-selected="false" title="ayudas Dx">
                                            <i class="histonav bi-heart-pulse-fill">
                                                <input type="check" name="abused" value="" hidden>
                                            </i></button>

                                        <button class="nav-link" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence"
                                            type="button"role="tab"aria-controls="nav-presence"aria-selected="false" title="remisión">
                                            <i class="histonav bi-file-earmark-richtext-fill">
                                                <input type="check" name="abused" value="" hidden>
                                            </i></button>

                                        <button class="nav-link" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence"
                                            type="button"role="tab"aria-controls="nav-presence"aria-selected="false" title="notas aclaratorias">
                                            <i class="histonav bi-chat-dots-fill">
                                                <input type="check" name="abused" value="" hidden>
                                            </i> </button>

                                        <button class="nav-link" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence"
                                            type="button"role="tab"aria-controls="nav-presence"aria-selected="false" title="autorización">
                                            <i class="histonav bi-postage-fill">
                                                <input type="check" name="abused" value="" hidden>
                                            </i></button>
                                            
                                        <button class="nav-link" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence"
                                            type="button"role="tab"aria-controls="nav-presence"aria-selected="false" title="solicitúd autorización servicios salud">
                                            <i class="histonav bi-hospital">
                                                <input type="check" name="abused" value="" hidden>
                                            </i> </button>

                                        <button class="nav-link" id="nav-presence-tab"data-bs-toggle="tab"data-bs-target="#nav-presence"
                                            type="button"role="tab"aria-controls="nav-presence"aria-selected="false" title="archivos">
                                            <i class="histonav bi-file-earmark-zip-fill">
                                                <input type="check" name="abused" value="" hidden>
                                            </i></button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active p-2" id="nav-medicalbond"role="tabpanel" aria-labelledby="nav-medicalbond-tab">
                                        {{-- VINCULACION  --}}
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="row">
                                                <label for="eps" class="form-label col-sm-9 col-md-8"> Entidad </label>
                                                    <div class="form-check col-sm-3 col-md-4 d-inline-flex flex-row-reverse" id="check">
                                                        <label class="form-label"for="capitado">
                                                            Capitado 
                                                        </label>
                                                        <input class="form-check-input" name="capitado" id="capitado"type="checkbox"size="10px" value="{{ old('dni') }}" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control col-sm-9 align-bottom"width="" name="eps" id="eps" placeholder="Entidad">

                                            </div> 
                                            
                                            <div class="col-sm-3">
                                                <label for="epstype" class="form-label"> Regimen </label>
                                                <select class="form-select" name="epstype" id="epstype" aria-label="">
                                                    <option selected value="{{ old('dni') }}">Seleccione tipo</option>
                                                    <option value="C">Contribuitivo</option>
                                                    <option value="S">Subsidiado</option>
                                                </Select>
                                            </div> 
                                            <div class="col-sm-3">
                                                <label for="contract" class="form-label"> Contrato </label>
                                                <select class="form-select" name="contract" id="contract" aria-label="">
                                                    <option selected value="{{ old('dni') }}">Seleccione contrato</option>
                                                    <option value='1'>contrato1</option>
                                                    <option value="2">contrato2</option>
                                                </Select>
                                            </div>
                                            
                                             
                                        </div>
                                        
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <label for="epslevel" class="form-label"> Nivel </label>
                                                <input type="text" class="form-control" name="epslevel" id="epslevel" placeholder="">
                                            </div> 
                                            <div class="col-sm-4">
                                                <label for="policy" class="form-label"> Poliza </label>
                                                <input type="text" class="form-control" name="policy" id="policy" placeholder="">
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="membertype" class="form-label"> Tipo Afiliado </label>
                                                <input type="text" class="form-control" name="membertype" id="membertype" placeholder="">
                                            </div> 
                                        </div>
                                        <div class="row">

                                            <div class="col-sm-4">
                                                <label for="contributor" class="form-label"> Cotizante </label>
                                                <input type="text" class="form-control" name="contributor" id="contributor" placeholder="">
                                            </div> 
                                            <div class="col-sm-4">
                                                <label for="Ips" class="form-label"> IPS </label>
                                                <select class="form-select" name="Ips" id="Ips" aria-label="">
                                                    <option selected value="{{ old('dni') }}">Seleccione Ips</option>
                                                    <option value='Bello'>Hospital mental antioquia (HOMO)</option>
                                                    <option value="Medellin">Ips salud de antioquia</option>
                                                    <option value="Manizales">Ips medellin</option>
                                                </Select>
                                            </div>
                                            <div class="col-sm-4">
                                                <label for="alert" class="form-label"> Alerta </label>
                                                <input type="text" class="form-control" name="alert" id="alert" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade p-2" id="nav-legal"role="tabpanel" aria-labelledby="nav-legal-tab">
                                        {{-- PANEL RESPONSABLE LEGAL --}}
                                        <div class="container mb-3">
                                            <div class="row">

                                                <div class="col-sm-2">
                                                    <label for="legaldocumenttype" class="form-label">Tipo Documento</label>
                                                    <select class="form-select" name="legaldocumenttype" id = "legaldocumenttype" aria-label="legal document type">
                                                    {{-- lv --}}
                                                    @foreach ( $typeDocs as $typeDoc )
                                                    <option value="{{ $typeDoc->id }}"> {{ $typeDoc->name }} </option>
                                                    @endforeach

                                                    </Select>
                                                </div>
                                                <div class="col-sm-3">
                                                    <label for="legaldni" class="form-label"> Numero Identificación </label>
                                                    <input type="text" class="form-control" name="legaldni" id="legaldni" placeholder="No identificación">
                                                </div> 

                                                <div class="col-sm-4">
                                                    <label for="legalname" class="form-label"> Nombre Completo </label>
                                                    <input type="text" class="form-control" name="legalname" id="legalname" placeholder="Nombre responsable">
                                                </div> 

                                                <div class="col-sm-3">
                                                    <label for="kindred" class="form-label">Relación / Parentesco</label>
                                                    <select class="form-select" name="kindred" id = "kindred" aria-label="legal document type">
                                                        <option value="">Seleccion</option>
                                                        <option value='0'>Conyugue</option>
                                                        <option value='1'>Madre</option>
                                                        <option value="2">Padre</option>
                                                        <option value="3">Hija/o</option>
                                                        <option value="4">Hermana/o</option>
                                                        <option value="5">Abuela/o</option>
                                                        <option value="6">Otro</option>
                                                    </Select>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-5">
                                                    <label for="legalphone" class="form-label"> Teléfono </label>
                                                    <input type="text" class="form-control" name="legalphone" id="legalphone" placeholder="Teléfono">
                                                </div> 
                                                <div class="col-sm-7">
                                                    <label for="legaladress" class="form-label"> Teléfono </label>
                                                    <input type="text" class="form-control" name="legaladress" id="legalphone" placeholder="Dirección">
                                                </div> 
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="nav-income"role="tabpanel" aria-labelledby="nav-income-tab">
                                        {{-- PANEL INGRESO --}}
                                        INGRESO
                                    </div>

                                    <div class="tab-pane fade" id="nav-presence"role="tabpanel" aria-labelledby="nav-presence-tab">
                                        {{-- PANEL ASISTENCIA --}}
                                        ASISTENCIA
                                    </div>

                                    <div class="tab-pane fade" id="nav-files"role="tabpanel" aria-labelledby="nav-files-tab">
                                        {{-- PANEL ARCHIVOS --}}
                                        ARCHIVOS
                                    </div>
                                </div>
                            </div>


                            {{-- <x-layouts.miscellaneous.inputdiv 
                            div-class="form-group col-3"
                            fieldname="date_assigned"
                            showname="Fecha"
                            type="date"
                            />
                            
                            <x-layouts.miscellaneous.inputdiv 
                            div-class="form-group col-5"
                            fieldname="fk_user"
                            showname="Profesional"
                            type="text"
                            enable="0"
                            />
                            
                            <x-layouts.miscellaneous.inputdiv 
                            div-class="form-group col-4"
                            fieldname="fk_useraplication"
                            showname="Especialidad"
                            type="text"
                            />
                            
                            <x-layouts.miscellaneous.inputdiv 
                            div-class="form-group col-8"
                            fieldname="fk_auxuser"
                            showname="Asistidio por"
                            type="text"
                            />
                            

                            <div class="form-group col-6">
                                <label for="code">Código</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Código" value="{{ old('code') }}">
                                @error('code')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>            

                            <div class="form-group col-6">
                                <label for="name">Nombre</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="{{ old('name') }}">
                            </div> --}}
                        </div>
                        
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" id="description" name="description" rows="10" placeholder="Descripción">{{ Empty(old('description')) ? '' :  old('description') ; }}</textarea>
                            @error('description')
                                <small class="text-danger"><strong>*{{ $message }}</strong></small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="observation">Observación</label>
                            <textarea class="form-control" id="observation" name="observation" rows="15" placeholder="Observación">{{ Empty(old('observation')) ? '' :  old('observation') ; }}</textarea>
                        </div>

                    </div>
                  </div>
                </main>

                            <x-layouts.formSave :module="$module" />
                            
                        </div>
                    </div>  
                </div>
        </div>
    </form>
     <script src="{{asset('js/patiencrud.js')}}"></script>
</x-header>


