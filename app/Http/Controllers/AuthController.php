<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function Authlogin(){
        return view('user.login');
    }
    public function authLogine(LoginRequest $request){
        $credential = $request->validated();

        if( Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended(route('acceuil.home'));
        }
        return to_route('auth.login')->with([
            'errorLogin'=>'email ou mot de pass invalid !'
        ])->onlyInput('email');
    }
    public function AuthInscription(){
        return view('user.register');
    }
    public function doInscription(RegisterRequest $register){
        $user = $register->validated();
        User::create($user);
        return redirect()->route('auth.login')->with('inscription', "Votre compte à été créer avec success.");
    
    }
    public function profil(){
        return view('user.profile');
    }
    public function dologout(){
        Auth::logout();
        return redirect()->route('acceuil.home');
    }
}
    