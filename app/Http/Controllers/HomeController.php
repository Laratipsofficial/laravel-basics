<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'users' => User::get()->load(['roles' => function ($query) {
                $query->wherePivot('expires_at', '>', now());
            }]),
        ];

        return view('welcome', $data);
    }
}
