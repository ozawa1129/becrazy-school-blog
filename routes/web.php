<?php


// テスト用のview
Route::get('test' ,'ViewController@testpage');

// トップページ表示
Route::get('/' ,'ViewController@blogTop');

/*
-----------------------------
ブログの管理機能で使うルーティング
-----------------------------
*/

// 記事一覧表示
Route::get('articleList' ,'BlogController@articleList');

// 記事の追加フォーム
Route::get('articleAddForm' ,'BlogController@articleAddForm');
// 記事追加ポスト
Route::post('postArticle' ,'BlogController@postArticle');

// 画像の追加フォーム
Route::get('imageAddForm' ,'BlogController@imageAddForm');
// 画像追加ポスト
Route::post('postImage' ,'BlogController@postImage');

// 記事編集フォーム
Route::get('articleEdit/{id}' ,'BlogController@articleEditForm');
// 記事編集ポスト
Route::post('articleEdit' ,'BlogController@articleEdit');

// 記事論理削除フォーム->使ってないのでいらないかも
Route::get('articleHideForm' ,'BlogController@articleHideForm');
// 記事論理削除ポスト
Route::post('articleHide' ,'BlogController@articleHide');

//　カテゴリー編集
Route::get('categoryPage' ,'BlogController@categoryPage');
//　タグ編集
Route::get('tagPage' ,'BlogController@tagPage');

// カテゴリー、タグの追加フォーム
Route::get('taxonomyAddForm' ,'BlogController@taxonomyAddForm');
// カテゴリー、タグの追加ポスト
Route::post('taxonomyAdd' ,'BlogController@taxonomyAdd');

// カテゴリー、タグの編集フォーム
Route::get('taxonomyEdit/{id}' ,'BlogController@taxonomyEditForm');
// カテゴリー、タグの編集ポスト
Route::post('taxonomyEdit' ,'BlogController@taxonomyEdit');

// カテゴリー、タグの論理削除
Route::post('categorySoftDelete' ,'BlogController@categorySoftDelete');
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
