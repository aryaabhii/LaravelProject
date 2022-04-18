<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Model\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role=Auth::user()->role;
        if($role=='admin'){
            return view("adminDashboard.index");
        }
        if($role=='sellers'){
            return view("roomsellers");
        }else{
            return view("dashboard");
        }
    }
    public function addsellers(Request $request)
    {
       $data=new user;
       $data->name=$request->name;
       $data->email=$request->email;
       $data->password=$request->password;
       $data->role='2';
       $data->save();
       return redirect()->back();
    }
}