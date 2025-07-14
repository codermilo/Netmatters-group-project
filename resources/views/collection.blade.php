<?php
// Fetch electronics products from DummyJSON
$apiUrl = 'https://dummyjson.com/products/category/' . $collection;
$response = file_get_contents($apiUrl);
$products = json_decode($response, true)['products'];
?>

<x-app-layout>

    <div class="flex gap-6 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-5">
        <div class="sidebar"></div>
        <x-home.product-list :products="$products"></x-home.product-list>
    </div>
</x-app-layout>
