<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        
        if (Auth::check()) {
           return redirect(route('home.index'));
        }
    }

    public function index(){

        return view('register');

    }
}
