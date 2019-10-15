<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>カテゴリー、タグ一覧</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <h1>カテゴリー、タグ一覧</h1>
    </header>
    <div class="lists">
        <form method="POST" action="blogHide">
            @csrf
            <table border="1"  cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>名前</th><th>タイプ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxonomy as $edit)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $edit->id }}"></td>
                            <td>{{ $edit->id }}</td>
                            <td><a href="categoryEdit/{{$edit->id}}">{{ $edit->name }}</a></td>
                            <td>{{ $edit->type }}</td>
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