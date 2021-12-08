<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
           ["name"=>"wine1","description"=>"wineFruit1"],
           ["name"=>"wine2","description"=>"wineFruit2"],
           ["name"=>"wine3","description"=>"wineFruit3"],
        ]);
    }
}
