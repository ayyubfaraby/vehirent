<?php

namespace App\Controllers;

class HomeController extends BaseController
{
    public function index(): string
    {
        return view('pages/home', [
            'title' => 'Home'
        ]);
    }

    public function about(): string
    {
        return view('pages/about', [
            'title' => 'About'
        ]);
    }

    public function contact(): string
    {
        return view('pages/contact', [
            'title' => 'Contact'
        ]);
    }
}

