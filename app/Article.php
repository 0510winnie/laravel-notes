<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = [
    	'title', 'content'
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function category()
    {
    	return $this->belongsTo(ArticleCategory::class);  //ArticleCategory::class 是取得該class name 的方法
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
