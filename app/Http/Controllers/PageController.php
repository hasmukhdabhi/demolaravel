<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // about page
    public function about() {

        return view('about');
    }

    // services page
    public function services () {
        
        return view('services');
    }

    // contact page
    public function contact () {
        
        return view('contact');
    }
    public function crud () {
        
        return view('crud');
    }


}
