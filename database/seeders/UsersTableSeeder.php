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
                'avatar' => 'users/default.png',
                'created_at' => '2022-12-04 04:01:42',
                'email' => 'admin@admin.com',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Admin',
                'password' => '$2y$10$kST3gnV1jSSC8beIMEoOjew/1GFUcHaFBa30n.vH2wZL6S5vj5eqe',
                'remember_token' => 'x9tBcpU9WHh32yNBAPwAivcXp1RwJ8WvSJdMzVsHc5fxvNYki5zhCZFPiW4H',
                'role_id' => 1,
                'settings' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
        ));
        
        
    }
}