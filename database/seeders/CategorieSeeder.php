<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categorie::insert([
            [
                'name' => 'HP',
                'stock' => 30,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'name' => 'DELL',
                'stock' => 25,
                'created_at' => now(),
                'updated_at' => now()
            ],

        ]);
    }
}
