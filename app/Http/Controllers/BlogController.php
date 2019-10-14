<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;

class BlogController extends Controller {
    
    /**
     * コンストラクタ
     * 他のメソッドを実行する前に認証済みかどうかチェックする
     */
    public function __construct() {
        // 認証ミドルウエアを利用する設定
        $this->middleware('auth');
    }
    
    /*
    -------------------------
    ブログの管理機能で使うメソッド
    -------------------------
    */
    
    // 記事一覧表示
    public function blogList(){
        $posts = Post::all();
        $data = array('blogList' => $posts);
        return view('blogList', $data);
    }
    
    // 記事追加フォーム
    public function blogAddForm(){
        $user_id = Auth::id();
        return view('blogAddForm', ['user_id' => $user_id]);
    }
    
    // 記事追加ポスト
    public function blogAdd(Request $request){
        $posts = new Post();
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->slug = $request->slug;
        $posts->status = $request->status;
        $posts->mime_type = $request->mime_type;
        $posts->save();
        return redirect('blogAdd');
    }
    
    // 記事編集フォーム
    public function blogEditForm($id){
        $posts = Post::find($id);
        $data = array('blogEdit' => $posts);
        return view('blogEditForm', $data);
    }
    
    // 記事編集ポスト
    public function blogEdit(Request $request){
        // バリデーション
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);
        
        $posts = Post::find($request->id);
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->save();
        return redirect('blogList');
    }
    
    // 記事論理削除フォーム
    public function blogHideForm($id){
        $posts = Post::find($id);
        $data = array('blogHideForm' => $posts);
        return view('blogHideForm', $data);
    }
    
    // 記事論理削除ポスト
    public function blogHide(Request $request){
        $posts = Post::find($request->id);
        $posts->delete();
    }
    
    // カテゴリー一覧
    public function categoryList(){
        $taxonomies = Taxonomy::all();
        $data = array('taxonomies' => $taxonomies);
        return view('categoryList', $data);
    }
    
    // カテゴリー追加フォーム
    public function categoryAddForm($id){
        $taxonomies = Taxonomy::find($id);
        $data = array('categoryAddForm' => $taxonomies);
        return view('blogHideForm', $data);
    }
    
    // カテゴリー追加ポスト
    public function categoryAdd(Request $request){
        // 後々バリデーション
        $taxonomies = new Taxonomy();
        $taxonomies->type = $request->type;
        $taxonomies->name = $request->name;
        $taxonomies->save();
        return redirect('categoryList');
    }
    
    // カテゴリー編集フォーム
    public function categoryEditForm($id){
        $taxonomies = Taxonomy::find($id);
        $data = array('categoryEditForm' => $taxonomies);
        return view('categoryEditForm', $data);
    }
    
    // カテゴリー編集ポスト
    public function categoryEdit(Request $request){
        $taxonomies = Taxonomy::find($request->id);
        $taxonomies->type = $request->type;
        $taxonomies->name = $request->name;
        $todoLists->save();
        return redirect('categoryList');
    }
    
    /*
    -----------------------
    ブログ閲覧機能で使うメソッド
    -----------------------
    */
    
    // トップページ表示
    public function blogTop(){
        return view('blogTop');
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
    public function logout(Request $request){
        
    }
}