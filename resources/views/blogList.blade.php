@extends('layouts.manager.managerMaster')

@section('title', '記事一覧と編集')

@section('h1', '記事一覧と編集')

@section('manager')
    <div class="lists">
        <form method="POST" action="blogHide">
            @csrf
            <table border="1"  cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>タイトル</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($blogList as $list)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $list->id }}"></td>
                            <td>{{ $list->id }}</td>
                            <td><a href="blogEdit/{{$list->id}}">{{ $list->title }}</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="論理削除する">
        </form>
    </div>
@endsection