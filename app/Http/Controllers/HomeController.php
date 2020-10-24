<?php

namespace App\Http\Controllers;

use App\Models\Login;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'users' => User::withLastLogin()->get(),
        ];

        return view('welcome', $data);
    }
}
