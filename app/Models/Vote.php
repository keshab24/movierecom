<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Vote extends Model
{
    use HasFactory;
    public function getMovie(){
        return $this->hasOne(Movie::class);
    }
}
