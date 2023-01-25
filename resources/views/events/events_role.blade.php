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
        <h1>ピアノを弾きますか？聴きますか？</h1>
        <form action="role/piano" method="POST">
            @csrf
            <select name="role" size="1"> 
                <option value="0">弾く</option>
                <option value="1">聴く</option> <!-- valueに1,2を入れれば解決-->
            </select>
            <input type="submit" value="次へ"/>
        </form>
    </body>
</html>
</x-app-layout>