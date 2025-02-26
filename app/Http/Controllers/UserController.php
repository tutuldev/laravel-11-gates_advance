<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

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
        // if (!Auth::check()) {
        //     return redirect()->route('loginPage');
        // }
        // using Gate method 1
        // if(Gate::allows('isAdmin')){
        //     // return "Hellow , You are Admin.";
        //     return view('dashboard');
        // }else{
        //     return "Access Denied.";
        // }

        // gate method 2
        // Gate::authorize('isAdmin'); //true na hole 403 page return korbe
        return view('dashboard');


    }
      public function viewProfile(int $userid){
        // profile gate 1
        // if(Gate::allows('view-profile',$userid)){
        //     $user = User::findOrFail($userid);
        //     // return $user;
        //     return view('profile',compact('user'));
        // }else{
        //     // return redirect()->route('dashboard');
        //     abort(403);
        // }
        // profile gate 2

        Gate::authorize('view-profile', $userid);
        $user = User::findOrFail($userid);
        return view('profile',compact('user'));
    }



      public function viewPost(){
        $posts = Post::where('user_id',Auth::id())->get();
        // return $posts;
        return view('post',compact('posts'));
    }

    public function UpdatePost($postid){

        $post = Post::find($postid);
        $targetUser = $post->user_id;

        Gate::authorize('update-post', $targetUser);
        return $post;
    }
}
