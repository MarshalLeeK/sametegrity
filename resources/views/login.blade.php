@extends('components\header')
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-5 justify-content-center align-items-center">
          <img src="{{ URL::asset('img/logo.png') }}"
          class="img-fluid" height="100">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="{{route('samein.login')}}" method="POST">
          @csrf
          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="username" name="username" class="form-control form-control-lg"compact takes a variable number of parameters. Each parameter can be either a string containing the name of the variable, or an array of variable names. The array can contain other arrays of variable names inside it; compact handles it recursively.
              placeholder="Usuario" />
            <label class="form-label" for="username">Usuario</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <input type="password" id="password" name="password" class="form-control form-control-lg"
              placeholder="Contraseña" />
            <label class="form-label" for="password">Contraseña</label>
          </div>

          <div class="text-rigth text-lg-between mt-4 pt-2">
            <button type="submit" class="btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Iniciar Sesión</button>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>