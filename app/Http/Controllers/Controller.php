<?php

namespace App\Http\Controllers;

abstract class Controller
{
    //display the home page
    public function home()
    {
        return view('welcome');
    }
}
