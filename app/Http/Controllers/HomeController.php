<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Scopes\ActiveScope;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        $data = [
            'title' => 'Home Page',
        ];

        return Product::withoutGlobalScope(ActiveScope::class)->inStock()->get();

        return view('welcome', $data);
    }
}
