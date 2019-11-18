@extends('layouts.manager.managerMaster')

@section('title', 'カテゴリ一覧')

@section('h1', 'カテゴリ一覧')

@section('manager')
    <div class="lists">
        <form method="POST" action="blogHide">
            @csrf
            <table border="1"  cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>選択</th><th>id</th><th>名前</th><th>タイプ</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($taxonomy as $edit)
                        <tr>
                            <td><input type="checkbox" name="ids[]" value="{{ $edit->id }}"></td>
                            <td>{{ $edit->id }}</td>
                            <td><a href="categoryEdit/{{$edit->id}}">{{ $edit->name }}</a></td>
                            <td>{{ $edit->type }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <br>
            <input type="submit" value="論理削除する">
        </form>
    </div>
@endsection