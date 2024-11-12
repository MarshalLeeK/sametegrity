<x-header hd-title="Nuevo Paciente" hd-meta-description="Nuevo Registro" :module="$module" :view="$view" csrf=1>
    <form id="patientGroupsform" action="{{ route($module . 'Save') }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf
        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" action='NUEVO' alias='REGISTRO' />
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
                                    </div>
                                </div>


                                <div class="col-sm-6">
                                    <label for="name" class="form-label">Nombre</label>
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Nombres" value="{{ old('name') }}">
                                </div>

                                <div class="col-sm-6">
                                    <label for="lastname" class="form-label">Apellido</label>
                                    <input type="text" class="form-control" name="lastname" id="lastname"
                                        placeholder="Apellidos" value="{{ old('lastname') }}">
                                </div>
                            </div>

                        </div>


                        <div class="w-100 mt-2"></div>
                       

                        <div class="col-sm-3">
                            <label for="eps" class="form-label">EPS</label>
                            <select class="form-select" name="eps" id="eps" aria-label="">
                                <option value="" {{ old('eps') == '' ? 'selected' : '' }}>Seleccione su EPS
                                </option>
                                <option value="Sura" {{ old('eps') == 'Sura' ? 'selected' : '' }}>Sura</option>
                                <option value="Salud Total" {{ old('eps') == 'Salud total' ? 'selected' : '' }}>Salud total </option>
                                <option value="Nueva EPS" {{ old('eps') == 'Gerente' ? 'selected' : '' }}>Nueva EPS </option>
                                <option value="Sisben" {{ old('eps') == 'Sisben' ? 'selected' : '' }}>Sisben
                                </option>
                            </Select>
                        </div>


                        <div class="col-sm-3">
                            <label for="visitorType" class="form-label">Tipo Visitante</label>
                            <select class="form-select"  name="visitorType" id="visitorType" aria-label="">
                                    <option value="0" {{ old('visitorType') == '' ? 'selected' : '' }}>Seleccione visitante</option>
                                    <option value="Paciente" {{ old('visitorType') == 0 ? 'selected' : '' }}>Paciente</option>
                                    <option value="Acudiente" {{ old('visitorType') == 1 ? 'selected' : '' }}>Acudiente</option>
                            </Select>
                        </div>

                      

                        <div class="col-sm-6">
                            <label for="phone" class="form-label">Teléfono </label>
                            <input type="number" class="form-control" name="phone" id="phone"
                                placeholder="Teléfono" value="{{ old('phone') }}">
                        </div>


                       <!-- SweetAlert2 -->
                            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                            <!------ SCRIPT DE VALIDACION PARA EL NUMERO CELULAR ------>
                            <script>
                                // Obtenemos el campo asignado al celular 
                                const cellphoneInput = document.getElementById('phone');

                                // Agregamos el evento input al campo del teléfono
                                cellphoneInput.addEventListener('input', function() {
                                    // Obtenemos el valor ingresado en el campo del celular
                                    const cellphoneValue = cellphoneInput.value.trim();
                                    
                                    // Validamos que este inicie con el 3 
                                    if (!cellphoneValue.startsWith('3')) {
                                        Swal.fire({
                                            icon: 'error',
                                            title: 'Número celular no permitido',
                                            text: 'El número de celular debe iniciar con "3"',
                                            confirmButtonText: 'Entendido'
                                        }).then(() => {
                                            // Limpia el valor del campo después de cerrar la alerta
                                            cellphoneInput.value = '';
                                        });
                                    } else {
                                        // Borrar el mensaje de error si el número de celular es correcto
                                        cellphoneInput.setCustomValidity('');
                                    }
                                });
                            </script>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Email </label>
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Email" value="{{ old('email') }}">
                            </div>




                            <div class="col-sm-6">
                                <label for="group" class="form-label">Grupos</label>
                                <select class="form-select" name="group" id="group" aria-label="" autofocus>
                                    @foreach ($groups as $group)
                                        <option value="{{ $group->id }}" @selected($group->id == '1')>
                                            {{ $group->outpatientGroup }}
                                        </option>
                                    @endforeach
                                </Select>
                            </div>



                            
                        
                        <hr class="my-4">

                        <div class="row d-flex flex-row-reverse">
                            <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                            <a type="button" class="btn btn-default btn-lg col-3 mx-1" href=" ">Cancelar</a>
                        </div>
                        

                       
                
                </div>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/patiencrud.js') }}"></script>
    <script src="{{ asset('js/getLocation.js') }}"></script>

</x-header>