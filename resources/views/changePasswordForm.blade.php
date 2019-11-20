<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>パスワード変更</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>パスワードを追加する</h1>
    </header>
    @if (Session::has('flash_message'))
        <div class="flash_message">
            {{ session('flash_message') }}
        </div>
    @endif
    <div class="add">
        <form method="POST" action="changePass">
            @csrf
            <dl>
                <dt>現在のパスワード</dt>
                <dd>
                    <input type="text" name="nowPass" required>
                </dd>
            </dl>
            <dl>
                <dt>新しいパスワード</dt>
                <dd>
                    <input type="text" name="afterPass" required>
                </dd>
            </dl>
            <dl>
                <dt>新しいパスワードの確認</dt>
                <dd>
                    <input type="text" name="afterPass_check" required>
                </dd>
            </dl>
            <input type="submit" value="パスワードを変更する">
        </form>
    </div>
    <footer>
        <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
            <input type="submit" value="ログアウト">
        </form>
    </footer>
</body>
</html>