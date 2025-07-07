@extends('admin.admin-layout')

@section('page-title', 'Orders')

@section('content')
<table class="min-w-full table-auto border-collapse border border-gray-300 dark:border-gray-600">
    <thead>
        <tr class="bg-gray-200 dark:bg-gray-700">
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Order ID</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Customer Name</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Product</th>
            <th class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-left">Status</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">ORD001</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Alice Smith</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">iPhone 14</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-green-600">Delivered</td>
        </tr>
        <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">ORD002</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Bob Johnson</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Gaming PC</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-yellow-500">Processing</td>
        </tr>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">ORD003</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Clara Lee</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">iPad Air</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-blue-500">Shipped</td>
        </tr>
        <tr class="bg-gray-50 dark:bg-gray-900">
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">ORD004</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">David Wong</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Wireless Earbuds</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-red-500">Cancelled</td>
        </tr>
        <tr>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">ORD005</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">Emma Davis</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2">MacBook Pro</td>
            <td class="border border-gray-300 dark:border-gray-600 px-4 py-2 text-green-600">Delivered</td>
        </tr>
    </tbody>
</table>
@endsection