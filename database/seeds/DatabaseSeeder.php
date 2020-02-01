<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class DatabaseSeeder extends Seeder
{
    
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      for($i = 0; $i<1000; $i++){
        DB::table('students')->insert([
            'Firstname'=> $faker->firstName,
            'Lastname'=> $faker->lastName,
            'age'=>$faker->numberBetween($min = 15, $max = 24),
        ]);
      }
    }
}
