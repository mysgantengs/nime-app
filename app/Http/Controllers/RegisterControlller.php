<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use function Laravel\Prompts\password;

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

        return request()->validate([

            'name' => 'required|max:200',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:5|max:200'


        ]);

        @dd('register succesfully');
    }
}
