<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relacion muchos a muchos 
    public function users(){
        return $this->belongsToMany(User::class);
    }
}
