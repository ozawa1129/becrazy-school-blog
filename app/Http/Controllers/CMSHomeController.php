<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Taxonomy;
use App\Models\TaxonomyRelationship;
use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Support\Facades\Hash;
use Auth;

class CMSHomeController extends RegisterController {
    
    public function __construct() {
        // 認証ミドルウエアを利用する設定
        $this->middleware('auth');
    }
    
    // トップページ表示
    public function home(){
        return view('home');
    }
    
    public function usersList(){
        $users = User::all();
        $data = array('users' => $users);
        return view('usersList', $data);
    }
    
    // パスワード変更ページを表示
    public function changePasswordForm(){
        return view('changePasswordForm');
    }
    
    // パスワード変更処理
    public function changePass(Request $request){
        $user_id = Auth::id();
        $user = User::find($user_id);
        if(Hash::check($request->nowPass, $user->password)){
            $user->password = bcrypt($request->afterPass);
            $user->save();
            return view('home');
        }else{
            return redirect('/changePasswordForm')->with('flash_message', '現在のパスワードが間違っています');
        }
    }
}