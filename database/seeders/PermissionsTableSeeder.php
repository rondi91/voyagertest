<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2022-12-04 04:20:23',
                'updated_at' => '2022-12-04 04:20:23',
            ),
        ));
        
        
    }
}