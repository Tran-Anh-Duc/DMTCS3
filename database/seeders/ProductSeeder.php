<?php

namespace Database\Seeders;

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
        DB::table('products')->insert([

           ["name"=>"trà sữa","price"=>"20000","category_id"=>1],
           ["name"=>"Trà tắc","price"=>"21000","category_id"=>2],
           ["name"=>"Trà Đào","price"=>"22000","category_id"=>3],
           ["name"=>"Nước cam","price"=>"23000","category_id"=>1],
           ["name"=>"Cafe","price"=>"25000","category_id"=>2],
           ["name"=>"Bạc sỉu","price"=>"30000","category_id"=>3],

        ]);
    }
}
