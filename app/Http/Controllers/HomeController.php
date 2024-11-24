<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('home.index');
    }

    public function about(){
        return view('about.index');
    }

    public function contact(){
        return view('contact.index');
    }

    public function team(){
        return view('team.index');
    }

    public function teamDetails(){
        return view('team.show');
    }
}
