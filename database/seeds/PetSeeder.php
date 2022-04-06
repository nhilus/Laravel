<?php

use Illuminate\Database\Seeder;
use App\Pet;

class PetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i=1; $i<251; $i++){
            \DB::table('pets')->insert([
                'name' => 'Charles Doggo the '.$i,
                'color' => 'brown',
                'date_of_birth'=>'1999-03-03',
                'person_id' => rand(1,50),
            ]);

            factory(\App\Pet::class,400)->create();

        }
       // factory(Pet::class,400)->create();
    }
}
