<nav class="navbar navbar-expand-lg" id="navbar">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img class="imag" src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('returnMenu')}}">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled"></a>
              </li>
            </ul>
            <form class="d-flex" action="/">
              <button class="btn btn-outline-danger" type="submit">Cerrar Sesión</button>
            </form>
          </div>
        </div>
</nav>