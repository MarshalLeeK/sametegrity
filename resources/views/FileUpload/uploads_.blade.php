<x-header
hd-title="Archivo"
hd-meta-description="Archivo"
:module="$module"
:view="$view"
:row="$file"
>
    <body>
    <div class="p-2 form h-100" enctype="multipart/form-data">
        <div class="container bg-light border">
                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                action='DATOS'
                alias="ARCHIVOS"
                />

                <div class="row">
                    <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                    <div class="col-sm-6">
                        <label for="name" class="form-label"><strong> Encabezado</strong></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder=""
                            value="{{  $file->name }}" readonly>
                    </div>

                    <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                    <div class="col-sm-6">
                        <label for="date" class="form-label"><strong> Fecha</strong></label>
                        <input type="date" class="form-control" name="date" id="date" placeholder=""
                            value="{{  $file->date }}" readonly>
                    </div>


                    <!-------CAMPO ASIGNADO PARA LA FECHA DE CREACION DEL REGISTRO--------->

                    <div class="col-sm-6">
                        <label for="created_at" class="form-label"><strong> Fecha de creacion</strong></label>
                        <input type="datetime" class="form-control" name="created_at" id="created_at" placeholder=""
                            value="{{  $file->created_at }}" readonly>
                    </div>


                    <!-------CAMPO ASIGNADO PARA LA ULTIMA FECHA DE MODIFICACION DEL REGISTRO--------->

                    <div class="col-sm-6">
                        <label for="updated_at" class="form-label"><strong> Ultima modificación</strong></label>
                        <input type="datetime" class="form-control" name="updated_at" id="updated_at" placeholder=""
                            value="{{  $file->updated_at }}" readonly>
                    </div>


                    <!-------CAMPO ASIGNADO PARA UNA BREVE DESCRIPCION DEL ARCHIVO-------->


                    <div class="col-sm-12">
                        <label for="description" class="form-label"><strong>Descripción</strong></label>
                        <textarea id="description" class="form-control" name="description" id="description"
                            placeholder="" rows="8" cols="50" readonly>{{  $file->description }}</textarea>
                    </div>

                       <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->

                <div class="col-sm-6">
                    <label for="opciones" class="form-label"><strong>Permisos asignados sobre este archivo</strong></label><br>

                    <!-- Checkboxes -->
                    <input type="checkbox" id="opcion0" name="opciones[]" value="opcion0">
                    <label for="opcion0">Todas las areas</label><br>

                    <input type="checkbox" id="opcion1" name="opciones[]" value="opcion1">
                    <label for="opcion1">Talento Humano</label><br>

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

                </div>

                <script>

                document.addEventListener("DOMContentLoaded", function () {
                    
                    //  Se crea un array que almacenara el array de checkbox y validara para cada una de las opciones si es falso o verdadero
                    var opcionesEstado = {
                        opcion1: {{ $file->talento_humano ? 'true' : 'false' }},
                        opcion2: {{ $file->administracion ? 'true' : 'false' }}, 
                        opcion3: {{ $file->nomina ? 'true' : 'false' }},
                        opcion4: {{ $file->psiquiatria ? 'true' : 'false' }},
                        opcion5: {{ $file->sistemas ? 'true' : 'false' }},
                        opcion6: {{ $file->medicos ? 'true' : 'false' }}   
                    };
                
                    // Luego, ajusta los estados de los checkboxes según la información del controlador y si estos son verdaderos los marcara asi mostrando los permisos asignados
                    for (var opcion in opcionesEstado) {
                        if (opcionesEstado[opcion]) {
                            document.getElementById(opcion).checked = true;
                        }
                    }
                });

                </script>
                

              

                <hr class="my-4">


            <!-------CAMPO ASIGNADO PARA MOSTRAR EL ARCHIVO SUBIDO --------->

              <div class="col-sm-6">
                    <label for="pdf" class="form-label"><strong> Archivo agregado </strong></label>


                    <!-- Se agrega boton para visualizar el pdf que hace uso de una funcion en  para crear el enlace -->
                   <input type="button" class="btn btn-info btn-lg btn-block form-control" value="VER ARCHIVO" onclick="verPDF('{{ $file->file }}')">

                      <!-- Se agrega el script  con la funcion llamada en el evento onclick-->
                      <script>
                        function verPDF(nombreArchivo) {
                        // Construimos la URL completa del archivo subido
                        var urlPDF = '/Archivos/' + nombreArchivo;

                            // Abre una nueva ventana  del navegador con el visor de PDF
                                window.open(urlPDF, '_blank');
                            }
                      </script>

                </div> 




                 <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
                <div class="col-sm-6">
                    <label for="published_by" class="form-label"><strong> Agregado por: </strong></label>
                    <input type="text" class="form-control" name="published_by" id="published_by" placeholder=""
                           value="{{  $file->published_by }}" readonly>
                </div>

             
                </div>

                <hr>

              

                {{-- AGREGAR IFRAME PARA VISUALIZAR IMAGEN --}}

                <div class="col-sm-6">
                    <label for="filePdf" class="form-label"><strong>ARCHIVO</strong></label>
                    <input type="button" class="btn btn-info btn-lg btn-block form-control" value="ABRIR ARCHIVO" onclick="verArchivo('{{ $file->file }}')">
                   
                    <hr class="my-4">
                    
                
                    <div class="col-sm-6">
                        <iframe id="pdfViewer" width="1280" height="1080" oncontextmenu="return false;"  style="border:none; pointer-events: none;"></iframe>
                    </div>
                
                    <!-- Script para cambiar la URL del iframe al hacer clic en el botón -->
                    <script>
                        function verArchivo(nombreArchivo) {
                            // Construimos la URL completa del archivo subido
                            var urlPDF = '/Archivos/' + nombreArchivo;
                
                            // Asignamos la URL al iframe para mostrar el archivo PDF
                            document.getElementById('pdfViewer').src = urlPDF;
                        }

                            // Bloqueamos el clic derecho
                            document.getElementById('pdfViewer').contentWindow.document.addEventListener('contextmenu', function(event) {
                                event.preventDefault();
                            });

                            // Bloqueamos las teclas como Ctrl+S, Ctrl+P
                            window.addEventListener('keydown', function(event) {
                                if (event.ctrlKey && (event.key === 's' || event.key === 'u' || event.key === 'p' || event.key === 'c')) {
                                    event.preventDefault();
                                }
                            });
                    </script>
                    
                </div>

             
                



             
                
            </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</x-header>
<x-footer/>


