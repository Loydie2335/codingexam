<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(StoreUserRequest $request){

        User::create([
            'full_name' => $request->input('full_name'),
            'email_address' => $request->input('email_address'),
            'date_of_birth' => $request->input('date_of_birth'),
            'password' =>Hash::make($request->input('password')),
        ]);

        $credentials = $request->only('email_address', 'password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        $request->session()->regenerateToken();

        return redirect(route('home.index'));

    }
}
