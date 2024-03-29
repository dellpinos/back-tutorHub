<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = [
            [
                'icon' => '01',
                'title' => 'Música'
            ],
            [
                'icon' => '02',
                'title' => 'Deporte'
            ],
            [
                'icon' => '03',
                'title' => 'Idiomas'
            ],
            [
                'icon' => '04',
                'title' => 'Cocina'
            ],
            [
                'icon' => '05',
                'title' => 'Escolar'
            ],
            [
                'icon' => '06',
                'title' => 'Fotografía'
            ],
            [
                'icon' => '07',
                'title' => 'Programación'
            ],

        ];

        foreach ($categories as $category) {
            DB::table('categories')->insert([
                'icon' => $category['icon'],
                'title' => $category['title'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
        // DB::table('categories')->insert([
        //     'icon' => '02',
        //     'title' => 'Música',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s'),
        // ]);
    }
}
