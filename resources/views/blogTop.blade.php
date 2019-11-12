@extends('layouts.blog.blogMaster')

@section('title', 'トップページ')

@section('h1', 'トップページ')

@section('content')
    <div>
        <table border="1"  cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>選択</th><th>id</th><th>タイトル</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($latestFive as $list)
                    <tr>
                        <td><input type="checkbox" name="ids[]" value="{{ $list->id }}"></td>
                        <td>{{ $list->id }}</td>
                        <td><a href="blogArticle/{{$list->slug}}">{{ $list->title }}</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection