<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        return view('contact-us');
    }
}
