@extends('layouts.blog.blogMaster')

@section('title', 'トップページ')

@section('catch_copy')
    <!-- タイトルを表示する部分 -->
    <div class="container-fluid main_title" id="back_image">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1>My things.</h1>
                    </div>
                    <div class="col-md-12 text-center">
                        <p>「好きなものを集めていくブログ」</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<!-- メインコンテンツ -->
@section('content')
    <div class="col-md-9 content">
        <div class="row">
            @foreach($latest as $list)
                <div class="col-md-12 col-lg-6">
                    <div class="card card-height">
                        @if(isset($list->thumbnail))
                            <a href="blogArticle/{{$list->slug}}"><img class="card-img-top thumbnail" src="{{$list->thumbnail}}" alt="{{$list->title}}"></a>
                        @else
                            <a href="blogArticle/{{$list->slug}}"><img class="card-img-top thumbnail" src="/storage/dQKO3tHEb90ZIZN05jVLXCcOqFCRTzeMNJIrO8Qx.jpeg" alt="{{$list->title}}"></a>
                        @endif
                        <div class="card-body">
                            <h5 class="card-title"><a href="blogArticle/{{$list->slug}}">{{ $list->title }}</a></h5>
                            <div class="card-text-area">
                                <p class="card-text">{{ \Illuminate\Support\Str::limit($list->summary, 83) }}</p>
                            </div>
                            <button type="button" class="btn btn-danger btn-outline-danger mx-auto d-block anchor_color"><a href="blogArticle/{{$list->slug}}">READ ME</a></button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
