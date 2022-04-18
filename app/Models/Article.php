<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $with = ['tags', 'comments'];

    public function tags()
    {
        return $this->hasMany('App\Models\ArticleTag', 'article_id', 'id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comment', 'article_id', 'id');
    }
}
