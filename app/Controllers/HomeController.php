<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('pages/home');
    }
    public function about(): string
    {
        return view('pages/about');
    }
    public function contact(): string
    {
        return view('pages/contact');
    }

}
