<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    public function index(){ //Listado de todos los usuarios
        $users = User::paginate(5);
        // dd($users);
        return view("admin.index", compact('users'));
    }

    public function destroy(User $user){ 
        $user->delete();
        redirect()->back();
    }
}
