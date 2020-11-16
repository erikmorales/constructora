<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest', ['only' => 'Showloginform']);
    }
    public function Showloginform()
    {
       return view('auth.login');
    }
    public function login()
    {
        $credentials = $this->validate(request(), [
            'username' => 'required|string',
            'password' => 'required|string'
            ]);
        $user = User::where('Usuario',request()->input('username'))
        ->where('Password',request()->input('password'))
        ->first();
        $remember_me = request()->has('remember') ? true : false; 
        if (empty($user)) {
            return redirect(route('showloginform'))->with('flash', 'Estos datos son incorrectos');
        }
        elseif (Auth::loginUsingId($user->Empleado_ID,$remember_me)) {
            // Authentication passed...
            return redirect(route('home'));
        }else{
            return redirect(route('showloginform'))->with('flash', 'Estos datos son incorrectos');
        }  
    }
    public function logout()
    {
        if(Auth::check())
        {
            Auth::logout();
            request()->session()->flush();
            request()->session()->invalidate();
        }
        return  redirect(route('showloginform'));
    }
}
