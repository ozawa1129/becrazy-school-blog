@extends('layouts.blog.blogMaster')

@section('title')
    {{$article->title}}
@endsection

@section('catch_copy')
    <div class="container-fluid text-center catch_copy">
        <h1 class="anime_h1">My things.</h1>
    </div>
    <div class="container-fluid text-center catch_copy_h5">
    <h5>記事ページ</h5>
    </div>
@endsection

@section('content')
    <div class="col-md-9 content">
        <div class="row justify-content-center">
            <div class="col-md-12 article_title">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center article">
            <div class="col-md-12 words pd_words">
                @if(isset($article->thumbnail))
                    <img class="article_img" src="{{$article->thumbnail}}">
                @else
                    <img class="article_img" src="/storage/dQKO3tHEb90ZIZN05jVLXCcOqFCRTzeMNJIrO8Qx.jpeg"></a>
                @endif
                <article>{!!$article->content!!}</article>
            </div>
        </div>
        @if($categories)
            <div class="row category_area">
                <div class="category_type col-md-12">
                    <ul>
                        <li>▶︎関連カテゴリー:</li>
                        @foreach($categories as $category)
                            <li><a href="/categoryGroup/{{$category->slug}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        @if($tags)
            <div class="row tag_area">
                <div class="tag_type col-md-12">
                    <ul>
                        <li>▶︎関連タグ:</li>
                        @foreach($tags as $tag)
                            <li><a href="#">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        @endif
        <div class="row prev_next">
            <div class="col-md-6">
                @if(isset($prev))
                    <div class="text-center">
                        <a href="/blogArticle/{{$prev->slug}}">◀︎前へ</a>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if(isset($next))
                    <div class="text-center">
                        <a href="/blogArticle/{{$next->slug}}">次へ▶︎</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
