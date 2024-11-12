<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

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



</head>
<body>


    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
    <hr
    @endif

    <form action="{{ route('Upload.indexUpload') }}" method="POST" class="p-2 form h-100" enctype="multipart/form-data">
    @csrf
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="DOCUMENTO"
                action='SUBIR'/>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3">
                           

                           <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                            <div class="col-sm-6">
                                <label for="title" class="form-label"><strong> Encabezado</strong></label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ old('title') }}" >
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

                            <div class="col-sm-12">
                                <label for="description" class="form-label">Descripcion</label>
                            <textarea id="description" class="form-control" name="description" id="description" placeholder=""  rows="8" cols="50"></textarea>
                            </div>


                             <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN AGREGA EL DOCUMENTO--------->
                             <div class="col-sm-6">
                                <label for="Subir" class="form-label">Subir documento</label>
                                <input type="file" class="form-control" name="fileUpload" id="fileUpload" placeholder="" value="{{ old('fileUpload') }}">
                            </div>


                            <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
                            <div class="col-sm-6">
                                <label for="add_by" class="form-label">Agregado por:</label>
                                <input type="text" class="form-control" name="add_by" id="add_by" placeholder="" value="{{ old('add_by') }}">
                            </div>

                        

                             <!-------ASIGNACION DE PERMISOS PARA QUIENES SERA VISIBLE EL DOCUMENTO--------->

                             <div class="col-sm-6">
                            <label for="opciones" class="form-label"><strong>Selecciona las areas que visualizaran el documento:</strong></label><br>

                            <!-- Checkboxes -->
                            <input type="checkbox" id="opcion1" name="opciones[]" value="opcion1" >
                            <label for="opcion1">Opción 1</label><br>
                        
                            <input type="checkbox" id="opcion2" name="opciones[]" value="opcion2">
                            <label for="opcion2">Opción 2</label><br>
                        
                            <input type="checkbox" id="opcion3" name="opciones[]" value="opcion3">
                            <label for="opcion3">Opción 3</label><br>

                            <input type="checkbox" id="opcion4" name="opciones[]" value="opcion4">
                            <label for="opcion3">Opción 4</label><br>
                             </div>


                        
                            <hr class="my-4">
                            <div class="py-1 text-Left col-6">
                                <h4>Categoria</h4>
                                <p class="lead">Por favor ingrese los datos relacionados al los privilegios del usuario</p>
                            </div>
                            <div class="py-1 col-6">
                                <button class="btn btn-success btn-lg float-end" type="submit"><i class="fa fa-folder mx-1"></i> Cargar documento</button>
                            </div>
                        
                            <hr >   
                            <div class="row d-flex flex-row-reverse">
                                <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                                <a type="button" class="btn btn-default btn-lg col-2 mx-1" href=" {{ route( $module ) }}">Cancelar</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('js/accountCrud.js')}}"></script>

<x-footer/>
</body>
</html>
