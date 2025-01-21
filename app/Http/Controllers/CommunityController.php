<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommunityController extends Controller
{
    public function community(){
        return view('community.communties');
    }
    public function communityChat(){
        return view('community.community-chat');
    }
    public function communityCreate(){
        return view('community.community-create');
    }
}
