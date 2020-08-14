<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert(
            [ 
            [
                'id' => 1,
                'name_category' => 'Không thuộc danh mục nào',
                'cap_cate'=>1,
                'image'=>''
            ],      
            [   
                'id' => 2,
                'name_category' => 'Giày Nike',
                'cap_cate'=>1,
                'image'=>'https://images.solecollector.com/complex/images/c_fill,dpr_2.0,f_auto,fl_lossy,q_auto,w_680/su4e8szwoz0nstswdigk/nike-hyperadapt-1-triple-white-release-date-ah9389-102-dark-main'
            ],
            [
                'id' => 3,
                'name_category' => 'Giày Adidas',
                'cap_cate'=>1,
                'image'=>'https://i.insider.com/58daad842dfbdba1048b4ad4?width=1200&format=jpeg'
            ],
            [
                'id' => 4,
                'name_category' => 'Giày Vans',
                'cap_cate'=>1,
                'image'=>'https://i.insider.com/58daad842dfbdba1048b4ad4?width=1200&format=jpeg'
            ],
            [   
                'id' => 5,
                'name_category' => 'Giày Da Nam',
                'cap_cate'=>2,
                'image'=>'https://i.ytimg.com/vi/pum0sKto-bo/maxresdefault.jpg'
            ],
            [
                'id' => 6,
                'name_category' => 'Giày Thời Trang',
                'cap_cate'=>2,
                'image'=>'https://karmaloog.com/wp-content/uploads/2017/07/Righello-Consigliere-thumb-1080x675.jpg'
            ],
            [
                'id' => 7,
                'name_category' => 'Giày Đôi',
                'cap_cate'=>2,
                'image'=>'https://images.solecollector.com/complex/images/c_fill,dpr_2.0,f_auto,fl_lossy,q_auto,w_680/su4e8szwoz0nstswdigk/nike-hyperadapt-1-triple-white-release-date-ah9389-102-dark-main'
            ],
            [
                'id' => 8,
                'name_category' => 'Giày Nữ',
                'cap_cate'=>2,
                'image'=>'https://i.insider.com/58daad842dfbdba1048b4ad4?width=1200&format=jpeg'
            ],
            [
                'id' => 9,
                'name_category' => 'Giày Nam',
                'cap_cate'=>2,
                'image'=>'https://www.maisonjsc.com/media/images/325712/banner-2.jpg?width=1400&height=600&bgcolor=white'
            ],
            ]

        );
    }
}
