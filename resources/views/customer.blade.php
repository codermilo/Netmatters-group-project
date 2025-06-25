<!-- resources/views/customer.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Hello, {{ auth()->user()->name }}
        </h2>
    </x-slot>

    <div class="p-6 text-gray-900">
        Welcome to your customer home page! {{ auth()->user()->name }}

        <a href="{{ route('customer.test') }}" 
           class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
            Go to Test Page
        </a>
    </div>
</x-app-layout>
