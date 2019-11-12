@extends('layouts.blog.blogMaster')

@section('title', 'グループ')

@section('h1', 'グループ')

@section('content')
    <div class="記事一覧">
        @foreach ($posts as $post)
            <ul>
                <li>{{$post->title}}</li>
            </ul>
        @endforeach
    </div>
@endsection