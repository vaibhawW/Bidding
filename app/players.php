<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed name
 * @property mixed details
 */
class players extends Model
{
    public function manager(){
        return $this->belongsTo(Manager::class);
    }
}
