<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Article extends Model
{
    protected $fillable = ['title', 'desc'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function bookings(){
        return $this->hasMany(Booking::class);
    }

}
