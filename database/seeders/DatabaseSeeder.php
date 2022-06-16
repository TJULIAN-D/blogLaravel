<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(CategorySeeder::class);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        /*
         * Esta es la foma de hacer los seed se crea una instancia del modelo y a su se crea los valores
         *  de cada columna
         * */

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

    }
}
