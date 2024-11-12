<x-header
hd-title="Agregar nueva Sede"
hd-meta-description="Registrar una nueva Sede"
:module="$module"
:view="$view"
>

<body>

    <form action="{{ route($module . 'Save') }}" method="POST" class="p-2 form h-100"
        enctype="multipart/form-data">
        @csrf
        <div class="container bg-light border">
            <main>

                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="SEDE"
                action='REGISTRAR'/>


                <div class="row-flex col-sm-2 d-inline-flex justify-content-center">
                    <div class="avatar-upload">
                        <label class="avatar-preview" for="imageUpload">
                            <img src="{{ URL::asset('img/logo.png') }}"
                                alt="Logo Generado forma generica" title="Cick para cargar imagen"
                                class="img-fluid" id="imagePreview">
                        </label>
                        
                    </div>
                </div>

            

                <div class="container-fluid align-self-end col-sm-10">
                    <div class="row col-12">

                    
                        <!-----CAMPO ASIGNADO PARA EL NIT DE LA NUEVA SEDE---->
                        <div class="col-sm-6">
                            <label for="nit" class="form-label"><strong> NIT</strong></label>
                            <input type="text" class="form-control" name="nit" id="nit" placeholder=""
                                value="{{ old('nit') }}">
                        </div>

                    <!-----CAMPO ASIGNADO PARA EL NOMBRE DE LA SEDE---->
                    <div class="col-sm-6">
                        <label for="campusName" class="form-label"><strong> NOMBRE SEDE</strong></label>
                        <input type="text" class="form-control" name="campusName" id="campusName" placeholder=""
                            value="{{ old('campusName') }}" >
                    </div>

                    <!-----CAMPO ASIGNADO PARA EL DEPARTAMENTO---->
                    <div class="col-sm-6">
                        <label for="department" class="form-label"><strong> Departamento</strong></label>
                        <input type="text" class="form-control" name="department" id="department" placeholder=""
                            value="{{ old('department') }}" >
                    </div>


                     <!-----CAMPO ASIGNADO PARA LA CIUDAD----->
                     <div class="col-sm-6">
                        <label for="city" class="form-label"><strong> Ciudad</strong></label>
                        <input type="text" class="form-control" name="city" id="city" placeholder=""
                            value="{{ old('city') }}">
                    </div>


                    <!-----CAMPO ASIGNADO PARA EL BARRIO---->
                    <div class="col-sm-6">
                        <label for="neighborhood" class="form-label"><strong> Barrio</strong></label>
                        <input type="text" class="form-control" name="neighborhood" id="neighborhood" placeholder=""
                            value="{{ old('neighborhood') }}">
                    </div>

                    <!-----CAMPO ASIGNADO PARA LA DIRECCION----->
                    <div class="col-sm-6">
                        <label for="addres" class="form-label"><strong>Direccion</strong></label>
                        <input type="text" class="form-control" name="addres" id="addres" placeholder=""
                            value="{{ old('addres') }}">
                    </div>

                    <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                    <div class="col-sm-6">
                        <label for="date" class="form-label"><strong> Fecha</strong></label>
                        <input type="date" class="form-control" name="date" id="date" placeholder=""
                            value="{{ now()->toDateString() }}">
                    </div>


                    <!-------CAMPO ASIGNADO PARA EL TELEFONO DE LA SEDE--------->
                    <div class="col-sm-6">
                        <label for="phoneHeadquarter" class="form-label"><strong>Telefono</strong></label>
                       <input type="number" class="form-control" name="phoneHeadquarter" id="phoneHeadquarter" placeholder="" 
                       value="{{ old('phoneHeadquarter')}}">
                    </div>


                    <!-------CAMPO ASIGNADO PARA EL EMAIL DE LA SEDE-------->

                    <div class="col-sm-6">
                        <label for="emailHeadquarter" class="form-label"><strong>Correo Sede</strong></label>
                       <input type="TEXT" class="form-control" name="emailHeadquarter" id="emailHeadquarter" placeholder="" 
                       value="{{ old('emailHeadquarter')}}">
                    </div>


                   
                </div>
                </div>


                
                

                <!-----------SE AGREGAN LOS BOTONES PARA REALIZAR LAS DIFERENTES ACCIONES DENTRO DEL FORMULARIO-------->
                <hr>
                <div class="row d-flex flex-row-reverse">
                    <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                    <a type="button" class="btn btn-default btn-lg col-3 mx-1" href=" ">Cancelar</a>
                </div>
                
            </main>
            <hr>
        </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src="{{asset('js/accountCrud.js')}}"></script>

</body>


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
</script>
<script src="{{asset('js/accountCrud.js')}}"></script>

</x-header>
<x-footer/>