<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>article index</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <h1>論文一覧</h1>
    @foreach ($articles as $article)
        <a href="/articles/{{ $article->id }}">{{ $article->title }}<br><br></a>
    @endforeach
    <button onclick="location.href='articles/create'">新規論文投稿</button>
</body>

</html>
