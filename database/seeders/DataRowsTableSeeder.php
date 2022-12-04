<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DataRowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('data_rows')->delete();
        
        \DB::table('data_rows')->insert(array (
            0 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 1,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            1 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 2,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            2 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Email',
                'edit' => 1,
                'field' => 'email',
                'id' => 3,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            3 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Password',
                'edit' => 1,
                'field' => 'password',
                'id' => 4,
                'order' => 4,
                'read' => 0,
                'required' => 1,
                'type' => 'password',
            ),
            4 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Remember Token',
                'edit' => 0,
                'field' => 'remember_token',
                'id' => 5,
                'order' => 5,
                'read' => 0,
                'required' => 0,
                'type' => 'text',
            ),
            5 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 6,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            6 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 7,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            7 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Avatar',
                'edit' => 1,
                'field' => 'avatar',
                'id' => 8,
                'order' => 8,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            8 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsTo","column":"role_id","key":"id","label":"display_name","pivot_table":"roles","pivot":0}',
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'user_belongsto_role_relationship',
                'id' => 9,
                'order' => 10,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            9 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => '{"model":"TCG\\\\Voyager\\\\Models\\\\Role","table":"roles","type":"belongsToMany","column":"id","key":"id","label":"display_name","pivot_table":"user_roles","pivot":"1","taggable":"0"}',
                'display_name' => 'Roles',
                'edit' => 1,
                'field' => 'user_belongstomany_role_relationship',
                'id' => 10,
                'order' => 11,
                'read' => 1,
                'required' => 0,
                'type' => 'relationship',
            ),
            10 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 1,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Settings',
                'edit' => 0,
                'field' => 'settings',
                'id' => 11,
                'order' => 12,
                'read' => 0,
                'required' => 0,
                'type' => 'hidden',
            ),
            11 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 12,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            12 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 2,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 13,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            13 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 14,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            14 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 2,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 15,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            15 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 16,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            16 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 17,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            17 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 18,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            18 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 3,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 19,
                'order' => 4,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            19 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 3,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Display Name',
                'edit' => 1,
                'field' => 'display_name',
                'id' => 20,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            20 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 1,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Role',
                'edit' => 1,
                'field' => 'role_id',
                'id' => 21,
                'order' => 9,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            21 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 22,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            22 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{"default":"","null":"","options":{"":"-- None --"},"relationship":{"key":"id","label":"name"}}',
                'display_name' => 'Parent',
                'edit' => 1,
                'field' => 'parent_id',
                'id' => 23,
                'order' => 2,
                'read' => 1,
                'required' => 0,
                'type' => 'select_dropdown',
            ),
            23 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{"default":1}',
                'display_name' => 'Order',
                'edit' => 1,
                'field' => 'order',
                'id' => 24,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            24 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Name',
                'edit' => 1,
                'field' => 'name',
                'id' => 25,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            25 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 4,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"name"}}',
                'display_name' => 'Slug',
                'edit' => 1,
                'field' => 'slug',
                'id' => 26,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            26 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 27,
                'order' => 6,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            27 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 4,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 28,
                'order' => 7,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            28 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 29,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            29 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Author',
                'edit' => 1,
                'field' => 'author_id',
                'id' => 30,
                'order' => 2,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            30 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Category',
                'edit' => 1,
                'field' => 'category_id',
                'id' => 31,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            31 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Title',
                'edit' => 1,
                'field' => 'title',
                'id' => 32,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            32 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Excerpt',
                'edit' => 1,
                'field' => 'excerpt',
                'id' => 33,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'text_area',
            ),
            33 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Body',
                'edit' => 1,
                'field' => 'body',
                'id' => 34,
                'order' => 6,
                'read' => 1,
                'required' => 1,
                'type' => 'rich_text_box',
            ),
            34 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{"resize":{"width":"1000","height":"null"},"quality":"70%","upsize":true,"thumbnails":[{"name":"medium","scale":"50%"},{"name":"small","scale":"25%"},{"name":"cropped","crop":{"width":"300","height":"250"}}]}',
                'display_name' => 'Post Image',
                'edit' => 1,
                'field' => 'image',
                'id' => 35,
                'order' => 7,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            35 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"title","forceUpdate":true},"validation":{"rule":"unique:posts,slug"}}',
                'display_name' => 'Slug',
                'edit' => 1,
                'field' => 'slug',
                'id' => 36,
                'order' => 8,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            36 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Meta Description',
                'edit' => 1,
                'field' => 'meta_description',
                'id' => 37,
                'order' => 9,
                'read' => 1,
                'required' => 1,
                'type' => 'text_area',
            ),
            37 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Meta Keywords',
                'edit' => 1,
                'field' => 'meta_keywords',
                'id' => 38,
                'order' => 10,
                'read' => 1,
                'required' => 1,
                'type' => 'text_area',
            ),
            38 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => '{"default":"DRAFT","options":{"PUBLISHED":"published","DRAFT":"draft","PENDING":"pending"}}',
                'display_name' => 'Status',
                'edit' => 1,
                'field' => 'status',
                'id' => 39,
                'order' => 11,
                'read' => 1,
                'required' => 1,
                'type' => 'select_dropdown',
            ),
            39 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 40,
                'order' => 12,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            40 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 5,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 41,
                'order' => 13,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
            41 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'SEO Title',
                'edit' => 1,
                'field' => 'seo_title',
                'id' => 42,
                'order' => 14,
                'read' => 1,
                'required' => 0,
                'type' => 'text',
            ),
            42 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 5,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Featured',
                'edit' => 1,
                'field' => 'featured',
                'id' => 43,
                'order' => 15,
                'read' => 1,
                'required' => 1,
                'type' => 'checkbox',
            ),
            43 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'ID',
                'edit' => 0,
                'field' => 'id',
                'id' => 44,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'number',
            ),
            44 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Author',
                'edit' => 0,
                'field' => 'author_id',
                'id' => 45,
                'order' => 2,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            45 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Title',
                'edit' => 1,
                'field' => 'title',
                'id' => 46,
                'order' => 3,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            46 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Excerpt',
                'edit' => 1,
                'field' => 'excerpt',
                'id' => 47,
                'order' => 4,
                'read' => 1,
                'required' => 1,
                'type' => 'text_area',
            ),
            47 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Body',
                'edit' => 1,
                'field' => 'body',
                'id' => 48,
                'order' => 5,
                'read' => 1,
                'required' => 1,
                'type' => 'rich_text_box',
            ),
            48 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => '{"slugify":{"origin":"title"},"validation":{"rule":"unique:pages,slug"}}',
                'display_name' => 'Slug',
                'edit' => 1,
                'field' => 'slug',
                'id' => 49,
                'order' => 6,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            49 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Meta Description',
                'edit' => 1,
                'field' => 'meta_description',
                'id' => 50,
                'order' => 7,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            50 => 
            array (
                'add' => 1,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Meta Keywords',
                'edit' => 1,
                'field' => 'meta_keywords',
                'id' => 51,
                'order' => 8,
                'read' => 1,
                'required' => 1,
                'type' => 'text',
            ),
            51 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => '{"default":"INACTIVE","options":{"INACTIVE":"INACTIVE","ACTIVE":"ACTIVE"}}',
                'display_name' => 'Status',
                'edit' => 1,
                'field' => 'status',
                'id' => 52,
                'order' => 9,
                'read' => 1,
                'required' => 1,
                'type' => 'select_dropdown',
            ),
            52 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 6,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Created At',
                'edit' => 0,
                'field' => 'created_at',
                'id' => 53,
                'order' => 10,
                'read' => 1,
                'required' => 1,
                'type' => 'timestamp',
            ),
            53 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 6,
                'delete' => 0,
                'details' => NULL,
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 54,
                'order' => 11,
                'read' => 0,
                'required' => 1,
                'type' => 'timestamp',
            ),
            54 => 
            array (
                'add' => 1,
                'browse' => 1,
                'data_type_id' => 6,
                'delete' => 1,
                'details' => NULL,
                'display_name' => 'Page Image',
                'edit' => 1,
                'field' => 'image',
                'id' => 55,
                'order' => 12,
                'read' => 1,
                'required' => 0,
                'type' => 'image',
            ),
            55 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 8,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Id',
                'edit' => 0,
                'field' => 'id',
                'id' => 56,
                'order' => 1,
                'read' => 0,
                'required' => 1,
                'type' => 'text',
            ),
            56 => 
            array (
                'add' => 0,
                'browse' => 1,
                'data_type_id' => 8,
                'delete' => 1,
                'details' => '{}',
                'display_name' => 'Created At',
                'edit' => 1,
                'field' => 'created_at',
                'id' => 57,
                'order' => 2,
                'read' => 1,
                'required' => 0,
                'type' => 'timestamp',
            ),
            57 => 
            array (
                'add' => 0,
                'browse' => 0,
                'data_type_id' => 8,
                'delete' => 0,
                'details' => '{}',
                'display_name' => 'Updated At',
                'edit' => 0,
                'field' => 'updated_at',
                'id' => 58,
                'order' => 3,
                'read' => 0,
                'required' => 0,
                'type' => 'timestamp',
            ),
        ));
        
        
    }
}