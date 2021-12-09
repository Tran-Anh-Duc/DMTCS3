<?php

namespace Database\Seeders;

use App\Models\role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = new role();
        $role->name = "Manager";
        $role->save();

        $role = new role();
        $role->name = "Admin";
        $role->save();
    }
}
