<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">
    <img src="{{ asset('img\logo.png') }}" alt="logo" height="30" class="d-inline-block align-text-top">     
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class= "nav-link {{ ($title === "Home") ? 'active' : '' }}"  href="/">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Buku") ? 'active' : '' }}" href="/bukuHome">Buku</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Team") ? 'active' : '' }}" href="#">Kosong</a>
                </li>
                <li class="nav-item">
                <a class="nav-link {{ ($title === "Contact") ? 'active' : '' }}" href="/#">kosong</a>
                </li>
               
            </ul>

            <ul class="navbar-nav ms-auto">
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Welcome back , {{ auth()->user()->name }}
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-clipboard-minus"></i> My Dashboard</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li>
                          <form action="/logout" action="get">
                              @csrf
                              <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i> Logout</button>
                          </form>
                       
                    </ul>
                  </li>
                @else
                <li>
                    <li class="nav-item">
                        <a class="nav-link " href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                </li>
                @endauth
            </ul>
           
        </div>
    </div>
    </nav>