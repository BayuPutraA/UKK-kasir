<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function landing()
    {
        return view('landing');
    }
    
    public function dashboard()
    {
        return view('master');
    }
}
