<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Order categories so 'smartphones' is first
        $categories = ['smartphones', 'laptops', 'tablets'];

        foreach ($categories as $category) {
            $apiUrl = "https://dummyjson.com/products/category/{$category}";
            $response = file_get_contents($apiUrl);
            $data = json_decode($response, true);

            $products = collect($data['products'])->shuffle()->take(5);

            foreach ($products as $item) {
                Product::create([
                    'collection_id' => $this->mapCategoryToCollectionId($category),
                    'make' => $item['brand'] ?? 'Unknown',
                    'model' => $item['title'] ?? 'No model',
                    'description' => $item['description'] ?? '',
                    'price' => intval($item['price']) * 100,
                    'rating' => floatval($item['rating']),
                    'stock' => intval($item['stock']),
                    'thumbnail' => $item['thumbnail'] ?? '',
                    'imgUrl1' => $item['images'][0] ?? '',
                    'imgUrl2' => $item['images'][1] ?? '',
                    'imgUrl3' => $item['images'][2] ?? '',
                ]);
            }
        }
    }

    private function mapCategoryToCollectionId(string $category): int
    {
        return match ($category) {
            'smartphones' => 1,
            'laptops' => 2,
            'tablets' => 3,
            default => 99,
        };
    }
}
