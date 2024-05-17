<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <a class="navbar-brand" href="{{route('homePage')}}">WikiPunto</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('infoPage')}}">InfoPage</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item fw-semibold" href="{{route('register')}}">Registrati</a></li>
              <li><a class="dropdown-item fw-semibold" href="{{route('login')}}">Login</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>              
                <a class="dropdown-item hover-dropdown fw-semibold fsNav px-3" href="#" onclick="event.preventDefault(); document.querySelector('#form-logout').submit();">logout</a>
                <form method="POST" action="{{route('logout')}}" id="form-logout" class="d-none">
                  @csrf
                </form>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            @auth
            <a class="nav-link disabled" aria-disabled="true">{{Auth::user()->name}}</a>
            @else
            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
            @endauth
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>