<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class loginController extends Controller
{ public function signin(){
    return view('layouts.user.loginform');
}
function signinPost(Request $request){
}
}
