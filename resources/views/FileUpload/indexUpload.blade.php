<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">




    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    @if (($csrf ?? '') == 1)
        <meta name="csrf-token" content="{{ csrf_token() }}" />
    @endif
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $hdMetaDescription ?? 'Default' }} meta description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet"
        href="{{ URL::asset(Request::Path() != '/' ? 'css/structure.css' : 'css/guessStructure.css') }}">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.2/dist/umd/popper.min.js"
        integrity="sha384-q9CRHqZndzlxGLOj+xrdLDJa9ittGte1NksRmgJKeCV9DrM7Kz868XYqsKWPpAmn" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="http://momentjs.com/downloads/moment.min.js"></script>
    <link rel="icon" href="{{ URL::asset('img/bluebanner.png') }}">
    <title>SAMEIN - {{ $hdTitle ?? 'ND' }}</title>


</head>
<body>
        
        <form action="{{ route('FileUpload.indexUpload') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
        @csrf
            <div class="container bg-light border">
                <main>
                               
    
                               <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                                <div class="col-sm-6">
                                    <label for="name" class="form-label"><strong> Encabezado</strong></label>
                                    <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" >
                                </div>
    
                                 <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                                 <div class="col-sm-6">
                                    <label for="date" class="form-label">Fecha</label>
                                    <input type="date" class="form-control" name="date" id="date" placeholder="" value="{{ now()->toDateString() }}" readonly>
                                </div>
    
    
    
                                {{-- <div class="col-sm-6">
                                    <label for="description" class="form-label">Descripcion</label>
                                    <input type="textArea" class="form-control" name="description" id="description" placeholder="" value="{{ old('description') }}">
                                </div> --}}
    
                                {{-- <div class="col-sm-12">
                                    <label for="description" class="form-label">Descripcion</label>
                                <textarea id="description" class="form-control" name="description" id="description" placeholder=""  rows="8" cols="50"></textarea>
                                </div> --}}


                                <div class="col-sm-12">
                                    <label for="description" class="form-label">Descripcion</label>
                                    <input type="text" class="form-control" name="description" id="description" placeholder="" value="{{ old('description') }}" >
                                </div>
    
    
                                 <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN AGREGA EL DOCUMENTO--------->
                                 <div class="col-sm-6">
                                    <label for="pdf" class="form-label">Subir documento</label>
                                    <input type="file" class="form-control" name="pdf" id="pdf" placeholder="" >
                                </div>
    
    
                                <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
                                <div class="col-sm-6">
                                    <label for="published_by" class="form-label">Agregado por:</label>
                                    <input type="text" class="form-control" name="published_by" id="published_by" placeholder="" value="{{ old('published_by') }}">
                                </div>


                                
                                <!-------CAMPO ASIGNADO PARA LA RUTA DEL ARCHIVO--------->
                                <div class="col-sm-6">
                                    <label for="route" class="form-label">Ruta del archivo:</label>
                                    <input type="text" class="form-control" name="route" id="route" placeholder="" value="{{ old('route') }}">
                                </div>
    
                            
    
                                 <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->
    
                                 <div class="col-sm-6">
                                <label for="opciones" class="form-label"><strong>Selecciona las areas que visualizaran el documento:</strong></label><br>
    
                                <!-- Checkboxes -->
                                <input type="checkbox" id="opcion0" name="opciones[]" value="opcion0" >
                                <label for="opcion0">Todas las areas</label><br>

                                <input type="checkbox" id="opcion1" name="opciones[]" value="opcion1" >
                                <label for="opcion1">Talento Humano</label><br>
                            
                                <input type="checkbox" id="opcion2" name="opciones[]" value="opcion2">
                                <label for="opcion2">Administracion</label><br>
                            
                                <input type="checkbox" id="opcion3" name="opciones[]" value="opcion3">
                                <label for="opcion3">Nomina</label><br>
    
                                <input type="checkbox" id="opcion4" name="opciones[]" value="opcion4">
                                <label for="opcion4">Psiquiatria</label><br>

                                <input type="checkbox" id="opcion5" name="opciones[]" value="opcion5">
                                <label for="opcion5">Gestion Humana</label><br>
                                 
                                 
                                 <input type="checkbox" id="opcion6" name="opciones[]" value="opcion6">
                                <label for="opcion6">Medicos</label><br>

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
    
                            
                                <hr class="my-4">
                              
                            
                                <hr >   
                                <div class="row d-flex flex-row-reverse">
                                    <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                                    <a type="button" class="btn btn-default btn-lg col-2 mx-1" href=" ">Cancelar</a>
                                </div>
                </main>
            </div>
            
        </form>
    
        <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="{{asset('js/accountCrud.js')}}"></script>

    </body>


</html>