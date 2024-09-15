<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<!-- Header -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <h1 class="text-3xl font-bold text-gray-900">
                <a href="{{ url('/') }}">{{ config('app.name', 'Laravel') }}</a>
            </h1>
            @if(Auth::check())
                <nav>
                    <a href="{{ route('courses.index') }}" class="text-gray-800 hover:text-gray-900">Browse Courses</a>
                    <a href="{{ route('cart.index') }}" class="ml-4 text-gray-800 hover:text-gray-900">Cart</a>
                    <a href="{{ route('user.my-courses') }}" class="ml-4 text-gray-800 hover:text-gray-900">My Courses</a>
                    <a href="{{ route('user.dashboard') }}" class="ml-4 text-gray-800 hover:text-gray-900">Dashboard</a>
                    <a href="{{ route('logout') }}" class="ml-4 text-gray-800 hover:text-gray-900"
                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        Logout
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                        @csrf
                    </form>
                </nav>
            @else
                <nav>
                    <a href="{{ route('login.form') }}" class="text-gray-800 hover:text-gray-900">Login</a>
                    <a href="{{ route('register') }}" class="ml-4 text-gray-800 hover:text-gray-900">Register</a>
                </nav>
            @endif
        </div>
    </div>
</header>

<!-- Main Content -->
<main>
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        @yield('content')
    </div>
</main>

<!-- Footer -->
<footer class="bg-white">
    <div class="max-w-7xl mx-auto py-4 px-4 sm:px-6 lg:px-8 text-center">
        <p class="text-gray-500 text-sm">&copy; {{ date('Y') }} {{ config('app.name', 'Laravel') }}. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
