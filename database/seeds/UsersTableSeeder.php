<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        //reset the users table
        DB::table('users')->truncate();

        //generate 3 users/author
        DB::table('users')->insert([
        	[
        		'name' => "John Doe",
        		'email'=> "johndoe@test.com",
        		'password'=> bcrypt('secret')

        	],

        	[
        		'name' => "Jane Doe",
        		'email'=> "Janedoe@test.com",
        		'password'=> bcrypt('secret')

        	],

        	[
        		'name' => "Edo Masrur",
        		'email'=> "edo@test.com",
        		'password'=> bcrypt('secret')

        	],

        	]);
    }
}

