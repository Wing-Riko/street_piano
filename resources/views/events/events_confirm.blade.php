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
        <h1>登録完了してもいいですか？</h1>
        <form action="/recorded" method="POST">
            @csrf
            <input type="readonly" name="event[role]" value={{$role}}>
            <input type="readonly" name="event[piano_id]" value={{$piano_id}}>
            <input type="readonly" name="event[datetime]" value={{$datetime}}>
        <input type="submit" value="次へ"/>
        </form>
    </body>
</html>
</x-app-layout>