<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use DB;

class peopletabledata extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        foreach(range(1,50)as $index){
            DB::table('people')->insert([
                'Imie'=>$faker->name,
                'Nazwisko'=>$faker->lastname,
                'Ulica'=>$faker->address,
                'Miasto'=>$faker->city,
                'Kraj'=>$faker->country,
                'Nr telefonu'=>rand(111111111,999999999)
            ]);
        }
    }
}
