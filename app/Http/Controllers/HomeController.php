<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //display the home page
    public function home()
    {
        return view('welcome');
    }
}
