<?php

namespace Database\Seeders;

use App\Services\CommentService;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleCommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i = 0; $i < 5; $i++) {

            $params = [
                'article_id' => $i + 1,
                'subject' => $faker->word,
                'body' => $faker->text
            ];

            (new CommentService())->create($params);
        }
    }
}
