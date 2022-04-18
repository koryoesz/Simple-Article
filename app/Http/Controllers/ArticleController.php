<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\ArticleService;


/**
 * @OA\Post(
 * path="/articles",
 * summary="Get All articles",
 * description="",
 * operationId="",
 * tags={"articles"},
 * @OA\RequestBody(
 * ),
 * @OA\Response(
 *    response=422,
 *    description="Wrong credentials response",
 *    @OA\JsonContent(
 *       @OA\Property(property="message", type="string", example="No Articles Found!")
 *        )
 *     )
 * )
 */

class ArticleController extends Controller
{
    public function getAll(Request $request)
    {
        $articles  = (new ArticleService())->getAll();
        return response()->json($articles, 200);
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

    public function getComment(Request $request, $article_id)
    {
        $article = (new ArticleService())->getComment($article_id);
        return response()->json($article, 200);
    }

}
