<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Article;
use App\Category;

class Category extends Model
{
    public function articles(){
        return $this->hasMany(Article::class);
    }
    public function categories(){
        return $this->hasMany(Category::class, 'parent_id');
    }
}
