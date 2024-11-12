<x-header hd-title="Actulización Sede" hd-meta-description="Actulización Sede" :module="$module"
    :view="$view">
    {{-- <form action="{{ route($module . 'Update') }}" method="POST" class="p-2 form h-100" --}}
    <form action="/headquarter_M/{{$campus->id}}" method="POST" class="p-2 form h-100"

        enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="container bg-light border">
            <x-layouts.tittlebar class="row h-100 text-center text-white" alias="SEDE" action='ACTUALIZAR' />

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
                                    
                                </div>
                        </div>
                        {{-- @dump($countries) --}}
                        <div class="container-fluid align-self-end col-sm-10">
                            <div class="row col-12">


                               <!-------CAMPO ASIGNADO PARA EL NIT DE LA SEDE----->
                                <div class="col-sm-5">
                                    <label for="nit" class="form-label">Nit</label>
                                    <input type="text" class="form-control" name="nit" id="nit"
                                        placeholder="NIT" value="{{ $campus->nit }}">
                                    <x-layouts.dialoges.inputerror input='nit' />
                                </div>


                                <!-------CAMPO ASIGNADO PARA EL NOMBRE DE LA SEDE----->

                                <div class="col-sm-6">
                                    <label for="campusName" class="form-label">NOMBRE SEDE</label>
                                    <input type="text" class="form-control" name="campusName" id="campusName"
                                        placeholder="NOMBRE SEDE" value="{{ $campus->campusName }}">
                                    <x-layouts.dialoges.inputerror input='campusName' />
                                </div>

                               

                            </div>

                            <div class="row col-12">
                                
                            <!-------CAMPO ASIGNADO PARA EL DEPARTAMENTO DONDE ESTA UBICADA LA SEDE----->
                                <div class="col-sm-6">
                                    <label for="department" class="form-label">DEPARTAMENTO</label>
                                    <input type="text" class="form-control" name="department" id="department"
                                        placeholder="Departamento" value="{{ $campus->department }}">
                                    <x-layouts.dialoges.inputerror input='department' />
                                </div>

                                <!-------CAMPO ASIGNADO PARA LA CIUDAD DONDE ESTA UBICADA LA SEDE----->
                            <div class="col-sm-3">
                             <label for="city" class="form-label">Ciudad</label>
                                <input type="text" class="form-control" name="city" id="city" placeholder="CIUDAD"
                                value="{{ $campus->city }}">
                                 <x-layouts.dialoges.inputerror input='city' />
                            </div>



                             <!-------CAMPO ASIGNADO PARA EL BARRIO DONDE ESTA UBICADA LA SEDE----->
                            <div class="col-sm-3">
                                <label for="neighborhood" class="form-label">Barrio</label>
                                <input type="text" class="form-control" name="neighborhood" id="neighborhood"
                                placeholder="BARRIO" value="{{ $campus->neighborhood }}" >
                            </div>




                                <div class="w-100 mt-2"></div>
                       

                       


                        <!-------CAMPO ASIGNADO PARA LA DIRECCIÓN  DE LA  SEDE----->
                        <div class="col-sm-12">
                            <label for="addres" class="form-label">Dirección </label>
                            <input type="text" class="form-control" name="addres" id="addres"
                                placeholder="DIRECCIÒN" value="{{ $campus->addres }}">
                        </div>


                        <!-------CAMPO ASIGNADO PARA LA FECHA DE APERTURA  DE LA  SEDE----->
                        <div class="col-sm-6">
                            <label for="date" class="form-label">Fecha </label>
                            <input type="date" class="form-control" name="date" id="date"
                                placeholder="FECHA" value="{{ $campus->date }}">
                        </div>

                        <!-------CAMPO ASIGNADO PARA EL TELEFONO  DE LA  SEDE----->
                        <div class="col-sm-6">
                            <label for="phoneHeadquarter" class="form-label">Telefono </label>
                            <input type="number" class="form-control" name="phoneHeadquarter" id="phoneHeadquarter"
                                placeholder="TELEFONO SEDE" value="{{ $campus->phoneHeadquarter }}">
                        </div>

                        <div class="col-sm-6">
                            <label for="emailHeadquarter" class="form-label">Email </label>
                            <input type="text" class="form-control" name="emailHeadquarter" id="emailHeadquarter"
                                placeholder="Email" value="{{ $campus->emailHeadquarter }}">
                        </div>






                            </div>
                        </div>


                        
                        

                   
                        
                        <div class="col-sm-12 mt-2 mb-2">
                            <hr>
                            <x-layouts.formSave :module="$module" />

                        </div>
                    </div>
                </div>
            </div>
    </form>
    <script src="{{ asset('js/patiencrud.js') }}"></script>
</x-header>
