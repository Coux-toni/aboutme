@extends('app')
@yield('title', 'My Blog')

@section('navigation')
<body class="bg-gray-100 text-gray-800 font-sans p-8">
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
<div class="max-w-3xl mx-auto bg-white rounded-2xl shadow-md p-8 space-y-6">
    <h1 class="text-3xl font-bold text-gray-900 border-b pb-2">Impressum</h1>

    <section>
        <h2 class="text-xl font-semibold mb-2">Angaben gemäß § 5 TMG</h2>
        <p>Antonio Govorusic<br>
            Kirchgasse 14<br>
            5730 Mittersill</p>
    </section>

    <section>
        <h2 class="text-xl font-semibold mb-2">Kontakt</h2>
        <p>Telefon: +436706050424<br>
            E-Mail: <a href="mailto:agovorusic@schueler.hakzell.at" class="text-blue-600 hover:underline"></a>agovorusic@schueler.hakzell.at</p>
    </section>


</div>

</body>
@endsection
