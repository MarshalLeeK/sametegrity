@extends('components\header')
@extends('components\footer')
    <body>
    <form action="{{ route('sametegrity.update',$user->id) }}" method="POST" class="p-2 form h-100">
    @csrf
    @method('PUT')
        <div class="container bg-light">
            <main class="my-4">
                <div class="py-5 text-center" >
                    <h1  class="text-success">Actualización de usuarios</h1>
                    <hr class="my-1">
                </div>
                <div class="row g-12 h-100">
                    <div class="col-md-12 col-lg-12">
                        <h4 class="mb-3">Datos básicos</h4>
                        <p class="lead">Por favor ingrese los datos relacionados al usuario</p>
                        <hr class="my-1">
                        <div class="row mt-g-3">
                            <div class="col-sm-6">
                                <label for="dni" class="form-label">Número Documento</label>
                                <input type="text" class="form-control" name="dni" placeholder="" value="{{$user->dni}}" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un número de documento valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6">
                                <label for="privilegeSet" class="form-label">Privilegio Asignado</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01">Rol</label>
                                    </div>
                                    <select type="text" class="form-control" name="privilegeSet" placeholder="" value="" required="" 
                                    oninvalid="this.setCustomValidity('Por favor ingrese un cargo valido')" oninput="setCustomValidity('')">
                                        <option value="0">Médico</option>
                                        <option value="1">Enfermero</option>
                                        <option value="2">Aux Contable</option>
                                        <option value="3">Facturacion</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="firstName" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="name" placeholder="" value="{{$user->name}}" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un nombre valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6">
                                <label for="lastname" class="form-label">Apellido</label>
                                <input type="text" class="form-control" name="lastname" placeholder="" value="{{$user->lastname}}" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un apellido valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-sm-6">
                                <label for="email" class="form-label">Correo Electronico</label>
                                <input type="text" class="form-control" name="email" placeholder="" value="{{$user->email}}" required="" 
                                oninvalid="this.setCustomValidity('Por favor ingrese un correo valido')" oninput="setCustomValidity('')">
                            </div>
                            <div class="col-6">
                                <label for="username" class="form-label">Nombre de usuario</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="{{$user->username}}" required=""
                                        oninvalid="this.setCustomValidity('Por favor ingrese un Nombre de usuario valido')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="address2" class="form-label">Contraseña <span class="text-muted"></span></label>
                                <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            </div> 
                            <div class="col-6">
                                <label for="address2" class="form-label">Confirmación Contraseña <span class="text-muted"></span></label>
                                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirmación Contraseña">
                            </div>  
                            <hr class="my-4">
                            <div class="py-1 text-Left col-6">
                                <h4>Modulos asignados</h4>
                                <p class="lead">Por favor ingrese los datos relacionados al los privilegios del usuario</p>
                            </div>
                            <div class="py-1 col-6">
                                <button class="btn btn-success btn-lg col-2 btn-lg float-end mx-1" type="submit"><i class="fa fa-folder mx-1"></i> Agregar</button>
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
                            <hr class="my-2">
                            <div class="row d-flex flex-row-reverse">
                                <input type="submit" class="btn btn-primary btn-lg col-2 mx-1" Value="Guardar">
                                <input type="submit" class="btn btn-default btn-lg col-2 mx-1" Value="Cancelar">
                                <a href="javascript:history.back()">Ir al listado</a>
                            </div>
                        </div>
                    </div>  
                </div>
            </main>
        </div>
    </form>

    <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <script src="form-validation.js"></script>
</body>


