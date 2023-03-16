<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    //zobrazit home
    public function index() {

        Permission::create(['name'=>'write post']);
        return view('home');
    }
}
