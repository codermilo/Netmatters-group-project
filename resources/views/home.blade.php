<x-app-layout>

    @include('home.hero')
    @include('home.featured', ['collection'=>'smartphones'])
    @include('home.info')
    @include('home.reviews')

</x-app-layout>
