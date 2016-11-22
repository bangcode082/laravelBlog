<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
        	'name'=>'Admin Blog',
        	'email'=>'adminblog@gmail.com',
        	'role'=>'admin',
        	'password'=>bcrypt('123456')
        ]);

        App\User::create([
        	'name'=>'CS Blog',
        	'email'=>'csblog@gmail.com',
        	'role'=>'cs',
        	'password'=>bcrypt('123456')
        ]);
    }
}
