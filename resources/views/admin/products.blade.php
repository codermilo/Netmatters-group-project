
@extends('admin.admin-layout')

@section('page-title', 'Products')

@section('content')
<div class="overflow-x-auto">
    <table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
        <thead>
            <tr class="bg-gray-200 dark:bg-gray-700">
                <th class="border px-4 py-2 text-left">Image</th>
                <th class="border px-4 py-2 text-left">Model</th>
                <th class="border px-4 py-2 text-left">Brand</th>
                <th class="border px-4 py-2 text-left">Category</th>
                <th class="border px-4 py-2 text-left">Price</th>
                <th class="border px-4 py-2 text-left">Description</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $index => $product)
                <tr class="{{ $index % 2 === 1 ? 'bg-gray-50 dark:bg-gray-900' : '' }}">
                    <td class="border px-4 py-2">
                        @if ($product->imgUrl)
                            <img src="{{ $product->imgUrl }}" alt="{{ $product->model }}" class="h-12 w-auto object-contain">
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="border px-4 py-2">{{ $product->model }}</td>
                    <td class="border px-4 py-2">{{ $product->make }}</td>
                    <td class="border px-4 py-2">
                        @php
                            $styles = [
                                1 => 'Smartphone',
                                2 => 'Laptop',
                                3 => 'Tablet',
                                4 => 'Smartwatch',
                                5 => 'Accessory',
                            ];
                        @endphp
                        {{ $styles[$product->collection_id] ?? 'Unknown' }}
                    </td>
                    <td class="border px-4 py-2">£{{ number_format($product->price / 100, 2) }}</td>
                    <td class="border px-4 py-2 max-w-xs truncate" title="{{ $product->description }}">
                        {{ Str::limit($product->description, 100) }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
