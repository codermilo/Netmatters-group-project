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
            'description' => '',
            'image' => 'images/phone-line-up.webp'
        ]);

        Collection::create([
            'id' => 2,
            'name' => 'Laptops',
            'description' => '',
            'image' => 'images/laptop-line-up.webp'
        ]);

        Collection::create([
            'id' => 3,
            'name' => 'Tablets',
            'description' => '',
            'image' => 'images/tablet-line-up.webp'
        ]);
    }
}
