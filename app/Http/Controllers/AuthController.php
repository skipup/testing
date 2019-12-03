<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('adminn/home')->with('warning','You Are Login Right Now!');
        }
        return view('login');
    }
    public function postLogin(){
        try{
            $cre = request()->only('email','password');
            if(Auth::attempt($cre)){
                return redirect('/adminn/home')->with('success','You Are Login Now!');
            }else{
                return redirect()->back()->with('error','Email and password Dont Match');
            }
        }catch (\Exception $e){
            return redirect()->back()->with($e->getMessage());
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/');
    }

    public function home(){
        return view('admin.layout.master');
    }
}
