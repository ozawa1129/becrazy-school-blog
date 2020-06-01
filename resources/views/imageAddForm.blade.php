@extends('layouts.manager.managerMaster')

@section('title', '画像追加')

@section('h1', '画像追加')

@section('manager')
    <div class="add">
        <form method="POST" action="postImage" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" value="{{$user_id}}">
            <dl>
                <dt>タイトル</dt>
                <dd><input type="text" name="title" required value="{{ old('title') }}"></dd>
            </dl>
            <dl>
                <dt>画像アップロード</dt>
                <dd><input type="file" name="imagefile"></dd>
            </dl>
            <dl>
                <dt>本文</dt>
                <dd><textarea name="content" required>{{ old('content')}}</textarea></dd>
            </dl>
            <dl>
                <dt>スラッグ</dt>
                <dd><input type="text" name="slug" required value="{{ old('slug') }}"></dd>
            </dl>
            <input type="submit" value="画像をアップロード">
        </form>
    </div>
    <div class="images">
        <ul>
            @if(isset($images))
                @foreach($images as $image)
                    <li><img src="/{{$image->slug}}" class="image_fluid" width="150px"></li>
                    <li>/{{$image->slug}}</li>
                    <button class="copy_clipboard">クリップボードにコピー</button>
                @endforeach
            @endif
        </ul>
    </div>
@endsection
