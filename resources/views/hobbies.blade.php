@extends('app')
@yield('title', 'My Blog')

@section('navigation')
<body class="bg-gray-100 text-gray-800 font-sans">
<nav class="flex justify-start md:justify-center m-3 border-b-2 border-amber-400">
    <ul class=" flex flex-col md:flex-row space-x-6 m-3 text-2xl text-black">
        <li>
            <a href="https://aboutme-app.test/impressum" class="text-blue-600 hover:text-blue-800 underline">Impressum</a>
        </li>
        <li>
            <a href="https://aboutme-app.test/blog" class="text-blue-600 hover:text-blue-800 underline">Blog</a>
        </li>
        <li>
            <a href="https://aboutme-app.test/aboutme" class="text-blue-600 hover:text-blue-800 underline">About Me</a>
        </li>
        <li>
            <a href="https://aboutme-app.test/hobbies" class="text-blue-600 hover:text-blue-800 underline">Hobbies</a>
        </li>
        <li>
            <a href="https://aboutme-app.test/start" class="text-blue-600 hover:text-blue-800 underline">Start</a>
        </li>
    </ul>
</nav>
@endsection

@section('content')
<div class="max-w-4xl mx-auto py-16 px-6">
    <h1 class="text-3xl font-bold text-center mb-12">Meine Hobbys</h1>

    <div class="grid md:grid-cols-3 gap-8">

        <!-- Hobby 1 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
            <div class="text-5xl mb-4">📸</div>
            <h2 class="text-xl md:text-2xl font-semibold mb-2">Fotografie</h2>
            <p class="text-gray-600 text-sm">Ich liebe es, besondere Momente festzuhalten und mit Licht zu experimentieren.</p>
        </div>

        <!-- Hobby 2 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
            <div class="text-5xl mb-4">🎸</div>
            <h2 class="text-xl font-semibold mb-2">Gitarre spielen</h2>
            <p class="text-gray-600 text-sm">Musik hilft mir zu entspannen – am liebsten spiele ich Akustikgitarre.</p>
        </div>

        <!-- Hobby 3 -->
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
            <div class="text-5xl mb-4">🏃‍♂️</div>
            <h2 class="text-xl font-semibold mb-2">Laufen</h2>
            <p class="text-gray-600 text-sm">Regelmäßige Läufe halten mich fit und geben mir neue Energie.</p>
        </div>

    </div>
</div>

</body>
@endsection
