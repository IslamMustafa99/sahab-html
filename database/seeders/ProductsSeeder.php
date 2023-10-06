<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $product = new \App\Models\Product();
        
      
        $product->name = "طاولة سقرة جديدة";
        $product->quantity = 4;
        $product->price = 50.00; // تحديد قيمة لحقل السعر
        $product->save();
    }
}
