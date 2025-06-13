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
<body class="bg-gray-100 flex items-center justify-center min-h-screen">
<div class="">
    <img
        src="{{asset('images/toni.png')}}"
        alt="Mein Foto"
        class="w-64 h-64 md:w-80 md:h-80 object-cover shadow-lg border-4 border-white"
    />
</div>

</body>
@endsection

