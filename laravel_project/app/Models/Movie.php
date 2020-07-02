<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public function keywords(){
        return $this->hasMany(Keyword::class);
    }
}
