<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongsController extends Controller
{
    public function songs(){
        return view('songs.songs');
    }
    public function showSheet(){
        return view('songs.sheet-musics');
    }
}
