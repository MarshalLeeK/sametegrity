<x-header
hd-title="Nueva Novedad"
hd-meta-description="Nueva Novedad"
:module="$module"
:view="$view"
>
    <body>
    <form action="" method="POST" class="p-2 form h-100">
    @csrf
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="NOVEDAD"
                action='NUEVA'/>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3">
                           

                           <!-----CAMPO ASIGNADO PARA EL INGRESO DEL TITLE----->
                            <div class="col-sm-6">
                                <label for="title" class="form-label">Encabezado</label>
                                <input type="text" class="form-control" name="title" id="title" placeholder="" value="{{ old('title') }}" >
                            </div>

                            <!-------CAMPO ASIGNADO PARA EL SUBTITLE--------->
                            <div class="col-sm-6">
                                <label for="subtitle" class="form-label">Sub titulo</label>
                                <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="" value="{{ old('subtitle') }}">
                            </div>



                            {{-- <div class="col-sm-6">
                                <label for="description" class="form-label">Descripcion</label>
                                <input type="textArea" class="form-control" name="description" id="description" placeholder="" value="{{ old('description') }}">
                            </div> --}}

                            <div class="col-sm-12">
                                <label for="description" class="form-label">Descripcion</label>
                            <textarea id="description" class="form-control" name="description" id="description" placeholder=""  rows="8" cols="50"></textarea>
                            </div>



                             <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                             <div class="col-sm-6">
                                <label for="date" class="form-label">Fecha</label>
                                <input type="date" class="form-control" name="date" id="date" placeholder="" value="{{ now()->toDateString() }}" readonly>
                            </div>
                            

                            <!-------CAMPO ASIGNADO PARA EL NOMBE DE QUIEN PUBLICA--------->
                            <div class="col-sm-6">
                                <label for="published_by" class="form-label">Publicado por:</label>
                                <input type="text" class="form-control" name="published_by" id="published_by" placeholder="" value="{{ old('published_by') }}">
                            </div>


                        
                            <hr class="my-4">
                            <div class="py-1 text-Left col-6">
                                <h4>Categoria</h4>
                                <p class="lead">Por favor ingrese los datos relacionados al los privilegios del usuario</p>
                            </div>
                            <div class="py-1 col-6">
                                <button class="btn btn-success btn-lg float-end" type="submit"><i class="fa fa-folder mx-1"></i> Agregar</button>
                            </div>
                        
                            <hr >   
                            <div class="row d-flex flex-row-reverse">
                                <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                                <a type="button" class="btn btn-default btn-lg col-2 mx-1" href="{{ route( $module ) }}">Cancelar</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="{{asset('js/accountCrud.js')}}"></script>

</x-header>
<x-footer/>
