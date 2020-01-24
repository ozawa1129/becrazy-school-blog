<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\TaxonomyRelationship;
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
    public function articleList(){
        $posts = Post::all();
        $data = array('blogList' => $posts);
        return view('blogList', $data);
    }

    // 記事追加フォーム
    public function articleAddForm(){
        $user_id = Auth::id();
        $tags = Taxonomy::whereIn('type', ["tag"])->get();
        $categories = Taxonomy::whereIn('type', ["category"])->get();
        $data = array('user_id' => $user_id, 'tags' => $tags, 'categories' => $categories);
        return view('blogAddForm', $data);
    }

    // 記事追加ポスト
    public function postArticle(Request $request){
        $posts = new Post();
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->content = $request->content;
        if(isset($request->imagefile)){
            $path = $request->imagefile->store('/public');
            $image_url = str_replace('public', 'storage', $path);
            $posts->slug = $image_url;
        }else{
            $posts->slug = $request->slug;
        }
        $posts->status = $request->status;
        $posts->type = $request->type;
        $posts->mime_type = "text/html";
        $posts->save();

        if(isset($request->tag)){
            foreach ($request->tags as $tag){
                $taxonomyRelationships = TaxonomyRelationship::select('taxonomy_order')
                    ->where('taxonomy_id', $tag)
                    ->orderBy('taxonomy_order', 'desc')
                    ->first();
                if(is_null($taxonomyRelationships)){
                    $posts->taxonomies()->attach($tag);
                }else{
                    $next_order = $taxonomyRelationships->taxonomy_order + 1;
                    $posts->taxonomies()->attach($tag, ['taxonomy_order' => $next_order]);
                }
            }
        }

        if(isset($request->categories)){
            foreach ($request->categories as $category){
                $taxonomyRelationships = TaxonomyRelationship::select('taxonomy_order')
                    ->where('taxonomy_id', $category)
                    ->orderBy('taxonomy_order', 'desc')
                    ->first();
                if (is_null($taxonomyRelationships)){
                    $posts->taxonomies()->attach($category);
                }else{
                    $next_order = $taxonomyRelationships->taxonomy_order + 1;
                    $posts->taxonomies()->attach($category, ['taxonomy_order' => $next_order]);
                }
            }
        }

        return redirect('/articleAddForm');
    }

    // 画像追加フォーム
    public function imageAddForm(){
        $user_id = Auth::id();
        $data = array('user_id' => $user_id);
        return view('imageAddForm', $data);
    }

    // 画像追加ポスト
    public function postImage(Request $request){
        $posts = new Post();
        $posts->user_id = $request->user_id;
        $posts->title = $request->title;
        $posts->content = $request->content;
        if(isset($request->imagefile)){
            $path = $request->imagefile->store('/public');
            $image_url = str_replace('public', 'storage', $path);
            $posts->slug = $image_url;
        }else{
            $posts->slug = $request->slug;
        }
        $posts->status = 'inherit';
        $posts->type = 'attachment';
        $posts->mime_type = 'image/jpeg';
        $posts->save();

        return redirect('imageAddForm');
    }

    // 記事編集フォーム
    public function articleEditForm($id){
        $user_id = Auth::id();
        $posts = Post::find($id);
        $data = array('blogEdit' => $posts ,'user_id' => $user_id);
        return view('blogEditForm', $data);
    }

    // 記事編集ポスト
    public function articleEdit(Request $request){
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
    public function articleHide(Request $request){
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

    // カテゴリーのページ
    public function categoryPage(){
        $category = Taxonomy::select('id','name','description')->where('type', 'category')->get();
        return view('categoryPage', ['category' => $category]);
    }

    //　タグのページ
    public function tagPage(){
        $tag = Taxonomy::select('id','name','description')->where('type', 'tag')->get();
        return view('tagPage', ['tag' => $tag]);
    }

    // カテゴリー、タグの追加フォーム
    public function taxonomyAddForm(){
        return view('categoryAddForm');
    }

    // カテゴリー追加ポスト
    public function taxonomyAdd(Request $request){
        // 後々バリデーション
        $taxonomy = new Taxonomy();
        $taxonomy->type = $request->type;
        $taxonomy->name = $request->name;
        $taxonomy->slug = $request->slug;
        $taxonomy->description = $request->description;
        $taxonomy->save();
        return redirect('taxonomyAddForm');
    }

    // カテゴリー編集フォーム
    public function taxonomyEditForm($id){
        $taxonomy = Taxonomy::find($id);
        $data = array('categoryEdit' => $taxonomy);
        return view('categoryEditForm', $data);
    }

    // カテゴリー編集ポスト
    public function taxonomyEdit(Request $request){
        $taxonomy = Taxonomy::find($request->id);
        $taxonomy->name = $request->name;
        $taxonomy->description = $request->description;
        $taxonomy->save();
        return redirect('categoryPage');
    }

    //　カテゴリー、タグの論理削除
    public function categorySoftDelete(Request $request){
        $validatedData = $request->validate([
            'ids' => 'array|required'
        ]);

        // 完了メソッド
        $softDeleted = Taxonomy::whereIn('id', $request->ids)->get();
        foreach($softDeleted as $delete){
            $delete->deleted_at = now();
            $delete->save();
        }
        return redirect('home');
    }
}
