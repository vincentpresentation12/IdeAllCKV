<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('events')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('events')->insert([
          'nameEvent' => 'Cluedo',
          'startDate' => '2022-03-17',
          'endDate' => '2022-03-17',
          'duration' => '00:00:50',
          'nbAnimNeed' => '4',
          'nbAnimSub' => '2',
          'nbParticipant' => '2',
          'companyName' => 'Haribo',
          'descrEvent' => 'Partie de cluedo',
          'isOpen' => '0',
          'type' => 'virtuel',
          'langue' => 'français',
          'idAnimModo' => '1',
        ]);
        DB::table('events')->insert([
            'nameEvent' => 'monopoly',
            'startDate' => '2022-03-18',
            'endDate' => '2022-03-19',
            'duration' => '00:10:50',
            'nbAnimNeed' => '5',
            'nbAnimSub' => '1',
            'nbParticipant' => '4',
            'companyName' => 'Haribo',
            'descrEvent' => 'Partie en famille',
            'isOpen' => '0',
            'type' => 'virtuel',
            'langue' => 'français',
            'idAnimModo' => '3',
          ]);
          DB::table('events')->insert([
            'nameEvent' => 'Musée',
            'startDate' => '2022-03-20',
            'endDate' => '2022-03-21',
            'duration' => '00:02:50',
            'nbAnimNeed' => '4',
            'nbAnimSub' => '2',
            'nbParticipant' => '2',
            'companyName' => 'Haribo',
            'descrEvent' => "Visite d'un musée d'art",
            'isOpen' => '0',
            'type' => 'physique',
            'langue' => 'français',
            'idAnimModo' => '1',
          ]);
          DB::table('events')->insert([
            'nameEvent' => 'Asterix',
            'startDate' => '2022-03-16',
            'endDate' => '2022-03-17',
            'duration' => '00:00:50',
            'nbAnimNeed' => '4',
            'nbAnimSub' => '2',
            'nbParticipant' => '2',
            'companyName' => 'Haribo',
            'descrEvent' => "Parc d'attraction",
            'isOpen' => '0',
            'type' => 'virtuel',
            'langue' => 'français',
            'idAnimModo' => '2',
          ]);

      }
}