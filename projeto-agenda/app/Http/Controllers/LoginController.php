<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Retorna o html e o css montado
    public function login(){
        return(view('login'));
    }
}
