<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manager extends Model
{
    public function players(){
        return $this->hasMany(players::class);
    }
}
