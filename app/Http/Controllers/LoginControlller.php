<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class LoginControlller extends Controller
{

    public function ViewLogin(): Response
    {

        return response()->view('authethications.Login', [
            'title' => 'Login'
        ]);
    }

    public function Logins()
    {

        request()->validate([

            'name' => 'required|max:200',
            'password' => 'required|min:5|max:200'

        ]);

        dd('login found!');
    }
}
