<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [ 'name' => 'Programming' ],
            [ 'name' => 'Animation' ],
            [ 'name' => 'Design' ],
            [ 'name' => 'Gaming' ],
        ]);
    }
}
