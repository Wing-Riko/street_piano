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
        <h1>訪問日時を選択してください。</h1>
        <form action="/events/confirm" method="POST">
            @csrf
            <input type="readonly" name="role" value={{$role}}>
            <input type="readonly" name="piano_id" value={{$piano_id}}>
            <input type="datetime-local" name="datetime" value="" min="9:00" max="17:00" step="1800"/>
            <input type="submit" value="次へ"/>
        </form>
    </body>
</html>
</x-app-layout>