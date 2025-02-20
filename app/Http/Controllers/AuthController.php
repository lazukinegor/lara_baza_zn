<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        return view('blocks.auth.auth', $request);
    }
    public function register(Request $request)
    {
        return view('blocks.auth.register', $request);
    }
}
