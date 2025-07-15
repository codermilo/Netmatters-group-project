<section class="px-4 py-8 bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 mb-10">
    <!-- Heading and Controls -->
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-3xl font-extrabold">THIS WEEK'S BESTSELLERS</h2>

        <!-- Carousel buttons for later functionality -->
        <!-- <div class="space-x-2">
            <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200">&larr;</button>
            <button class="w-8 h-8 rounded-full bg-gray-100 hover:bg-gray-200">&rarr;</button>
        </div> -->
    </div>

    <!-- Call carousel component -->
    <x-home.product-list :products="$products"></x-home.product-list>
</section>
