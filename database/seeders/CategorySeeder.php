<?php

namespace Database\Seeders;

use App\Models\Category;
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
       $category = new Category();
       $category->name = "Trà";
       $category->description = "Trà";
       $category->save();

       $category = new Category();
       $category->name = "Trà sữa";
       $category->description = "Trà sữa";
       $category->save();

       $category = new Category();
       $category->name = "Cafe";
       $category->description = "Cafe";
       $category->save();

       $category = new Category();
       $category->name = "Nước trái cây";
       $category->description = "Juice";
       $category->save();

    }
}
