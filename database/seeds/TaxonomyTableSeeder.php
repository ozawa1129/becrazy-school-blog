<?php

use Illuminate\Database\Seeder;

class TaxonomyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

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
            // id: 主キー
            // type: categoryにする
            // name: カテゴリーの名前
            // slug: categoryGroup/$slug
            // description: 説明文
            [
                'id' => '1',
                'type' => 'category',
                'name' => 'HTML',
                'slug' => 'HTML',
                'description' => 'HTMLカテゴリー',
            ],
            [
                'id' => '2',
                'type' => 'category',
                'name' => 'CSS',
                'slug' => 'CSS',
                'description' => 'CSSカテゴリー',
            ],
            [
                'id' => '3',
                'type' => 'category',
                'name' => 'JavaScript',
                'slug' => 'JavaScript',
                'description' => 'JavaScriptカテゴリー',
            ],
            [
                'id' => '4',
                'type' => 'category',
                'name' => 'PHP',
                'slug' => 'PHP',
                'description' => 'PHPカテゴリー',
            ],
            [
                'id' => '5',
                'type' => 'category',
                'name' => 'Game',
                'slug' => 'Game',
                'description' => 'Gameカテゴリー',
            ],
            [
                'id' => '6',
                'type' => 'category',
                'name' => 'Culture',
                'slug' => 'Culture',
                'description' => 'Cultureカテゴリー',
            ],
            [
                'id' => '7',
                'type' => 'category',
                'name' => 'Life',
                'slug' => 'Life',
                'description' => 'Lifeカテゴリー',
            ],
        ];

        foreach ($seed_data as $value) {
            $table->insert($value);
        }
    }
}
