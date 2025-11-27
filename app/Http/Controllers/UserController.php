<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        return view("login.index");
    }
    public function show_2()
    {
        return view("Login.register");
    }
    public function show_3()
    {
        return view ("Login.login");
    }
}
