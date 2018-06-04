<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    //
    public function roles (){
        return $this
            ->belongsToMany('App\Roles')
            ->withTimestamps();
    }
}
