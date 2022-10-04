<x-header
hd-title="Nuevo Paciente"
hd-meta-description="Nuevo Paciente"
>
<form id="patientform" action="{{ route('patients.update',$patient->id) }}" method="POST" class="p-2 form h-100">
    @csrf
    @method('PUT')
        <div class="container bg-light">
            <main>
                <div class="text-center" >
                    <h1  class=""><span class="w-100">Creación de Paciente</span></h1>
                    <hr class="my-1">
                </div>
                <div class="row g-12">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="mb-3">Datos básicos</h4>
                        <p class="lead">Por favor ingrese los datos relacionados al paciente</p>
                        <hr class="my-1 pb-1">
                        <div class="row mt-g-3">
                            {{-- @dump($countries) --}}
                            <div class="col-sm-6">
                                <label for="tdoc" class="form-label">Tipo Documento</label>
                                <select class="form-select" name="tdoc" id="tdoc" aria-label=""
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                required>
                                {{-- LV --}}
                                    @foreach ( $typeDocs as $typeDoc )
                                    <option value="{{ $typeDoc->id }}" {{ $typeDoc->id == $patient->documenttype ? 'selected' : '-' ; }}> {{ $typeDoc->name }} </option>
                                    @endforeach
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="dni" class="form-label">Número Documento</label>
                                <input type="text" class="form-control" name="dni" id="dni" placeholder="Número Documento" value="{{ $patient->dni }}"
                                oninvalid="this.setCustomValidity('Por favor ingrese un número de documento valido')" 
                                required>
                            </div>

                            <div class="col-sm-3">
                                <label for="documentplace" class="form-label">Lugar Expedición</label>
                                <select class="form-select" name="documentplace" id="documentplace" aria-label="">
                                    <option value='Medellin' {{ $patient->documentplace == 'Medellin'  ? 'selected':''; }} >Medellin</option>
                                    <option value='Bello' {{ $patient->documentplace == 'Bello'  ? 'selected':''; }} >Bello</option>
                                    <option value='Sabaneta' {{ $patient->documentplace == 'Sabaneta'  ? 'selected':''; }} >Sabaneta</option>
                                    <option value='Rionegro' {{ $patient->documentplace == 'Rionegro' ? 'selected':''; }} >Rionegro</option>
                                </Select>
                            </div>

                            <div class="col-sm-6">
                                <label for="name" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="Nombres" value="{{ $patient->name }}"
                                oninvalid="this.setCustomValidity('Por favor ingrese un nombre valido')" 
                                required>
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Apellidos" value="{{ $patient->lastname }}"
                                oninvalid="this.setCustomValidity('Por favor ingrese un apellido valido')" 
                                required>
                            </div>
                            <div class="w-100 mt-2"></div>
                            <div class="col-sm-3">
                                <label for="gender" class="form-label">Género</label>
                                <select class="form-select" name="gender" id="gender" 
                                    aria-label="">
                                    <option value=""  >Genero</option>
                                    <option value='0' {{ $patient->gender == 0 ? 'selected':''; }} >Mujer</option>
                                    <option value="1" {{ $patient->gender == 1 ? 'selected':''; }} >Hombre</option>
                                    <option value="2" {{ $patient->gender == 2 ? 'selected':''; }} >Otro</option>
                                </Select>
                            </div>
                            <div class="col-sm-3">
                                <label for="borndate" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="borndate" id="borndate" placeholder="" value="{{ $patient->borndate }}">
                            </div>

                            <div class="col-sm-3">
                                <label for="age" class="form-label">Edad</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="Edad" value="{{ $patient->age }}" onlyread>
                            </div>

                            <div class="col-sm-3">
                                <label for="academiclevel" class="form-label">Escolaridad</label>
                                <select class="form-select" name="academiclevel" id="academiclevel" aria-label=""
                                    oninput="setCustomValidity('')">
                                    <option selected value="{{ $patient->academiclevel }}">Seleccione Nivel</option>
                                    <option value='0' {{ $patient->academiclevel == 0 ? 'selected' : '' ; }} >Primaria</option>
                                    <option value="1" {{ $patient->academiclevel == 1 ? 'selected' : '' ; }} >Bachillerato</option>
                                    <option value="2" {{ $patient->academiclevel == 2 ? 'selected' : '' ; }} >Secundaria</option>
                                    <option value="3" {{ $patient->academiclevel == 3 ? 'selected' : '' ; }} >Profesional</option>
                                    <option value="4" {{ $patient->academiclevel == 4 ? 'selected' : '' ; }} >Especialización</option>

                                </Select>
                            </div>
                            
                            <div class="col-sm-3">
                                <label for="borncountry" class="form-label">Pais de nacimiento</label>
                                @if ( auth()->check() )       
                                    <select class="form-select" name="borncountry" id="borncountry" aria-label="">
                                        <option value='Colombia' {{ $patient->fkborncountry == 'Colombia'  ? 'selected':''; }} >Colombia</option>
                                        <option value='Chile' {{ $patient->fkborncountry == 'Chile'  ? 'selected':''; }} >Chile</option>
                                        <option value='Venezuela' {{ $patient->fkborncountry == 'Venezuela'  ? 'selected':''; }} >Venezuela</option>
                                        <option value='India' {{ $patient->fkborncountry == 'India' ? 'selected':''; }} >India</option>
                                    </Select>
                                @endif
                            </div>

                            <div class="col-sm-3">
                                <label for="bornstate" class="form-label">Depto de nacimiento</label>
                                <select class="form-select" name="bornstate" id="bornstate" aria-label="">
                                    <option value='Antioquia' {{ $patient->fkbornstate == 'Antioquia' ? 'selected':''; }} >Antioquia</option>
                                    <option value='Santander' {{ $patient->fkbornstate == 'Santander' ? 'selected':''; }} >Santander</option>
                                    <option value='Cundinamarca' {{ $patient->fkbornstate == 'Cundinamarca' ? 'selected':''; }} >Cundinamarca</option>
                                    <option value='Rionegro' {{ $patient->fkbornstate == 'Rionegro' ? 'selected':''; }} >Rionegro</option>
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="borncity" class="form-label">Ciudad de nacimiento</label>
                                <select class="form-select" name="borncity" id="borncity" aria-label="">
                                    <option value='Medellin' {{ $patient->fkborncity == 'Medellin'  ? 'selected':''; }} >Medellin</option>
                                    <option value='Bello' {{ $patient->fkborncity == 'Bello'  ? 'selected':''; }} >Bello</option>
                                    <option value='Sabaneta' {{ $patient->fkborncity == 'Sabaneta'  ? 'selected':''; }} >Sabaneta</option>
                                    <option value='Rionegro' {{ $patient->fkborncity == 'Rionegro' ? 'selected':''; }} >Rionegro</option>
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="job" class="form-label">Ocupación</label>
                                <select class="form-select" name="job" id="job" aria-label="">
                                    <option value="Obrero" {{ $patient->job == 'Obrero'  ? 'selected':''; }}>Obrero</option>
                                    <option value="Paletero" {{ $patient->job == 'Paletero'  ? 'selected':''; }}>Paletero</option>
                                    <option value="Gerente" {{ $patient->job == 'Gerente'  ? 'selected':''; }}>Gerente</option>
                                    <option value="Estudiante" {{ $patient->job == 'Estudiante'  ? 'selected':''; }}>Estudiante</option>
                                    <option value="Ninguna" {{ $patient->job == 'Ninguna'  ? 'selected':''; }}>Ninguna</option>
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="livecontry" class="form-label">Pais de Residencia</label>
                                <select class="form-select" name="livecontry" id="livecontry" aria-label="" >
                                    <option value='Colombia' {{ $patient->fklivecountry == 'Colombia'  ? 'selected':''; }} >Colombia</option>
                                    <option value='Chile' {{ $patient->fklivecountry == 'Chile'  ? 'selected':''; }} >Chile</option>
                                    <option value='Venezuela' {{ $patient->fklivecountry == 'Venezuela'  ? 'selected':''; }} >Venezuela</option>
                                    <option value='India' {{ $patient->fklivecountry == 'India' ? 'selected':''; }} >India</option> 
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="livestate" class="form-label">Depto de Residencia</label>
                                <select class="form-select" name="livestate" id="livestate" aria-label="">
                                    <option value='Antioquia' {{ $patient->fklivestate == 'Antioquia' ? 'selected':''; }} >Antioquia</option>
                                    <option value='Santander' {{ $patient->fklivestate == 'Santander' ? 'selected':''; }} >Santander</option>
                                    <option value='Cundinamarca' {{ $patient->fklivestate == 'Cundinamarca' ? 'selected':''; }} >Cundinamarca</option>
                                    <option value='Rionegro' {{ $patient->fklivestate == 'Rionegro' ? 'selected':''; }} >Rionegro</option>
                                </Select>
                            </div>

                            <div class="col-sm-3">
                                <label for="livecity" class="form-label">Ciudad de Residencia</label>
                                <select class="form-select" name="livecity" id="livecity" aria-label="" >
                                    <option value='Medellin' {{ $patient->fklivecity == 'Medellin'  ? 'selected':''; }} >Medellin</option>
                                    <option value='Bello' {{ $patient->fklivecity == 'Bello'  ? 'selected':''; }} >Bello</option>
                                    <option value='Sabaneta' {{ $patient->fklivecity == 'Sabaneta'  ? 'selected':''; }} >Sabaneta</option>
                                    <option value='Rionegro' {{ $patient->fklivecity == 'Rionegro' ? 'selected':''; }} >Rionegro</option>
                                </Select>
                            </div>

                            
                            <div class="col-sm-3">
                                <label for="civilsate" class="form-label">Estado Civil</label>
                                <select class="form-select" name="civilsate" id="civilsate" aria-label="" >
                                    <option value='0' {{ $patient->civilsate == 0 ? 'selected' : '' ; }}>Soltero</option>
                                    <option value='1' {{ $patient->civilsate == 1 ? 'selected' : '' ; }}>Casado</option>
                                    <option value='2' {{ $patient->civilsate == 2 ? 'selected' : '' ; }}>Viudo</option>
                                </Select>
                            </div>


                            <div class="col-sm-12">
                                <label for="address" class="form-label">Dirección </label>
                                <input type="text" class="form-control" name="address" id="address" placeholder="Dirección"
                                value="{{ $patient->address }}">
                            </div> 

                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Teléfono </label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Teléfono"
                                value="{{ $patient->phone }}" 
                                oninvalid="this.setCustomValidity('Es necesario ingresar un número de teléfono')" 
                                oninput="this.setCustomValidity('')" 
                                required>
                            </div> 

                            <div class="col-sm-6">
                                <label for="cellphone" class="form-label">Celular </label>
                                <input type="text" class="form-control" name="cellphone" id="cellphone" placeholder="Celular"
                                value="{{ $patient->cellphone }}" 
                                
                                >
                            </div> 

                            <div class="col-sm-6">
                                <label for="mail" class="form-label">Email </label>
                                <input type="text" class="form-control" name="mail" id="mail" placeholder="Email"
                                value="{{ $patient->email }}" 
                                >
                            </div> 

                            <div class="col-sm-6">
                                <label for="maileb" class="form-label">Facturación electronica </label>
                                <input type="text" class="form-control" name="maileb" id="maileb" placeholder="Email Facturación"
                                value="{{ $patient->emailfa }}" 
                                >
                            </div> 

                            <div class="col-sm-12 mt-2 mb-2">
                                <nav id="patientoptions">
                                    <div class="nav nav-tabs col-12"  id="nav-tab" role="tablist">
                                        <button class="nav-link col-sm-2 active" id="nav-medicalbond-tab" data-bs-toggle="tab" data-bs-target="#nav-medicalbond" 
                                            type="button" role="tab" aria-controls="nav-medicalbond" aria-selected="true">Vinculación</button>
                                        <button class="nav-link col-sm-2" id="nav-legal -tab" data-bs-toggle="tab" data-bs-target="#nav-legal" 
                                            type="button" role="tab" aria-controls="nav-income" aria-selected="false">Responsable</button>
                                        <button class="nav-link col-sm-2" id="nav-income-tab" data-bs-toggle="tab" data-bs-target="#nav-income" 
                                            type="button" role="tab" aria-controls="nav-income" aria-selected="false">Ingreso</button>
                                        <button class="nav-link col-sm-2" id="nav-files-tab" data-bs-toggle="tab" data-bs-target="#nav-files" 
                                            type="button" role="tab" aria-controls="nav-files" aria-selected="false">Archivos</button>
                                        <button class="nav-link col-sm-2" id="nav-presence-tab" data-bs-toggle="tab" data-bs-target="#nav-presence" 
                                            type="button" role="tab" aria-controls="nav-presence" aria-selected="false">Asistentes</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active p-2" id="nav-medicalbond" role="tabpanel" aria-labelledby="nav-medicalbond-tab">
                                        {{-- VINCULACION  --}}
                                        <div class="row">
                                            <div class="col-sm-6">

                                                <div class="row">
                                                <label for="eps" class="form-label col-sm-9 col-md-8"> Entidad </label>
                                                    <div class="form-check col-sm-3 col-md-4 d-inline-flex flex-row-reverse" id="check">
                                                        <label class="form-label" for="capitado">
                                                            Capitado 
                                                        </label>
                                                        <input class="form-check-input" name="capitado" id="capitado" type="checkbox" size="10px" value="{{ $patient->dni }}" id="flexCheckDefault">
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control col-sm-9 align-bottom" width="" name="eps" id="eps" placeholder="Entidad">

                                            </div> 
                                            
                                            <div class="col-sm-3">
                                                <label for="epstype" class="form-label"> Regimen </label>
                                                <select class="form-select" name="epstype" id="epstype" aria-label="" >
                                                    <option value="C">Contribuitivo</option>
                                                    <option value="S">Subsidiado</option>
                                                </Select>
                                            </div> 
                                            <div class="col-sm-3">
                                                <label for="contract" class="form-label"> Contrato </label>
                                                <select class="form-select" name="contract" id="contract" aria-label="" >
                                                    <option selected value="{{ $patient->dni }}">Seleccione contrato</option>
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
                                                <select class="form-select" name="Ips" id="Ips" aria-label="" >
                                                    <option selected value="{{ $patient->dni }}">Seleccione Ips</option>
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

                                    <div class="tab-pane fade p-2" id="nav-legal" role="tabpanel" aria-labelledby="nav-legal-tab">
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
                                                    <select class="form-select" name="kindred" id = "kindred" aria-label="legal document type" 
                                                    oninput="setCustomValidity('')" >
                                                        <option value='0' {{ $patient->kindred == 0 ? 'selected' : '' ; }}>Conyugue</option>
                                                        <option value='1' {{ $patient->kindred == 1 ? 'selected' : '' ; }}>Madre</option>
                                                        <option value="2" {{ $patient->kindred == 2 ? 'selected' : '' ; }}>Padre</option>
                                                        <option value="3" {{ $patient->kindred == 3 ? 'selected' : '' ; }}>Hija/o</option>
                                                        <option value="4" {{ $patient->kindred == 4 ? 'selected' : '' ; }}>Hermana/o</option>
                                                        <option value="5" {{ $patient->kindred == 5 ? 'selected' : '' ; }}>Abuela/o</option>
                                                        <option value="6" {{ $patient->kindred == 6 ? 'selected' : '' ; }}>Otro</option>
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

                                    <div class="tab-pane fade" id="nav-income" role="tabpanel" aria-labelledby="nav-income-tab">
                                        {{-- PANEL INGRESO --}}
                                        INGRESO
                                    </div>

                                    <div class="tab-pane fade" id="nav-presence" role="tabpanel" aria-labelledby="nav-presence-tab">
                                        {{-- PANEL ASISTENCIA --}}
                                        ASISTENCIA
                                    </div>

                                    <div class="tab-pane fade" id="nav-files" role="tabpanel" aria-labelledby="nav-files-tab">
                                        {{-- PANEL ARCHIVOS --}}
                                        ARCHIVOS
                                    </div>

                                    

                                </div>

                            <div class="form-group col-sm-12">
                                <label for="observation" class="form-label">Observacion </label>
                                <textarea rows="3" class="form-control" name="observation" id="observation" placeholder="Observación"></textarea>
                            </div>

                            <div class="col-sm-12 p-1 my-2" id="endbuttons">
                                <a type="button" class="right btn btn-secondary btn-lg col-sm-2" href="{{ route('patientModule') }}">Cancelar</a>
                                <input type="submit" class="right btn btn-success btn-lg col-sm-2 mx-1" Value="Guardar">
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>
     <script src="{{asset('js/patiencrud.js')}}"></script>
</x-header>


