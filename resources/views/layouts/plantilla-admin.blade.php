<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title")</title>
    @vite(["resources/css/app.scss", "resources/js/app.js", "resources/js/jquery-3.6.3.js", "resources/js/font-awesome.js"])
</head>
<body>
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
        <link rel="stylesheet" href="css/styles.css">
        <title>Panel Admin-Clientes</title>
    </head>
    <body class="d-flex flex-column vh-100">
        <nav class="navbar-admin navbar navbar-expand-lg align-items-center px-5">
            <div class="container-fluid justify-content-around">
                <figure class="my-0 mx-auto">
                    <a href="{{ route('index')}}"><img src="{{asset('uploads/logo-nombre2.svg')}}" alt="LOGO" class="img-fluid"></a>
                  </figure>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar_menu" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    {{-- USER INFO --}}
                    <div id="navbar_menu">
                        @if (Auth::check())
                        <p class="m-0"><i class="bi bi-person"></i> {{Auth::user()->username}}</p>
                        @endif
                        {{-- <div class="navbar-nav d-flex justify-content-center gap-4 flex-grow-1">
                            <div class="col-lg-7 nav-link">
                                <form class="d-flex" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
                                </form>
                            </div>
                            <div class="col-lg-3 nav-link align-self-center">
                                <button class="btn btn-success text-white px-5">Perfil</button>
                            </div>
                        </div> --}}
                    </div>
            </div>
        </nav>


        <main class="container-fluid flex-grow-1">
            <div class="row h-100">
                <div class="col-3 col-lg-2 position-relative">
                    <button class="border-0 fs-2 mt-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#navegacion">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                    <!-- navegación -->
                    <div id="navegacion" class="offcanvas offcanvas-start bg-dark position-absolute show" data-bs-backdrop="false">
                        <!-- OffCanvas header -->
                        <div class="offcanvas-header py-3">
                            <h5 class="offcanvas-title text-white flex-grow-1 text-center">Navegación</h5>
                            <div data-bs-theme="dark">
                                <button class="btn btn-close" data-bs-dismiss="offcanvas"></button>
                            </div>
                        </div>
                        <!-- OffCanvas body -->
                        <div class="offcanvas-body text-white">
                            <ul>
                                <li class="d-flex gap-2 py-1 px-2 active"><a href="" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-person-badge-fill"></i>Clientes</a></li>
                                <li class="d-flex gap-2 py-1 px-2"><a href="panel_admin_ventas.html" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-currency-dollar"></i>Ventas</a></li>
                                <li class="d-flex gap-2 py-1 px-2"><a href="" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-card-list"></i>Inventario</a></li>
                                <li class="d-flex gap-2 py-1 px-2"><a href="" class="text-decoration-none text-white d-flex gap-2"><i class="bi bi-file-person-fill"></i>Vendedores</a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>

                {{-- DATOS --}}
                <div class="col-9 col-lg-10 pt-3">
                    <h1 class="text-center py-3">Administración de Clientes</h1>
                    <div class="row justify-content-center">
                        <div class="col-7 col-md-3 bg-success text-center text-white d-flex flex-column py-4 position-relative">
                            <a href="panel_admin_nuevo_cliente.html" class="h-100 w-100 d-block position-absolute top-0 start-0"></a>
                            <i class="bi bi-plus-lg fs-1"></i>
                            <p class="m-0">Nuevo</p>
                        </div>
                    </div>
                    <div class="row justify-content-center py-3">
                        <div class="col-md-10">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <td class="text-center fs-2" colspan="100%">Lista de Clientes</td>
                                    </tr>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Acciones</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="fw-bold">1</td>
                                        <td>Urizar</td>
                                        <td>Azpitarte</td>
                                        <td>
                                            <button class="btn btn-danger">Borrar</button>
                                            <button class="btn btn-success">Editar</button>
                                            <button class="btn btn-info text-white border-0">Ver</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">2</td>
                                        <td>Undiano</td>
                                        <td>Mallenco</td>
                                        <td>
                                            <button class="btn btn-danger">Borrar</button>
                                            <button class="btn btn-success">Editar</button>
                                            <button class="btn btn-info text-white border-0">Ver</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="fw-bold">3</td>
                                        <td>Japón</td>
                                        <td>Sevilla</td>
                                        <td>
                                            <button class="btn btn-danger">Borrar</button>
                                            <button class="btn btn-success">Editar</button>
                                            <button class="btn btn-info text-white border-0">Ver</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
    
                            <p class="text-black-50">Listado Actualizado...</p>
                        </div>
                    </div>
                </div>
    
            </div>
        </main>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </html>



</body>
</html>