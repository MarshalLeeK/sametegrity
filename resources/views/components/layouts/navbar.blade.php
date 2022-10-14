<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid bg-white">
        <a class="navbar-brand" href="#"><img class="imag" src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if ( $route != 'X' && $route !='C' && $route !='M' )

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('menu')}}" title="Menu principal">
                  <i class="bi bi-grid-3x3-gap-fill"></i>
                </a>
              </li>

              @if ($route != 'L')
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route('patientModule')}}" title="Volver al listado">
                    <i class="bi bi-box-arrow-left"></i>
                  </a>
                </li>
              @endif

              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
                <li class="nav-item">
              <a class="nav-link disabled"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            @endif
          </ul>
          {{-- Salir --}}
          <form class="d-inline-flex mx-2" action="{{ route('signOut') }}">
            <button class="btn btn-secondary text-white btn-lg" type="submit"><i class="bi-escape"></i></button>
          </form>
        </div>
      </div>
    </nav>
</header>

