<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class loginController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function create(Request $request){
        $user = new User();
    // if ($request-> confim != $request->password){
    //     return redirect('register')->with('error','Both password are not matched!');
    // }
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);
    $user->save();
        return redirect('login')->with('message' ,'sufful');
    }

}
