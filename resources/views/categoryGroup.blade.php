@extends('layouts.blog.blogMaster')

@section('title', 'グループ')

@section('h1', 'グループ')

@section('content')
    <div class="col-md-9 content">
        <div class="row">
            <h1>【カテゴリーの記事一覧です】</h1>
        </div>
        <div class="row justify-content-center article">
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <ul>
                        <li>
                            <a href="/blogArticle/{{$post->slug}}">・{{$post->title}}</a>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection