<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;

use function Laravel\Prompts\password;

class RegisterControlller extends Controller
{
    public function ViewRegister(): Response
    {

        return response()->view('authethications.Register', [
            'title' => 'Register'
        ]);
    }

    public function Registers(Request $request)
    {

        $ValidateRegister = $request->validate([

            'name' => 'required|max:200',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:200'

        ]);

        $res = User::create($ValidateRegister);

        if ($res == true) {
            return redirect('/login')->with('success', 'Register Successfully. Login Now!');
        }
    }
}
