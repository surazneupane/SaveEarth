<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * index
     *
     * @return view
     */
    public function index()
    {
        return view('home');
    }
}
