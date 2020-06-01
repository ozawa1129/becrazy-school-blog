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
    <script src="{{ asset('/js/anime/lib/anime.min.js') }}"></script>
    <!-- アイコンを設定する -->
    <script src="https://kit.fontawesome.com/27ace18228.js" crossorigin="anonymous"></script>
</head>
<body>
    <!-- ヘッダー部分 -->
    <header class="header_nav">
        <!-- ナビゲーション部分 -->
        <div id="menu-box">
            <div id="toggle"><a href="#">menu</a></div>
            <ul id="menu">
                <li><a href="/">Home</a></li>
                <li><a href="/categoryGroup/HTML">HTML</a></li>
                <li><a href="/categoryGroup/CSS">CSS</a></li>
                <li><a href="/categoryGroup/JavaScript">JavaScript</a></li>
                <li><a href="/categoryGroup/PHP">PHP</a></li>
                <li><a href="/categoryGroup/GAME">Game</a></li>
                <li><a href="/categoryGroup/CULTURE">Culture</a></li>
                <li><a href="/categoryGroup/LIFE">Life</a></li>
            </ul>
        </div>
    </header>
    <!-- タイトルを表示する部分 -->
    @yield('catch_copy')
    <div class="main container">
        <div class="row">
            <!-- メインコンテンツ -->
            @yield('content')
            <!-- サイドバー -->
            <div class="col-md-3 side_content">
                <div class="row bg-light mb-5">
                    <div class="side_title col-md-12 text-center">
                        自己紹介
                    </div>
                    <div class="row">
                        <div class="prof_img col-md-12 text-center">
                            <img src="/storage/P6SLw0qgRARgKoHrsRjVbTwj71Ss3vcmaTDuERxl.jpeg" class="img-fluid" alt="黒猫" width="150px">
                        </div>
                        <div class="prof_name col-md-12 text-center">
                            このサイトの制作者：オザワ
                        </div>
                        <div class="self_intro col-md-12 text-center">
                            ゲーム、映画、漫画、プログラミング、猫などが好き
                        </div>
                    </div>
                </div>
                <div class="row bg-light">
                    <div class="side_title col-md-12 text-center">
                        カテゴリー
                    </div>
                    <div class="side_category col-md-12">
                        <div class="list_category col-md-12">
                            @php
                                use App\Models\Taxonomy;
                                $categories = Taxonomy::whereIn('type', ["category"])->get();
                                $data = array('categories' => $categories);
                            @endphp
                            @foreach ($categories as $category)
                                <ul class="col-md-12">
                                    <li class="col-md-12 text-center"><a href="/categoryGroup/{{$category->name}}">{{ $category->name }}</a></li>
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
    <!-- Ajaxの関数が使えないためslimから通常盤へ書き換える -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>
</html>
