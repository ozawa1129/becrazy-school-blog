@extends('layouts.blog.blogMaster')

@section('title')
    {{$article->title}}
@endsection

@section('h1')
    {{$article->title}}
@endsection

@section('content')
    <div class="col-md-9 content">
        <div class="row justify-content-center article">
            <div class="col-md-12">
                <h1>{{$article->title}}</h1>
            </div>
        </div>
        <div class="row justify-content-center article">
            <div class="col-md-12 words pd_words">
                <article>{{$article->content}}</article>
            </div>
        </div>
        @if($categories)
            <div class="row category_area">
                <div class="category_type col-md-12">
                    <ul>
                        <li>▶︎関連カテゴリー:</li>
                        @foreach($categories as $category)
                            <li><a href="/categoryGroup/{{$category->id}}">{{$category->name}}</a></li>
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
                    <div>
                        <a href="/blogArticle/{{$prev->slug}}">前へ</a>
                    </div>
                @endif
            </div>
            <div class="col-md-6">
                @if(isset($next))
                    <div class="text-right">
                        <a href="/blogArticle/{{$next->slug}}">次へ</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection