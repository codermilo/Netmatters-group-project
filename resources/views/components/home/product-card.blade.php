@props(['title', 'price', 'rating', 'image', 'stock' => null])

<div class="min-w-[250px] bg-white rounded-xl shadow border">
    <div class="h-40 rounded-t-xl bg-gray-100 p-4">
        <img src="{{ $image }}" alt="{{ $title }}" class="mx-auto h-full object-contain" />
    </div>
    <div class="p-4">
        <div class="flex flex-wrap gap-2 mb-2">
            @if ($stock && $stock < 50)
                <span class="text-xs bg-blue-200 text-blue-800 px-2 py-1 rounded-full">Low Stock</span>
                @endif
                <span class="text-xs bg-gray-200 text-gray-700 px-2 py-1 rounded-full">Electronics</span>
        </div>
        <h3 class="text-sm font-semibold mb-1">{{ $title }}</h3>
        <p class="text-xs text-gray-500 mb-2">{{ $rating }} ★</p>
        <div class="flex items-center justify-between">
            <span class="text-base font-bold">${{ number_format($price, 2) }}</span>
            <button class="bg-blue-500 hover:bg-blue-400 text-white text-sm font-bold px-4 py-1 rounded-full">Add</button>
        </div>
    </div>
</div>
