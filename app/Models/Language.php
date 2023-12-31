<?php

namespace App\Models;
use App\Models\Movie;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    use HasFactory;
    public function getMovies(){
        return $this->hasMany(Movie::class);
    }
}
