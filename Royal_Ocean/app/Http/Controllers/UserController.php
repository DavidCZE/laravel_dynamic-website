<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Show Register form
    public function register() {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request) {
        $formFieldsUser = $request->validate([
            'jmeno' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6'
        ]);

        //Hash Password
        $formFieldsUser['password'] = bcrypt($formFieldsUser['password']);

        //Create User
        $user = User::create($formFieldsUser);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'Profil byl vytvořen a přihlášen');
    }
}
