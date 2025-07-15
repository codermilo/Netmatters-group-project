<x-app-layout>

    @include('home.hero')
    @include('home.featured', ['collection'=>'smartphones'])
    @include('home.info')
    @include('home.collections', ['collections' => $collections, 'products' => $products])
    @include('home.reviews')

</x-app-layout>
