<?php

namespace App\Http\Controllers;

use App\Models\Mechanic;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'mechanics' => Mechanic::whereDoesntHave('owner', function ($query) {
                $query->whereNotNull('phone');
            })->get()->load(['owner']),
        ];

        return view('welcome', $data);
    }
}
