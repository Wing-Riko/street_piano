<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ピアノリスト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1 class='text-4xl pl-10'>ピアノリスト</h1>
        <div class='pianos pl-10 py-1'>
            @foreach ($pianos as $piano)
                <div class='piano'>
                    <h2 class='name'>{{ $piano->name }}</h2>
                </div>
            @endforeach
        </div>
    </body>
</html>
</x-app-layout>