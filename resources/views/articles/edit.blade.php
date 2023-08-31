<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>edit article</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <h1>投稿論文編集</h1>
    <form action="/articles/{{ $article->id }}" method="post">
        @csrf
        @method('PATCH')
        <label for="title">論文タイトル</label><br>
        <input type="text" id="title" name="title" value="{{ $article->title }}"><br><br>
        <label for="body">本文</label><br>
        <textarea id="body" class="body" name="body">{{ $article->body }}</textarea><br><br>
        <input type="submit" value="更新">
    </form>
</body>

</html>
