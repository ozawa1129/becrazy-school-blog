<?php
namespace App\Http\Controllers\Auth;

class BlogRegisterController extends RegistersController
{
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    // ログイン後に遷移するurl指定
    protected $redirectTo = '/';
}