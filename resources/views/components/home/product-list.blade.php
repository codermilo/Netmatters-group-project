@props(['products', 'collections'])

<div class="flex space-x-4 overflow-x-auto scroll-smooth pb-4">
    @foreach ($products as $product)

        <x-home.product-card
            :title="$product['model']"
            :price="$product['price'] / 100"
            :rating="$product['rating']"
            :image="$product['thumbnail']" 
            :collection="$product->collection->name ?? 'Electronic'"/>

    @endforeach

</div>
