<div class="">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    @foreach ($collections as $collection)
      <x-home.collection
        :collectionTitle="$collection->name"
        :products="$products->where('collection_id', $collection->id)"
        :collections="$collections"
        />
    @endforeach
  </div>
</div>