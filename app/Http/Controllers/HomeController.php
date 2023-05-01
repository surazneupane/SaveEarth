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


    public function about()
    {
        return view('about');
    }



    public function blog()
    {
        return view('blog');
    }

    public function showBlog($id)
    {
        return view('blogsingle');
    }


    public function causes()
    {
        return view('causes');
    }


    public function contactUs()
    {
        return view('contactus');
    }
}
