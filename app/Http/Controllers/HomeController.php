<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Mechanic;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'countries' => Country::withCount(['posts'])->orderBy('posts_count')->get(),
        ];

        return view('welcome', $data);
    }
}
