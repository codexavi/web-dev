<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Professional CRUD')</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans">
    <nav class="bg-white shadow mb-4">
        <div class="container mx-auto px-4 py-4">
            <a href="{{ route('products.index') }}" class="font-bold text-xl text-blue-600">ADVANCED CRUD </a>
        </div>
    </nav>

    <div class="container mx-auto px-4">
        @yield('content')
    </div>
</body>
</html>
