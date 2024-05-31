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

    // display the tracker details page
    public function tracker()
    {
        return view('dashboard.viewmore');
    }

    // display the add tracker page
    public function addTracker()
    {
        return view('dashboard.addTracker');
    }

    // display the edit tracker page
    public function editTracker()
    {
        return view('dashboard.editTracker');
    }
}
