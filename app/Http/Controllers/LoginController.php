<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {

        if (Auth::check()) {
           return redirect(route('home.index'));
        }
    }


    public function index(){

        return view('login');

    }

    public function authenticate(LoginRequest $request){

        if(Auth::attempt([ 'email_address' => $request->input('email_address'), 'password' => $request->input('password') ])){
            $request->session()->regenerate();
            return redirect(route('home.index'));
        }
        else{
            return redirect(route('login'))->with('error','User is not found or Incorrect Password');
        }

    }
}
