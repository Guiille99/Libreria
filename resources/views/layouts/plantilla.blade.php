<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    @vite(["resources/css/app.scss", "resources/js/app.js"])
</head>
<body>
    <header>
        {{-- <nav class="navbar navbar-expand-lg bg-success text-white">
            <div class="container-fluid justify-content-space-around">
                <div class="logo__container d-flex align-items-center">
                    <a href="" class="navbar-brand">
                        <figure>
                            <img src="uploads/logo-nombre.png" alt="LOGO" class="d-block">
                        </figure>
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#container__collapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="container__collapse">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Dropdown link
                        </a>
                        <ul class="dropdown-menu">
                          <li><a class="dropdown-item" href="#">Action</a></li>
                          <li><a class="dropdown-item" href="#">Another action</a></li>
                          <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                      </li>
                    </ul>

                    <div class="cuenta__carrito">
                        <div class="cuenta__container">
                            <figure>
                                <img src="uploads/person.svg" alt="Imagen de perfil">
                            </figure>
                            <p id="username">Mi cuenta</p> 
                        </div>

                        <div class="carrito__container">
                            <figure>
                                <img src="uploads/cart.svg" alt="Carrito">
                            </figure>
                        </div>
                    </div>
                  </div>                
            </div>
        </nav> --}}
        <nav class="navbar navbar-expand-lg bg-success text-white">
            <div class="nav_content container-fluid justify-content-space-around">
                <a class="navbar-brand" href="">
                    <figure>
                        <img src="uploads/logo-nombre2.svg" alt="LOGO" class="img-fluid">
                    </figure>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target=".navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                {{-- Nav items --}}
              <div class="collapse navbar-collapse navbarNavDropdown justify-content-end">
                <ul class="navbar-nav gap-2">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="">Inicio</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Libros
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Blog</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Contacto</a>
                  </li>
                </ul>
              </div>
      
                {{-- Cuenta y carrito --}}
                <div class="collapse navbar-collapse navbarNavDropdown gap-5 justify-content-end">
                    <div class="cuenta__container d-flex align-items-center">
                        <figure>
                            <img src="uploads/person.svg" alt="Imagen de perfil">
                        </figure>
                        <p id="username" class="m-0 img-fluid">Mi cuenta</p> 
                    </div>

                    <div class="carrito__container">
                        <figure>
                            <img src="uploads/cart.svg" alt="Carrito" class="img-fluid">
                        </figure>
                    </div>
                </div>
            </div>
          </nav>
    </header>
    @yield('content')
</body>
</html>