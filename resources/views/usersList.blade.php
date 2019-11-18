@extends('layouts.manager.managerMaster')

@section('title', 'ユーザー一覧')

@section('h1', 'ユーザー一覧')

@section('manager')
    <tbody>
        @foreach ($users as $user)
            <tr>
                <td><input type="checkbox" name="ids[]" value="{{ $user->id }}"></td>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
            </tr>
        @endforeach
    </tbody>
@endsection