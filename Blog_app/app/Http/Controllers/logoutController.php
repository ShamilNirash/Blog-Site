<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class logoutController extends Controller
{
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect()->route('home');
    }
}
