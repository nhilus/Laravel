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
        /*for($i=1; $i<50; $i++){
            \DB::table('users')->insert([
                'name' => 'Charles User the {i})',
                'date_of_birth'=>'1999-03-03',
                'email' => 'email@email.com',
            ]);
        }*/
       // factory(Person::class,100)->create();
    }
}
