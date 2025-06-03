<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Startseite</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-900">
<!-- Header -->
<header class="bg-white shadow-md">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <h1 class="text-xl font-bold">Meine Website</h1>
        <nav>
            <ul class="flex space-x-4">
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Home</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Über</a></li>
                <li><a href="#" class="text-gray-700 hover:text-blue-500">Kontakt</a></li>
            </ul>
        </nav>
    </div>
</header>

<!-- Hero -->
<section class="bg-blue-500 text-white py-20">
    <div class="max-w-4xl mx-auto text-center px-4">

        <h1 class="text-lg mb-6">{{ $heading }}</h1>
        <p class="text-lg mb-6">{!! $content!!}</p>

    </div>
</section>

<!-- Footer -->
<footer class="bg-white mt-20 py-4 text-center text-sm text-gray-500">
    © 2025 Meine Website. Alle Rechte vorbehalten.
</footer>
</body>
</html>
