<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(

            [
          
          [
          'name'=>"Admin User",
          'email'=>"admin@gmail.com",
          'role_id'=>"1",
          'password'=>"Admin123!"
          ]
        ,
        [
          'name'=>"Regular  User",
          'email'=>"regular@gmail.com",
          'role_id'=>"2",
          'password'=>"Regular123!"
          ]
          
            ]
          
          );




          foreach(DB::table('users')->get() as $user){
          DB::table("users")
          ->where("id",$user->id)
          ->update(array("password"=>Hash::make($user->password)));
          

          }
    }
}
