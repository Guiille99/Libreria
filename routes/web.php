<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, "index"])->name("index"); //Página principal 
Route::get('libros/{filtro}', [LibroController::class, "index"])->name("libros.index"); //Página para mostrar los libros filtrados por título, autor o género
Route::post('libros', [LibroController::class, "getFiltro"])->name("libros.getFiltro"); //Página para mostrar los libros filtrados por título, autor o género
//Route::get('libros/categoria/{categoria}', [LibroController::class, "indexCategoria"])->name("libros.categoria");
Route::get('libro/{id}', [LibroController::class, "show"])->name("libros.show"); //Página para mostrar un libro concreto

Route::get('admin', [UserController::class, "index"])->middleware('checkadmin')->name("admin.index"); //Página principal del admin
Route::delete('admin/{user}', [UserController::class, "destroy"])->middleware('checkadmin')->name("user.destroy"); //Página para eliminar un usuario
Route::get('admin/{user}/edit', [UserController::class, "edit"])->middleware('checkadmin')->name("user.edit"); //Página para mostrar el formulario de actualización de usuario
Route::put('admin/{user}/edit', [UserController::class, "update"])->middleware('checkadmin')->name("user.update"); //Página para actualizar el usuario
Route::get('admin/usuarios', [UserController::class, "index"])->middleware('checkadmin')->name("admin.users");
Route::get('admin/user/create', [UserController::class, "create"])->middleware('checkadmin')->name("user.create");
Route::post('admin/user', [UserController::class, "store"])->middleware('checkadmin')->name("user.store");

Route::get('/login', [LoginController::class, "index"])->name("login.index");
Route::post('/login', [LoginController::class, "store"])->name("login.store");
Route::put('/logout', [LoginController::class, "logout"])->name("login.logout");

Route::get('/register', [RegisterController::class, "index"])->name("register.index");
Route::post('/register', [RegisterController::class, "store"])->name("register.store");

Route::get('contactanos', function() {//RUTA PROSIVISONAL REQUIERE CAMBIOS
    $correo = new ContactanosMailable;

    Mail::to('alejandro.reina-martagon@iesruizgijon.com')->send($correo);

    return "Mensaje enviado";
});
