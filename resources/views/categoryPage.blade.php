@extends('layouts.manager.managerMaster')

@section('title', 'カテゴリー')

@section('h1', 'カテゴリーの編集')

@section('manager')
    <div class="lists">
        <a href="/taxonomyAddForm">カテゴリー、タグを追加する</a>
        <form method="POST" action="categorySoftDelete">
            @csrf
            <table border="1"  cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>名前</th><th>説明文</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $edit)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $edit->id }}"></td>
                            <td>{{ $edit->id }}</td>
                            <td><a href="taxonomyEdit/{{$edit->id}}">{{ $edit->name }}</a></td>
                            <td>{{ $edit->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="論理削除する">
        </form>
    </div>
@endsection
