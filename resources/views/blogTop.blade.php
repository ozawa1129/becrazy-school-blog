<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>トップページ</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>見出し1</h1>
    </header>
    <div>
        <table border="1"  cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>選択</th><th>id</th><th>タイトル</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestFive as $list)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $list->id }}"></td>
                        <td>{{ $list->id }}</td>
                        <td><a href="blogArticle/{{$list->slug}}">{{ $list->title }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <footer>
    </footer>
</body>
</html>