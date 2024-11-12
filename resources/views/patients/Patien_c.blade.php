<x-header hd-title="Nuevo Paciente" hd-meta-description="Nuevo Paciente" :module="$module" :view="$view" csrf=1>
    <form id="patientform" action="{{ route($module . 'Save') }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf
        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" action='NUEVO' alias='PACIENTE' />
            <div class="row g-12">
                <div class="col-md-12 col-lg-12">
                    <div class="row mt-g-3  p-2">

                        <div class="row-flex col-sm-2 d-inline-flex justify-content-center">
                            <div class="avatar-upload">
                                <label class="avatar-preview" for="imageUpload">
                                    <img src="{{ URL::asset('img/logo.png') }}"
                                        alt="Logo Generado forma generica" title="Cick para cargar imagen"
                                        class="img-fluid" id="imagePreview">
                                </label>
                                <div class="avatar-edit">
                                    <input type='file' id="imageUpload" name="imageUpload"
                                        alt="Imagen cargada por el usuario" class="img-fluid"
                                        accept=".png, .jpg, .jpeg" />
                                </div>
                            </div>
                        </div>

                        <div class="container-fluid align-self-end col-sm-10">
                            <div class="row col-12">

                                <div class="col-sm-3">
                                    <label for="tdoc" class="form-label">Tipo Documento</label>
                                    <select class="form-select" name="tdoc" id="tdoc" aria-label="" autofocus>
                                        @foreach ($typeDocs as $typeDoc)
                                            <option value="{{ $typeDoc->id }}" @selected($typeDoc->id == '13')>
                                                {{ $typeDoc->name }}
                                            </option>
                                        @endforeach
                                    </Select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="dni" class="form-label">Número Documento</label>
                                    <input type="text" class="form-control" name="dni" id="dni"
                                        placeholder="Número Documento" value/>
                                    <x-layouts.dialoges.inputerror input='dni' />
                                </div>

                                {{-- <div class="col-sm-3">
                                    <label for="documentplace-country" class="form-label">País Origen</label>
                                    <select  class="form-select geo" name="documentplace-country"
                                        id="documentplace-country" aria-label=""  wire:change="getStates()" wire:model="documentplace-state">
                                        <optgroup label="Seleccione País origen">
                                            <option
                                                value="{{ !old('documentplace-country') ? 'Colombia' : old('documentplace-country') }}">
                                                {{ !old('documentplace-country') ? 'Colombia' : old('documentplace-country') }}
                                            </option> 
                                            @foreach ($countriesResponse as $country)
                                            <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
                                            @endforeach    
                                    </Select>
                                </div> --}}


                                <div class="col-sm-3">
                                    <label for="documentplace-country" class="form-label">País Origen</label>
                                    <select class="form-select geo" name="documentplace-country"
                                        id="documentplace-country" aria-label="">
                                        <optgroup label="Seleccione País origen">
                                            <option value="{{ !old('documentplace-country') ? 'Colombia' : old('documentplace-country') }}">
                                                {{ !old('documentplace-country') ? 'Colombia' : old('documentplace-country') }}
                                            </option> 
                                            @foreach ($countriesResponse as $country)
                                            <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
                                            @endforeach    
                                    </select>
                                </div>
                                

                                <!-----------Probando livewire------------------->


                                {{-- @livewire('show-countries', ['countriesResponse' => $countriesResponse]) --}}


                                <div class="col-sm-3">
                                    <label for="documentplace-state" class="form-label">Departamento / Estado
                                        Origen</label>
                                    <select class="form-select geo" name="documentplace-state" id="documentplace-state"
                                        aria-label="">
                                        <optgroup label="Seleccione Departamento/Estado">
                                            <option
                                                value="{{ !old('documentplace-state') ? 'Antioquia' : old('documentplace-state') }}">
                                                {{ !old('documentplace-state') ? 'Antioquia' : old('documentplace-state') }}
                                            </option>
                                            @foreach ($states as $state)
                                            <option value="{{ $state['state_name'] }}">{{ $state['state_name'] }}</option>
                                            @endforeach 
                                    </Select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="documentplace-city" class="form-label">Ciudad Origen</label>
                                    <select class="form-select geo" name="documentplace-city" id="documentplace-city"
                                        aria-label="" value="{{ old('documentplace-city') }}">
                                        <optgroup label="Seleccione Ciudad Nacimiento">
                                            <option
                                                value="{{ !old('documentplace-city') ? 'Medellín' : old('documentplace-city') }}">
                                                {{ !old('documentplace-city') ? 'Medellín' : old('documentplace-city') }}
                                            </option>
                                            @foreach ($cities as $city)
                                            <option value="{{ $city['city_name'] }}">{{ $city['city_name'] }}</option>
                                            @endforeach 
                                    </Select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="documentlegal-city" class="form-label">Ciudad expedición</label>
                                    <select class="form-select geo" name="documentlegal-city" id="documentlegal-city"
                                        aria-label="">
                                        <optgroup label="Seleccione Ciudad Expedición">
                                            <option
                                                value="{{ !old('documentlegal-city') ? 'Medellín' : old('documentlegal-city') }}">
                                                {{ !old('documentlegal-city') ? 'Medellín' : old('documentlegal-city') }}
                                            </option>
                                            @foreach ($cities as $city)
                                            <option value="{{ $city['city_name'] }}">{{ $city['city_name'] }}</option>
                                            @endforeach 
                                    </Select>
                                </div>



                                <div class="col-sm-3">
                                    <label for="gender" class="form-label">Género</label>
                                    <select class="form-select" name="gender" id="gender" aria-label="">
                                        <option value="0" {{ old('gender') == '' ? 'selected' : '' }}>Seleccione Genero</option>
                                        <option value="1" {{ old('gender') == 0 ? 'selected' : '' }}>Masculino
                                        </option>
                                        <option value="2" {{ old('gender') == 1 ? 'selected' : '' }}>Femenino</option>
                                        <option value="3" {{ old('gender') == 2 ? 'selected' : '' }}>No binario</option>
                                        <option value="4" {{ old('gender') == 3 ? 'selected' : '' }}>No Identifica</option>
                                    </Select>
                                </div>

                                <div class="col-sm-3">
                                    <label for="borndate" class="form-label">Fecha Nacimiento</label>

                                    <div class="input-group input-group-sm">
                                        <input type="date" class="form-control col-2" name="borndate" id="borndate"
                                            placeholder="" value="{{ old('borndate') }}">
                                        <span class="input-group-text col-sm-4" id="basic-addon1">
                                            <input type="number"
                                                class="  form-control-plaintext form-control-sm dissabled text-end"
                                                name="age" id="age" placeholder="Edad"
                                                value="{{ old('age') }}" readonly>
                                        </span>
                                        <x-layouts.dialoges.inputerror input='borndate' />
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nombres" value="{{ old('name') }}">
                                    <x-layouts.dialoges.inputerror input='name' />
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname"
                                        placeholder="Apellidos" value="{{ old('lastname') }}">
                                    <x-layouts.dialoges.inputerror input='lastname' />
                                </div>
                            </div>

                        </div>


                        <div class="w-100 mt-2"></div>

                        <div class="col-sm-3">
                            <label for="academiclevel" class="form-label">Escolaridad</label>
                            <select class="form-select" name="academiclevel" id="academiclevel" aria-label="">
                                <option value="" {{ old('academiclevel') == '' ? 'selected' : '' }}>Seleccione
                                    Nivel</option>
                                <option value="0" {{ old('academiclevel') == 0 ? 'selected' : '' }}>Primaria
                                </option>
                                <option value="1" {{ old('academiclevel') == 1 ? 'selected' : '' }}>Bachillerato
                                </option>
                                <option value="2" {{ old('academiclevel') == 2 ? 'selected' : '' }}>Secundaria
                                </option>
                                <option value="3" {{ old('academiclevel') == 3 ? 'selected' : '' }}>Profesional
                                </option>
                                <option value="4" {{ old('academiclevel') == 4 ? 'selected' : '' }}>
                                    Especialización</option>
                            </Select>
                        </div>

                        <div class="col-sm-3">
                            <label for="job" class="form-label">Ocupación</label>
                            <select class="form-select" name="job" id="job" aria-label="">
                                <option value="" {{ old('job') == '' ? 'selected' : '' }}>Seleccione Ocupación
                                </option>
                                <option value="Obrero" {{ old('job') == 'Obrero' ? 'selected' : '' }}>Obrero</option>
                                <option value="Paletero" {{ old('job') == 'Paletero' ? 'selected' : '' }}>Paletero
                                </option>
                                <option value="Gerente" {{ old('job') == 'Gerente' ? 'selected' : '' }}>Gerente
                                </option>
                                <option value="Estudiante" {{ old('job') == 'Estudiante' ? 'selected' : '' }}>
                                    Estudiante</option>
                                <option value="Ninguna" {{ old('job') == 'Ninguna' ? 'selected' : '' }}>Ninguna
                                </option>
                            </Select>
                        </div>

                        <div class="col-sm-3">
                            <label for="live-country" class="form-label">País de Residencia</label>
                            <select class="form-select geo" name="live-country" id="live-country" aria-label="">
                                <optgroup label="Seleccione País">
                                    <option value="{{ !old('live-city') ? 'Colombia' : old('live-city') }}">
                                        {{ !old('live-city') ? 'Colombia' : old('live-city') }}
                                    </option>
                                            @foreach ($countriesResponse as $country)
                                            <option value="{{ $country['country_name'] }}">{{ $country['country_name'] }}</option>
                                            @endforeach 
                            </Select>
                        </div>




                        <!------------------LISTADO DE DEPARTAMENTOS ESTA SE REEMPLAZARA POR UN LISTADO TRAIDO DESDE LA BASE DE DATOS------------->

                        <div class="col-sm-3">
                            <label for="live-state" class="form-label">Depto de Residencia</label>
                            <select class="form-select geo" name="live-state" id="live-state" aria-label="">
                                {{-- <optgroup label="Seleccione Estado/Departamento">
                                    <option value="{{ !old('live-state') ? 'Antioquia' : old('live-state') }}">
                                        {{ !old('live-state') ? 'Antioquia' : old('live-state') }}
                                    </option> --}}
                                    <option value="0" {{ old('live-state') == '' ? 'selected' : '' }}>ANTIOQUIA</option>
                                    <option value="1" {{ old('live-state') == 0 ? 'selected' : '' }}>AMAZONAS</option>
                                    <option value="2" {{ old('live-state') == 1 ? 'selected' : '' }}>ARAUCA</option>
                                    <option value="3" {{ old('live-state') == 2 ? 'selected' : '' }}>ATLÁNTICO</option>
                                    <option value="4" {{ old('live-state') == 3 ? 'selected' : '' }}>BOLÍVAR</option>
                                    <option value="5" {{ old('live-state') == 3 ? 'selected' : '' }}>BOYACÁ</option>
                                    <option value="6" {{ old('live-state') == 3 ? 'selected' : '' }}>CALDAS</option>
                            </Select>
                        </div>

                        <div class="col-sm-3">
                            <label for="live-city" class="form-label">Ciudad de Residencia</label>
                            <select class="form-select geo" name="live-city" id="live-city" aria-label="">
                                <optgroup label="Seleccione Ciudad">
                                    <option value="{{ !old('live-city') ? 'Medellín' : old('live-city') }}">
                                        {{ !old('live-city') ? 'Medellín' : old('live-city') }}
                                    </option>
                            </Select>
                        </div>




                       <!------------------LISTADO DE ACCIONES PARA ESTADO CIVIL------------->

                        <div class="col-sm-3">
                            <label for="civilstate" class="form-label">Estado Civil</label>
                            <select class="form-select" name="civilstate" id="civilstate" aria-label="">
                                <option value="" {{ old('civilstate') == '' ? 'selected' : '' }}>Seleccione
                                    Estado</option>
                                <option value="0" {{ old('civilstate') == 0 ? 'selected' : '' }}>Soltero
                                </option>
                                <option value="1" {{ old('civilstate') == 1 ? 'selected' : '' }}>Casado</option>
                                <option value="2" {{ old('civilstate') == 2 ? 'selected' : '' }}>Viudo</option>
                                <option value="3" {{ old('civilstate') == 3 ? 'selected' : '' }}>Union libre</option>
                            </Select>
                        </div>





                        <div class="col-sm-6">
                            <label for="address" class="form-label">Dirección </label>
                            <input type="text" class="form-control" name="address" id="address"
                                placeholder="Dirección" value="{{ old('address') }}">
                        </div>

                        <div class="col-sm-6">
                            <label for="phone" class="form-label">Teléfono </label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                placeholder="Teléfono" value="{{ old('phone') }}">
                        </div>

                        <div class="col-sm-6">
                            <label for="cellphone" class="form-label">Celular </label>
                            <input type="text" class="form-control" name="cellphone" id="cellphone"
                                placeholder="Celular" value="{{ old('cellphone') }}"  required>
                            <x-layouts.dialoges.inputerror input='cellphone' />

                        </div>

                       <!------SE AGREGA UN SCRIPT DE VALIDACION PARA EL NUMERO CELULAR INGRESADO----->

                       <script>
                        // Obtenemos el campo celular 
                        const cellphoneInput = document.getElementById('cellphone');
                    
                        // se realiza el llamado al evento input
                        cellphoneInput.addEventListener('input', function() {
                            //Obtenemos el valor ingresado en el campo del celular
                            const cellphoneValue = cellphoneInput.value.trim();
                            
                            // Validamos que este inicie con el 3 
                            if (!cellphoneValue.startsWith('3')) {
                                // Mostrar un mensaje de error si el número de celular es incorrecto
                                cellphoneInput.setCustomValidity('El número de celular debe iniciar con "3"');
                            } else {
                                // Borrar el mensaje de error si el número de celular es correcto
                                cellphoneInput.setCustomValidity('');
                            }
                        });
                    </script>

                        <div class="col-sm-6">
                            <label for="mail" class="form-label">Email </label>
                            <input type="email" class="form-control" name="mail" id="mail"
                                placeholder="Email" value="{{ old('mail') }}">
                        </div>

                        <div class="col-sm-6">
                            <label for="maileb" class="form-label">Facturación electronica </label>
                            <input type="email" class="form-control" name="maileb" id="maileb"
                                placeholder="Email Facturación" value="{{ old('maileb') }}">
                        </div>

                        <div class="container-sm mt-2">

                            <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->
                 
                <div class="row">

                    <label for="opciones" class="form-label"><strong>Indicaciones especiales:</strong></label><br>

                    <!-- Checkboxes -->

                    <!--------Checkbox asignado para marcacion como violencia------>
                    <div class="col-2">
                        <input type="checkbox" id="opcion0" name="opciones[]"  class="patientAlert btn btn-sm btn-{{ old('violence') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Violencia" id="violence" value="opcion0">
                        <i class="bi bi-bandaid-fill">
                            <input type="checkbox" name="violence" value="false" @checked(old('violence')) hidden>
                        </i>
                        <label for="opcion0">Violencia</label><br>
                    </div>

                    <!--------Checkbox asignado para marcacion de codigo fucsia------>
                    <div class="col-2">
                        <input type="checkbox" id="opcion1" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('abused') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Código Fucsia" id="abusedButton" value="opcion1">
                        <i class="bi bi-exclamation-diamond-fill">
                            <input type="checkbox" name="abused" value="false" @checked(old('abused')) hidden>
                        </i>
                        <label for="opcion1">Codigo Fucsia</label><br>
                       </div>

                       <!--------Checkbox asignado para marcacion de Medicina Laboral------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion2" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('fromwork') == true ? 'primary' : 'secondary'  }} toggle-button"
                        title="Medicina Laboral" id="fromwork" value="opcion2">
                        <i class="bi bi-prescription2">
                            <input type="checkbox" name="fromwork" value="false" @checked(old('fromwork')) hidden>
                        </i>
                        <label for="opcion2">Medicina laboral</label><br>
                       </div>


                       <!--------Checkbox asignado para marcacion de Tutela------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion3" name="opciones[]"  class="patientAlert btn btn-sm btn-{{ old('guardianship') == true ? 'primary' : 'secondary' }} toggle-button "
                        title="Tutela" id="guardianship" value="opcion3">
                        <i class="bi bi-file-earmark-zip-fill">
                            <input type="checkbox" name="guardianship" value="false" @checked(old('guardianship')) hidden>
                        </i>
                        <label for="opcion3">Tutela</label><br>
                       </div>


                       <!--------Checkbox asignado para marcacion de Privados de Libertad------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion4" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('gaoler') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Privados Libertad" id="gaoler" value="opcion4">
                        <i class="bi bi-door-closed-fill">
                            <input type="checkbox" name="gaoler" value="false" @checked(old('gaoler')) hidden>
                        </i>
                        <label for="opcion4">Privado libertad</label><br>
                       </div> 
                       
                       
                       <!--------Checkbox asignado para marcacion de ICBF------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion5" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('icbf') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="ICBF" id="icbf" value="opcion5">
                        <i class="bi bi-file-earmark-person-fill">
                            <input type="checkbox" name="icbf" value="false" @checked(old('icbf')) hidden>
                        </i>
                        <label for="opcion5">ICBF</label><br>
                       </div>


                       <!--------Checkbox asignado para marcacion de Gestantes------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion6" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('pregnant') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Gestante" id="pregnant" value="opcion6">
                        <i class="bi bi-balloon-fill">
                            <input type="checkbox" name="pregnant" value="false" @checked(old('pregnant')) hidden>
                        </i>
                        <label for="opcion6">Gestante</label><br>
                       </div>



                       <!--------Checkbox asignado para marcacion de Riesgo Suicida------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion7" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('suicide') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Riesgo Suicida" id="suicide" value="opcion7">
                        <i class="bi bi-emoji-frown-fill">
                            <input type="checkbox" name="suicide" value="false" @checked(old('suicide')) hidden>
                        </i>
                        <label for="opcion7">Riesgo Suicida</label><br>
                       </div>


                       <!--------Checkbox asignado para marcacion de Paciente VIP------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion8" name="opciones[]"  class="patientAlert btn btn-sm btn-{{ old('vip') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Paciente VIP" id="vip" value="opcion8">
                        <i class="bi bi-star-fill">
                            <input type="checkbox" name="vip" value="false" @checked(old('vip')) hidden>
                        </i>
                        <label for="opcion8">Paciente VIP</label><br>
                       </div>




                       <!--------Checkbox asignado para marcacion de Asesoria Virtual------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion9" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('virtualadvice') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Asesoria Virtual" id="virtualadvice" value="opcion9">
                        <i class="bi bi-pc-display">
                            <input type="checkbox" name="virtualadvice" value="false" @checked(old('virtualadvice')) hidden>
                        </i>
                        <label for="opcion9">Asesoria Virtual</label><br>
                       </div>

                        <!--------Checkbox asignado para marcacion de Consulta Externa------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion10" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('external') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Consulta Externa" id="external" value="opcion10">
                        <i class="bi bi-person-video2">
                            <input type="checkbox" name="external" value="false" @checked(old('external')) hidden>
                        </i>
                        <label for="opcion10">Consulta Externa</label><br>
                       </div>



                       <!--------Checkbox asignado para marcacion de Hospitalizaciòn------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion11" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('hospitalitation') == true ? 'primary' : 'secondary' }} toggle-button"
                        title="Hospitalización" id="hospitalitation" value="opcion11">
                        <i class="bi bi-h-circle-fill">
                            <input type="checkbox" name="hospitalitation" value="false" @checked(old('hospitalitation')) hidden>
                        </i>
                        <label for="opcion11">Hospitalización</label><br>
                       </div>

                       <!--------Checkbox asignado para marcacion de Red Externa------>
                       <div class="col-2">
                        <input type="checkbox" id="opcion12" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('externalTeam') == true ? 'primary' : 'secondary' }} toggle-button"
                         title="Red Externa" id="externalTeam" value="opcion12">
                         <i class="bi bi-file-medical-fill">
                            <input type="checkbox" name="externalTeam" value="false" @checked(old('externalTeam')) hidden>
                         </i>
                         <label for="opcion12">Red Externa</label><br>
                        </div>


                       <!--------Checkbox asignado para marcacion de CENPI(<14)----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion13" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('cenpi') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="CENPI (<14)" id="cenpi" value="opcion13">
                            <i class="bi bi-emoji-laughing-fill">
                                <input type="checkbox" name="cenpi" value="false" @checked(old('cenpi')) hidden>
                            </i>
                            <label for="opcion13">CENPI(<14)</label><br>
                        </div>




                        <!-----  SE AGREGA VALIDACION DE MARCACION AUTOMATICA CUANDO LA EDAD DEL USUARIO REGISTRADO ES IGUAL O MENOR A 14 AÑOS------>

                        <script>
                            // Se obtiene la fecha de nacimiento en base a la ingresada
                            const borndateInput = document.getElementById('borndate');
                            const ageInput = document.getElementById('age');
                            const cenpiCheckbox = document.getElementById('opcion13');
                        
                            borndateInput.addEventListener('change', function() {
                                const dob = new Date(borndateInput.value);
                                const today = new Date();
                                const age = today.getFullYear() - dob.getFullYear();
                                //Se valida si la edad es menor o igual a 14
                                if (age <= 14) {
                                    cenpiCheckbox.checked = true; // Marcar automáticamente el checkbox
                                } else {
                                    cenpiCheckbox.checked = false; // Desmarcar el checkbox
                                }
                        
                                // Actualizar el valor de la edad
                                ageInput.value = age;
                            });
                        </script>


                        <!--------Checkbox asignado para marcacion de SRPA(Adolescentes)----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion14" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('srpa') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="SRPA (Adolecentes)" id="srpa" value="opcion14">
                            <i class="bi bi-earbuds">
                                <input type="checkbox" name="srpa" value="false" @checked(old('srpa')) hidden>
                            </i>
                            <label for="opcion14">SRPA(Adolescentes)</label><br>
                        </div>


                        <!--------Checkbox asignado para marcacion de Busqueda Activa----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion15" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('activeselection') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Búsqueda Activa" id="activeselection" value="opcion15">
                            <i class="bi-binoculars-fill">
                                <input type="checkbox" name="activeselection" value="false" @checked(old('activeselection')) hidden>
                            </i>
                            <label for="opcion15">Busqueda Activa</label><br>
                        </div>


                           
                        <!--------Checkbox asignado para marcacion de Directo Prestador----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion16" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('through') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Directo Prestador" id="through" value="opcion16">
                            <i class="bi bi-signpost-fill">
                                <input type="checkbox" name="through" value="false" @checked(old('through')) hidden>
                            </i>
                            <label for="opcion16">Directo Prestador</label><br>
                        </div>


                        <!--------Checkbox asignado para marcacion de Particular----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion17" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('particular') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Particular" id="particular" value="opcion17">
                            <i class="bi bi-clipboard2-pulse-fill">
                                <input type="checkbox" name="particular" value="false" @checked(old('particular')) hidden>
                            </i>
                            <label for="opcion17">Particular</label><br>
                        </div>


                        <!--------Checkbox asignado para marcacion de Punta Piramide----->
                        <div class="col-2">
                            <input type="checkbox" id="opcion18" name="opciones[]" class="patientAlert btn btn-sm btn-{{ old('pyramid') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Punta Piramide" id="pyramid" value="opcion18">
                            <i class="bi bi-triangle-half">
                                <input type="checkbox" name="pyramid" value="false" @checked(old('pyramid')) hidden>
                            </i>
                            <label for="opcion18">Punta Piramide</label><br>
                        </div>



                        <!--------Checkbox asignado para marcacion de Autoriza Llamadas----->
                        <div class="col-2">
                            <input type="checkbox" id="" name="" class="patientAlert btn btn-sm btn-{{ old('phoneAutorized') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Autoriza Llamadas" id="phoneAutorized" value="">
                            <i class="bi bi-telephone-outbound-fill">
                                <input type="checkbox" name="phoneAutorized" value="false" @checked(old('phoneAutorized')) hidden>
                            </i>
                            <label for="">Autoriza Llamadas</label><br>
                        </div>


                        <!--------Checkbox asignado para marcacion de Autoriza Correos----->
                        <div class="col-2">
                            <input type="checkbox" id="" name="" class="patientAlert btn btn-sm btn-{{ old('mailAutorized') == true ? 'primary' : 'secondary' }} toggle-button"
                            title="Autoriza Correos" id="mailAutorized" value="">
                            <i class="bi bi-envelope-check-fill">
                                <input type="checkbox" name="mailAutorized" value="false" @checked(old('mailAutorized')) hidden>
                            </i>
                            <label for="">Autoriza Correos</label><br>
                        </div>


                        <!--------Checkbox asignado para marcacion Sin asignación----->
                        <div class="col-2">
                            <input type="checkbox" id="" name="" class="patientAlert btn btn-sm btn-secondary"
                            title="Sin asignación" id="">
                            <i class="bi bi-slash-circle-fill">
                            </i>
                            <label for="">Sin Asignación</label><br>
                        </div>


                         <!--------Checkbox asignado para marcacion Sin asignación----->
                         <div class="col-2">
                            <input type="checkbox" id="" name="" class="patientAlert btn btn-sm btn-secondary"
                            title="Sin asignación" id="">
                            <i class="bi bi-slash-circle-fill">
                            </i>
                            <label for=""">Sin Asignación</label><br>
                        </div>

                         <!--------Checkbox asignado para marcacion Sin asignación----->
                         <div class="col-2">
                            <input type="checkbox" id="" name="" class="patientAlert btn btn-sm btn-secondary"
                            title="Sin asignación" id="">
                            <i class="bi bi-slash-circle-fill">
                            </i>
                            <label for="">Sin Asignación</label><br>
                        </div>
                        

                </div>

                <hr class="my-4">


                <script>
                document.addEventListener("DOMContentLoaded", function () {
        
                // Manejar cambio sobre los checkbox
                 var opcionesCheckboxes = document.getElementsByName("opciones[]");
                 for (var i = 0; i < opcionesCheckboxes.length; i++) {
                    opcionesCheckboxes[i].addEventListener("change", function () {
                       
                    });
                 }
                });
                </script>







                {{-- Botones de prueba para eventos diversos
                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++
                    +++++++++++++++++++++++++++++++++++++++++++++++++++++++++ --}}

                    {{-- <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('abused') == true ? 'primary' : 'secondary' }}"
                                            title="Código Fucsia" id="abused">
                                            <i class="bi bi-exclamation-diamond-fill">
                                                <input type="checkbox" name="abused" value="false"
                                                    @checked(old('abused')) hidden>
                                            </i>
                                        </button>
                                    </div> --}}


                            {{-- <div class="col-sm-12 m-2" id="gbuttonbar">

                                <div class="row">

                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('violence') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Violencia" id="violence">
                                            <i class="bi bi-bandaid-fill">
                                                <input type="checkbox" name="violence" value="false"
                                                    @checked(old('violence')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    



                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('abused') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Código Fucsia" id="abusedButton">
                                            <i class="bi bi-exclamation-diamond-fill">
                                                <input type="checkbox" name="abused" value="false" @checked(old('abused')) hidden>
                                            </i>
                                        </button>
                                    </div>



                                    




                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('fromwork') == true ? 'primary' : 'secondary'  }} toggle-button"
                                            title="Medicina Laboral" id="fromwork">
                                            <i class="bi bi-prescription2">
                                                <input type="checkbox" name="fromwork" value="false"
                                                    @checked(old('fromwork')) hidden>
                                            </i>
                                        </button>
                                    </div>

                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('guardianship') == true ? 'primary' : 'secondary' }} toggle-button "
                                            title="Tutela" id="guardianship">
                                            <i class="bi bi-file-earmark-zip-fill">
                                                <input type="checkbox" name="guardianship" value="false"
                                                    @checked(old('guardianship')) hidden>
                                            </i>
                                        </button>
                                    </div>

                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('gaoler') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Privados Libertad" id="gaoler">
                                            <i class="bi bi-door-closed-fill">
                                                <input type="checkbox" name="gaoler" value="false"
                                                    @checked(old('gaoler')) hidden>
                                            </i>
                                        </button>
                                    </div>


                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('icbf') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="ICBF" id="icbf">
                                            <i class="bi bi-file-earmark-person-fill">
                                                <input type="checkbox" name="icbf" value="false"
                                                    @checked(old('icbf')) hidden>
                                            </i>
                                        </button>
                                    </div>


                                    
                                    
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('pregnant') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Gestante" id="pregnant">
                                            <i class="bi bi-balloon-fill">
                                                <input type="checkbox" name="pregnant" value="false"
                                                    @checked(old('pregnant')) hidden>
                                            </i>
                                        </button>
                                    </div>



                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('suicide') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Riesgo Suicida" id="suicide">
                                            <i class="bi bi-emoji-frown-fill">
                                                <input type="checkbox" name="suicide" value="false"
                                                    @checked(old('suicide')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('vip') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Paciente VIP" id="vip">
                                            <i class="bi bi-star-fill">
                                                <input type="checkbox" name="vip" value="false"
                                                    @checked(old('vip')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="patientAlert btn btn-sm btn-secondary"
                                            title="Sin asignación" id="">
                                            <i class="bi bi-slash-circle-fill">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="patientAlert btn btn-sm btn-secondary"
                                            title="Sin asignación" id="">
                                            <i class="bi bi-slash-circle-fill">
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button" class="patientAlert btn btn-sm btn-secondary"
                                            title="Sin asignación" id="">
                                            <i class="bi bi-slash-circle-fill">
                                            </i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-12 m-2" id="abuttonbar">
                                <div class="row">
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('virtualadvice') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Asesoria Virtual" id="virtualadvice">
                                            <i class="bi bi-pc-display">
                                                <input type="checkbox" name="virtualadvice" value="false"
                                                    @checked(old('virtualadvice')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('external') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Consulta Externa" id="external">
                                            <i class="bi bi-person-video2">
                                                <input type="checkbox" name="external" value="false"
                                                    @checked(old('external')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('hospitalitation') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Hospitalización" id="hospitalitation">
                                            <i class="bi bi-h-circle-fill">
                                                <input type="checkbox" name="hospitalitation" value="false"
                                                    @checked(old('hospitalitation')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('externalTeam') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Red Externa" id="externalTeam">
                                            <i class="bi bi-file-medical-fill">
                                                <input type="checkbox" name="externalTeam" value="false"
                                                    @checked(old('externalTeam')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('cenpi') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="CENPI (<14)" id="cenpi">
                                            <i class="bi bi-emoji-laughing-fill">
                                                <input type="checkbox" name="cenpi" value="false"
                                                    @checked(old('cenpi')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('srpa') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="SRPA (Adolecentes)" id="srpa">
                                            <i class="bi bi-earbuds">
                                                <input type="checkbox" name="srpa" value="false"
                                                    @checked(old('srpa')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('activeselection') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Búsqueda Activa" id="activeselection">
                                            <i class="bi-binoculars-fill">
                                                <input type="checkbox" name="activeselection" value="false"
                                                    @checked(old('activeselection')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('through') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Directo Prestador" id="through">
                                            <i class="bi bi-signpost-fill">
                                                <input type="checkbox" name="through" value="false"
                                                    @checked(old('through')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('particular') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Particular" id="particular">
                                            <i class="bi bi-clipboard2-pulse-fill">
                                                <input type="checkbox" name="particular" value="false"
                                                    @checked(old('particular')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('pyramid') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Punta Piramide" id="pyramid">
                                            <i class="bi bi-triangle-half">
                                                <input type="checkbox" name="pyramid" value="false"
                                                    @checked(old('pyramid')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('phoneAutorized') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Autoriza Llamadas" id="phoneAutorized">
                                            <i class="bi bi-telephone-outbound-fill">
                                                <input type="checkbox" name="phoneAutorized" value="false"
                                                    @checked(old('phoneAutorized')) hidden>
                                            </i>
                                        </button>
                                    </div>
                                    <div class="col-1">
                                        <button type="button"
                                            class="patientAlert btn btn-sm btn-{{ old('mailAutorized') == true ? 'primary' : 'secondary' }} toggle-button"
                                            title="Autoriza Correos" id="mailAutorized">
                                            <i class="bi bi-envelope-check-fill">
                                                <input type="checkbox" name="mailAutorized" value="false"
                                                    @checked(old('mailAutorized')) hidden>
                                            </i>
                                        </button>
                                    </div>

                                     Se agrega el script en javascript el cual se encarga de cambiar el color de los botones
                                    una vez que son seleccionados para dar claridad al usuario de cuales estan activos 


                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                    <script>
                                        $(document).ready(function() {
                                            $('.toggle-button').click(function() {
                                                if ($(this).hasClass('btn-secondary')) {
                                                    $(this).removeClass('btn-secondary').addClass('btn-success');
                                                } else {
                                                    $(this).removeClass('btn-success').addClass('btn-secondary');
                                                }
                                            });
                                        });
                                    </script>


                                </div>
                            </div>
                        </div> --}}

                        <div class="col-sm-12 mt-2 mb-2">
                            <nav id="patientoptions">
                                <div class="nav nav-tabs col-12" id="nav-tab"role="tablist">
                                    <button class="nav-link col-sm-2 active"
                                        id="nav-medicalbond-tab"data-bs-toggle="tab"data-bs-target="#nav-medicalbond"
                                        type="button"role="tab"aria-controls="nav-medicalbond"aria-selected="true">Vinculación</button>
                                    <button class="nav-link col-sm-2"
                                        id="nav-legal -tab"data-bs-toggle="tab"data-bs-target="#nav-legal"
                                        type="button"role="tab"aria-controls="nav-income"aria-selected="false">Responsable</button>
                                    <button class="nav-link col-sm-2"
                                        id="nav-income-tab"data-bs-toggle="tab"data-bs-target="#nav-income"
                                        type="button"role="tab"aria-controls="nav-income"aria-selected="false">Ingreso</button>
                                    <button class="nav-link col-sm-2"
                                        id="nav-files-tab"data-bs-toggle="tab"data-bs-target="#nav-files"
                                        type="button"role="tab"aria-controls="nav-files"aria-selected="false">Archivos</button>
                                    <button class="nav-link col-sm-2"
                                        id="nav-presence-tab"data-bs-toggle="tab"data-bs-target="#nav-presence"
                                        type="button"role="tab"aria-controls="nav-presence"aria-selected="false">Asistentes</button>
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active p-2" id="nav-medicalbond"role="tabpanel"
                                    aria-labelledby="nav-medicalbond-tab">
                                    {{-- VINCULACION  --}}
                                    <div class="row">
                                        <div class="col-sm-6">

                                            <div class="row">
                                                <label for="eps" class="form-label col-sm-9 col-md-8"> Entidad
                                                </label>
                                                <div class="form-check col-sm-3 col-md-4 d-inline-flex flex-row-reverse"
                                                    id="check">
                                                    <label class="form-label"for="capitado">
                                                        Capitado
                                                    </label>
                                                    <input class="form-check-input" name="capitado"
                                                        id="capitado"type="checkbox"size="10px"
                                                        value="{{ old('dni') }}" id="flexCheckDefault">
                                                </div>
                                            </div>
                                            <input type="text"
                                                class="form-control col-sm-9 align-bottom"width=""
                                                name="eps" id="eps" placeholder="Entidad">

                                        </div>

                                        <div class="col-sm-3">
                                            <label for="epstype" class="form-label"> Regimen </label>
                                            <select class="form-select" name="epstype" id="epstype"
                                                aria-label="">
                                                <option selected value="{{ old('dni') }}">Seleccione tipo</option>
                                                <option value="C">Contribuitivo</option>
                                                <option value="S">Subsidiado</option>
                                            </Select>
                                        </div>
                                        <div class="col-sm-3">
                                            <label for="contract" class="form-label"> Contrato </label>
                                            <select class="form-select" name="contract" id="contract"
                                                aria-label="">
                                                <option selected value="{{ old('dni') }}">Seleccione contrato
                                                </option>
                                                <option value='1'>contrato1</option>
                                                <option value="2">contrato2</option>
                                            </Select>
                                        </div>


                                    </div>

                                    <div class="row">
                                        <div class="col-sm-4">
                                            <label for="epslevel" class="form-label"> Nivel </label>
                                            <input type="text" class="form-control" name="epslevel"
                                                id="epslevel" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="policy" class="form-label"> Poliza </label>
                                            <input type="text" class="form-control" name="policy" id="policy"
                                                placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="membertype" class="form-label"> Tipo Afiliado </label>
                                            <input type="text" class="form-control" name="membertype"
                                                id="membertype" placeholder="">
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-4">
                                            <label for="contributor" class="form-label"> Cotizante </label>
                                            <input type="text" class="form-control" name="contributor"
                                                id="contributor" placeholder="">
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="Ips" class="form-label"> IPS </label>
                                            <select class="form-select" name="Ips" id="Ips"
                                                aria-label="">
                                                <option selected value="{{ old('dni') }}">Seleccione Ips</option>
                                                <option value='Bello'>Hospital mental antioquia (HOMO)</option>
                                                <option value="Medellin">Ips salud de antioquia</option>
                                                <option value="Manizales">Ips medellin</option>
                                            </Select>
                                        </div>
                                        <div class="col-sm-4">
                                            <label for="alert" class="form-label"> Alerta </label>
                                            <input type="text" class="form-control" name="alert" id="alert"
                                                placeholder="">
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade p-2" id="nav-legal"role="tabpanel"
                                    aria-labelledby="nav-legal-tab">
                                    {{-- PANEL RESPONSABLE LEGAL --}}
                                    <div class="container mb-3">
                                        <div class="row">

                                            <div class="col-sm-2">
                                                <label for="legaldocumenttype" class="form-label">Tipo
                                                    Documento</label>
                                                <select class="form-select" name="legaldocumenttype"
                                                    id="legaldocumenttype" aria-label="legal document type">
                                                    {{-- lv --}}
                                                    @foreach ($typeDocs as $typeDoc)
                                                        <option value="{{ $typeDoc->id }}"> {{ $typeDoc->name }}
                                                        </option>
                                                    @endforeach

                                                </Select>
                                            </div>
                                            <div class="col-sm-3">
                                                <label for="legaldni" class="form-label"> Numero Identificación
                                                </label>
                                                <input type="text" class="form-control" name="legaldni"
                                                    id="legaldni" placeholder="No identificación">
                                            </div>

                                            <div class="col-sm-4">
                                                <label for="legalname" class="form-label"> Nombre Completo </label>
                                                <input type="text" class="form-control" name="legalname"
                                                    id="legalname" placeholder="Nombre responsable">
                                            </div>

                                            <div class="col-sm-3">
                                                <label for="kindred" class="form-label">Relación / Parentesco</label>
                                                <select class="form-select" name="kindred" id="kindred"
                                                    aria-label="legal document type">
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
                                                <input type="text" class="form-control" name="legalphone"
                                                    id="legalphone" placeholder="Teléfono">
                                            </div>
                                            <div class="col-sm-7">
                                                <label for="legaladress" class="form-label"> Dirección </label>
                                                <input type="text" class="form-control" name="legaladress"
                                                    id="legalphone" placeholder="Dirección">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade" id="nav-income"role="tabpanel"
                                    aria-labelledby="nav-income-tab">
                                    {{-- PANEL INGRESO --}}
                                    INGRESO
                                </div>

                                <div class="tab-pane fade" id="nav-presence"role="tabpanel"
                                    aria-labelledby="nav-presence-tab">
                                    {{-- PANEL ASISTENCIA --}}
                                    ASISTENCIA
                                </div>

                                <div class="tab-pane fade" id="nav-files"role="tabpanel"
                                    aria-labelledby="nav-files-tab">
                                    {{-- PANEL ARCHIVOS --}}
                                    ARCHIVOS
                                </div>
                            </div>


                            <div class="form-group col-sm-12">
                                <label for="observation" class="form-label">Observacion </label>
                                <textarea rows="3" class="form-control" name="observation" id="observation" placeholder="Observación"></textarea>
                            </div>

                            <x-layouts.formSave :module="$module" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/patiencrud.js') }}"></script>
    <script src="{{ asset('js/getLocation.js') }}"></script>

</x-header>
