<x-app-layout>
    <x-slot name="header">
        <h2>Test Page</h2>
    </x-slot>

    <div class="p-6 text-gray-900">
        @php
            $user = auth()->user();
        @endphp

        <p><strong>Hello again, {{ $user->name }}!</strong></p>
        <p>This confirms you are still the same logged-in user.</p>

        <div class="mt-6">
            <h3 class="text-lg font-bold mb-2">Your Database Details:</h3>
            <ul class="list-disc list-inside">
                <li><strong>Name:</strong> {{ $user->name }}</li>
                <li><strong>Email:</strong> {{ $user->email }}</li>
                <li><strong>Role:</strong> {{ $user->role }}</li>
                <li><strong>User ID:</strong> {{ $user->id }}</li>
                <li><strong>Registered At:</strong> {{ $user->created_at }}</li>
                <li><strong>Last Updated:</strong> {{ $user->updated_at }}</li>
            </ul>
        </div>
    </div>
</x-app-layout>
