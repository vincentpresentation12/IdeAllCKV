<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::table('users')->truncate(); //for cleaning earlier data to avoid duplicate entries

        DB::table('users')->insert([
          'firstname' => 'Cloé',
          'lastname'=> 'Gaspar Cordeiro',
          'email' => 'admin@gmail.com',
          'user_type' => 'admin',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
          'firstname' => 'Vincent',
          'lastname'=> 'Crosnier',
          'email' => 'animateur@gmail.com',
          'user_type' => 'animateur',
          'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
          'firstname' => 'Karim',
          'lastname'=> 'Nguyen',
          'email' => 'admin2@gmail.com',
          'user_type' => 'admin',
          'password' => Hash::make('password'),
        ]);

      }
}
