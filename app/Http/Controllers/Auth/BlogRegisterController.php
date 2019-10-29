<?php
namespace App\Http\Controllers\Auth;

use App\Models\User;

class BlogRegisterController extends RegisterController
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // ログイン後に遷移するurl指定
    protected $redirectTo = '/';
    
    public function checkRegister(){
        $users = User::all()->count();
        if($users === 0){
            return redirect('register');
        }else{
            return redirect('blogTop');
        }
    }
}