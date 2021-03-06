<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commentaire extends Model
{
    //
    protected $guarded = [];

    public function products(){
        return $this->belongsToMany("App\Product");
    }
    public function clients (){
        return $this->belongsToMany("App\Client");
    }
}

