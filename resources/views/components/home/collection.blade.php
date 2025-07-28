@props(['collection', 'products', 'collections'])
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-[1fr_2fr] gap-4 w-full">

  <div class="w-full min-w-[0] aspect-[3/2] bg-cover bg-center bg-no-repeat
    md:[background-size:auto_100%] md:h-full" 
    style="background-image: url({{$collection->image}});">
      <h2>{{ $collection->name }}</h2>
  </div>

  
  <div class="w-full min-w-[0]">
    <x-home.product-list
        :products="$products"
        :collections="$collections"
    />
  </div>

</div>