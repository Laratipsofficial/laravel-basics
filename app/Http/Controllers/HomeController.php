<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $products = Product::get()->published();

        $data = [
            'title' => 'Home Page',
            'draftProducts' => $products->drafts(),
            'publishedProducts' => $products->published(),
            'scheduledProducts' => $products->scheduled(),
        ];

        return view('welcome', $data);
    }
}
