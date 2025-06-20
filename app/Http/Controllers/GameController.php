<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreGameRequest;
use App\Http\Requests\UpdateGameRequest;
use App\Models\Genre;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class GameController extends Controller implements HasMiddleware
{
    public static function middleware()
    {
        return[
            new Middleware('auth',except:['home','index','show'])
        ];
    }
    /**
    * Display a listing of the resource.
    */
    public function index()
    {
        $games=Game::orderBy('year','desc')->get();
        return view('game.index',compact('games'));
    }
    
    /**
    * Show the form for creating a new resource.
    */
    public function create()
    {
        $genres=Genre::orderBy('name')->get();
        return view('game.create',compact('genres'));
    }
    
    /**
    * Store a newly created resource in storage.
    */
    public function store(StoreGameRequest $request)
    {
        $game=Game::create([
            'title'=>$request->title,
            'plot'=>$request->plot,
            'publisher'=>$request->publisher,
            'year'=>$request->year,
            'cover'=>$request->file('cover')->store('covers','public'),
            'user_id'=>Auth::id()
        ]);
        $game->genres()->attach($request->genres);
        return redirect(route('home'))->with('message',"Il gioco $game->title è stato aggiunto alla libreria dei titoli visionabili");
    }
    
    /**
    * Display the specified resource.
    */
    public function show(Game $game)
    {
        return view('game.show',compact('game'));
    }
    
    /**
    * Show the form for editing the specified resource.
    */
    public function edit(Game $game)
    {
        return view('game.edit',compact('game'));
    }
    
    /**
    * Update the specified resource in storage.
    */
    public function update(UpdateGameRequest $request, Game $game)
    {
        if (Auth::user() && Auth::user()->id == $game->user_id){
            $game->update([
                'title'=>$request->title,
                'publisher'=>$request->publisher,
                'year'=>$request->year,
                'plot'=>$request->plot,
                'cover'=>$request->has('cover') ? $request->file('cover')->store('book-cover','public') : $game->cover,
            ]);
            $game->platforms()->detach();
            $game->platforms()->attach($request->platforms);
            return redirect(route('home'))->with('message',"Il gioco $game->title è stato modificato");
        }
        return redirect(route('home'))->with('denied','Accesso negato');
    }
    /**
    * Remove the specified resource from storage.
    */
    public function destroy(Game $game)
    {
        if (Auth::user() && Auth::user()->id == $game->user_id){

            $game->delete();
            return redirect(route('game.index'))->with('message','Il gioco è stato eliminato con successo');
        }
        
        return redirect(route('home'))->with('denied','Accesso negato');
    }
}
