<?php

// デフォルトであるやつ。一応まだ取っておく。
Route::get('/', function () {
    return view('welcome');
});

/*
-----------------------------
ブログの管理機能で使うルーティング
-----------------------------
*/

// 記事一覧表示
Route::get('blogList' ,'BlogController@blogList');

// 記事追加フォーム
Route::get('blogAdd' ,'BlogController@blogAddForm');
// 記事追加ポスト
Route::post('blogAdd' ,'BlogController@blogAdd');

// 記事編集フォーム
Route::get('blogEdit/{id}' ,'BlogController@blogEdit');
// 記事編集ポスト
Route::post('blogEdit' ,'BlogController@blogEdit');

// 記事論理削除フォーム
Route::get('blogHideForm' ,'BlogController@blogHideForm');
// 記事論理削除ポスト
Route::post('blogHide' ,'BlogController@blogHide');

// カテゴリー一覧
Route::get('categoryList' ,'BlogController@categoryList');

// カテゴリー追加フォーム
Route::get('categoryAddForm' ,'BlogController@categoryAddForm');
// カテゴリー追加ポスト
Route::post('categoryAdd' ,'BlogController@categoryAdd');

// カテゴリー編集フォーム
Route::get('categoryEdit/{id}' ,'BlogController@categoryEdit');
// カテゴリー編集ポスト
Route::post('categoryEdit' ,'BlogController@categoryEdit');

/*
---------------------------
ブログ閲覧機能で使うルーティング
---------------------------
*/

// トップページ表示
Route::get('blogTop' ,'BlogController@blogTop');

// 記事ページ
Route::get('blogArticle' ,'BlogController@blogArticle');

// カテゴリー選択時の記事一覧
Route::get('categoryChoice' ,'BlogController@categoryChoice');

/*
------------------------
認証機能用で使うルーティング
------------------------
*/

// 初期ユーザー登録フォーム
Route::get('userAddForm' ,'BlogController@userAddForm');
// 初期ユーザー登録ポスト
Route::post('userAdd' ,'BlogController@userAdd');

// 管理ユーザー一覧
Route::get('managerList' ,'BlogController@managerList');

// 管理ユーザー登録フォーム
Route::get('managerAddForm' ,'BlogController@managerAddForm');
// 管理ユーザー登録ポスト
Route::post('managerAdd' ,'BlogController@managerAdd');

// ログインユーザーのパスワード変更フォーム
Route::get('passChangeForm' ,'BlogController@passChangeForm');
// ログインユーザーのパスワード変更ポスト
Route::post('passChange' ,'BlogController@passChange');

// ログインフォーム
Route::get('loginForm' ,'BlogController@loginForm');
// ログインポスト
Route::post('login' ,'BlogController@login');

// ログアウトフォーム
Route::get('logoutForm' ,'BlogController@logoutForm');
// ログアウトポスト
Route::post('logout' ,'BlogController@loguout');

/*
----------------------
以下追加機能のルーティング
----------------------
*/