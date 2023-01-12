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
        <h1>どのピアノへ聴きに行きますか？</h1>
       <form action="{piano_id}/datetime" method="POST">
            @csrf
            <select name="piano_id" size="1">
                @foreach($pianos as $piano)
                    <option value="{{ $piano->id }}">{{ $piano->name }}</option>
                @endforeach
            </select>
            <input type="submit" value="次へ"/>
        </form>
    </body>
</html>
</x-app-layout>