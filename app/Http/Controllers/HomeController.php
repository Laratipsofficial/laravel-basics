<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
            'products' => Product::get()->load(['comments' => function ($query) {
                $query->where('is_active', 1);
            }]),
        ];

        return view('welcome', $data);
    }
}
