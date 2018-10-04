<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    //

    public function luxury(){
    	return $this->belongsTo('App\Luxury');
    }
}
