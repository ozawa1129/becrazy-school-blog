<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //論理削除機能を追加
    use SoftDeletes;
    // カラム名の設定上書き。今回は不要
    // const DELETED_AT = 'deleted_datetime';
    
    public function taxonomies(){
        return $this->belongsToMany('App\Models\Taxonomy', 'taxonomy_relationships', 'post_id', 'taxonomy_id');
    }
}
