<x-app-layout>
    <div class="flex flex-col md:flex-row gap-6 px-4 md:px-8 py-6 max-w-screen-xl mx-auto">

        <!-- Sidebar Filters -->
        <aside class="w-full md:w-[220px] space-y-8 bg-white rounded-xl p-4 border shadow-sm">
            <!-- Make Filter -->
            <div>
                <h3 class="text-sm font-semibold mb-2">Make</h3>
                <ul class="space-y-1 text-sm">
                    @foreach (['Samsung', 'Apple', 'Dell', 'HP'] as $make)
                    <li>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" name="make[]" value="{{ $make }}" class="accent-blue-600" />
                            {{ $make }}
                        </label>
                    </li>
                    @endforeach
                </ul>
            </div>

            <!-- Price Range Filter -->
            <div class="relative w-full mb-6" id="price-range-slider">
                <label class="block text-sm font-medium text-gray-700 mb-2">Price Range</label>

                <!-- Slider Track -->
                <div class="relative h-2 rounded-lg bg-gray-200">
                    <div id="range-track" class="absolute h-2 bg-blue-400 rounded-lg z-[1]"></div>
                </div>

                <!-- Range Inputs -->
                <input
                    type="range"
                    id="min-range"
                    min="100"
                    max="1500"
                    value="300"
                    step="50"
                    class="range-thumb absolute top-[50%] -translate-y-1/2 left-0 w-full appearance-none bg-transparent z-[2] pointer-events-auto" />
                <input
                    type="range"
                    id="max-range"
                    min="100"
                    max="1500"
                    value="1150"
                    step="50"
                    class="range-thumb absolute top-[50%] -translate-y-1/2 left-0 w-full appearance-none bg-transparent z-[3] pointer-events-auto" />

                <!-- Labels -->
                <div class="flex justify-between mt-4 text-sm text-gray-600">
                    <span id="min-value">$300</span>
                    <span id="max-value">$1150</span>
                </div>
            </div>




            <!-- Rating Filter -->
            <div id="rating-filter">
                <h3 class="text-sm font-semibold mb-2">Rating</h3>
                @foreach ([5, 4, 3, 2, 1] as $star)
                <label class="flex items-center gap-2 text-sm cursor-pointer">
                    <input type="checkbox" class="rating-checkbox accent-blue-600" value="{{ $star }}" />
                    <div class="flex gap-0.5 text-yellow-500">
                        @for ($i = 1; $i <= 5; $i++)
                            <svg xmlns="http://www.w3.org/2000/svg"
                            class="w-4 h-4 {{ $i <= $star ? 'fill-current' : 'text-gray-300' }}"
                            viewBox="0 0 20 20" fill="{{ $i <= $star ? 'currentColor' : 'none' }}">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.2 3.7h3.897c.969 0 1.371 1.24.588 1.81l-3.15 2.292 1.2 3.7c.3.921-.755 1.688-1.54 1.118L10 13.348l-3.146 2.2c-.785.57-1.84-.197-1.54-1.118l1.2-3.7-3.15-2.292c-.783-.57-.38-1.81.588-1.81H7.85l1.2-3.7z" />
                            </svg>
                            @endfor
                    </div>
                    <span class="ml-auto text-gray-600">{{ $ratingsCount[$star] ?? 0 }}</span>
                </label>
                @endforeach
            </div>
        </aside>



        <!-- Main Product Area -->
        <main class="flex-1 flex flex-col gap-6">
            <!-- Pills & Sorting -->
            <div class="flex flex-wrap items-center justify-between gap-3">
                <!-- Category Pills -->
                <div class="flex flex-wrap gap-2">
                    @foreach (['Lager', 'Pale Ale', 'IPA', 'Wheat Ale'] as $pill)
                    <button class="px-3 py-1 text-sm rounded-full bg-blue-100 text-blue-800 hover:bg-blue-200 transition">
                        {{ $pill }}
                    </button>
                    @endforeach
                </div>

                <!-- Sort Dropdown -->
                <div>
                    <select class="text-sm border rounded px-2 py-1 pr-7">
                        <option>Sort by: Bestselling</option>
                        <option>Price: Low to High</option>
                        <option>Price: High to Low</option>
                    </select>
                </div>
            </div>

            <!-- Product Grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-4 gap-x-4 gap-y-4">
                @foreach ($products as $product)
                <x-home.product-card
                    :title="$product['model']"
                    :price="$product['price']"
                    :rating="$product['rating']"
                    :image="$product['thumbnail']"
                    :collection="$product->collection->name ?? 'Electronic'" />
                @endforeach
            </div>
        </main>
    </div>

    @section('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const minInput = document.getElementById("min-range");
            const maxInput = document.getElementById("max-range");
            const track = document.getElementById("range-track");
            const minValueLabel = document.getElementById("min-value");
            const maxValueLabel = document.getElementById("max-value");

            function updateTrack() {
                const min = parseInt(minInput.value);
                const max = parseInt(maxInput.value);

                // Prevent crossing
                if (min > max) {
                    [minInput.value, maxInput.value] = [max, min];
                }

                const rangeMin = parseInt(minInput.min);
                const rangeMax = parseInt(minInput.max);

                const left = ((min - rangeMin) / (rangeMax - rangeMin)) * 100;
                const right = ((max - rangeMin) / (rangeMax - rangeMin)) * 100;

                track.style.left = `${left}%`;
                track.style.right = `${100 - right}%`;

                minValueLabel.textContent = `$${min}`;
                maxValueLabel.textContent = `$${max}`;
            }

            minInput.addEventListener("input", updateTrack);
            maxInput.addEventListener("input", updateTrack);

            updateTrack(); // initialize
        });
    </script>

    @endsection
</x-app-layout>
