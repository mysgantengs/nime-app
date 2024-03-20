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
}
