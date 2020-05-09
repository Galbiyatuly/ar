<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'role_id'=>'1',
            'name'=>'Admin',
            'username'=>'Lashyn',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('12345678'),

        ]);

        DB::table('users')->insert([
            'role_id'=>'2',
            'name'=>'Author',
            'username'=>'Maulet',
            'email'=>'maulet@gmail.com',
            'password'=>bcrypt('369874125'),

        ]);
    }
}
