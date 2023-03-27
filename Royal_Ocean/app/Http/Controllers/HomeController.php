<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    //zobrazit home
    public function index() {
        //Role::create(['name'=>'admin']);
        //Permission::create(['name'=>'everything']);
        //$role = Role::findById(1);
        //$permission = Permission::findById(1);
        //$role->givePermissionTo($permission);
        //auth()->user()->givePermissionTo('everything');
        //auth()->user()->assignRole('admin');
        //return auth()->user()->getRoleNames();
        return view('home');
    }
}
