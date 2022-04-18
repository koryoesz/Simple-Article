<?php

namespace App\Services;

use App\Models\ArticleTag;

class TagService
{
    public function create($params)
    {
        return ArticleTag::create($params);
    }

}
