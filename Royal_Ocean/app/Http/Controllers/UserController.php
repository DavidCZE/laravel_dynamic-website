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
            'name' => ['required', 'min:2'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required'
        ]);

        //Hash Password
        $formFieldsUser['password'] = bcrypt($formFieldsUser['password']);

        //Create User
        $user = User::create($formFieldsUser);

        //Login
        auth()->login($user);

        return redirect('/')->with('message', 'Profil byl vytvořen a přihlášen');
    }

    //Logout
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();


        return redirect('/')->with('message', 'Uživatel odhlášen');
    }

    //Show login form
    public function login() {
        return view('users.login');
    }

    //authenticate User
    public function __invoke(Request $request) {
        $formFieldsUser = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        if(auth()->attempt($formFieldsUser)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Uživatel přihlášen');
        }

        return back()->withErrors(['email' => 'Špatné přihlašovací údaje'])->onlyInput('email');
    }
}
