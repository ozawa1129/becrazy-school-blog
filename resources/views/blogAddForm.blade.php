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
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <dl>
                <dt>タイプ</dt>
                <dd>
                    <input type="radio" name="mine_type" required value="text/html">記事
                    <input type="radio" name="mine_type" required value="image/png">メディア
                </dd>
            </dl>
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ old('title') }}"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ old('content')}}</textarea></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('slug') }}"></dd>
            </dl>
            <dl>
                <dt>ステータス</dt>
                <dd>
                    <input type="radio" name="status" required value="publish">公開
                    <input type="radio" name="status" required value="draft">下書き
                    <input type="radio" name="status" required value="inherit">メディアアップロード
                </dd>
            </dl>
            <dl>
                <dt>タグ</dt>
                <dd>
                    @foreach ($tags as $tag)
                        <input type="checkbox" name="tags[]" value="{{$tag->id}}">{{$tag->name}}
                    @endforeach
                </dd>
            </dl>
            <dl>
                <dt>カテゴリー</dt>
                <dd>
                    @foreach ($categories as $category)
                        <input type="checkbox" name="categories[]" value="{{$category->id}}">{{$category->name}}
                    @endforeach
                </dd>
            </dl>
            <input type="submit" value="ブログ投稿">
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