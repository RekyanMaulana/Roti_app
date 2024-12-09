<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roti Management</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Navbar or Header (Optional) -->
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto text-center">
            <h1 class="text-xl font-semibold">Roti Management System</h1>
        </div>
    </header>

    <!-- Content Section -->
    <main class="py-10">
        @yield('content')
    </main>
</body>
</html>
