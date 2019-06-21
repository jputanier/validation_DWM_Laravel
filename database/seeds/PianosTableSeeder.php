<?php

use Illuminate\Database\Seeder;

class PianosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'brand' => Str::random(10),
            'length' => 190,
            'weight' => 320,
        ]);
        DB::table('pianos')->insert([
            'brand' => Str::random(10),
            'length' => 240,
            'weight' => 390,
        ]);
        DB::table('pianos')->insert([
            'brand' => Str::random(10),
            'length' => 100,
            'weight' => 20,
        ]);
        
    }
}

