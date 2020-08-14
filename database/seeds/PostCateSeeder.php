<?php

use Illuminate\Database\Seeder;

class PostCateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_cate')->insert(
            [
                [   
                    'id' => 1,
                    'name_cate' => 'Không thuộc danh mục nào',
                ],
                [   
                    'id' => 2,
                    'name_cate' => 'Mẹo vặt, Thủ thuật',
                ],
                [
                    'id' => 3,
                    'name_cate' => 'Tin giày',
                ],
                [
                    'id' => 4,
                    'name_cate' => 'Đánh giá',
                ],
            ]
        );
    }
}
