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
            'name' => "Demo User",
            'email' => 'demoUser@PMStudio.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
