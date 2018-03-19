<?php

namespace App\Http\Controllers;

use App\players;
use Illuminate\Http\Request;

class PlayersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response|string
     */
    public function index()
    {
        return players::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('players.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $player = new players();
        $player->name = $request->name;
        $player->details = $request->details;
        $player->save();
        $saved = "True";
        return view('players.create',compact('saved'));
    }

    /**
     * Display the specified resource.
     *
     * @param players $player
     * @return players
     * @internal param players $players
     */
    public function show(players $player)
    {
        return $player;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param players $player
     * @return \Illuminate\Http\Response
     * @internal param players $players
     */
    public function edit(players $player)
    {
        return view('players.create',compact('player'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\players  $players
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, players $players)
    {
        $players->name = $request->name;
        $players->details = $request->details;
        $players->save();
        $updated = true;
        return view('players.create',compact('updated'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param players $player
     * @return bool
     * @internal param players $players
     */
    public function destroy(players $player)
    {
        $player->delete();
    }

    /**
     * Update the status of player
     *
     * @param players $player
     * @internal param players $players
     */
    public function status(players $player){
        $player->update(['status'=>true]);
    }
}
