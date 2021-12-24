<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    function AdminLogin(Request $req){
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        $email=$req->input('email');
        $password=$req->input('password');

        if($email=='admin123@gmail.com' && $password=='123'){
            $req->session()->put('name','Admin');
            return redirect('admin');
        }else{
            $req->session()->flash('error','Please enter a valid details');
            return redirect('adminlogin');
        }
    }
    
    
}
