<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutUsController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'about');

        return view('about-us');
    }
}
