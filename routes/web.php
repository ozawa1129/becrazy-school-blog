<?php


// トップページ表示
Route::get('/' ,'ViewController@blogTop');

//Route::get('/', function () {
//    return view('blogTop', 'ViewController@blogTop');
//});

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
Route::get('blogEdit/{id}' ,'BlogController@blogEditForm');
// 記事編集ポスト
Route::post('blogEdit' ,'BlogController@blogEdit');

// 記事論理削除フォーム->使ってないのでいらないかも
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
Route::get('categoryEdit/{id}' ,'BlogController@categoryEditForm');
// カテゴリー編集ポスト
Route::post('categoryEdit' ,'BlogController@categoryEdit');

/*
---------------------------
ブログ閲覧機能で使うルーティング
---------------------------
*/

// 記事ページ
Route::get('blogArticle/{slug}' ,'ViewController@blogArticle');

// カテゴリー選択時の記事一覧
Route::get('categoryChoice' ,'ViewController@categoryChoice');

// カテゴリー選択時に飛ばすポスト
Route::get('categoryGroup/{id}' ,'ViewController@categoryGroup');

/*
------------------------
認証機能用で使うルーティング
------------------------

/* 独自の認証機能を追加するためにコメントアウト
Auth::routes();
*/

Route::get('/home', 'CMSHomeController@home');

// ログイン・ログアウト
Route::get('login', 'Auth\BlogLoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\BlogLoginController@login');
Route::post('logout', 'Auth\BlogLoginController@logout')->name('logout');

// 初期ユーザーが存在するかチェック
Route::get('usersCheck', 'Auth\BlogRegisterController@checkRegister');

// 新規登録
Route::get('firstUserRegister', 'Auth\BlogRegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\BlogRegisterController@register');

// 管理ユーザー登録
Route::get('addUser', 'CMSHomeController@showRegistrationForm')->name('register');

// 管理ユーザー一覧
Route::get('usersList', 'CMSHomeController@usersList');

// パスワードを変更する
Route::get('changePasswordForm', 'CMSHomeController@changePasswordForm');
// パスワード変更をポスト
Route::post('changePass', 'CMSHomeController@changePass');

/*
----------------------
以下追加機能のルーティング
----------------------
*/

