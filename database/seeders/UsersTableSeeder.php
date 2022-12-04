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
                'role_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@admin.com',
                'avatar' => 'users/default.png',
                'email_verified_at' => NULL,
                'password' => '$2y$10$bnv1X5WCahBWHjAxDEOASe6SOwnEgL/v6sIYz95q1VREJfU.OX3wm',
                'remember_token' => 'P6piAUk9ycAZOE8Q2M1ei1ulsJv9qqAUApqm9IdQzYyNfw6Iie2H8D5wXBCe',
                'settings' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
        ));
        
        
    }
}