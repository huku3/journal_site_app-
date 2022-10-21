<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Article show</title>
</head>
<body>
<a href="/articles">戻る</a>
    <h1>{{ $article->title }}</h1>
    <p>{!! nl2br(e($article->body)) !!}</p>


    <button onclick="location.href='/articles/'">一覧へ戻る</button>
    </form>
</body>
</html>



