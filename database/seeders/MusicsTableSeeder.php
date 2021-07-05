<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'category' => 'A',
            'title' => 'song1',
            'artist' => 'japanese',
            'link' => '####'
        ];
        DB::table('musics')->insert($param);
        $param = [
            'category' => 'B',
            'title' => 'song2',
            'artist' => 'american',
            'link' => '####'
        ];
        DB::table('musics')->insert($param);
        $param = [
            'category' => 'C',
            'title' => 'song3',
            'artist' => 'British',
            'link' => '####'
        ];
        DB::table('musics')->insert($param);
    }
}