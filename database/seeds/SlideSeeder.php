<?php

use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    DB::table('slides')->insert(
        [
        [   
            'id' => 1,
            'image' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fstatic.onecms.io%2Fwp-content%2Fuploads%2Fsites%2F20%2F2020%2F06%2F24%2Famazon-adidas-sneakers-tout.jpg',
            'title' => 'Vans 2020 Chất liệu cao cấp, bền đẹp theo thời gian.',
            'content'=>'Được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo
             được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.
             Phối màu đơn giản nhưng vô cùng tinh tế.',
            'link' => '',
            'status'=>1
        ],
        [
            'id' => 2,
            'image' => 'https://iprice-production-assets.s3-ap-southeast-1.amazonaws.com/trends-article/top-3-mau-giay-converse-duoc-cac-ngoi-sao-quoc-te-ua-chuong-medium.jpg',
            'title' => 'Mẫu mới 2020 bền đẹp với thời gian.',
            'content'=>'Được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo
             được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.
             Phối màu đơn giản nhưng vô cùng tinh tế.',
            'link' => '',
            'status'=>1
        ],
        [
            'id' => 3,
            'image' => 'https://toplist.vn/images/800px/giay-truot-van-skate-shoes-440848.jpg',
            'title' => 'Mẫu giầy vans AFP sang trọng',
            'content'=>'Được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo
             được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.
             Phối màu đơn giản nhưng vô cùng tinh tế.',
            'link' => '',
            'status'=>1
        ],
      
        ]
    );
}
}
