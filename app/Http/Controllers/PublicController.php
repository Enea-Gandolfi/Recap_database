<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicController extends Controller
{
    public function home() {
        $games=Game::orderby('created_at','desc')->take(3)->get();
        return view('welcome',compact('games'));
    }

    public function dashboard(){
        $games=Game::where('user_id',Auth::user()->id)->get();
        return view('auth.dashboard',compact('games'));
    }
}