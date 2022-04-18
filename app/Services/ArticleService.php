<?php

namespace App\Services;

use App\Models\Article;

class ArticleService
{
    public function create($params)
    {
        $article = Article::create($params);
        if(isset($params['tags'])){
            (new CommentService())->create($params['tags']);
        }
        return $article;
    }

    public function getOne($article_id)
    {
        return Article::find($article_id);
    }

    public function getAll()
    {
        return Article::paginate(10);
    }

    public function articleIncreaseLikeCount($article_id)
    {
        $article = Article::find($article_id);
        $article->article_likes_counter = $article->article_likes_counter + 1;
        $article->save();

        return $article;
    }

    public function articleIncreaseViewCount($article_id)
    {
        $article = Article::find($article_id);
        $article->article_views_counter = $article->article_views_counter + 1;
        $article->save();

        return $article;
    }
}
