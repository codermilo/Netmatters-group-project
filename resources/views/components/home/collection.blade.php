@props(['collectionTitle', 'products', 'collections'])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_2fr]">

  <div class="">
    <img src="" alt="">
    <h2>{{ $collectionTitle }}</h2>
  </div>

  <div class="">
    <x-home.product-list
        :products="$products"
        :collections="$collections"
    />
  </div>

</div>