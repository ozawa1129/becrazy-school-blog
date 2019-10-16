<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>{{$Article->title}}</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
    </header>
    <div class="flex-center position-ref">
        <div>
            <h1>{{$Article->title}}</h1>
        </div>
        <div>
            <article>{{$Article->content}}</article>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>