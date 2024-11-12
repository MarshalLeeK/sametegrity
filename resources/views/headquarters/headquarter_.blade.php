<x-header hd-title="Datos Sede" 
hd-meta-description="Datos Sede" 
:module="$module" 
:view="$view"
    :row="$campus">
    <div class="p-2 form h-100">
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar class="row h-100 text-center text-white" action='DATOS' alias='SEDE' />
                <div class="row g-12">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3 p-2">

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

                                  

                                    <div class="col-sm-6">
                                        <label for="nit" class="form-label">NIT</label>
                                        <input type="text" class="form-control" name="nit" id="nit"
                                            placeholder="NIT" value="{{ $campus->nit }}" disabled readonly>
                                    </div>



                                    <div class="col-sm-6">
                                        <label for="campusName" class="form-label">Sede</label>
                                        <input type="text" class="form-control" name="campusName" id="campusName"
                                            placeholder="Sede" value="{{ $campus->campusName }}" disabled readonly>
                                    </div>

                        
                
                                </div>


                                <div class="row col-12">


                                    <div class="col-sm-4">
                                        <label for="department" class="form-label">Departamento</label>
                                        <input type="text" class="form-control" name="department" id="department"
                                            placeholder="Departamento" value="{{ $campus->department }}"
                                            oninvalid="this.setCustomValidity('Por favor ingrese un departamento')"
                                            oninput="setCustomValidity('')" disabled>
                                    </div>
                                    <div class="col-sm-4">
                                        <label for="city" class="form-label">Ciudad</label>
                                        <input type="text" class="form-control" name="city" id="city"
                                            placeholder="Ciudad" value="{{ $campus->city }}"
                                            oninvalid="this.setCustomValidity('Por favor ingrese una ciudad valida')"
                                            oninput="setCustomValidity('')" disabled>
                                    </div>


                                    <div class="col-sm-4">
                                        <label for="neighborhood" class="form-label">Barrio</label>
                                        <input type="text" class="form-control" name="neighborhood" id="neighborhood"
                                            placeholder="Barrio" value="{{ $campus->neighborhood }}"
                                            oninvalid="this.setCustomValidity('Por favor ingrese un barrio valido')"
                                            oninput="setCustomValidity('')" disabled>
                                    </div>


                                    <div class="col-sm-12">
                                        <label for="addres" class="form-label">Dirección</label>
                                        <input type="text" class="form-control" name="addres" id="addres"
                                            placeholder="Dirección" value="{{ $campus->addres }}"
                                            oninvalid="this.setCustomValidity('Por favor ingrese una direccion valida')"
                                            oninput="setCustomValidity('')" disabled>
                                    </div>

                                    
                                    <div class="w-100 mt-2"></div>

                                    <div class="col-sm-6">
                                        <label for="date" class="form-label">Fecha</label>
                                        <input type="date" class="form-control" name="date" id="date"
                                         placeholder="Fecha" value="{{ $campus->date }}" 
                                         oninvalid="this.setCustomValidity('Por favor ingrese una direccion valida')"
                                         oninput="setCustomValidity('')" disabled>
                                    </div>
        
                                    <div class="col-sm-6">
                                        <label for="phoneHeadquarter" class="form-label">Telefono </label>
                                        <input type="number" class="form-control" name="phoneHeadquarter" id="phoneHeadquarter"
                                            placeholder="Telefono" value="{{ $campus->phoneHeadquarter }}"
                                            oninvalid="this.setCustomValidity('Por favor ingrese un barrio valido')"
                                            oninput="setCustomValidity('')" disabled>
                                    </div>
                                </div>
                               


                                <div class="w-100 mt-2"></div>

                                <div class="col-sm-10">
                                    <label for="emailHeadquarter" class="form-label">Correo </label>
                                     <input type="text" class="form-control" name="emailHeadquarter" id="emailHeadquarter"
                                    placeholder="Email" value="{{ $campus->emailHeadquarter }}"
                                    oninvalid="this.setCustomValidity('Por favor ingrese un barrio valido')"
                                    oninput="setCustomValidity('')" disabled>
                                </div>
                            </div>
                        
                            
                        </div>
                        <hr>
                    </div>
                </div>
            </main>
        </div>
        </form>
        <script src="{{ asset('js/patiencrud.js') }}"></script>
</x-header>
