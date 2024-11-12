<x-header
hd-title="Crear un nuevo grupo"
hd-meta-description="Crear un nuevo grupo"
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
                alias="NUEVO"
                action='GRUPO'/>

    

                <div class="row">

                    <div class="row">
                        <!-----CAMPO ASIGNADO PARA LA CEDULA DEL ESPECIALISTA---->
                        <div class="col-sm-6">
                            <label for="idProfessional" class="form-label"><strong> Cedula Especialista</strong></label>
                            <input type="text" class="form-control" name="idProfessional" id="idProfessional" placeholder=""
                                value="{{ old('idProfessional') }}">
                        </div>

                    <!-----CAMPO ASIGNADO PARA EL NOMBRE DEL ESPECIALISTA---->
                    <div class="col-sm-6">
                        <label for="nameProfessional" class="form-label"><strong> Especialista</strong></label>
                        <input type="text" class="form-control" name="nameProfessional" id="nameProfessional" placeholder=""
                            value="{{ old('nameProfessional') }}" >
                    </div>

                    <!-----CAMPO ASIGNADO PARA EL DESENLACE---->
                    <div class="col-sm-6">
                        <label for="outcome" class="form-label"><strong> Desenlace</strong></label>
                        <input type="text" class="form-control" name="outcome" id="outcome" placeholder=""
                            value="{{ old('outcome') }}" >
                    </div>


                     <!-----CAMPO ASIGNADO PARA EL GRUPO AMBULATORIO----->
                     <div class="col-sm-6">
                        <label for="outpatientGroup" class="form-label"><strong> Grupo Ambulatorio</strong></label>
                        <input type="text" class="form-control" name="outpatientGroup" id="outpatientGroup" placeholder=""
                            value="{{ old('outpatientGroup') }}">
                    </div>


                    <!-----CAMPO ASIGNADO PARA LA SEDE----->
                    {{-- <div class="col-sm-6">
                        <label for="campus" class="form-label"><strong> Sede</strong></label>
                        <input type="text" class="form-control" name="campus" id="campus" placeholder=""
                            value="{{ old('campus') }}">
                    </div> --}}

                    <div class="col-sm-6">
                        <label for="campus" class="form-label">Sedes</label>
                        <select class="form-select" name="campus" id="campus" aria-label="" autofocus>
                            @foreach ($headquarters as $headquater)
                                <option value="{{ $headquater->id }}" @selected($headquater->id == '1')>
                                    {{ $headquater->campusName }}
                                </option>
                            @endforeach
                        </Select>
                    </div>

                    <!-----CAMPO ASIGNADO PARA EL AUDITORIO----->
                    <div class="col-sm-6">
                        <label for="lounge" class="form-label"><strong>Auditorio</strong></label>
                        <input type="text" class="form-control" name="lounge" id="lounge" placeholder=""
                            value="{{ old('lounge') }}">
                    </div>

                    <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                    <div class="col-sm-6">
                        <label for="date" class="form-label"><strong> Fecha</strong></label>
                        <input type="date" class="form-control" name="date" id="date" placeholder=""
                            value="{{ now()->toDateString() }}"
                            min="{{ now()->toDateString() }}">
                    </div>


                    <!-------CAMPO ASIGNADO PARA LA HORA--------->

                    <div class="col-sm-6">
                        <label for="time" class="form-label"><strong>Hora</strong></label>
                        <input type="time" class="form-control" name="time" id="time" 
                            placeholder="" 
                            value="{{ now()->format('H:i') }}" 
                            min="06:00" max="20:00">
                    </div>

                    {{-- YA QUE NO TODOS LOS NAVEGADORES RECONOCEN EL MIN Y MAX SE AGREGA EL SCRIPT PARA FORZARLO EN DICHOS NAVEGADORES --}}
                    
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                    
                    <script>
                        document.getElementById('time').addEventListener('change', function() {
                            const timeInput = this;
                            const selectedTime = timeInput.value;
                            const minTime = "06:00";
                            const maxTime = "20:00";
                    
                            if (selectedTime < minTime || selectedTime > maxTime) {
                                Swal.fire({
                                    icon: 'error',
                                    title: 'Hora no permitida',
                                    text: 'La hora debe estar entre las 6:00 a.m. y las 8:00 p.m.',
                                    confirmButtonText: 'Entendido'
                                });
                                timeInput.value = "";  // Limpia el campo si está fuera de rango
                            }
                        });
                    </script>
                    


                    <!-------CAMPO ASIGNADO PARA UNA BREVE DESCRIPCION DEL REGISTRO-------->


                    <div class="col-sm-12">
                        <label for="description" class="form-label"><strong>Descripcion</strong></label>
                        <textarea id="description" class="form-control" name="description" id="description"
                            placeholder="" rows="8" cols="50"></textarea>
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

</body>


<script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="{{asset('js/accountCrud.js')}}"></script>

</x-header>
<x-footer/>