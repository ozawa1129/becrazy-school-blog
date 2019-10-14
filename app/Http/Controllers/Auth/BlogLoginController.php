<?php
namespace App\Http\Controllers\Auth;

class BlogLoginController extends LoginController
{

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // ログイン後に遷移するurl指定
    protected $redirectTo = '/';
}