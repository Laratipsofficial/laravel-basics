<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Scopes\ActiveScope;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\LazyCollection;

class HomeController extends Controller
{
    public function index()
    {
        Session::put('activeNav', 'home');

        // $items = collect([]);
        // $handle = fopen(public_path('products.txt'), 'r');

        // while (($line = fgets($handle)) !== false) {
        //     $items->push($line);
        // }

        // $items = $items->map(function ($product) {
        //     return strtoupper($product);
        // })->take(1000);

        $items = LazyCollection::make(function () {
            $handle = fopen(public_path('products.txt'), 'r');
        
            while (($line = fgets($handle)) !== false) {
                yield $line;
            }
        })->map(function ($product) {
            return strtoupper($product);
        })->take(1000);

        $data = [
            'title' => 'Home Page',
            'items' => $items
        ];

        return view('welcome', $data);
    }
}
