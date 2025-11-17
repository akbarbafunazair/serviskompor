<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function service()
    {
        return view('service');
    }
    public function contact()
    {
        return view('contact');
    }
    public function halaman1()
    {
        return view('halaman1');
    }
    public function halaman2()
    {
        return view('halaman2');
    }
}
