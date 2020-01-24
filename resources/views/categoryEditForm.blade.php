@extends('layouts.manager.managerMaster')

@section('title', 'カテゴリ編集')

@section('h1', 'カテゴリ編集')

@section('manager')
    <div class="flex-center position-ref">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form method="POST" action="../taxonomyEdit">
            @csrf
            <input type="hidden" name="id" required value="{{ $categoryEdit->id }}">
            <dl>
                <dt>名前</dt>
                <dd><input type="text" name="name" required value="{{ $categoryEdit->name }}"></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ $categoryEdit->slug }}"></dd>
            </dl>
            <dl>
                <dt>説明文</dt>
                <dd><textarea type="text" name="description" required value="{{ $categoryEdit->description }}">{{ $categoryEdit->description }}</textarea></dd>
            </dl>
            <input type="submit" value="更新">
        </form>
        <div class="back">
            <a href="../categoryPage"><input type="submit" value="カテゴリーのページに戻る"></a>
            <a href="../tagPage"><input type="submit" value="タグのページに戻る"></a>
        </div>
    </div>
@endsection
