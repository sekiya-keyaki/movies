<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $fillable = ['movie_id','genre'];

    public function Movie(){
        return $this->belongsTo(Movie::class);
    }
}
