<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class registerController extends Controller
{
public function signup(){
    return view('layouts.user.registerform');
}
function signupPost(Request $request){
    $request->validate([
        'email'=> 'required',
        'first_name'=> 'required',
        'last_name'=>'required',
'password' => 'required|confirmed',
    ]);
$user= new User();
$user->first_name= $request->first_name;
$user->last_name= $request->last_name;
$user->email= $request->email;
$user->password = bcrypt($request->password);
if ($user->save()) {
    return redirect()->route('signin')->with('success', 'User created successfully!');
}

return back()->withErrors(['msg' => 'Failed to create user.']);
}
}
