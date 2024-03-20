<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class RegisterControlller extends Controller
{
    public function ViewRegister(): Response
    {

        return response()->view('authethications.Register', [
            'title' => 'Register'
        ]);
    }

    public function Registers()
    {

        return request()->all();
    }
}
