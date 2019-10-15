<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>カテゴリー追加</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>カテゴリーを追加する</h1>
    </header>
    <div class="add">
        <form method="POST" action="categoryAdd">
            @csrf
            <dl>
                <dt>タイプ</dt>
                <dd>
                    <input type="radio" name="type" required value="category">カテゴリー
                    <input type="radio" name="type" required value="tag">タグ
                </dd>
            </dl>
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ old('name') }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('slug') }}"></dd>
            </dl>
            <dl>
                <dt>説明文</dt>
                <dd><textarea name="description" required>{{ old('content')}}</textarea></dd>
            </dl>
            <input type="submit" value="追加">
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