<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- レスポンシブルデザインのためのメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- BootstrapCSS本体 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!-- 外部CSS -->
    <link href="{{ asset('css/blogManager.css') }}" rel="stylesheet" type="text/css">
    <!-- 外部JS -->
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <!-- 機能名表示 -->
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <h1>@yield('h1')</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ナビゲーション部分 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/blogList">記事一覧と編集</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blogAdd">記事追加</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categoryList">カテゴリ一覧</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categoryAddForm">カテゴリ追加</a>
                    </li>
                    <li class="nav-item">
                        <form id="logout-form" class="nav-link" action="{{ route('logout') }}" method="POST">
                            @csrf
                            <input type="submit" value="ログアウト">
                        </form>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div>
        @yield('manager')
    </div>
    
    <!-- オプションとして利用するJavaScript -->
    <!-- jQueryというライブラリが必ず最初, 次にPopper.js, 最後にBootstrap のJavaScriptを読み込むようにする -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>