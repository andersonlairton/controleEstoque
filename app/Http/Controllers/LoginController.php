<?php

namespace estoque\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function login(){
        $credenciais = Request::only('email','password');

        if(Auth::attempt($credenciais)){
            return "Usuario Nome logado com sucesso";
        }
        return"As credenciais não são validas";
    }
}
