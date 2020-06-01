<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('posts');

        // シードデータの配列
        $seed_data = [
            [
                'id' => 1,
                'user_id' => 1,
                'title' => 'メイン画像',
                'content' => 'メイン用の画像',
                'status' => 'inherit',
                'slug' => 'storage/GnQfbyOaYYEKjDZ2n22rPlc7XBrfopnU2WlRFGtj.jpeg',
                'type' => 'attachment',
                'mime_type' => 'image/png',
            ],
            [
                'id' => 2,
                'user_id' => 1,
                'title' => 'プロフ黒猫',
                'content' => 'プロフ用の画像',
                'status' => 'inherit',
                'slug' => 'storage/P6SLw0qgRARgKoHrsRjVbTwj71Ss3vcmaTDuERxl.jpeg',
                'type' => 'attachment',
                'mime_type' => 'image/png',
            ],
            [
                'id' => 3,
                'user_id' => 1,
                'title' => 'no_image',
                'content' => '画像なし',
                'status' => 'inherit',
                'slug' => 'storage/dQKO3tHEb90ZIZN05jVLXCcOqFCRTzeMNJIrO8Qx.jpeg',
                'type' => 'attachment',
                'mime_type' => 'image/png',
            ]
        ];

        foreach ($seed_data as $value) {
            $table->insert($value);
        }
    }
}
