<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;
use Session;

class AuthController extends Controller
{
    private $check;
    private $user;
    public function login(){
        return view('login.login');
    }
    public function register(){
        return view('login.register');
    }
    public function newLogin(Request $request){
        if ($request->check == 1){
            $this->user =Teacher::where('email', $request->email)->where('status',1)->first();
            if ($this->user){
                if (password_verify($request->password , $this->user->password)){
                    Session::put('user_id', $this->user->id);
                    Session::put('user_name', $this->user->name);
                    return redirect('/teacher-dashboard');
                }
                else{
                    echo 'Invalid Password';
                    exit();
                }
            }
            else{
                return redirect()->back()->with('message', 'Email address invalid or status is invalid');
            }
        }
        else{

        }
    }

}
