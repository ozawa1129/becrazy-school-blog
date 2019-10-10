<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //論理削除機能を追加
    use SoftDeletes;
    // カラム名の設定上書き
    const DELETED_AT = 'deleted_datetime';
}
