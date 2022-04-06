<?php

use Illuminate\Database\Seeder;
use App\Person;

class PersonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=1; $i<51; $i++){
            \DB::table('people')->insert([
                'name' => 'Charles User the '.$i,
                'date_of_birth'=>'1999-03-03',
                'address_id'=>rand(1,10),
                'email' => 'email'.$i.'@email.com',
            ]);

            factory(\App\Person::class,100)->create();
        }
       // factory(Person::class,100)->create();
    }
}
