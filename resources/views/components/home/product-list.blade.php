@props(['products' => 'smartphones'])

<div class="flex space-x-4 overflow-x-auto scroll-smooth pb-4">
    @foreach ($products as $product)
    <x-home.product-card
        :title="$product['title']"
        :price="$product['price']"
        :rating="$product['rating']"
        :image="$product['thumbnail']" />
    @endforeach

</div>
