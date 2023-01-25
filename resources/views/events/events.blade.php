<!DOCTYPE html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>登録管理</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>登録管理</h1>
        <div class='pianos'>
            @foreach ($events as $event)
                <div class='event'>
                    <h2 class='piano'>{{ $event->piano_id }}</h2>
                    <h2 class='datetime'>{{ $event->datetime }}</h2>
                </div>
                <!--<form action="/posts/" id="form_" method="post"> ？？？
                <!--    @csrf-->
                <!--    @methodDELETE-->
                <!--    <button type="button" onclick="deletePost">delete</button> -->
                <!--</form>-->
            @endforeach
        </div>
    </body>
</html>
</x-app-layout>