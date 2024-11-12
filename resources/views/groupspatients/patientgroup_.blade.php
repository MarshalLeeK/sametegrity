<x-header hd-title="Informacion Grupo" hd-meta-description="Informacion Grupo" :module="$module" :view="$view"
    :row="$group">
    <div class="p-2 form h-100">
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar class="row h-100 text-center text-white" action='DATOS' alias='GRUPO' />
                <div class="row g-12">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3 p-2">

                          

                           
                           

                            <div class="w-100 mt-2"></div>

                            <div class="row">

                                <!-------CAMPO ASIGNADO PARA EL FECHA--------->
                                <div class="col-sm-6">
                                    <label for="date" class="form-label"><strong> Fecha</strong></label>
                                    <input type="date" class="form-control" name="date" id="date" placeholder=""
                                        value="{{ $group->date  }}" readonly>
                                </div>

                                
                                    <!-----CAMPO ASIGNADO PARA LA CEDULA DEL ESPECIALISTA---->
                                    <div class="col-sm-6">
                                        <label for="idProfessional" class="form-label"><strong> Cedula Especialista</strong></label>
                                        <input type="text" class="form-control" name="idProfessional" id="idProfessional" placeholder=""
                                            value="{{ $group->idProfessional }}" readonly>
                                    </div>

            
                                <!-----CAMPO ASIGNADO PARA EL NOMBRE DEL ESPECIALISTA---->
                                <div class="col-sm-6">
                                    <label for="nameProfessional" class="form-label"><strong> Especialista</strong></label>
                                    <input type="text" class="form-control" name="nameProfessional" id="nameProfessional" placeholder=""
                                        value="{{ $group->nameProfessional }}" readonly>
                                </div>
            
                                <!-----CAMPO ASIGNADO PARA EL DESENLACE---->
                                <div class="col-sm-6">
                                    <label for="outcome" class="form-label"><strong> Desenlace</strong></label>
                                    <input type="text" class="form-control" name="outcome" id="outcome" placeholder=""
                                        value="{{ $group->outcome }}" readonly>
                                </div>
            
            
                                 <!-----CAMPO ASIGNADO PARA EL GRUPO AMBULATORIO----->
                                 <div class="col-sm-6">
                                    <label for="outpatientGroup" class="form-label"><strong> Grupo Ambulatorio</strong></label>
                                    <input type="text" class="form-control" name="outpatientGroup" id="outpatientGroup" placeholder=""
                                        value="{{ $group->outpatientGroup }}" readonly>
                                </div>
            
            
                                <!-----CAMPO ASIGNADO PARA LA SEDE----->
                                <div class="col-sm-6">
                                    <label for="campus" class="form-label"><strong> Sede</strong></label>
                                    <input type="text" class="form-control" name="campus" id="campus" placeholder=""
                                        value="{{ $group->campus }}" readonly>
                                </div>
            
                                <!-----CAMPO ASIGNADO PARA EL AUDITORIO----->
                                <div class="col-sm-6">
                                    <label for="lounge" class="form-label"><strong>Auditorio</strong></label>
                                    <input type="text" class="form-control" name="lounge" id="lounge" placeholder=""
                                        value="{{ $group->lounge }}" readonly>
                                </div>
            
                                
            
            
                                <!-------CAMPO ASIGNADO PARA LA HORA--------->
                                <div class="col-sm-6">
                                    <label for="time" class="form-label"><strong>Hora</strong></label>
                                   <input type="time" class="form-control" name="time" id="time" placeholder="" 
                                   value="{{ $group->time}}" readonly>
                                </div>
            
            
                                <!-------CAMPO ASIGNADO PARA UNA BREVE DESCRIPCION DEL ARCHIVO-------->
            
            
                                <div class="col-sm-12">
                                    <label for="description" class="form-label"><strong>Descripcion</strong></label>
                                    <textarea id="description" class="form-control" name="description" id="description"
                                        placeholder="" rows="8" cols="50" readonly>{{ $group->description}}</textarea>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </main>
        </div>
        </form>
        <script src="{{ asset('js/patiencrud.js') }}"></script>
</x-header>
