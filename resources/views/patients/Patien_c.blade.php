@include('components.navbar')
@extends('components\footer')

    <body>
    <form action="#" method="POST" class="p-2 form h-100">
    @csrf
        <div class="container bg-light">
            <main>
                <div class="text-center" >
                    <h1  class="">Registro de Pacientes</h1>
                    <hr class="my-1">
                </div>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="mb-3">Datos básicos</h4>
                        <p class="lead">Por favor ingrese los datos relacionados al paciente</p>
                        <hr class="my-1">
                        <div class="row mt-g-3">
                            <div class="col-sm-6">
                                <label for="dni" class="form-label">Tipo Documento</label>
                                <select class="form-select" name="documenttype" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione el tipo de documento</option>
                                    <option value='11'>Registro Civil de nacimiento</option>
                                    <option value="12">Tarjeta Identidad</option>
                                    <option value="13">Cedula de ciudadanía</option>
                                    <option value="21">Tarjeta de extranjería</option>
                                    <option value="22">Cédula de extranjería</option>
                                    <option value="31">NIT</option>
                                    <option value="41">Pasaport</option>
                                    <option value="42">Tipo Documento extranjero</option>
                                    <option value="43">No definido por la DIAN</option>
                                </Select>
                            </div>

                            <div class="col-sm-6">
                                <label for="dni" class="form-label">Número Documento</label>
                                <input type="text" class="form-control" name="dni" id="dni" placeholder="" value="" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un número de documento valido')" oninput="setCustomValidity('')">
                            </div>

                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="" value="" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un nombre valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lastname" placeholder="" value="" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un apellido valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="w-100 mt-2"></div>
                            <div class="col-sm-2">
                                <label for="dni" class="form-label">Género</label>
                                <select class="form-select" name="gender" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione genero</option>
                                    <option value='F'>Mujer</option>
                                    <option value="M">Hombre</option>
                                    <option value="O">Otro</option>
                                </Select>
                            </div>

                            
                            <div class="col-sm-2">
                                <label for="borndate" class="form-label">Fecha Nacimiento</label>
                                <input type="date" class="form-control" name="borndate" id="borndate" placeholder="" value="" required="" 
                                oninvalid="this.setCustomValidity('Por favor fecha de nacimiento un correo valida')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-2">
                                <label for="age" class="form-label">Edad</label>
                                <input type="number" class="form-control" name="age" id="age" placeholder="" disabled>
                            </div>

                            <div class="col-sm-2">
                                <label for="borncontry" class="form-label">Pais de nacimiento</label>
                                <select class="form-select" name="borncontry" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="Colombia">Colombia</option>
                                    <option value='Andorra'>Andorra</option>
                                    <option value="Afganistan">Afganistan</option>
                                    <option value="Dubai">Dubai</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="borncontry" class="form-label">Depto de nacimiento</label>
                                <select class="form-select" name="bornstate" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione estado/depto</option>
                                    <option value='Antioquia'>Antioquia</option>
                                    <option value="Santander">Santander</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="borncontry" class="form-label">Ciudad de nacimiento</label>
                                <select class="form-select" name="borncity" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione ciudad</option>
                                    <option value='Bello'>Bello</option>
                                    <option value="Medellin">Medellin</option>
                                    <option value="Manizales">Manizales</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="civilsate" class="form-label">Estado Civil</label>
                                <select class="form-select" name="civilsate" id="civilsate" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione Estado</option>
                                    <option value='Bello'>Soltero</option>
                                    <option value="Medellin">Casado</option>
                                    <option value="Manizales">Viudo</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="academiclevel" class="form-label">Escolaridad</label>
                                <select class="form-select" name="academiclevel" id="academiclevel" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione Nivel</option>
                                    <option value='Bello'>Primaria</option>
                                    <option value="Medellin">Bachillerato</option>
                                    <option value="Manizales">Secundaria</option>
                                    <option value="Manizales">Profesional</option>
                                    <option value="Manizales">Especialización</option>

                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="academiclevel" class="form-label">Ocupación</label>
                                <select class="form-select" name="academiclevel" id="academiclevel" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione Ocupación</option>
                                    <option value='Bello'>Obrero</option>
                                    <option value="Medellin">Paletero</option>
                                    <option value="Manizales">Gerente</option>
                                    <option value="Manizales">Estudiante</option>
                                    <option value="Manizales">Ninguna</option>

                                </Select>
                            </div>
                            
                            <div class="col-sm-2">
                                <label for="livecontry" class="form-label">Pais de Residencia</label>
                                <select class="form-select" name="livecontry" id="livecontry" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="Colombia">Colombia</option>
                                    <option value='Andorra'>Andorra</option>
                                    <option value="Afganistan">Afganistan</option>
                                    <option value="Dubai">Dubai</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="livestate" class="form-label">Depto de Residencia</label>
                                <select class="form-select" name="livestate" id="livestate" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione estado/depto</option>
                                    <option value='Antioquia'>Antioquia</option>
                                    <option value="Santander">Santander</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                </Select>
                            </div>

                            <div class="col-sm-2">
                                <label for="livecity" class="form-label">Ciudad de Residencia</label>
                                <select class="form-select" name="livecity" id="livecity" aria-label="Default select example" required
                                oninvalid="this.setCustomValidity('Por favor ingrese un tipo de documento de documento valido')" 
                                3oninput="setCustomValidity('')">
                                    <option selected value="">Seleccione ciudad</option>
                                    <option value='Bello'>Bello</option>
                                    <option value="Medellin">Medellin</option>
                                    <option value="Manizales">Manizales</option>
                                </Select>
                            </div>


                            <div class="col-sm-12">
                                <label for="adress" class="form-label">Dirección <span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="adress" id="adress" placeholder="Dirección">
                            </div> 

                            <div class="col-sm-6">
                                <label for="phone" class="form-label">Teléfono <span class="text-muted"></span></label>
                                <input type="number" class="form-control" name="phone" id="phone" placeholder="Teléfono">
                            </div> 

                            <div class="col-sm-6">
                                <label for="cellphone" class="form-label">Celular <span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="cellphone" id="cellphone" placeholder="Celular">
                            </div> 

                            <div class="col-sm-6">
                                <label for="mail" class="form-label">Email <span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="mail" id="mail" placeholder="Correo Elecetronico">
                            </div> 

                            <div class="col-sm-6">
                                <label for="maileb" class="form-label">Facturación electronica <span class="text-muted"></span></label>
                                <input type="text" class="form-control" name="maileb" id="maileb" placeholder="Correo Elecetronico">
                            </div> 


                            <!-- <div class="spinner-border" role="status">
                                <span class="visually-hidden">Loading...</span> 
                            </div> -->
                            <br>
                            <div class="row d-flex flex-row-reverse">
                                <input type="submit" class="btn btn-success btn-lg col-2 mx-1" Value="Guardar">
                                <a type="button" class="btn btn-secondary btn-lg col-2 mx-1" href="{{ route('patients.index') }}">Cancelar</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>
    <!-- <script rel="stylesheet" href="{{URL::asset('js/patiencrud.js')}}"></script>  -->
    <!-- <script rel="stylesheet" href="{{asset('js/patiencrud.js')}}"></script>  -->
     <!-- <script rel="stylesheet" href="js/patiencrud.js"></script> -->
     <script src="{{asset('js/patiencrud.js')}}"></script>






</body>


