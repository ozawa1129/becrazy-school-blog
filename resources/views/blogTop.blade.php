@extends('layouts.blog.blogMaster')

@section('title', 'トップページ')

@section('content')
    <div class="col-md-9 content">
        @foreach($latestFive as $list)
            <div class="row bg-light justify-content-center article">
                <div class="col-md-10 title">
                   <h1 class="text-center"><a href="blogArticle/{{$list->slug}}">{{ $list->title }}</a></h1>
                </div>
                <div class="col-md-10 img">
                    <p class="text-center">ここに画像</p>
                </div>
                <div class="col-md-10 words">
                    <p class="text-center">{!! \Illuminate\Support\Str::words($list->content, 3,'....')  !!}</p>
                </div>
                <div class="col-md-10 read_me">
                    <button type="button" class="btn btn-default btn-outline-dark mx-auto d-block"><a href="blogArticle/{{$list->slug}}">READ ME</a></button>
                </div>
            </div>
        @endforeach
    </div>
@endsection