<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>カテゴリー、タグ一覧</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>カテゴリー覧</h1>
    </header>
    <div class="lists">
        @foreach ($categories as $category)
            <ul>
                <li><a href="categoryGroup/{{$category->id}}">{{ $category->name }}</a></li>
            </ul>
        @endforeach
    </div>
    <footer>
    </footer>
</body>
</html>