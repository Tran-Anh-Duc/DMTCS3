<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product();
        $product->name = "Trà sữa vị cacao";
        $product->price = 30000;
        $product->category_id = "2";
        $product->save();

        $product = new Product();
        $product->name = "Trà sữa vị dâu";
        $product->price = 30000;
        $product->category_id = "2";
        $product->save();

        $product = new Product();
        $product->name = "Trà đào";
        $product->price = 25000;
        $product->category_id = "1";
        $product->save();

        $product = new Product();
        $product->name = "Trà tắc";
        $product->price = 25000;
        $product->category_id = "1";
        $product->save();

        $product = new Product();
        $product->name = "Nước ép cam";
        $product->price = 20000;
        $product->category_id = "4";
        $product->save();

        $product = new Product();
        $product->name = "Nước ép dưa hấu";
        $product->price = 25000;
        $product->category_id = "4";
        $product->save();

        $product = new Product();
        $product->name = "Bạc xỉu";
        $product->price = 30000;
        $product->category_id = "3";
        $product->save();

        $product = new Product();
        $product->name = "Cafe cốt dừa";
        $product->price = 40000;
        $product->category_id = "3";
        $product->save();
    }
}
