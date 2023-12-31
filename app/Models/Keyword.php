<?php

namespace App\Models;
use App\Models\Movie;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    use HasFactory;
    public function getMovies(){
        return $this->belongsToMany(Movie::class);
    }
}
