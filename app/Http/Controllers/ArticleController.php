<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticleService;

class ArticleController extends Controller
{
    public function getAll(Request $request)
    {
        $articles  = (new ArticleService())->getAll();
        return response()->json($articles, 200);
    }

    public function create(Request $request)
    {
        $article = (new ArticleService())->create($request->all());
        return response()->json($article, 200);
    }

    public function getOne(Request $request, $article_id)
    {
        $article = (new ArticleService())->getOne($article_id);
        return response()->json($article, 200);
    }

    public function increaseLike(Request $request, $article_id)
    {
        $article = (new ArticleService())->articleIncreaseLikeCount($article_id);
        return response()->json($article, 200);
    }

    public function increaseView(Request $request, $article_id)
    {
        $article = (new ArticleService())->articleIncreaseViewCount($article_id);
        return response()->json($article, 200);
    }

}
