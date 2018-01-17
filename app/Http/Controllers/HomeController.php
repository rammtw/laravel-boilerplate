<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function permAdd()
    {
        //$role = Role::create(['name' => 'writer']);
        //$permission = Permission::create(['name' => 'edit articles']);

        //auth()->user()->givePermissionTo('edit articles');
        auth()->user()->assignRole('writer');
    }
}
