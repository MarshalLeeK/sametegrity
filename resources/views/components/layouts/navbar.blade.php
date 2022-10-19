<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid bg-white">
        <a class="figure-img img-fluid rounded" href="#">
          <img class="img-fluid" src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            @if ( $route != 'login' && $route !='C' && $route !='M' )

              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('menu')}}" title="Menu principal">
                  <i class="bi bi-grid-3x3-gap-fill"></i>
                </a>
              </li>

              @if ($route != 'L')
                <li class="nav-item">
                  <a class="nav-link" aria-current="page" href="" title="Volver al listado">
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
        </div>
        <div class="row mx-1 p-1">
          <a class="form-group nav-link col-2"  type="submit" aria-current="page" href="{{ route('signOut') }}" title="Cerrar Sesión">
            <i class="bi bi-escape"></i>
          </a>
          </div>
        </div>
    </nav>
</header>

