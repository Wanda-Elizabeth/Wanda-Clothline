<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('categories')->insert ([

            [
                'id' => 1,
                'name' => 'Shorts',
                'slug' => 'shorts',
                'created_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'Dresses',
                'slug' => 'dresses',
                'created_at' => now(),
            ],
            [
                'id' => 3,
                'name' => 'Tops',
                'slug' => 'tops',
                'created_at' => now(),
            ]
        

        ]);
            

    }
}
