<x-header
hd-title="Actualizar Archivo"
hd-meta-description="Actualizar Archivo"
:module="$module"
:view="$view"
>
    <body>
    <form action="{{ route($module.'Update',$file) }}" method="POST" class="p-2 form h-100">
    @csrf
    @method('PUT')
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="ARCHIVO"
                action='ACTUALIZAR'/>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3">
                            

                             <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                    <div class="col-sm-6">
                        <label for="name" class="form-label"><strong> Encabezado</strong></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder=""
                            value="{{  $file->name }}" readonly>
                    
                                @error('name')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>

                            <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                    <div class="col-sm-6">
                        <label for="date" class="form-label"><strong> Fecha de publicación</strong></label>
                        <input type="date" class="form-control" name="date" id="date" placeholder=""
                            value="{{  $file->date }}" readonly>
                    
                                    @error('date')
                                        <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                    @enderror
                                </div>




                                
                            </div>
                             <!-------CAMPO ASIGNADO PARA UNA BREVE DESCRIPCION DEL ARCHIVO-------->


                    <div class="col-sm-12">
                        <label for="description" class="form-label"><strong>Descripción</strong></label>
                        <textarea id="description" class="form-control" name="description" id="description"
                            placeholder="" rows="8" cols="50" readonly>{{  $file->description }}</textarea>
                    </div>

                         <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->

                <div class="col-sm-6">
                    <label for="opciones" class="form-label"><h4>Permisos asignados sobre este archivo</h4></label><br>

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

                </div> <hr>

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


                               
                            </div>

                            
                  <!-------CAMPO ASIGNADO PARA MOSTRAR EL ARCHIVO SUBIDO --------->

              <div class="col-sm-6">
                <label for="pdf" class="form-label"><strong> Archivo agregado </strong></label>


                <!-- Se agrega boton para visualizar el pdf que hace uso de una funcion en JavaScript para crear el enlace -->
               <input type="button" class="btn btn-info btn-lg btn-block form-control" value="VER ARCHIVO" onclick="verPDF('{{ $file->file }}')">

                  <!-- Se agrega el script JavaScript con la funcion llamada en el evento onclick-->
                  <script>
                  function verPDF(nombreArchivo) {
                   // Construimos la URL completa del archivo subido
                   var urlPDF = '/Archivos/' + nombreArchivo;

                     // Abre una nueva ventana o pestaña del navegador con el visor de PDF
                        window.open(urlPDF, '_blank');
                    }
                  </script>

            </div> 

               <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
               <div class="col-sm-6">
                <label for="published_by" class="form-label"><strong> Agregado por: </strong></label>
                <input type="text" class="form-control" name="published_by" id="published_by" placeholder=""
                       value="{{  $file->published_by }}" readonly>
                       @error('published_by')
                       <small class="text-danger"><strong>*{{ $message }}</strong></small>
                   @enderror
            </div>
        
                            <hr class="my-4">
                            <div class="py-1 col-6">
                                <button class="btn btn-success btn-lg float-end" type="submit"><i class="fa fa-folder mx-1"></i> Agregar</button>
                            </div>
                            <div class="table-responsive g-12">
                               
                            </div>
                            <hr >
                            <x-layouts.formSave :module="$module" />
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    {{-- <script src="{{asset('js/accountCrud.js')}}"></script> --}}

</x-header>
<x-footer/>

