@extends('admin.admin-layout')



@section('page-title', 'Customers')

@section('content')
<table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
    <thead>
        <tr class="bg-gray-200 dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Name</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Email</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Phone Number</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Alice Johnson</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">alice@example.com</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">+1-555-1234</td>
        </tr>
        <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Bob Smith</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">bob@example.com</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">+1-555-5678</td>
        </tr>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Carol Lee</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">carol@example.com</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">+1-555-8765</td>
        </tr>
    </tbody>
</table>
@endsection
