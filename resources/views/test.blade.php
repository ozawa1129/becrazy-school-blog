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
    <link href="{{ asset('css/test.css') }}" rel="stylesheet" type="text/css">
    <!-- 外部JS -->
    <script src="{{ asset('/js/anime/lib/anime.min.js') }}"></script>
</head>
<body>
    <!--
    <p><img src="{{ My_func::imageUrl("テスト用") }}"></p>
    -->
    <p id="test">クリックしたら変わる！</p>

    <div class="wrapper">
        <div class="square" id="elem"></div>
    </div>

<!-- 輪郭を描くアニメーション -->
<div class="demo-content align-center line-drawing-demo">
    <svg viewBox="0 0 280 100">
        <g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-width="1" class="lines">
            <path class="el" d="M58 80V50.12C57.7 41.6 51.14 35 43 35a15 15 0 0 0 0 30h7.5v15H43a30 30 0 1 1 0-60c16.42 0 29.5 13.23 30 29.89V80H58z" stroke-dasharray="316.85528564453125" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M73 80V20H58v60h15z" stroke-dasharray="150" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M58 80V49.77C58.5 33.23 71.58 20 88 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80H58zm75 0V20h-15v60h15z" stroke-dasharray="441.1739501953125" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M118 80V49.77C118.5 33.23 131.58 20 148 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80h-15zm-7.5-60a7.5 7.5 0 1 1-7.48 8v-1c.25-3.9 3.5-7 7.48-7z" stroke-dasharray="338.3053894042969" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M133 65a15 15 0 0 1-15-15v-7.5h-15V50a30 30 0 0 0 30 30V65zm30 15V49.77C163.5 33.23 176.58 20 193 20a30 30 0 0 1 30 30v30h-15V50a15 15 0 0 0-15-15c-8.14 0-14.7 6.6-15 15.12V80h-15z" stroke-dasharray="406.8699035644531" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M238 65a15 15 0 0 1 0-30c8.1 0 14.63 6.53 15 15h-15v15h30V49.89C267.5 33.23 254.42 20 238 20a30 30 0 0 0 0 60V65z" stroke-dasharray="301.8561706542969" style="stroke-dashoffset: 0px;"></path>
            <path class="el" d="M260.48 65a7.5 7.5 0 1 1-7.48 8v-1c.26-3.9 3.5-7 7.48-7z" stroke-dasharray="47.128875732421875" style="stroke-dashoffset: 0px;"></path>
        </g>
    </svg>
</div>

<!-- オリジナル -->
<svg width="500px" height="500px">
        <path d="M466.2,363.8L466.2 449.5 25.3 449.5 31.7 360.5 277.2 159 513.1 159 513.1 164.3 523.8 164.3 523.8 159 900.2 159 1160.7 362.7 1166.1 449.5 482.2 449.5 482.3 363.8 " style="stroke-dasharray: 2755, 2755; stroke-dashoffset: 0;"></path>
</svg>

<!-- 文字のアニメーション -->
<h1 class="#"><span class="skew">JavaScript講座</span></h1>

    <script src="{{ asset('/js/test.js') }}"></script>
    <!-- オプションとして利用するJavaScript -->
    <!-- jQueryというライブラリが必ず最初, 次にPopper.js, 最後にBootstrap のJavaScriptを読み込むようにする -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
