@extends('layouts.blog.blogMaster')

@section('title')
    {{$article->title}}
@endsection

@section('h1')
    {{$article->title}}
@endsection

@section('content')
    <div class="col-md-9 content">
        <div class="row bg-light justify-content-center article">
            <div class="col-md-12 title">
                <h1>{{$article->title}}</h1>
            </div>
            <div class="col-md-12 words pd_words">
                <article>{{$article->content}}</article>
            </div>
        </div>
        <div class="row">
            <div class="category_type col-md-12">
                    <ul>
                        <li>▶︎関連カテゴリー:</li>
                        @foreach($categories as $category)
                            <li><a href="/categoryGroup/{{$category->id}}">{{$category->name}}</a></li>
                        @endforeach
                    </ul>
            </div>
        </div>
        <div class="row bg-light">
            <div class="tag_type col-md-12">
                    <ul>
                        <li>▶︎関連タグ:</li>
                        @foreach($tags as $tag)
                            <li><a href="#">{{$tag->name}}</a></li>
                        @endforeach
                    </ul>
            </div>
        </div>
        <div class="row bg-light">
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