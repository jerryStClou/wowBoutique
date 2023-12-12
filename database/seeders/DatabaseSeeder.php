<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        $roleClient=Role::create(["nomRole"=>"client"]);
        $roleAdmin=Role::create(["nomRole"=>"admin"]);
    }
}
