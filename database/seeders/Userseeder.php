<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker=Faker::create();
        for($i=0;$i<20;$i++){

                   DB::table('users')->insert([
          'name' =>  $faker->name,
          'email' => $faker->email,
          'password' => $faker->password
          ]);
        }
    }
}
