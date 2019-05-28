<?php

namespace App;

use App\Movie;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function post()
    {
        return $this->belongsTo(Movie::class);
    }
}
