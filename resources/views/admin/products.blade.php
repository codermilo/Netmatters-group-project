@extends('admin.admin-layout')


@section('page-title', 'Products')

@section('content')
<table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
    <thead>
        <tr class="bg-gray-200 dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Product Name</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Product Style</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">iPhone 14</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Phone</td>
        </tr>
        <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">MacBook Pro</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Laptop</td>
        </tr>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">iPad Air</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Tablet</td>
        </tr>
        <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Wireless Earbuds</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Accessory</td>
        </tr>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Gaming PC</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">PC</td>
        </tr>
    </tbody>
</table>
@endsection