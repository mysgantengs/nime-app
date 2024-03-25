<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
// use Illuminate\Http\RedirectResponse;

class LoginControlller extends Controller
{

    public function ViewLogin(): Response
    {

        return response()->view('authethications.Login', [
            'title' => 'Login'
        ]);
    }

    public function Logins(Request $request)
    {

        $validateLogin = $request->validate([

            'name' => ['required'],
            'password' => ['required']

        ]);



        $userLogin = Auth::attempt($validateLogin);
        if ($userLogin == true) {
            request()->session()->regenerate();
            return redirect('/dashboard');
        } else {
            return back()->with('Error', 'Login Failed!');
        }
    }
}
