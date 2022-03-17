<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('activity')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('activity')->insert([
          'nameActivity' => 'Attaque',
          'priceActivity'=> '5',
          'descrActivity' => 'Jeux de famille',
          'type' => 'virtuel',
          'duration' => '00:01:00',
          'urlActivity' => 'hello'
        ]);
      }
}