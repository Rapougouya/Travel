<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'nom'=> 'OUEDRAOGO',
            'prenom' => 'R Daouda',
            'numero' => '01235462',
            'email' => 'daoud@gmail.com',
            'password' => Hash::make('11111111'),
            'etat' => 1,
            'role' => 'admin'
        ]);
        // DB::table('users')->insert([

        // ]);
        User::create([
            'nom' => 'BAKOUAN',
            'prenom' => 'Herman',
            'numero' => '70214536',
            'email' => 'herman@gmail.com',
            'password' => Hash::make('11111111'),
            'role' => 'client'
        ]);
    }
}
