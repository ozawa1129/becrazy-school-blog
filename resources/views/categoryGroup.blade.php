@extends('layouts.blog.blogMaster')

@section('title', 'グループ')

@section('h1', 'グループ')

@section('content')
    <div class="col-md-9 content">
        <div class="row bg-light justify-content-center article">
            <div class="col-md-12">
                @foreach ($posts as $post)
                    <ul>
                        <li>
                            <a href="/blogArticle/{{$post->slug}}">{{$post->title}}</a>
                        </li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection