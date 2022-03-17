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
          'title' => "Visite guidée",
          'descrFormations'=> "Fomration d'animation de visite guidée",
          'startDate' => '2022-03-20',
          'endDate' => '2022-03-21',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);
        DB::table('formations')->insert([
          'title' => 'Laravel',
          'descrFormations'=> 'Vient apprednre le développement avec le groupe 5',
          'startDate' => '2022-03-17',
          'endDate' => '2022-03-17',
          'type' => 'virtuel',
          'langue' => 'français',
          'idActivity' => '1',
        ]);

      }
}