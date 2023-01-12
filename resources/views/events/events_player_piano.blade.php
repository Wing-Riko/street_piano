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
        <h1>どのピアノを弾きに行きますか？</h1>
        <div class="piano">
            <select name="piano" size="1">
              
            </select>
        </div>
    </body>
</html>
</x-app-layout>