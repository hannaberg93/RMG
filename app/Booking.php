<?php

namespace App;

use App\Booking;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function article(){
        return $this->belongsTo(Article::class);
    }
}
