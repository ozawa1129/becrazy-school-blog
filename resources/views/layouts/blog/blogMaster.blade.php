<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <a href="/blogTop">トップ</a>
        <a href="/categoryChoice">カテゴリー一覧</a>
        @yield('h1')
    </header>
    <div class="content">
        @yield('content')
    </div>
    <footer>
        <div>ここはfooter</div>
    </footer>
</body>
</html>