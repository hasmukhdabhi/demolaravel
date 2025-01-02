<?php

namespace App\Http\Controllers;
use App\Models\HeroSection;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        $heroSection = HeroSection::first();
        return view('home', compact('heroSection'));
    }
}
