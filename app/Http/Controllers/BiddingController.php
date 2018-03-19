<?php

namespace App\Http\Controllers;

use App\Manager;
use App\players;
use Illuminate\Http\Request;

class BiddingController extends Controller
{
    public function addManager(Manager $manager,players $player, $amount){
        if($player->manager_id) Manager::whereId($player->manager_id)->increment('amount',$player->amount);
        $player->manager_id = $amount==0?null:$manager->id;
        $player->amount = $amount;
        $player->save();
        $manager->decrement('amount',$amount);
        $manager->save();
    }
    public function setAmount($amount){

        $managers = Manager::all();
        foreach ($managers as $manager){
            Manager::whereId($manager->id)->update(['amount'=>$amount]);
        };
        return "Success";
    }
    public function result(){
        $managers = Manager::all();
        $teams = [];
        foreach($managers as $manager){
            $teams[$manager->name] = $manager->players;
        }
        return view('managers.teams',compact('teams'));
    }
}
