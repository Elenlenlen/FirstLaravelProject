<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('home');
    }

    public function show()
    {
        return view('home', ['name' => 'Elena']);
    }
}
