<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Mechanic;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'product' => Post::with(['comments' => function ($query) {
                $query->where('is_active', 1);
            }])->find(1),
        ];

        return view('welcome', $data);
    }
}
