<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('page-title') - Admin Panel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</head>
<body class="bg-gray-100">
<div class="flex min-h-screen">
    <!-- Sidebar -->
    <aside class="w-64 bg-gray-800 text-white">
        <div class="p-4">
            <h1 class="text-2xl font-bold mb-6">Admin Panel</h1>
            <nav>
                <ul>
                    <li class="mb-2">
                        <a href="{{ route('admin.courses.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-book-open mr-3"></i> Manage Courses
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.categories.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-tags mr-3"></i> Manage Categories
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.users.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-users mr-3"></i> Manage Users
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.transactions.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-exchange-alt mr-3"></i> Manage Transactions
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.reviews.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-star mr-3"></i> Manage Reviews
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.reports.sales') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-chart-line mr-3"></i> Sales Report
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.reports.users') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-user-chart mr-3"></i> User Report
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.reports.popular-courses') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-fire mr-3"></i> Popular Courses Report
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.support.index') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-headset mr-3"></i> Support
                        </a>
                    </li>
                    <li class="mb-2">
                        <a href="{{ route('admin.support.faq') }}" class="flex items-center p-2 hover:bg-gray-700 rounded transition-colors duration-200">
                            <i class="fas fa-question-circle mr-3"></i> FAQ
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-8">
        <header class="bg-white shadow-md p-4 mb-6">
            <h2 class="text-2xl font-semibold text-gray-800">@yield('page-title')</h2>
        </header>
        <div class="bg-white rounded-lg shadow-md p-6">
            @yield('content')
        </div>
    </main>
</div>
</body>
</html>
