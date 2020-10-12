<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SignupController extends Controller
{
    public function signupForm(Request $request)
    {
        Session::put('activeNav', 'signup');

        return view('signup');
    }

    public function signup(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->save();

        return "signup successful";
    }
}
