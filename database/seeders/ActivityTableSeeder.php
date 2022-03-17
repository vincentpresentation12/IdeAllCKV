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
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('activity')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('activity')->insert([
          'nameActivity' => 'yo',
          'priceActivity'=> '5',
          'descrActivity' => 'peut etre',
          'type' => 'virtuel',
          'duration' => '00:01:00',
          'urlActivity' => 'hello'
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      }
}