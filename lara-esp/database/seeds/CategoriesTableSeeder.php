<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create(array(
                'name' => 'Economia',
                'description' => 'Esta categoria muestra articulos economicos.'
            ));
        
        $cat = new Category;
        $cat->name = 'Politica';
        $cat->description = 'Esta categoria muestra articulos relacionados con la politica.';
        $cat->save();

        // factory(Category::class, 10)->create();
    }
}
