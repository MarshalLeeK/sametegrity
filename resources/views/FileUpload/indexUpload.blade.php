<x-header
hd-title="Agregar nuevo archivo"
hd-meta-description="Agregar nuevo archivo"
:module="$module"
:view="$view"
>

<body>

    <!-- Mensaje de confirmación o error -->
    <div class="container mt-4">
        @if (session('message'))
            <div class="alert {{ session('message-type') == 'success' ? 'alert-success' : 'alert-danger' }}">
                {{ session('message') }}
            </div>
        @endif
    </div>

    <form action="{{ route('filesSave') }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf
        <div class="container bg-light border">
            <main>

                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="ARCHIVO"
                action='NUEVO'/>



                    
                 



                <div class="row">

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

                   
                    <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                    <div class="col-sm-6">
                        <label for="name" class="form-label"><strong> Encabezado</strong></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder=""
                            value="{{ old('name') }}">
                    </div>

                    <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                    <div class="col-sm-4">
                        <label for="date" class="form-label"><strong> Fecha</strong></label>
                        <input type="date" class="form-control" name="date" id="date" placeholder=""
                            value="{{ now()->toDateString() }}" readonly>
                    </div>


                    <!-------CAMPO ASIGNADO PARA UNA BREVE DESCRIPCION DEL ARCHIVO-------->


                    <div class="col-sm-12">
                        <label for="description" class="form-label"><strong>Descripcion</strong></label>
                        <textarea id="description" class="form-control" name="description" id="description"
                            placeholder="" rows="8" cols="50"></textarea>
                    </div>
                </div>


                <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->

                {{-- <div class="col-sm-6">
                    <label for="opciones" class="form-label font-bold"><strong>Selecciona las areas que visualizaran el
                            documento:</strong></label><br>

                    <!-- Checkboxes -->
                    <div class="flex flex-wrap gap-4 mt-2">
                        <div class="flex items-center space-x-2 text-base">
                            <input type="checkbox" id="opcion0" name="opciones[]" value="opcion0" class="form-checkbox">
                            <label for="opcion0">Todas las areas</label><br>
                        </div>
                    

                        <div class="flex items-center space-x-2 text-base">
                            <input type="checkbox" id="opcion1" name="opciones[]" value="opcion1" class="form-checkbox">
                            <label for="opcion1">Talento Humano</label><br>
                        </div>
                    </div>

                    <input type="checkbox" id="opcion2" name="opciones[]" value="opcion2">
                    <label for="opcion2">Administracion</label><br>

                    <input type="checkbox" id="opcion3" name="opciones[]" value="opcion3">
                    <label for="opcion3">Nomina</label><br>

                    <input type="checkbox" id="opcion4" name="opciones[]" value="opcion4">
                    <label for="opcion4">Psiquiatria</label><br>

                    <input type="checkbox" id="opcion5" name="opciones[]" value="opcion5">
                    <label for="opcion5">Sistemas</label><br>


                    <input type="checkbox" id="opcion6" name="opciones[]" value="opcion6">
                    <label for="opcion6">Medicos</label><br>

                </div> --}}

                <hr class="my-4">
                <div class="col-sm-12">
                    <div style="display: inline-block; font-size: 16px;">
                        <label for="opciones" class="form-label"><strong>Asignar permisos de visualizacion</strong></label><br>
                    </div>
                    
                
                    <!-- Checkboxes -->
                    <div style="display: flex; flex-wrap: wrap; gap: 10px;">
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion0" name="opciones[]" value="opcion0">
                            <label for="opcion0">Todas las áreas</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion1" name="opciones[]" value="opcion1">
                            <label for="opcion1">Talento Humano</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion2" name="opciones[]" value="opcion2">
                            <label for="opcion2">Administración</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion3" name="opciones[]" value="opcion3">
                            <label for="opcion3">Nómina</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion4" name="opciones[]" value="opcion4">
                            <label for="opcion4">Psiquiatría</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion5" name="opciones[]" value="opcion5">
                            <label for="opcion5">Sistemas</label>
                        </div>
                
                        <div style="display: inline-block; font-size: 16px;">
                            <input type="checkbox" id="opcion6" name="opciones[]" value="opcion6">
                            <label for="opcion6">Médicos</label>
                        </div>
                    </div>
                </div>

                <script>
                     document.addEventListener("DOMContentLoaded", function () {
                    // Manejar el checkbox de Todas las áreas
                    document.getElementById("opcion0").addEventListener("change", function () {
                        var checkboxes = document.getElementsByName("opciones[]");
                
                        // Iterar sobre todos los checkboxes y marcar o desmarcar según el estado de "Todas las áreas"
                            for (var i = 0; i < checkboxes.length; i++) {
                                checkboxes[i].checked = this.checked;
                            }
                        });
                
                        // Manejar los demás checkboxes
                        var opcionesCheckboxes = document.getElementsByName("opciones[]");
                        for (var i = 0; i < opcionesCheckboxes.length; i++) {
                            opcionesCheckboxes[i].addEventListener("change", function () {
                                // Si algún otro checkbox se desactiva, deseleccionar también "Todas las áreas"
                                document.getElementById("opcion0").checked = false;
                            });
                        }
                    });
                </script>


                {{-- DIV CONTENEDOR PARA EL SELECT QUE ALMACENA LA CATEGORIA DEL ARCHIVO --}}

                <hr class="my-4">

                <div class="row">
                    <!-----CAMPO ASIGNADO PARA ASIGNAR UN SUBGRUPO DE MACROPROCESOS----->
                    <div class="col-sm-6">
                        <div style=" font-size: 16px;">
                            <label for="gender" class="form-label">Macroprocesos</label>
                                <select class="form-select" name="gender" id="gender" aria-label="">
                                    <option value="0" {{ old('gender') == '' ? 'selected' : '' }}>Seleccione un Macroproceso</option>
                                    <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>Direccionamiento Estrategico </option>
                                    <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>Atención al Usuario </option>
                                    <option value="3" {{ old('gender') == 3 ? 'selected' : '' }}>Consulta Externa</option>
                                    <option value="4" {{ old('gender') == 4 ? 'selected' : '' }}>Hospitalización</option>
                                    <option value="5" {{ old('gender') == 5 ? 'selected' : '' }}>CAD</option>
                                    <option value="6" {{ old('gender') == 6 ? 'selected' : '' }}>Servicio Farmacéutico</option>
                                    <option value="7" {{ old('gender') == 7 ? 'selected' : '' }}>Gestión Financiera</option>
                                    <option value="8" {{ old('gender') == 8 ? 'selected' : '' }}>Gestión de Infraestructura y Dotación</option>
                                    <option value="9" {{ old('gender') == 9 ? 'selected' : '' }}>Talento Humano</option>
                                    <option value="10" {{ old('gender') == 10 ? 'selected' : '' }}>Gestión de Compras e Inventarios</option>
                                    <option value="11" {{ old('gender') == 11 ? 'selected' : '' }}>Sistemas de Información</option>
                                    <option value="12" {{ old('gender') == 12 ? 'selected' : '' }}>Gestión Documental</option>
                                    <option value="13" {{ old('gender') == 13 ? 'selected' : '' }}>Gestión de la Calidad</option>
                                </Select>
                        </div>
                    </div>

                    <!-------CAMPO ASIGNADO PARA SELECCIONAR UNA CATEGORIA-------->
                    <div class="col-sm-6">
                        <div style="font-size: 16px;">
                            <label for="gender" class="form-label">Categoría</label>
                                <select class="form-select" name="gender" id="gender" aria-label="">
                                    <option value="0" {{ old('gender') == '' ? 'selected' : '' }}>Seleccione una Categoría</option>
                                    <option value="1" {{ old('gender') == 1 ? 'selected' : '' }}>ANEXOS</option>
                                    <option value="2" {{ old('gender') == 2 ? 'selected' : '' }}>FORMATOS</option>
                                    <option value="3" {{ old('gender') == 3 ? 'selected' : '' }}>GUIAS</option>
                                    <option value="4" {{ old('gender') == 4 ? 'selected' : '' }}>INSTRUCTIVO</option>
                                    <option value="5" {{ old('gender') == 5 ? 'selected' : '' }}>MANUALES</option>
                                    <option value="6" {{ old('gender') == 6 ? 'selected' : '' }}>PLANES</option>
                                    <option value="7" {{ old('gender') == 7 ? 'selected' : '' }}>POLITICAS</option>
                                    <option value="8" {{ old('gender') == 8 ? 'selected' : '' }}>PROCEDIMIENTOS</option>
                                    <option value="9" {{ old('gender') == 9 ? 'selected' : '' }}>PROCESOS</option>
                                    <option value="10" {{ old('gender') == 10 ? 'selected' : '' }}>REGLAMENTO</option>
                                </Select>
                        </div>
                    </div>
                </div>

                {{--FIN DIV CONTENEDOR PARA EL SELECT QUE ALMACENA LA CATEGORIA DEL ARCHIVO --}}

                <hr class="my-4">

                <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN AGREGA EL DOCUMENTO--------->
                <div class="col-sm-6">
                    <label for="pdf" class="form-label">Subir documento</label>
                    <input type="file" class="form-control" name="pdf" id="pdf" placeholder="">
                </div>


                 <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
                <div class="col-sm-6">
                    <label for="published_by" class="form-label">Agregado por:</label>
                    <input type="text" class="form-control" name="published_by" id="published_by" placeholder=""
                           value="{{ auth()->user()->slug }}" readonly>
                </div>
                

                <!-----------SE AGREGAN LOS BOTONES PARA REALIZAR LAS DIFERENTES ACCIONES DENTRO DEL FORMULARIO-------->
                <hr>
                <div class="row d-flex flex-row-reverse">
                    <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                    <a type="button" class="btn btn-default btn-lg col-2 mx-1" href=" ">Cancelar</a>
                </div>
                <hr>
            </main>
        </div>
    </form>

    

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/accountCrud.js')}}"></script>

</body>


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('js/accountCrud.js')}}"></script>

</x-header>
<x-footer/>