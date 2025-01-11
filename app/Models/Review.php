<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id',
        'review',
        'rating'   
    ];

    protected $primaryKey = 'review_id';
}
