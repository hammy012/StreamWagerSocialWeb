<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function welcome(){
        return view('welcome');
    }

    public function profile(){
        return view('profile');
    }

    public function find_people(){
        return view('find-people');
    }

    public function about(){
        return view('about');
    }

    public function faq(){
        return view('faq');
    }

    public function contact(){
        return view('contact');
    }
}
