<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Article::factory(10)->create();

        foreach (Article::ARTICLES as $array) {
            Article::create([
                'title'     => $array['title'],
                'content'   => $array['content'],
                /* 'img'       => $array['img'], */
                /* 'device'    => 1, */
            ]);
        }
    }
}
