<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class loginController extends Controller
{
     public function login(){
        // dd('login page');
        return view ('auth.login');
        return redirect('index2');

     }

     public function index2(){
        // dd('login page');
        return view ('index2');

     }




     public function register(){
        // dd('login page');
        return view ('auth.register');
     }

     public function create(Request $request){
        // dd('$request->all()');
        return redirect('index');
     }
}
