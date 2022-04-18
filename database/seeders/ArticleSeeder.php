<?php

namespace Database\Seeders;

use App\Services\CommentService;
use App\Services\TagService;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Services\ArticleService;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    protected $faker;

    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 20; $i++) {

            $params = [
                'article_cover' =>'https://picsum.photos/200/300',
                'article_title' => $faker->word,
                'article_full_text' => $faker->text,
            ];

            $tag_params = [
                'article_id' => 1,
                'tag_id'    => 2
            ];

            (new ArticleService())->create($params);
            (new TagService())->create($tag_params);
        }
    }

}
