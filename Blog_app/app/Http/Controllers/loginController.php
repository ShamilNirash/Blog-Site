<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{ public function signin(){
    return view('layouts.user.loginform');
}
function signinPost(Request $request){

    $request->validate([
        'email'=>['required','email'],
        'password'=>'required'
    ]);
    $credentials=$request->only('email','password');
    if(Auth::attempt($credentials)){
        return redirect()->route('home');
}
return back()->withErrors(['msg' => 'Invalid email or password']);
}
}
