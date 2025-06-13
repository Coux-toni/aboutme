@extends('app')
@yield('title', 'My Blog')

@section('navigation')
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
    <x-alert>
        <x-slot:title>
            Achtung
        </x-slot>
        Der Blog wird derzeit überarbeitet
    </x-alert>
    <div class="space-y-6">
        <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <h2 class="text-2xl font-semibold mb-1">Wie ich zur Fotografie gefunden habe <x-trash /></h2>
            <p class="text-sm text-gray-500 mb-2">01. Juni 2025</p>
            <p class="text-gray-700 text-sm">
                In diesem Beitrag erzähle ich, wie meine Leidenschaft für Fotografie entstanden ist und was mir daran am meisten Freude macht.
            </p>
        </div>
        <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <h2 class="text-2xl font-semibold mb-1">Musik als Ausgleich zum Alltag</h2>
            <p class="text-sm text-gray-500 mb-2">24. Mai 2025</p>
            <p class="text-gray-700 text-sm">
                Warum ich fast jeden Abend zur Gitarre greife – und wie Musik mir hilft, neue Energie zu tanken.
            </p>
        </div>
        <div class="bg-white rounded-2xl shadow-md p-6 hover:shadow-xl transition">
            <h2 class="text-2xl font-semibold mb-1">Meine liebsten Laufstrecken</h2>
            <p class="text-sm text-gray-500 mb-2">15. Mai 2025</p>
            <p class="text-gray-700 text-sm">
                Ob im Wald, am Fluss oder durch die Stadt – hier teile ich meine Top-3 Laufstrecken und Tipps für neue Läufer:innen.
            </p>
        </div>
    </div>

@endsection
