<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //Relacion uno a muchos

    public  function posts(){
       return $this->hasMany(Post::class);
    }

    
}
