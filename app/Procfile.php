<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Procfile extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
