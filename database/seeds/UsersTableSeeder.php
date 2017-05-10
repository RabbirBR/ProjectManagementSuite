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
        DB::table('users')->insert([
            'name' => "User 1",
            'email' => 'user1@test.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "User 2",
            'email' => 'user2@test.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "User 3",
            'email' => 'user3@test.com',
            'password' => bcrypt('secret'),
        ]);

        DB::table('users')->insert([
            'name' => "User 4",
            'email' => 'user4@test.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
