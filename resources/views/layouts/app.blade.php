<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @endif
</head>

<body class="bg-gray-100">
    <header class="bg-white shadow">
        <nav class="max-w-7xl mx-auto p-4">
            <ul class="flex space-x-4">
                <li>
                    <a href="/" class="text-gray-700 hover:text-indigo-600 transition duration-200">Home</a>
                </li>
                <li>
                    <a href="/contact" class="text-gray-700 hover:text-indigo-600 transition duration-200">Contact</a>
                </li>
            </ul>
        </nav>
    </header>

    <main class="py-8">
        @yield('content')
    </main>

    <footer class="bg-gray-800 text-white py-4 absolute bottom-0 w-full">
        <p class="text-center">&copy; {{ date('Y') }} Benjamin Butler</p>
    </footer>
</body>

</html>
