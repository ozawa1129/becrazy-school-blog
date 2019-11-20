@extends('layouts.blog.blogMaster')

@section('title', 'カテゴリー選択')


<!-- @section('h1', 'カテゴリー、タグ一覧から選択') -->

@section('content')
    <div class="col-md-9 content">
        <div class="row bg-light justify-content-center article">
            <div class="category col-md-12">
                @foreach ($categories as $category)
                    <ul>
                        <li><a href="/categoryGroup/{{$category->id}}">■{{ $category->name }}</a></li>
                        <li>説明文:{{ $category->description }}</li>
                    </ul>
                @endforeach
            </div>
        </div>
    </div>
@endsection