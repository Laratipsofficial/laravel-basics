<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function index($slug)
    {
        return view('about.about-us');
    }
}
