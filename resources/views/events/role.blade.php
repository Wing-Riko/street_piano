<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>ピアノリスト</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>ピアノを弾きますか？聴きますか？</h1>
        <div class="role">
            <select name="role" size="1">
                <option value="弾く">弾く</option>
                <option value="聴く">聴く</option>
            </select>
        </div>
    </body>
</html>