<?php

namespace App\Http\Controllers;

use App\Models\Event;
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

    public function student(){
        return view('team.student.index');
    }
    public function faculty(){
        return view('team.faculty.index');
    }
    public function alumini(){
        return view('team.alumini.index');
    }

    public function teamDetails(){
        return view('team.show');
    }

    public function blog(){
        return view('blog.index');
    }

    public function blogDetails(){
        return view('blog.show');
    }

    public function course(){
        return view('course.index');
    }

    public function courseDetails(){
        return view('course.show');
    }

    public function events(){
        $events = Event::all();
        // dd($events);
        return view('events.index', compact('events'));
    }

    public function eventDetails(){
        return view('events.show');
    }
}
