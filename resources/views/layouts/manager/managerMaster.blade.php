<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <div class="header">
            <h1>@yield('h1')</h1>
        </div>
        <div class="logout">
            <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <input type="submit" value="ログアウト">
            </form>
        </div>
    </header>
    <div>
        @yield('manager')
    </div>
</body>
</html>