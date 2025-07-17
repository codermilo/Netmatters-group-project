<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Admin Dashboard</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <!-- Tailwind -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 dark:bg-gray-900 text-gray-800 dark:text-gray-200 font-sans">

    <!-- Mobile Topbar -->
    <header class="flex justify-between items-center px-4 py-3 bg-white dark:bg-gray-800 shadow md:hidden">
        <h1 class="text-lg font-semibold">Admin Dashboard</h1>
        <button id="menu-toggle" class="text-gray-800 dark:text-gray-200">
            <i class="fa fa-bars text-xl"></i>
        </button>
    </header>

    <div class="flex flex-col md:flex-row min-h-screen">

        <!-- Sidebar -->
        <aside id="sidebar"
            class="fixed md:static top-0 left-0 z-40 w-64 h-full transform -translate-x-full md:translate-x-0 md:flex bg-white dark:bg-gray-800 border-r border-gray-200 dark:border-gray-700 p-6 flex-col justify-between transition-transform duration-300 ease-in-out">
            <div>
                <h2 class="text-lg font-semibold mb-6">Admin Panel</h2>
                <nav class="space-y-3">
                    <a href="{{ route('admin.dashboard') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md text-gray-800 dark:text-gray-200
                            {{ request()->routeIs('admin.dashboard') ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}
                            transition">
                        <i class="fa fa-home"></i>
                        <span>Admin Home</span>
                    </a>

                    <a href="{{ route('admin.customers') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md text-gray-800 dark:text-gray-200
                            {{ request()->routeIs('admin.customers') ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}
                            transition">
                        <i class="fa fa-users"></i>
                        <span>Customers</span>
                    </a>

                    <a href="{{ route('admin.products.index') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md text-gray-800 dark:text-gray-200
                            {{ request()->routeIs('admin.products.index') ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}
                            transition">
                        <i class="fa fa-box"></i>
                        <span>Products</span>
                    </a>

                    <a href="{{ route('admin.orders') }}"
                        class="flex items-center gap-3 px-4 py-2 rounded-md text-gray-800 dark:text-gray-200
                            {{ request()->routeIs('admin.orders') ? 'bg-gray-100 dark:bg-gray-700' : 'hover:bg-gray-100 dark:hover:bg-gray-700' }}
                            transition">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Orders</span>
                    </a>
                </nav>
            </div>

            <!-- Logout Button -->
            <form method="POST" action="{{ route('logout') }}" class="mt-6">
                @csrf
                <button type="submit"
                    class="w-full flex items-center gap-3 px-4 py-2 rounded-md text-red-600 dark:text-red-400
                        hover:bg-red-50 dark:hover:bg-gray-700 transition">
                    <i class="fa fa-sign-out-alt"></i>
                    <span>Logout</span>
                </button>
            </form>
        </aside>

        <!-- Main Content -->
        <main class="flex-1 p-6 md:p-8 mt-16 md:mt-0">
            <h1 class="text-2xl font-bold mb-6">Dashboard</h1>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow p-6">
                <p>You're logged in!</p>
            </div>
        </main>
    </div>

    <!-- Sidebar Toggle Script -->
    <script>
        const toggleBtn = document.getElementById('menu-toggle');
        const sidebar = document.getElementById('sidebar');

        toggleBtn.addEventListener('click', () => {
            sidebar.classList.toggle('-translate-x-full');
        });
    </script>
</body>

</html>
