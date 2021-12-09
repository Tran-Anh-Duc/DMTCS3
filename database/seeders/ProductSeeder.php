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
            ["name" => "Trà sữa","price" => "20000"],
            ["name" => "Trà tắc","price" => "21000"],
            ["name" => "Trà đào","price" => "22000"],
            ["name" => "Nước cam","price" => "23000"],
            ["name" => "Cafe","price" => "25000"],
            ["name" => "Bạc xỉu","price" => "30000"]
        ]);
    }
}
