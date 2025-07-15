<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Collection;

class CollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Collection::create([
            'id' => 1,
            'name' => 'Smartphones',
            'description' => ''
        ]);

        Collection::create([
            'id' => 2,
            'name' => 'Laptops',
            'description' => ''
        ]);

        Collection::create([
            'id' => 3,
            'name' => 'Tablets',
            'description' => ''
        ]);
    }
}
