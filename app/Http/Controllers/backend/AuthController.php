<?php

namespace App\Http\Controllers\backend;

use notify;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(){
        return view('backend.pages.auth.login');
    }
    public function loginPost(Request $request){
        // dd($request)->all();
        $credentials=$request->except('_token');
        // dd($credentials);
        if(Auth::attempt($credentials)){
            notify()->success('Logged in Successfull');
            return redirect()->route('admin.dashboard');
        }else{
            notify()->error('Invalid Credentials');
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->back();
    }
}
