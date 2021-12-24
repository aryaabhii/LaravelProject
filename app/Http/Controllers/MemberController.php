<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class MemberController extends Controller
{
    public function create(){
        return view("member.create");
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:members',
            'password'=>'required',
            'phone'=>'required|unique:members',
            'gymname'=>'required',
            'gymphone'=>'required',
        ]);
        $member = new Member();
        $member->name =$request->name;
        $member->email =$request->email;
        $member->password = Hash::make($request->password);
        $member->phone =$request->phone;
        $member->membership_type =$request->membership_type;
        $member->membership_validation =$request->membership_validation;
        $member->gymname =$request->gymname;
        $member->gymphone =$request->gymphone;
        $member->gymaddress =$request->gymaddress;
        $member->membership_status =$request->membership_status;

        $member->save();

		return Redirect::route('members.create')->with('success', __('Member Created Successfully'));

        
    }
}
