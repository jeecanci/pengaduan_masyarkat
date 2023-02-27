<?php

namespace Database\Seeders;

 //use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Seeders\RoleTableSeeder as SeedersRoleTableSeeder;
use Database\Seeders\UserDataTable as SeedersUserDataTable;
use Illuminate\Database\Seeder;
use Illuminate\Database\UserDataTable;
use Illumate\Database\RoleTableSeeder;

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
        
        this->call(SeedersUserTable::class);

    }
}