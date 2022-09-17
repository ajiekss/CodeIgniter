<?php

namespace App\Controllers;

use Config\View;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dewi | RandomForest',
            'set' => 'home'
        ];
        return view('pages/home', $data);
    }
    public function about()
    {
        $data = [
            'title' => 'About',
            'set' => 'about'
        ];
        return view('pages/about', $data);
    }
    public function contact()
    {
        $data = [
            'title' => 'Contact',
            'set' => 'contact'
        ];
        return view('pages/contact', $data);
    }
}
