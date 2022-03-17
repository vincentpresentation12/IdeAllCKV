<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('formations')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('formations')->insert([
          'title' => 'Cluedo',
          'descrFormations'=> 'Meurtre en famille',
          'startDate' => '2022-03-17',
          'endDate' => '2022-03-17',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);
        DB::table('formations')->insert([
          'title' => 'Lol',
          'descrFormations'=> 'jeux video',
          'startDate' => '2022-03-23',
          'endDate' => '2022-03-27',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);
        DB::table('formations')->insert([
          'title' => 'Paintball',
          'descrFormations'=> 'Jeux de tir avec bille de peinture',
          'startDate' => '2022-03-16',
          'endDate' => '2022-03-17',
          'type' => 'virtuel',
          'langue' => 'anglais',
          'idActivity' => '1',
        ]);
        DB::table('formations')->insert([
          'title' => "J'ai plus d'idée",
          'descrFormations'=> 'Aider moi !!!!!',
          'startDate' => '2022-03-20',
          'endDate' => '2022-03-21',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);
        DB::table('formations')->insert([
          'title' => 'Help!!!!!!',
          'descrFormations'=> 'Someone here??? PLease',
          'startDate' => '2022-03-17',
          'endDate' => '2022-03-17',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
      }
}