<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'book_id';
    protected $fillable = [
        'book_id',
        'name',
        'author',
        'sypnosis',
        'image',
        'year',
        'genre'
    ];
    
}
