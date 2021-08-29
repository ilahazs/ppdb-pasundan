<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        return view('home', ['title' => 'Home']);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'name' => 'Ilahazs',
            'email' => 'ilahazs@gmail.com',
            'image' => 'profile.png'
        ]);
    }
}
