<x-header
hd-title="Nuevo Usuario"
hd-meta-description="Nuevo Usuario"
:module="$module"
:view="$view"
>
    <body>
    <form action="{{ route($module.'Save') }}" method="POST" class="p-2 form h-100">
    @csrf
        <div class="container bg-light border">
            <main>
                <x-layouts.tittlebar
                class="row h-100 text-center text-white"
                alias="USUARIO"
                action='NUEVO'/>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <div class="row mt-g-3">
                            <div class="col-sm-2">
                                <label for="tdoc" class="form-label">Tipo Documento</label>
                                <select class="form-select" name="tdoc" id="tdoc" value="{{ old('tdoc') }}" required >
                                    @foreach ( $typeDocs as $typeDoc )
                                        <option value="{{ $typeDoc->id }}" {{ $typeDoc->id == old('privilegeSet') ? "selected" : '' ; }} > {{ $typeDoc->name }} </option>
                                    @endforeach
                                </Select>
                            </div>

                            <div class="col-sm-4">
                                <label for="dni" class="form-label">Número Documento</label>
                                <input type="number" class="form-control" name="dni" id="dni" placeholder="Documento"  
                                value="{{ old('dni') }}">
                                @error('dni')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>

                            <div class="col-sm-6">
                                <label for="privilegeSet" class="form-label">Privilegio Asignado</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Rol</label>
                                    </div>
                                    <select type="text" class="form-control" name="privilegeSet" id="privilegeSet">
                                        <option value="0" {{ old('privilegeSet') == 0  ? 'selected' : '' ; }}>Estandar</option>
                                        <option value="22" {{ old('privilegeSet') == '22'  ? 'selected' : '' ; }}>Root</option>
                                        <option value="1" {{ old('privilegeSet') == 1  ? 'selected' : '' ; }}>Médico</option>
                                        <option value="2" {{ old('privilegeSet') == 2  ? 'selected' : '' ; }}>Enfermero</option>
                                        <option value="3" {{ old('privilegeSet') == 3  ? 'selected' : '' ; }}>Aux Contable</option>
                                        <option value="4" {{ old('privilegeSet') == 4  ? 'selected' : '' ; }}>Facturacion</option>
                                    </select>
                                    @error('privilegeSet')
                                        <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" id="name" placeholder="" value="{{ old('name') }}" >
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lastname" id="lastname" placeholder="" value="{{ old('lastname') }}">
                            </div>

                            <div class="col-sm-6">
                                <label for="email" class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" name="email" id="email" placeholder="Correo Electronico" value="{{ old('email') }}">
                                @error('email')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>



                            <div class="col-sm-6">
                                <label for="gender" class="form-label">Genero</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Genero</label>
                                    </div>
                                    <select type="text" class="form-control" name="gender" id="gender">
                                        <option value="0" {{ old('privilegeSet') == 0  ? 'selected' : '' ; }}>Otro</option>
                                        <option value="22" {{ old('privilegeSet') == 5  ? 'selected' : '' ; }}>Femenino</option>
                                        <option value="1" {{ old('privilegeSet') == 1  ? 'selected' : '' ; }}>Hombre Trans</option>
                                        <option value="2" {{ old('privilegeSet') == 2  ? 'selected' : '' ; }}>Mujer Trans</option>
                                        <option value="3" {{ old('privilegeSet') == 3  ? 'selected' : '' ; }}>No binario</option>
                                        <option value="4" {{ old('privilegeSet') == 4  ? 'selected' : '' ; }}>Masculino</option>
                                    </select>
                                    @error('gender')
                                        <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                    @enderror
                                </div>
                            </div>






                            <div class="col-6">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="username" id="username" placeholder="Usuario" value="{{ old('dni') }}" readonly>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="password" class="form-label">Contraseña <span class="text-muted"></span></label>
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" value="{{ old('password') }}">
                                @error('password')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div> 
                            <div class="col-6">
                                <label for="password_confirmation" class="form-label">Confirmación Contraseña <span class="text-muted"></span></label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Confirmación Contraseña">
                                @error('password_confirmation')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>  
                            <hr class="my-4">
                            <div class="py-1 text-Left col-6">
                                <h4>Modulos asignados</h4>
                                <p class="lead">Por favor ingrese los datos relacionados al los privilegios del usuario</p>
                            </div>
                            <div class="py-1 col-6">
                                <button class="btn btn-success btn-lg float-end" type="submit"><i class="fa fa-folder mx-1"></i> Agregar</button>
                            </div>
                            <div class="table-responsive g-12">
                                <table class="table g-12">
                                    <thead>
                                        <tr>
                                            <th scope="col" class="col-1">#</th>
                                            <th scope="col" class="col-5">Módulo</th>
                                            <th scope="col" class="col-1">Ver</th>
                                            <th scope="col" class="col-1">Crear</th>
                                            <th scope="col" class="col-1">Modificar</th>
                                            <th scope="col" class="col-1">Inactivar</th>
                                            <th scope="col" class="col-1">Imprimir</th>
                                            <th scope="col" class="col-1">Exportar</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Usuarios</td>
                                            <td>
                                            <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                            <td>
                                            <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                            <td>
                                            <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                            <td>
                                            <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                            <td>
                                            <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                            <td>
                                            <input name="psExport" type="checkbox" aria-label="Radio button for following text input">
                                            </td>
                                        </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Prioritaria</td>
                                        <td>
                                        <input name="psRead" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                                        <input name="psCreate" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psModify" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psDelete" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psExport" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Asist-TOP</td>
                                        <td>
                                        <input name="psRead" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psCreate" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psModify" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psDelete" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psPrint" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                        <td>
                                        <input name="psExport" type="checkbox" aria-label="Radio button for following text input">
                                        </td>
                                    </tr>
                                    </tbody>          
                                </table>
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


