@extends('layouts.blog.blogMaster')

@section('title', "$category->slug")

@section('catch_copy')
    <div class="container-fluid text-center catch_copy">
        <h1 class="anime_h1">My things.</h1>
    </div>
    <div class="container-fluid text-center catch_copy_h5">
        <h5>{{$category->slug}}に関する記事</h5>
    </div>
@endsection

@section('content')
    <div class="col-md-9 content">
        <div class="row">
            @if(isset($posts))
                @foreach ($posts as $post)
                    <div class="col-md-12 col-lg-6">
                        <div class="card card-height">
                            @if(isset($post->thumbnail))
                                <a href="/blogArticle/{{$post->slug}}"><img class="card-img-top thumbnail" src="{{$post->thumbnail}}" alt="{{$post->title}}"></a>
                            @else
                                <a href="/blogArticle/{{$post->slug}}"><img class="card-img-top thumbnail" src="/storage/dQKO3tHEb90ZIZN05jVLXCcOqFCRTzeMNJIrO8Qx.jpeg" alt="{{$post->title}}"></a>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title"><a href="/blogArticle/{{$post->slug}}">{{ $post->title }}</a></h5>
                                <div class="card-text-area">
                                    <p class="card-text">{{ \Illuminate\Support\Str::limit($post->summary, 83) }}</p>
                                </div>
                                <button type="button" class="btn btn-danger btn-outline-danger mx-auto d-block anchor_color"><a href="/blogArticle/{{$post->slug}}">READ ME</a></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
