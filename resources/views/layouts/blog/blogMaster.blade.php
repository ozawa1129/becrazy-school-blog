<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- レスポンシブルデザインのためのメタタグ -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- BootstrapCSS本体 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <meta name="keywords" content="検索キーワード">
    <meta name="description" content="説明文">
    <title>@yield('title')</title>
    <link rel="shortcut icon" href="favicon.ico">
    <!-- 外部CSS -->
    <link href="{{ asset('css/blogManager.css') }}" rel="stylesheet" type="text/css">
    <!-- 外部JS -->
    <script type="text/javascript" src="js/library.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <!-- ヘッダー部分 -->
    <header>
        <!-- ロゴを表示する部分 -->
        <div class="container-fluid">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-xs-3">
                            <h1>ブログタイトル(仮)</h1>
                        </div>
                        <div class="col-md-8 col-xs-3">
                            <p>becrazyの最終課題</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ナビゲーション部分 -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/blogTop">LOGO</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/categoryChoice">Category</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="main container">
        <div class="row">
            <!-- メインコンテンツ -->
            @yield('content')
            <!-- サイドバー -->
            <div class="col-md-3">
                <div class="row">
                    <div class="prof bg-light">
                        <div class="prof_img col-md-12 text-center">
                            画像
                        </div>
                        <div class="prof_name col-md-12 text-center">
                            名前:オザワ
                        </div>
                        <div class="self_intro col-md-12 text-center">
                            1993年11月29日。becrazyスクール生。よろしくお願い致します！
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="side_category bg-light col-md-12">
                        <div class="list_category col-md-12">
                            @php
                                use App\Models\Taxonomy;
                                $categories = Taxonomy::whereIn('type', ["category"])->get();
                                $data = array('categories' => $categories);
                            @endphp
                            @foreach ($categories as $category)
                                <ul class="col-md-12">
                                    <li class="col-md-12 text-center"><a href="/categoryGroup/{{$category->id}}">■{{ $category->name }}</a></li>
                                </ul>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- フッター -->
    <footer>
        <div class="container-fluid bg-dark text-light">
            <div class="row">
                <div class="container">
                    <div class="row">
                        <div class="footer col-md-12 text-center">Copyright - Ozawa, 2019 All Rights Reserved.</div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- オプションとして利用するJavaScript -->
    <!-- jQueryというライブラリが必ず最初, 次にPopper.js, 最後にBootstrap のJavaScriptを読み込むようにする -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>