<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid bg-white">
       {{-- LOGO --}}
        <a class="figure-img img-fluid rounded" href="#">
          <img class="img-fluid" src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100">
        </a>
        {{-- NAV --}}
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if ( $route != 'login' && $route != 'index' && $view !='C' && $view !='M' )

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('menu')}}" title="Menu principal">
                  <i class="bi bi-grid-3x3-gap-fill"></i>
                </a>
              </li>

              @if ( $view != 'L')
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route($module) }}" title="Volver al listado">
                    <i class="bi bi-list-task"></i>
                  </a>
                </li>
              @endif

              @if ($view !='C' && $view !='M' )
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route( $module .'Create') }}" title="Nuevo Registro">
                    <i class="bi bi-plus-circle-fill"></i>
                  </a>
                </li>
              @endif

              @if ( $view == '_' )
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="{{ route( $module .'Edit', [$module => $row]) }}" title="Modificar Registro">
                    <i class="bi bi-pencil-fill"></i>
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
        </div>
        {{-- OUT --}}
        <div class="row mx-1 p-1">
          <a class="form-group nav-link col-2"  type="submit" aria-current="page" href="{{ route('signOut') }}" title="Cerrar Sesión">
            <i class="bi bi-escape"></i>
          </a>
          </div>
        </div>

    </nav>
</header>

