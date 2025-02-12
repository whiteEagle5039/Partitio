<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show($slug){
        $user = User::where('username', $slug)->firstOrFail();
        return view('user.profile', [
            'user'=>$user
        ]);
    }
    public function dologout(){
        Auth::logout();
        return redirect()->route('acceuil.home');
    }
}
