<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        Session::put('activeNav', 'contact');

        return view('contact-us');
    }
}
