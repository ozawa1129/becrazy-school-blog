<?php

use Illuminate\Database\Seeder;

class TaxonomyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    /**
     * Run the database seeds.
     * カテゴリー用Seeder
     * 初期カテゴリー情報を追加
     *
     * @return void
     */
    public function run()
    {
        $table = DB::table('taxonomy');

        // シードデータの配列
        $seed_data = [
            // ユーザー名: test-user
            // メールアドレス: test-user@example.com
            // パスワード: password
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'html',
                'slug' => 'html',
                'description' => 'htmlカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'css',
                'slug' => 'css',
                'description' => 'cssカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'javascript',
                'slug' => 'javascript',
                'description' => 'javascriptカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'php',
                'slug' => 'php',
                'description' => 'phpカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'Game',
                'slug' => 'game',
                'description' => 'gameカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'Culture',
                'slug' => 'culture',
                'description' => 'cultureカテゴリー',
            ],
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'life',
                'slug' => 'life',
                'description' => 'lifeカテゴリー',
            ],
        ];

        foreach ($seed_data as $value) {
            $table->insert($value);
        }
    }
}
