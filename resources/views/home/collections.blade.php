<div class="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid gap-4">
    @foreach ($collections as $collection)
      <x-home.collection
        :collection="$collection"
        :products="$products->where('collection_id', $collection->id)"
        :collections="$collections"
        />
    @endforeach
  </div>
</div>