<?php

namespace Database\Seeders;

 use Illuminate\Database\Console\Seeds\WithoutModelEvents;
 use Illuminate\Database\Seeder;
 use Str;
 use DB;
 
 class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([
            'level' => 'admin',
            'NIK' => '1234567887654321',
            'username' => 'JEE',
            'email' => 'jee@gmail.com',
            'telp' => '085678910',
            'password' => bcrypt('12345678'),
        ]);
    }
}