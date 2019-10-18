<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Taxonomy extends Model
{
    protected $table = "taxonomy";
    //論理削除機能を追加
    use SoftDeletes;
    // カラム名の設定上書き
    //const DELETED_AT = 'deleted_datetime';
    
    public function posts(){
        return $this->belongsToMany('App\Models\Post', 'taxonomy_relationships', 'taxonomy_id', 'post_id');
    }
}
