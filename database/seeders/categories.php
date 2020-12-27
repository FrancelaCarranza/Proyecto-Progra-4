<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         
        DB::table('categories')->insert(

            [
          
          [
          'name'=>"Home",
          'description'=>"Hom items"
          ],
          [
           'name'=>"Garden",
              'description'=>"Garden"
          ]
          
            ]
          
          );
    }
}
