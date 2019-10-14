<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>記事一覧</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>ブログの記事一覧</h1>
    </header>
    <div class="lists">
        <form method="POST" action="blogEdit">
            @csrf
            <table border="1"  cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>タイトル</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogList as $list)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $list->id }}"></td>
                            <td>{{ $list->id }}</td>
                            <td><a href="blogEdit/{{$list->id}}">{{ $list->title }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="論理削除する">
        </form>
    </div>
    <footer>
    </footer>
</body>
</html>