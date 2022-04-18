<?php

namespace App\Services;
use App\Models\Comment;

class CommentService
{
    public function create($params)
    {
        return Comment::create($params);
    }

}
