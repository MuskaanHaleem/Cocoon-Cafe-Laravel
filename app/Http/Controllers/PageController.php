<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Home Page
    public function home()
    {
        return view('home');
    }

    // Menu Page
    public function menu()
    {
        return view('menu');
    }

    public function order()
    {
        return view('order');
    }

    // Contact Page
    public function contact()
    {
        return view('contact');
    }
}
