<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function songs(){
        return view('admin.songs');
    }
    public function users(){
        return view('admin.users');
    }
    public function commuities(){
        return view('admin.communities');
    }
    public function courses(){
        return view('admin.courses');
    }
    public function transactions(){
        return view('admin.transactions');
    }
    public function settingd(){
        return view('admin.settings');
    }
}
