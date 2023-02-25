<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(["resources/css/app.scss", "resources/js/app.js", "resources/js/jquery-3.6.3.js", "resources/js/font-awesome.js", "resources/js/validation_form.js"])
</head>
<body class="d-flex flex-column vh-100">
    <nav class="navbar-admin navbar navbar-expand-lg align-items-center px-5">
        <div class="container-fluid justify-content-around">
            <button class="border-0 fs-2 toggler-admin" type="button" data-bs-toggle="offcanvas" data-bs-target="#navegacion">
                <i class="bi bi-plus-lg"></i>
            </button>
            <figure class="my-0 mx-auto">
                <a href="{{ route('index')}}"><img src="{{asset('uploads/logo-nombre2.svg')}}" alt="LOGO" class="img-fluid"></a>
                </figure>
                {{-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button> --}}

                {{-- USER INFO --}}
                <div id="navbar_menu">
                    @if (Auth::check())
                    <p class="m-0 text-white"><i class="bi bi-person"></i> {{Auth::user()->username}}</p>
                    @endif
                </div>
        </div>
    </nav>


    <main class="container-fluid flex-grow-1">
        <div class="row h-100">
            <div id="sidebar__container" class="col-2 col-lg-2 position-relative">
                <!-- navegación -->
                <div id="navegacion" class="sidebar offcanvas offcanvas-start bg-dark show" data-bs-backdrop="false" data-bs-scroll="true">
                    <!-- OffCanvas header -->
                    <div class="offcanvas-header py-3">
                        <h5 class="offcanvas-title text-white flex-grow-1 text-center">Hola, {{Auth::user()->username}}</h5>
                        <div data-bs-theme="dark">
                            <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
                        </div>
                    </div>
                    <!-- OffCanvas body -->
                    <div class="offcanvas-body text-white">
                        <p class="text-center fw-bold">TABLAS</p>
                        <ul>
                            <li class="d-flex gap-2 py-1 px-2 active"><a href="" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-person-circle"></i>Usuarios</a></li>
                            <li class="d-flex gap-2 py-1 px-2"><a href="panel_admin_ventas.html" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-book"></i>Libros</a></li>
                            
                            
                        </ul>
                    </div>
                </div>
            </div>
            

            @yield('content')


            

        </div>
    </main>
</body>
</html>