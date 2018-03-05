<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ArticleCategory extends Model
{
    public function articles()
    {
    	return $this->hasMany(Article::class, 'category_id');
    }
}

