@extends('layouts.manager.managerMaster')

@section('title', 'カテゴリー、タグの追加')

@section('h1', 'カテゴリー、タグの追加')

@section('manager')
    <div class="add">
        <form method="POST" action="taxonomyAdd">
            @csrf
            <dl>
                <dt>タイプ</dt>
                <dd>
                    <input type="radio" name="type" required value="category">カテゴリー
                    <input type="radio" name="type" required value="tag">タグ
                </dd>
            </dl>
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ old('name') }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('slug') }}"></dd>
            </dl>
            <dl>
                <dt>説明文</dt>
                <dd><textarea name="description" required>{{ old('content') }}</textarea></dd>
            </dl>
            <input type="submit" value="追加">
        </form>
    </div>
@endsection
