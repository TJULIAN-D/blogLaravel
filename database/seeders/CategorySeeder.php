<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /*
        $category = new Category();
        $category->title = "blog-2";
        $category->slug = "blog-2";
        $category->description = "descripcion blog-2";
        $category->meta_title = "blog-2";
        $category->meta_description = "descripcion blog-2";
        $category->status = "active";

        $category->save();
        */
        Category::factory(20)->create();
    }
}
