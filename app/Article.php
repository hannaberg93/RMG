<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;
use App\User;

class Article extends Model
{
    public function categories(){
        return $this->belongsToMany(Category::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
