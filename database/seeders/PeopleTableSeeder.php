<?php

namespace Database\Seeders;

use App\Models\People;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    
    public function run()
    {
        $faker = Factory::create();
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