<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    @vite(["resources/css/app.scss", "resources/js/app.js", "resources/js/jquery-3.6.3.js", "resources/js/font-awesome.js"])
</head>
<body>
    <header>
      <div class="nav-top container-fluid">
        <div class="row bg-success align-items-center d-none d-lg-flex">
          <div class="col-3">
            <figure class="m-0">
              <a href="{{ route('index')}}"><img src="{{asset('uploads/logo-nombre2.svg')}}" alt="LOGO" class="img-fluid"></a>
            </figure>
          </div>
          <div class="col">
            <form action="" method="post" >
              <input type="text" name="" id="" class="form-control" placeholder="Buscar">
              <button type="submit" class="d-none"></button>
            </form>
          </div>
          <div class="cuenta-carrito col-3 d-flex justify-content-center gap-5">
            <div class="mi-cuenta__container">
              <a href="" class="nav-link">
                <img src="{{asset('uploads/person.svg')}}" alt="Mi cuenta" class="img-fluid">
                <span>@yield("miCuenta")Mi cuenta</span>
              </a>
            </div>
    
            <div class="carrito__container">
              <a href="" class="nav-link">
                <img src="{{asset('uploads/cart.svg')}}" alt="Carrito" class="img-fluid">
                <span class="carrito__cantidad">0</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    
      <nav class="navbar navbar-expand-lg text-center pb-3 p-md-2">
        <div class="container-fluid">      
          <a class="navbar-brand d-block d-lg-none" href="{{ route('index')}}">
            <img src="{{asset('uploads/logo-nombre2.svg')}}" alt="LOGO">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            {{-- <span class="navbar-toggler-icon"></span> --}}
            {{-- <span class="bi bi-list"></i></span> --}}
            <img src="{{asset('uploads/toggler.svg')}}" alt="Toggler button" class="toggler__button">
          </button>
          <div class="collapse navbar-collapse justify-content-center gap-5" id="navbarNav">
            {{-- Nav items --}}
            <ul class="nav__options navbar-nav gap-2 gap-lg-4 justify-content-center">
              <li class="nav-item">
                <a class="nav-link" aria-current="page" href="{{ route('index')}}">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Libros
                </a>
                <ul class="dropdown-menu">
                  @yield('generos_libros')
                  {{-- <li><a class="dropdown-item" href="">Action</a></li>
                  <li><a class="dropdown-item" href="">Another action</a></li>
                  <li><a class="dropdown-item" href="">Something else here</a></li> --}}
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Novedades</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="">Contacto</a>
              </li>
            </ul>
    
            <form action="" method="post" class="d-block d-lg-none mt-2">
              <input type="text" name="" id="" class="form-control" placeholder="Buscar">
              <button type="submit" class="d-none"></button>
            </form>
    
            <div class="cuenta-carrito d-flex justify-content-center gap-5 mt-3 d-block d-lg-none">
              <div>
                <a href="{{route('login.index')}}" class="nav-link">
                  <img src="{{asset('uploads/person.svg')}}" alt="Mi cuenta" class="img-fluid">
                  <span>Mi cuenta</span>
                </a>
              </div>
        
              <div>
                <a href="" class="nav-link">
                  <img src="{{asset('uploads/cart.svg')}}" alt="Carrito" class="img-fluid">
                </a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </header>


    @yield('content')






    {{-- FOOTER --}}
    <footer class="mt-5">
      <figure>
        <img src="{{asset('uploads/logo-xl.png')}}" alt="Logo" class="img-fluid">
      </figure>

      <div class="info__container">
        <div class="footer__menu__container">
          <div class="footer__menu">
            <h4>Contacto</h4>
            <div class="info__details">
              <p><i class="bi bi-telephone-fill"></i> 623456789</p>
              <p><i class="bi bi-geo-alt-fill"></i> Sevilla (España)</p>
              <a href="mailto:info@carpinteriamaderareal@gmail.com"><i class="bi bi-envelope-fill"></i> info@book.com</a>
            </div>
          </div>

          <div class="footer__menu">
            <h4>Información legal</h4>
            <div class="info__details">
              <a href="">Condiciones de uso</a>
              <a href="">Política de protección de datos</a>
              <a href="">Política de cookies</a>
              <a href="">Condiciones para vender</a>
            </div>
          </div>

          <div class="footer__menu">
            <h4>Otros enlaces</h4>
            <div class="info__details">
              <a href="">Mapa del sitio</a>
              <a href="">Empleo</a>
              <a href="">Quiénes somos</a>
            </div>
          </div>


        </div>

        <div class="rrss__container">
          <a href=""><i class="fa-brands fa-facebook-f"></i></a>
          <a href=""><i class="bi bi-instagram"></i></a>
          <a href=""><i class="bi bi-twitter"></i></a>
          <a href=""><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </footer>
</body>
</html>