@extends('layouts.blog.blogMaster')

@section('title', 'カテゴリー選択')

@section('h1', 'カテゴリー、タグ一覧から選択')

@section('content')
    <div class="lists">
        @foreach ($categories as $category)
            <ul>
                <li><a href="categoryGroup/{{$category->id}}">{{ $category->name }}</a></li>
            </ul>
        @endforeach
    </div>
@endsection