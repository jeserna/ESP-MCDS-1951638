<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::create(array(
            'name' => 'Polarización 2019',
            'content' => 'El pais seencuentra polarizado',
            'user_id' => 2,
            'category_id' => 1
        ));

        Article::create(array(
            'name' => 'El matrimonio del año',
            'content' => 'Higuita se vuelve a caer en cartagena con maluma',
            'user_id' => 1,
            'category_id' => 2
        ));
    }
}
