<?php

namespace App;

use Baum\Node;
use Illuminate\Database\Eloquent\Model;

class Referral extends Node
{


    public function user() {
        return $this->belongsToMany('App\User');
    }
}
