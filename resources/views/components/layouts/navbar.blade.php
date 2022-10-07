<header>
    <nav class="navbar navbar-expand-lg" id="navbar">
      <div class="container-fluid bg-white">
        <a class="navbar-brand" href="#"><img class="imag" src="{{ URL::asset('img/logo.png') }}" alt="logo" width="100"></a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    
            @php
                  $route = Route::current()->getName();
            @endphp
            
            @if ( $route != 'menu')
            <li class="nav-item">
              <a iclass="nav-link" aria-current="page" href="{{ route('menu')}}" title="Menu principal">
                <i class="bi-house-fill" style="font-size:40px;"></i>
              </a>
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
            @endif
          </ul>

          

          <form class="d-inline-flex mr-5" action="/">
            <button class="btn btn-secondary text-white btn-lg" type="submit"><i class="bi-escape"></i></button>
          </form>
        </div>
      </div>
    </nav>

</header>

