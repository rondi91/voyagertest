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
                'created_at' => '2022-12-04 04:01:42',
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
            1 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
            2 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
            3 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
            4 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'updated_at' => '2022-12-04 04:01:42',
            ),
            5 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            6 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            7 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            8 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            9 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            10 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            11 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            12 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            13 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            14 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            15 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            16 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            17 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            18 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            19 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            20 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            21 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            22 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            23 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            24 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            25 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 26,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            26 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 27,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            27 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 28,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            28 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 29,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            29 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 30,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            30 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 31,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            31 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 32,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            32 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 33,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            33 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 34,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            34 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 35,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            35 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 36,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            36 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 37,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            37 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 38,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            38 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 39,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            39 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 40,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'updated_at' => '2022-12-04 04:01:42',
            ),
            40 => 
            array (
                'created_at' => '2022-12-04 04:03:21',
                'id' => 41,
                'key' => 'browse_products',
                'table_name' => 'products',
                'updated_at' => '2022-12-04 04:03:21',
            ),
            41 => 
            array (
                'created_at' => '2022-12-04 04:03:21',
                'id' => 42,
                'key' => 'read_products',
                'table_name' => 'products',
                'updated_at' => '2022-12-04 04:03:21',
            ),
            42 => 
            array (
                'created_at' => '2022-12-04 04:03:21',
                'id' => 43,
                'key' => 'edit_products',
                'table_name' => 'products',
                'updated_at' => '2022-12-04 04:03:21',
            ),
            43 => 
            array (
                'created_at' => '2022-12-04 04:03:21',
                'id' => 44,
                'key' => 'add_products',
                'table_name' => 'products',
                'updated_at' => '2022-12-04 04:03:21',
            ),
            44 => 
            array (
                'created_at' => '2022-12-04 04:03:21',
                'id' => 45,
                'key' => 'delete_products',
                'table_name' => 'products',
                'updated_at' => '2022-12-04 04:03:21',
            ),
        ));
        
        
    }
}