<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'name',
        'author',
        'sypnosis',
        'image',
        'year',
        'genre'
    ];
}
