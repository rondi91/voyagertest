<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('menus')->delete();
        
        \DB::table('menus')->insert(array (
            0 => 
            array (
                'created_at' => '2022-12-04 04:01:42',
                'id' => 1,
                'name' => 'admin',
                'updated_at' => '2022-12-04 04:01:42',
            ),
        ));
        
        
    }
}