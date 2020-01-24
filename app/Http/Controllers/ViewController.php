<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\TaxonomyRelationship;

class ViewController extends Controller {
    /*
    -----------------------
    ブログ閲覧機能で使うメソッド
    -----------------------
    */

    // テスト用ページ
    public function testpage(){
        return view('test');
    }

    // トップページ表示
    public function blogTop(){
        $posts = Post::where('status', 'publish')->orderBy('id', 'DESC')->take(5)->get();
        $data = array('latestFive' => $posts);
        return view('blogTop', $data);
    }

    // 記事ページ
    public function blogArticle($slug){
        $posts = Post::where('slug', $slug)->first();
        if($posts->status === 'publish'){
            $prev = Post::where('id', '<', $posts->id)->orderBy('id', 'desc')->limit('1')->first();
            $next = Post::where('id', '>', $posts->id)->orderBy('id')->limit('1')->first();

            // 全部取る
            $taxonomy = $posts->taxonomies;

            // tagとcategoryに分ける
            $tags = array();
            $categories = array();
            foreach($taxonomy as $type){
                if($type->type === "tag"){
                    array_push($tags,$type);
                }elseif($type->type === "category"){
                    array_push($categories,$type);
                }
            }

            $data = array('article' => $posts, 'prev' => $prev, 'next' => $next, 'tags' => $tags, 'categories' => $categories);
            return view('blogArticle', $data);
        }else{

        }

    }

    // カテゴリー選択時の記事一覧
    public function categoryChoice(){
        $categories = Taxonomy::whereIn('type', ["category"])->get();
        $data = array('categories' => $categories);
        return view('categoryChoice', $data);
    }

    // カテゴリー選択時に飛ばす
    public function categoryGroup($id){
        $taxonomies = Taxonomy::find($id);
        $data = array('posts' => $taxonomies->posts);
        return view('categoryGroup', $data);
    }
}
