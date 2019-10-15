<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
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
    
    // mine_typeの定数化
    const MIME_TYPE_TEXT = "text/html";
    
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
        $posts->mime_type = self::MIME_TYPE_TEXT;
        $posts->save();
        return redirect('blogAdd');
    }
    
    // 記事編集フォーム
    public function blogEditForm($id){
        $user_id = Auth::id();
        $posts = Post::find($id);
        $data = array('blogEdit' => $posts ,'user_id' => $user_id);
        return view('blogEditForm', $data);
    }
    
    // 記事編集ポスト
    public function blogEdit(Request $request){
        // バリデーション後ほど細かく記載
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string'
        ]);
        
        $posts = Post::find($request->id);
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->content = $request->content;
        $posts->slug = $request->slug;
        $posts->status = $request->status;
        $posts->mime_type = self::MIME_TYPE_TEXT;
        $posts->save();
        return redirect('blogList');
    }
    
    // 記事論理削除ポスト
    public function blogHide(Request $request){
            $validatedData = $request->validate([
            'ids' => 'array|required'
        ]);
        
        // 完了メソッド
        $softDeleted = Post::whereIn('id', $request->ids)->get();
        foreach($softDeleted as $delete){
            $delete->deleted_at = now();
            $delete->save();
        }
        return redirect('blogList');
    }
    
    // カテゴリー一覧
    public function categoryList(){
        $taxonomy = Taxonomy::all();
        $data = array('taxonomy' => $taxonomy);
        return view('categoryList', $data);
    }
    
    // カテゴリー追加フォーム
    public function categoryAddForm(){
        return view('categoryAddForm');
    }
    
    // カテゴリー追加ポスト
    public function categoryAdd(Request $request){
        // 後々バリデーション
        $taxonomy = new Taxonomy();
        $taxonomy->type = $request->type;
        $taxonomy->name = $request->name;
        $taxonomy->slug = $request->slug;
        $taxonomy->description = $request->description;
        $taxonomy->save();
        return redirect('categoryAddForm');
    }
    
    // カテゴリー編集フォーム
    public function categoryEditForm($id){
        $taxonomy = Taxonomy::find($id);
        $data = array('categoryEdit' => $taxonomy);
        return view('categoryEditForm', $data);
    }
    
    // カテゴリー編集ポスト
    public function categoryEdit(Request $request){
        $taxonomy = Taxonomy::find($request->id);
        $taxonomy->name = $request->name;
        $taxonomy->type = $request->type;
        $taxonomy->save();
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