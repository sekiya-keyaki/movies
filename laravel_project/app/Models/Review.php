<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{

    protected $fillable = ['user_id','movie_id','body'];

    public function Movie(){
        return $this->belongsTo(Movie::class);
    }

    public function User(){

        return $this->belongsTo(\App\User::class);
    }
}
