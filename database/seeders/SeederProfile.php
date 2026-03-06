<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SeederProfile extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('profiles')->insert([
            'id' => 2,
            'nama' => Str::random(10),
            'kelas' => 'TI-B',
            'nrp' => fake()->randomNumber(6, true),
        ]);

        DB::table('profiles')->insert([
                'id' => 3,
                'nama' => Str::random(10),
                'kelas' => 'TI-B',
                'nrp' => fake()->randomNumber(6, true),
            ]);
        
        DB::table('profiles')->insert([
                'id' => 4,
                'nama' => Str::random(10),
                'kelas' => 'TI-B',
                'nrp' => fake()->randomNumber(6, true),
            ]);
    }
}
