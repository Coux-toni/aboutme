<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Me</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @yield('styles')
    </style>
</head>
<body class="bg-gray-100 text-gray-900">
@section('navigation')
@show
@yield('content')
</body>
</html>
