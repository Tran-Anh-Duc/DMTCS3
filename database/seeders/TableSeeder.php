<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tables')->insert([
           ["name"=>"wine1"],
           ["name"=>"wine2"],
           ["name"=>"wine3"],
        ]);
    }
}
