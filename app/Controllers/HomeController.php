<?php

namespace App\Controllers;
use App\Models\MobilModel;

class HomeController extends BaseController
{
    public function index(): string
    {
        $mobilModel = new MobilModel();
        $mobilList = $mobilModel->findAll();

        $data = [
            'title' => 'Home',
            'mobilList' => $mobilList
        ];
        
        return view('pages/home', $data);
    }

    public function about(): string
    {
        return view('pages/about', ['title' => 'About']);
    }

    public function contact(): string
    {
        return view('pages/contact', ['title' => 'Contact']);
    }

}

