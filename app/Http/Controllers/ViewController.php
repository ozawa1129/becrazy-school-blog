<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;

class ViewController extends Controller {
    /*
    -----------------------
    ブログ閲覧機能で使うメソッド
    -----------------------
    */
    
    // トップページ表示
    public function blogTop(){
        $posts = Post::orderBy('id', 'DESC')->take(5)->get();
        $data = array('latestFive' => $posts);
        return view('blogTop', $data);
    }
    
    // 記事ページ
    public function blogArticle($slug){
        $posts = Post::where('slug', $slug)->first();
        $data = array('Article' => $posts);
        return view('blogArticle', $data);
    }
    
    // カテゴリー選択時の記事一覧
    public function categoryChoice(){
        
    }
}