<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function offers()
    {
        return view('pages.offers');
    }

    public function home()
    {
        return view('welcome');
    }

    public function news()
    {
        return view('pages.news');
    }

    public function videos()
    {
        return view('pages.video');
    }
}
