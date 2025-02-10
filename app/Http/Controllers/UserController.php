<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function loginPage(){
        if(Auth::check()){
            return redirect()->route('dashboard');
        }
        return view('login');
    }
    public function registerPage(){

        return view('register');
    }
    public function register(Request $request){
        $data =  $request->validate([
            'name' =>'required',
            'email' =>'required|email',
            'age' =>'required|numeric',
            'password' =>'required|confirmed',
            'role' =>'required',
        ]);
        $user = User::create($data);
        if($user){
            return redirect()->route('login');
        }
    }
    public function login(Request $request){
        $credentials =  $request->validate([
            'email' =>'required|email',
            'password' =>'required'
        ]);
        if(Auth::attempt($credentials)){
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('loginPage');

      }
      public function dashboardPage(){
        if (!Auth::check()) {
            return redirect()->route('loginPage');
        }
        return view('dashboard');

    }
      public function viewProfile(){
        return view('profile');
    }
      public function viewPost(){
        return view('post');
    }
}
