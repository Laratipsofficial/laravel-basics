<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactUsRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactUsController extends Controller
{
    public function index(Request $request)
    {
        Session::put('activeNav', 'contact');

        return view('contact-us');
    }

    public function store(ContactUsRequest $request)
    {
        dd($request->all());
    }
}
