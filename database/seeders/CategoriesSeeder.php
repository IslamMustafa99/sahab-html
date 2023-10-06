<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        \App\Models\Category::create([
            'name'=>'الأثاث المنزلي',

        ]);
         $category = new \App\Models\Category();
         $category->name="الأثاث المنزلي ";
         $category->save();


         Category::factory(10)->create();
    }
}
