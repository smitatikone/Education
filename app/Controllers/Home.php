<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function whyus()
    {
        return view('whyus');
    }
    public function contact()
    {
        return view('contact');
    }
    public function course()
    {
        return view('course');
    }

    
    public function live_session()
    {
        return view('live_session');
    }
    public function webinar()
    {
        return view('webinar');
    }
    public function seminar()
    {
        return view('seminar');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
}
