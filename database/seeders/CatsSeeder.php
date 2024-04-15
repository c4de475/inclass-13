<?php

namespace Database\Seeders;


use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     */
    public function run() : void
    {
        DB::table('cats')->insert([
            'id' => 1,
            'name' => 'Mr. Whiskers',
            'age' => 8,
            'breed' => 'tabby',
        ]);

        DB::table('cats')->insert([
            'id' => 2,
            'name' => 'Mrs. Fluffiness',
            'age' => 6,
            'breed' => 'calico',
        ]);

        DB::table('cats')->insert([
            'id' => 3,
            'name' => 'Mr. Biggles',
            'age' => 7,
            'breed' => 'siamese',
        ]);

        DB::table('cats')->insert([
            'id' => 4,
            'name' => 'Mrs. Biggles',
            'age' => 7,
            'breed' => 'siamese',
        ]);
    }
}