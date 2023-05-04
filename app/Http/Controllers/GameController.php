<?php

namespace App\Http\Controllers;

use App\Models\Game;
use Illuminate\Http\Request;

class GameController extends Controller
{
 public function create(){
    return view('game.create');
 }
 public function store(Request $request){
    $game = Game::create([
        'title' => $request->title,
        'producer' => $request->producer,
        'description' => $request->description
    ]);
    return redirect(route('homepage'))->with('gameCreated', "Hai inserito con successo un videogame");
 }

 public function index(){
    $games = Game::all();
    return view('game.index', compact('games'));
 }
 public function indexSlider(){
    $games = Game::all();
return view('game.indexSlider', compact('games'));
 }
}
