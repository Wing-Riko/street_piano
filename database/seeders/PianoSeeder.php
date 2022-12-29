<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PianoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pianos')->insert([
            'name' => '下北沢シモキタフロント',
        ]);    
        DB::table('pianos')->insert([
            'name' => '八王子オクトーレ',
        ]);    
        DB::table('pianos')->insert([
            'name' => 'METS赤羽',
        ]);    
        DB::table('pianos')->insert([
            'name' => 'シーズン・ハーツ九段下店',
        ]);    
        DB::table('pianos')->insert([
            'name' => '東京交通会館',
        ]);    
    }
}
