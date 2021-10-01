<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;
class HomeController extends Controller
{
    public function dashboard(){
        // $user = \Auth::user();
        // assign role 
        // $role = Role::where('slug','editor')->first();
        // $user->roles()->attach($role);
        // dd($user->hasRole('author'));
        // 
        // check permission 
        // $permission = Permission::first();
        // $user->permissions()->attach($permission);
        // dd($user->permissions);
        // dd($user->can('add-post'));
        // 
        // 
        // 
        // 
        // dd($user->roles);
        return view('dashboard');
    }
}
