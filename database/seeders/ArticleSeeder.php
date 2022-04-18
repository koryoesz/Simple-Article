<?php

namespace Database\Seeders;

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
                'article_full_text' => $faker->text
            ];

            (new ArticleService())->create($params);
        }
    }

}
