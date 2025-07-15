<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Create some users
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);

        User::factory()->create([
            'name' => 'JordanCustomer User',
            'email' => 'j@j.com',
            'password' => Hash::make('password'),
            'role' => 'customer',
        ]);

        // Call the ProductSeeder
        $this->call(ProductSeeder::class);
        // Call the Collection Seeder
        $this->call(CollectionSeeder::class);
    }
}
