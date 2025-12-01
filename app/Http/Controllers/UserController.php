<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class UserController extends Controller
{
    public function HomePage()
    {
        return view("Trang_chu.main");
    }
    public function about() {
      return view('Trang_chu.about');
    }

    public function menu() {
      return view('Trang_chu.menu');
    }
    
    public function contact() {
      return view('Trang_chu.Lien_he');
    }
}
