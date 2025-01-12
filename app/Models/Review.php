<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'review_id';
    protected $fillable = [
        'review_id',
        'user_id',
        'review',
        'rating'   
    ];

    protected $table='review';

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function book(){
        return $this->belongsTo(Book::class);
    }
}
