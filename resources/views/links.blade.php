@extends('app')
@yield('title', 'My Blog')

@section('content')
<body class="bg-gray-100 text-gray-800 font-sans flex items-center justify-center min-h-screen">

<div class="bg-white shadow-lg rounded-2xl p-8 max-w-md w-full space-y-4">
    <h1 class="text-2xl font-bold text-center text-gray-900">Navigation</h1>

    <ul class="space-y-2 text-center">
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

    <ul class="space-y-2 text-center">
        @foreach($mylinks as $link)
            <li> <a href="{{$link->url}}" class="text-blue-600 hover:text-blue-800 underline">{{$link->emoji}}{{$link->name}}</a></li>
        @endforeach

    </ul>
</div>

</body>
@endsection
