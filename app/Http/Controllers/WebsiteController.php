<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // display the dashboard index page
    public function index()
    {
        return view('dashboard.index');
    }
}
