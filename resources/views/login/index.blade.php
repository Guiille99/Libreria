@extends('layouts.plantillalogin')
@section('title', "Login")

@section('content')

<div class="container-fluid vh-100 hero">

    <div class="row justify-content-center align-items-center h-100">

        <div class="col-md-6 login__container">
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="login-tab" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="login" aria-selected="true">Iniciar Sesión</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="register-tab" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="register" aria-selected="false">Registro</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab" tabindex="0">
                    <form action="">

                        <div class="mt-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
                        </div>
                        <div class="mt-3">
                            <label for="passwd" class="form-label">Password</label>
                            <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                        </div>

                        <div class="mt-3">
                            <a href="panel_admin_clientes.html" role="button" class="btn btn-info text-white">Iniciar Sesión</a>
                        </div>

                    </form>
                </div>
                <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab" tabindex="0">
                    <form action="">

                    <div class="mt-3">
                        <label for="email" class="form-label">Cambio</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
                    </div>
                    <div class="mt-3">
                        <label for="passwd" class="form-label">Password</label>
                        <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                    </div>

                    <div class="mt-3">
                        <a href="panel_admin_clientes.html" role="button" class="btn btn-info text-white">Iniciar Sesión</a>
                    </div>

                </form></div>
              </div>










            {{-- <div class="login-register-panel">

                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#login" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Iniciar Sesión</button>
                    </li>
                    <li role="presentation" class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#register" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Registro</button>
                    </li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="login" role="tabpanel" tabindex="0">

                        <form action="">

                            <div class="mt-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="mt-3">
                                <label for="passwd" class="form-label">Password</label>
                                <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                            </div>

                            <div class="mt-3">
                                <a href="panel_admin_clientes.html" role="button" class="btn btn-info text-white">Iniciar Sesión</a>
                            </div>

                        </form>

                    </div>

                    <div class="tab-pane" id="register" role="tabpanel">

                        <form action="">

                            <div class="mt-3">
                                <label for="email" class="form-label">Cambio</label>
                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter email">
                            </div>
                            <div class="mt-3">
                                <label for="passwd" class="form-label">Password</label>
                                <input type="password" name="passwd" id="passwd" class="form-control" placeholder="Password">
                            </div>

                            <div class="mt-3">
                                <a href="panel_admin_clientes.html" role="button" class="btn btn-info text-white">Iniciar Sesión</a>
                            </div>

                        </form>

                    </div>
                </div>

            </div> --}}

        </div>

    </div>

</div>

@endsection