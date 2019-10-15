<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>カテゴリー編集</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>カテゴリーを編集する</h1>
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
        <form method="POST" action="../categoryEdit">
            @csrf
            <input type="hidden" name="id" required value="{{ $categoryEdit->id }}">
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ $categoryEdit->name }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ $categoryEdit->slug }}"></dd>
            </dl>
            <dl>
                <dt>タイプ</dt>
                <dd><input type="text" name="type" required value="{{ $categoryEdit->type }}"></dd>
            </dl>
            <input type="submit" value="更新">
        </form>
        <div class="back">
            <a href="../categoryList"><input type="submit" value="カテゴリーの一覧に戻る"></a>
        </div>
    </div>
    <footer>
    </footer>
</body>
</html>