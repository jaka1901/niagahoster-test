<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'jek',
                'email' => 'jakazzz19@gmail.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$NXriOdMqC6Bgizhg6HWaQ.hPRCyHnse.ggOZmCm7iv/mFHpLjZ8zG',
                'remember_token' => 'J7xO3VBIipQ5MiY7MJaCRg9Irj1MYc3dpeUUTJ1hQk8WaAW6p1uLNTdp7kwM',
                'created_at' => '2021-10-25 17:29:41',
                'updated_at' => '2021-10-25 17:29:41',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'admin testing',
                'email' => 'testing@admin.com',
                'email_verified_at' => NULL,
                'password' => '$2y$10$xXKUII6gC3XnTQEKBxeuUOE6Iz9kJXqBN.8w6pA4v2zCGvVhCU7bO',
                'remember_token' => NULL,
                'created_at' => '2021-11-01 08:43:12',
                'updated_at' => '2021-11-01 08:43:12',
            ),
        ));
        
        
    }
}