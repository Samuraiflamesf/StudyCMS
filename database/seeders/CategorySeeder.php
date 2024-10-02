<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cria 2 registros usando a factory
        Category::factory(2)->create();

        // Cria um registro adicional com dados manuais
        Category::create([
            'name' => 'Categoria ' . Str::random(3),
            'description' => Str::random(20),
            'image' => '/images/1.jpeg'
        ]);
    }
}
