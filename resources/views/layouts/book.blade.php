<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body class="default_bg">
            

              <div class="container-fluid">
                <div class="row">
                  
                  <!-- PULSANTE HAMBURGER (Visibile SOLO su Mobile/Tablet fino a MD) -->
                  <div class="col-12 d-lg-none bg-dark p-3">
                    <button class="btn btn-dark text-center" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu">
                      <span class="navbar-toggler-icon text-white" style="filter: invert(1);"></span> Menu
                    </button>
                  </div>
              
                  <!-- SIDEBAR NAV (Fissa a sinistra su LG, a comparsa su Mobile) -->
                  <nav id="sidebarMenu" class="col-lg-3 col-xl-2 bg-dark text-white offcanvas-lg offcanvas-start p-3" tabindex="-1" style="min-height: 100vh;">
                    
                    <!-- Intestazione della Sidebar (con pulsante di chiusura per Mobile) -->
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <h5 class="m-0 text-uppercase fw-bold text-primary">Biblioteca</h5>
                      <button type="button" class="btn-close btn-close-white d-lg-none" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
                    </div>
              
                    <!-- Link di Navigazione -->
                    <ul class="nav flex-column gap-2">
                      <li class="nav-item">
                        <a class="nav-link text-white rounded px-3 py-2 {{ Route::is('books.index') ? 'bg-primary active' : 'opacity-75' }}" href="{{route('books.index')}}">
                          <i class="bi bi-house-door me-2"></i> Libri
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white opacity-75 px-3 py-2" href="#">
                          <i class="bi bi-book me-2"></i> Prestiti
                        </a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link text-white opacity-75 px-3 py-2" href="#">
                          <i class="bi bi-person me-2"></i> Utenti
                        </a>
                      </li>
                      <li class="nav-item mt-4 pt-4 border-top border-secondary">
                        <a class="nav-link text-danger px-3 py-2" href="#">
                          <i class="bi bi-box-arrow-right me-2"></i> Logout
                        </a>
                      </li>
                    </ul>
                  </nav>
              
                  <!-- CONTENUTO PRINCIPALE DELLA PAGINA -->
                  <main class="col-lg-9 col-xl-10 ms-sm-auto p-4">
                    <div class="row g-4 col-12 ">
                      {{-- CARD 1 --}}
                      <div class="col-4">
                          <div class="card h-100 shadow-sm bg-dark text-white rounded">
              
                            <div class="card-body d-flex flex-column bg-dark text-white rounded">
                              <h5 class="card-title">Libri totali</h5>
                              <h3 class="card-text flex-grow-1">48</h3>
              
                            </div>
                          </div>
                        </div>
                        {{-- CARD 2  --}}
                        <div class="col-4">
                          <div class="card h-100 shadow-sm bg-dark text-white">
              
                            <div class="card-body d-flex flex-column">
                              <h5 class="card-title">Prestiti</h5>
                              <h3 class="card-text  flex-grow-1">54</h3>
              
                            </div>
                          </div>
                        </div>
                        {{-- CARD 3 --}}
                        <div class="col-4 ">
                          <div class="card h-100 shadow-sm bg-dark text-white">
              
                            <div class="card-body d-flex flex-column">
                              <h5 class="card-title">Utenti attivi</h5>
                              <h3 class="card-text  flex-grow-1">14</h3>
              
                            </div>
                          </div>
                        </div>
                  </div>
                    @yield('content')
                  </main>
              
                </div>
              </div>
              

</body>
</html>