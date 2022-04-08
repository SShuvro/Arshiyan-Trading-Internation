<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtiController extends Controller
{
    public function index()
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

    public function serviceDetails()
    {
        return view('service-details');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function portfolioDetails()
    {
        return view('portfolio-details');
    }

    public function team()
    {
        return view('team');
    }

    public function blog()
    {
        return view('blog');
    }

    public function blogDetails()
    {
        return view('blog-details');
    }

    public function contact()
    {
        return view('contact');
    }
}
