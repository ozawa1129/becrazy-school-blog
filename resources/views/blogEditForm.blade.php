<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>記事編集</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>記事を編集する</h1>
    </header>
    <div class="flex-center position-ref">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="../blogEdit" enctype="text/html">
            @csrf
            <input type="hidden" name="id" required value="{{ $blogEdit->id }}">
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ $blogEdit->title }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ $blogEdit->content }}</textarea></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ $blogEdit->slug }}"></dd>
            </dl>
            <dl>
                <dt>ステータス</dt>
                <dd>
                    <input type="radio" name="status" required value="publish">公開
                    <input type="radio" name="status" required value="draft">下書き
                    <input type="radio" name="status" required value="inherit">メディアアップロード
                </dd>
            </dl>
            <input type="submit" value="更新">
        </form>
        <div class="back">
            <a href="../blogList"><input type="submit" value="ブログ一覧に戻る"></a>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>