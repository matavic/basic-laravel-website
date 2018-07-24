<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function getHome()
    {
        return view('home');
    }

    public function getAbout()
    {
        return view('about');
    }

    public function getContact()
    {
        return view('contact');
    }
}
