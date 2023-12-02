<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    // Defines the relationship that a tweet is related to a user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

}
