<x-header hd-title="LOGIN" hd-description="Login desarrollador por samein sas">

{{-- <!---Se imprime la lista desde la base de datos que contiene las novedades registradas--->

<div  class="container p-5">
       <a href="{{ route('novelty.novelty_create') }}"> Agregar nueva </a>
    <ul>
       @foreach ($novelties as $novelty)

       <li>

           <div class="col">
               <div class="card flex-md-row mb-3 shadow-md h-md-250">
                   <div class="card-body d-flex flex-column align-items-start">
                       <strong class="d-inline-block mb-2 text-primary">{{ $novelty->subtitle}}
                        <br>[presentado
                           por:]{{ $novelty->published_by}}</strong>
                       <h3 class="mb-0">
                           <a class="text-dark" href="#">{{ $novelty->title}}</a>
                       </h3>
                       <div class="mb-1 text-muted">{{ $novelty->date}}</div>
                       <p class="card-text mb-auto">{{ $novelty->description}}</p>
                       <a href="#">Clic para ver más</a>

                       <img class="card-img-right flex-auto d-none d-lg-block mt-2 mx-2"
                           data-src="{{ URL::asset('img/bluebanner.png') }}" alt="Thumbnail [160*160]"
                           src="{{ URL::asset('img/bluebanner.png') }}"style="width: 180px; height: 180Px;"
                           src="{{ URL::asset('img/bluebanner.png') }}" data-holder-rendered="true" />
                   </div>
               </div>
           </div>
       </li>

       @endforeach
   </ul> 
   {{ $novelties->links() }}

  </div>  --}}


    <div class="container p-5">
        <section class="vh-100">
            <div class="container-fluid h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-md-4 col-lg-6 col-xl-4 justify-content-center align-items-center">
                        <img src="{{ URL::asset('img/logo.png') }}" class="img-fluid" height="200">
                    </div>
                    <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

                        <form action="{{ route('signIn') }}" method="POST">
                            @csrf
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <label class="form-label" for="username">Usuario</label>
                                <div class="input-group">
                                    <input type="text" id="username" name="username"
                                        class="form-control form-control-lg" placeholder="Usuario"
                                        value="{{ old('username') }}" />
                                    <i class="input-icon uil uil-at"></i>
                                </div>
                                @error('username')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
                            </div>
                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <label class="form-label" for="password">Contraseña</label>
                                <input type="password" id="password" name="password" value=""
                                    class="form-control form-control-lg" placeholder="Contraseña" />
                                @error('password')
                                    <small class="text-danger"><strong>*{{ $message }}</strong></small>
                                @enderror
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
       
    </div>
 
</x-header>
