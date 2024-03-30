<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subcategories = [
            [
                'icon' => '01',
                'categories_id' => 1,
                'title' => 'Música'
            ],
            [
                'icon' => '02',
                'categories_id' => 3,
                'title' => 'Deporte'
            ],
            [
                'icon' => '03',
                'categories_id' => 1,
                'title' => 'Idiomas'
            ],
            [
                'icon' => '04',
                'categories_id' => 7,
                'title' => 'Cocina'
            ],
            [
                'icon' => '05',
                'categories_id' => 6,
                'title' => 'Escolar'
            ],
            [
                'icon' => '06',
                'categories_id' => 4,
                'title' => 'Fotografía'
            ],
            [
                'icon' => '07',
                'categories_id' => 2,
                'title' => 'Programación'
            ],

        ];


        

        foreach ($subcategories as $subcategory) {
            DB::table('subcategories')->insert([
                'icon' => $subcategory['icon'],
                'title' => $subcategory['title'],
                'created_at' => now(),
                'updated_at' => now(),
                'categorias_id' => $subcategories['categories_id']
            ]);
        }
    }
}
