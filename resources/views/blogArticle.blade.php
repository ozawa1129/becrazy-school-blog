@extends('layouts.blog.blogMaster')

@section('title')
    {{$Article->title}}
@endsection

@section('h1')
    {{$Article->title}}
@endsection

@section('content')
   
    <div class="flex-center position-ref">
        <div>
            <article>{{$Article->content}}</article>
        </div>
    </div>
@endsection