<?php

namespace App\Lib;

use App\Models\Post;

class My_func{
    public static function imageUrl($image_name){
        $image_url = Post::select('slug')->where('title', $image_name)->first();
        return $image_url->slug;
    }
}
