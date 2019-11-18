@extends('layouts.blog.blogMaster')

@section('title')
    {{$Article->title}}
@endsection

@section('h1')
    {{$Article->title}}
@endsection

@section('content')
    <div class="col-md-9 content">
        <div class="row bg-light justify-content-center article">
            <div class="col-md-12 title">
                <h1>{{$Article->title}}</h1>
            </div>
            <div class="col-md-12 words pd_words">
                <article>{{$Article->content}}</article>
            </div>
        </div>
    </div>
@endsection