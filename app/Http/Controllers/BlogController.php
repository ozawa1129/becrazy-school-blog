<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BlogController extends Controller {
    
    /*
    -------------------------
    ブログの管理機能で使うメソッド
    -------------------------
    */
    
    // 記事一覧表示
    public function blogList(){
        
    }
    
    // 記事追加フォーム
    public function blogAddForm(){
        
    }
    
    // 記事追加ポスト
    public function blogAdd(Request $request){
        
    }
    
    // 記事編集フォーム
    public function blogEditForm($id){
        
    }
    
    // 記事編集ポスト
    public function blogEdit(Request $request){
        
    }
    
    // 記事論理削除フォーム
    public function blogHideForm(){
        
    }
    
    // 記事論理削除ポスト
    public function blogHide(Request $request){
        
    }
    
    // カテゴリー一覧
    public function categoryList(){
        
    }
    
    // カテゴリー追加フォーム
    public function categoryAddForm(){
        
    }
    
    // カテゴリー追加ポスト
    public function categoryAdd(Request $request){
        
    }
    
    // カテゴリー編集フォーム
    public function categoryEditForm($id){
        
    }
    
    // カテゴリー編集ポスト
    public function categoryEdit(Request $request){
        
    }
    
    /*
    -----------------------
    ブログ閲覧機能で使うメソッド
    -----------------------
    */
    
    // トップページ表示
    public function blogTop(){
        
    }
    
    // 記事ページ
    public function blogArticle(){
        
    }
    
    // カテゴリー選択時の記事一覧
    public function categoryChoice(){
        
    }
    
    /*
    --------------------
    認証機能用で使うメソッド
    --------------------
    */
    
    // 初期ユーザー登録フォーム
    public function userAddForm(){
        
    }
    
    // 初期ユーザー登録ポスト
    public function userAdd(){
        
    }
    
    // 管理ユーザー一覧
    public function managerList(){
        
    }
    
    // 管理ユーザー登録フォーム
    public function managerAddForm(){
        
    }
    
    // 管理ユーザー登録ポスト
    public function managerAdd(Request $request){
        
    }
    
    // ログインユーザーのパスワード変更フォーム
    public function passChangeForm(){
        
    }
    
    // ログインユーザーパスワード変更のポスト
    public function passChange(){
        
    }
    
    // ログインフォーム
    public function loginForm(){
        
    }
    
    // ログインポスト
    public function login(Request $request){
        
    }
    
    // ログアウトフォーム
    public function logoutForm(){
        
    }
    
    // ログアウトポスト
    public function logout(Request $request)(){
        
    }
}