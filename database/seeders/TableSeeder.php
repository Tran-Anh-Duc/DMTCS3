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
           ["name"=>"Bàn số 1"],
           ["name"=>"Bàn số 2"],
           ["name"=>"Bàn số 3"],
        ]);
    }
}
