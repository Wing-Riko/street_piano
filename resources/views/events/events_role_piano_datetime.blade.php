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
        <form action="/recorded" method="POST">
            @csrf
            <input type="datetime-local" list="data-list" name="datetime" value="" min="9:00" max="17:00" step="1800"/>
            
            <datalist id="data-list">
            <option value="09:00"></option>
            <option value="09:30"></option>
            <option value="10:00"></option>
            <option value="10:30"></option>
            <option value="11:00"></option>
            <option value="11:30"></option>
            <option value="12:00"></option>
            <option value="12:30"></option>
            <option value="13:00"></option>
            <option value="13:30"></option>
            <option value="14:00"></option>
            <option value="14:30"></option>
            <option value="15:00"></option>
            <option value="15:30"></option>
            <option value="16:00"></option>
            <option value="16:30"></option>
            <option value="17:00"></option>
            </datalist>
            
            <input type="submit" value="次へ"/>
        </form>
    </body>
</html>
</x-app-layout>