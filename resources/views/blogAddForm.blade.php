<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>記事追加</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>記事を追加する</h1>
    </header>
    <div class="add">
        <form method="POST" action="blogAdd">
            @csrf
            <!-- 一時的に1を送信 -->
            <input type="hidden" name="user_id" value="1">
            <!-- 一時的にpublishを送信 -->
            <input type="hidden" name="status" value="publish">
            <!-- 一時的にtestを送信 -->
            <input type="hidden" name="slug" value="test">
            <!-- 一時的にtext/htmlを送信 -->
            <input type="hidden" name="mime_type" value="text/html">
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ old('title') }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ old('content')}}</textarea></dd>
            </dl>
            <input type="submit" value="ブログ投稿">
        </form>
    </div>
    <footer>
    </footer>
</body>
</html>