<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- レスポンシブルデザインのためのメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- BootstrapCSS本体 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>reframing</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!-- 外部CSS -->
    <link href="{{ asset('css/blogManager.css') }}" rel="stylesheet" type="text/css">
    <!-- 外部JS -->
    <script src="{{ asset('/js/anime/lib/anime.min.js') }}"></script>
    <!-- アイコンを設定する -->
    <script src="https://kit.fontawesome.com/27ace18228.js" crossorigin="anonymous"></script>
</head>
<body>
<div>
    <h1>reframing</h1>
</div>
<div>
    悩み事や不安なことを書いてください。
</div>
<div id="reframing"></div>
<div>
    <form method="POST" action="reframingPost">
        @csrf
        <input type="text" name="worries" autocomplete="off"　required>
        <input type="submit" value="リフレーミングする">
    </form>
</div>
@if(isset($worries))
<div>データがあります</div>
<div>{{$worries}}</div>
@endif

    <!-- オプションとして利用するJavaScript -->
    <!-- jQueryというライブラリが必ず最初, 次にPopper.js, 最後にBootstrap のJavaScriptを読み込むようにする -->
    <!-- Ajaxの関数が使えないためslimから通常盤へ書き換える -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
