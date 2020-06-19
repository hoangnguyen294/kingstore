<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 4,
                'name' => 'Nestor Bailey MD',
                'created_at' => '2020-06-16 03:46:51',
                'updated_at' => '2020-06-16 03:46:51',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 5,
                'name' => 'Schuyler Beer',
                'created_at' => '2020-06-16 03:46:51',
                'updated_at' => '2020-06-16 03:46:51',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 6,
                'name' => 'SASAS',
                'created_at' => '2020-06-16 07:42:50',
                'updated_at' => '2020-06-16 07:42:50',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 8,
                'name' => 'ssssss',
                'created_at' => '2020-06-16 07:49:43',
                'updated_at' => '2020-06-16 07:49:43',
                'deleted_at' => NULL,
            ),
            4 => 
            array (
                'id' => 9,
                'name' => 'SSSSS',
                'created_at' => '2020-06-16 07:51:01',
                'updated_at' => '2020-06-16 07:51:01',
                'deleted_at' => NULL,
            ),
            5 => 
            array (
                'id' => 10,
                'name' => 'SSSS',
                'created_at' => '2020-06-16 07:51:35',
                'updated_at' => '2020-06-16 07:51:35',
                'deleted_at' => NULL,
            ),
            6 => 
            array (
                'id' => 11,
                'name' => 'SSSSSSSSS',
                'created_at' => '2020-06-16 07:52:45',
                'updated_at' => '2020-06-16 07:52:45',
                'deleted_at' => NULL,
            ),
            7 => 
            array (
                'id' => 14,
                'name' => 'sddddddddddddddddd',
                'created_at' => '2020-06-16 07:54:25',
                'updated_at' => '2020-06-16 07:54:25',
                'deleted_at' => NULL,
            ),
            8 => 
            array (
                'id' => 16,
                'name' => 'EFGSVERV',
                'created_at' => '2020-06-16 07:59:04',
                'updated_at' => '2020-06-16 07:59:04',
                'deleted_at' => NULL,
            ),
            9 => 
            array (
                'id' => 17,
                'name' => 'e2rwefedf',
                'created_at' => '2020-06-16 08:10:42',
                'updated_at' => '2020-06-16 08:54:49',
                'deleted_at' => '2020-06-16 08:54:49',
            ),
            10 => 
            array (
                'id' => 18,
                'name' => 'dDdDdADad',
                'created_at' => '2020-06-16 08:11:29',
                'updated_at' => '2020-06-16 08:58:03',
                'deleted_at' => '2020-06-16 08:58:03',
            ),
            11 => 
            array (
                'id' => 19,
                'name' => 'dsdddFDFDGFFG',
                'created_at' => '2020-06-16 08:12:29',
                'updated_at' => '2020-06-16 08:58:54',
                'deleted_at' => '2020-06-16 08:58:54',
            ),
            12 => 
            array (
                'id' => 20,
                'name' => 'FSDFSDFSDFDFD',
                'created_at' => '2020-06-16 08:13:21',
                'updated_at' => '2020-06-16 09:01:17',
                'deleted_at' => '2020-06-16 09:01:17',
            ),
            13 => 
            array (
                'id' => 21,
                'name' => 'DWQDQWDQWDQDQWDQ',
                'created_at' => '2020-06-16 08:13:35',
                'updated_at' => '2020-06-16 08:55:26',
                'deleted_at' => '2020-06-16 08:55:26',
            ),
            14 => 
            array (
                'id' => 23,
                'name' => 'ewewewe',
                'created_at' => '2020-06-19 02:02:07',
                'updated_at' => '2020-06-19 02:02:07',
                'deleted_at' => NULL,
            ),
        ));
        
        
    }
}