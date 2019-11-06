<?php

use Illuminate\Database\Seeder;

class CountryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $country = new \App\Country();
        $country->country_name = "Vietnam";
        $country->country_code = "+84";
        $country->country_area = "329.560";
        $country->country_map = "image/vietnam.jpg";
        $country->save();

        $country = new \App\Country();
        $country->country_name = "England";
        $country->country_code = "+44";
        $country->country_area = "244.820";
        $country->country_map = "image/england.jpg";
        $country->save();

        $country = new \App\Country();
        $country->country_name = "Canada";
        $country->country_code = "+1";
        $country->country_area = "9.984.670";
        $country->country_map = "image/canada.jpg";
        $country->save();


    }
}
