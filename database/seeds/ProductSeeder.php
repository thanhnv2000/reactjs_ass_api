<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert(
            [
            [   
                'id' => 1,
                'name_product' => 'XSPORT Ni.ke Air Force',
                'short_description' => ' Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2019/02/MG_5045.jpg',
                'information'=>'Được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo
                 Nike Air Force 1 được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.
                 Phối màu đơn giản nhưng vô cùng tinh tế.',
                'old_price' => 400000,
                'price' => 300000,
                'quantity' => 150,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 2,
                'name_product' => 'Nike force 1 shadow',
                'short_description' => ' Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2019/12/MG_8647.jpg',
                'information'=>'Nike Air Force 1 shadow được thiết kế hướng tới sự đơn giản nhưng vô cùng tinh tế. Đây là sự lựa chọn hoàn hảo cho các tín đồ yêu thể thao khi có thể dễ dàng phối hợp trang phục hằng ngày để khẳng định phong cách thời trang.
                Giày Nike Air Force 1 được làm từ chất liệu da đặc trưng với chất lượng hoàn hảo
                Đế giày cao su đúc nguyên khối êm chân thoải mái.',
                'old_price' => 700000,
                'price' => 600000,
                'quantity' => 130,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 3,
                'name_product' => 'Giày Thể Thao XSPORT shadow',
                'short_description' => ' Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2020/06/MG_8962.jpg',
                'information'=>'Mang hơi hướng Streetstyle, kiểu dáng phá cách.
                Có thể mix đẹp dễ dàng với hầu hết tất cả các bộ quần áo, nhiều phong cách khác nhau
                 Mỗi sản phẩm đều mang các đặc trưng, các gam màu hợp trend',
                 'old_price' => 370000,
                 'price' => 320000,
                'quantity' => 110,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 4,
                'name_product' => 'Adidas Superstar Trắng mũi sò F1',
                'short_description' => ' Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2019/03/MG_5424.jpg',
                'information'=>'Đôi giày vừa mang phong cách lướt ván, vừa mang phong cách đường phố
                 Có thể mix đẹp dễ dàng với hầu hết tất cả các bộ quần ào, nhiều phong cách khác nhau.
                 Mỗi sản phẩm đều mang các đặc trưng, chi tiết nguyên bản với 3 đường sọc logo của Adidas và phần ngón chân bằng cao su',
                'old_price' => 270000,
                'price' => 240000,
                'quantity' => 80,
                'id_category'=>3,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 5,
                'name_product' => 'Giày Vải XD Mũi Nỉ SF',
                'short_description' => ' Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ.',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2018/12/xoa-phong-160-1.jpg',
                'information'=>'Đôi giày vừa mang phong cách lướt ván, vừa mang phong cách đường phố
                 Có thể mix đẹp dễ dàng với hầu hết tất cả các bộ quần ào, nhiều phong cách khác nhau.
                 Mỗi sản phẩm đều mang các đặc trưng, chi tiết nguyên bản của Vans và phần ngón chân bằng cao su',
                'old_price' => 290000,
                'price' => 250000,
                'quantity' => 95,
                'id_category'=>4,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 6,
                'name_product' => 'XSPORT Van.s Old Skool Mũi Da Lộn',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2019/01/MG_3249.jpg',
                'information'=>'Thiết kế được kết hợp giữa các tone màu xanh – đen – trắng – đỏ- vàng – hồng mới lạ.
                Đường lượn sóng bằng da 2 bên thân giày tạo điểm nhấn đặc trưng cho Vans Old Skool .
                Đế giày được làm từ cao su bền chắc, có độ bám và đàn hồi tốt .
                Vòng đệm bao quanh cổ giày giúp người mang có được sự êm ái khi di chuyển mà không sợ ảnh hưởng gót chân .
                Chất liệu vải Canvas ở thân giày và da lộn ở đế giày, mũi giày giúp bạn có được sự thoải mái ở bàn chân và ở các ngón chân .',
                'old_price' => 250000,
                'price' => 199000,
                'quantity' => 50,
                'id_category'=>4,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 7,
                'name_product' => ' XSPORT Van.s Old Skool Vải trắng kẻ xanh mũi nỉ',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://giayxshop.vn/wp-content/uploads/2018/12/xoa-phong-186-1.jpg',
                'information'=>'Thiết kế được kết hợp giữa các tone màu xanh – đen – trắng – đỏ- vàng – hồng mới lạ.
                Đường lượn sóng bằng da 2 bên thân giày tạo điểm nhấn đặc trưng cho Vans Old Skool .
                Đế giày được làm từ cao su bền chắc, có độ bám và đàn hồi tốt .
                Vòng đệm bao quanh cổ giày giúp người mang có được sự êm ái khi di chuyển mà không sợ ảnh hưởng gót chân .
                Chất liệu vải Canvas ở thân giày và da lộn ở đế giày, mũi giày giúp bạn có được sự thoải mái ở bàn chân và ở các ngón chân .',
                'old_price' => 290000,
                'price' => 259000,
                'quantity' => 70,
                'id_category'=>4,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 8,
                'name_product' => 'Giày Da Nam họa tiết GNLA1915-D',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://laforce.vn/wp-content/uploads/2019/10/giay-loafer-nam-hoa-tiet-duc-lo-gnla1915-d-1.jpg',
                'information'=>' Da bò thật toàn bộ từ châu Âu
                Đường may chi tiết, tỉ mỉ theo tiêu chuẩn.
                Đế giày chắc chắn, chống trơn trượt.
                Màu sắc trang nhã, hài hòa.
                Thiết kế hiện đại, sang trọng phù hợp với các quý ông lịch lãm.
                Kiểu dáng Loafer năng động, họa tiết đục lỗ thoáng mát
                Kết hợp cùng quần âu, kaki, trang phục lịch sự. ',
                'old_price' => 1550000,
                'price' => 1259000,
                'quantity' => 130,
                'id_category'=>5,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 9,
                'name_product' => 'Giày nam Penny Loafer GNLA1136-CF',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://laforce.vn/wp-content/uploads/2019/10/giay-loafer-nam-hoa-tiet-duc-lo-gnla1915-d-1.jpg',
                'information'=>' Từng đường may kép tỉ mỉ, chắc chắn chạy quanh giày
                Họa tiết đai kim loại vắt ngang lưỡi giày
                Mũi giày tròn
                Đế giày thiết kế chống trơn, trượt
                Màu: Cà phê',
                'old_price' => 2550000,
                'price' => 1959000,
                'quantity' => 130,
                'id_category'=>5,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 10,
                'name_product' => 'Giày da nam phong cách GNLA754-H7-D',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://laforce.vn/wp-content/uploads/2018/12/giay-tay-nam-phong-cach-gnla754-h7-d-2.jpg',
                'information'=>' Da bò thật toàn bộ từ châu Âu
                Đường may chi tiết, tỉ mỉ theo tiêu chuẩn.
                Đế giày chắc chắn, chống trơn trượt.
                Màu sắc trang nhã, hài hòa.
                Thiết kế hiện đại, sang trọng phù hợp với các quý ông lịch lãm.
                Kết hợp cùng quần âu, kaki, trang phục lịch sự. ',
                'old_price' => 2559000,
                'price' => 1959000,
                'quantity' => 135,
                'id_category'=>5,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 11,
                'name_product' => 'Giày nam quần vợt Nike Court Lite - 845021-010',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://i-shop.vnecdn.net/resize/560/560/images/2020/06/29/5ef9a533f0b51-845021-010.jpg',
                'information'=>' Giày nam quần vợt Nike Court Lite - 845021-010 sở hữu kiểu dáng trẻ trung, năng động, cùng chất liệu cao cấp, bền bỉ hỗ trợ vận động tốt và định hình bàn chân. Với chất liệu chuyên dùng trong thiết kế thể thao, sản phẩm đem đến cho bạn cảm giác êm ái, dễ chịu khi vận động trong thời gian dài. Đồng hành cùng thiết kế thời trang, giày thể thao Nike được sử dụng công nghệ thoáng khí, giúp cân bằng nhiệt và độ ẩm trong những điều kiện môi trường khác nhau, đế có tính năng chống trơn trượt. Sản phẩm mang phong cách hiện đại, khỏe khoắn và đường may tỉ mỉ, tinh tế. Người dùng có thể yên tâm về chất lượng sản phẩm. Màu sắc bắt mắt, cá tính phù hợp với nhiều lứa tuổi, dáng người và hoàn cảnh sử dụng: tập luyện thể thao, đi học, đi làm hay đi chơi.... ',
                'old_price' => 1659000,
                'price' => 1259000,
                'quantity' => 155,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 12,
                'name_product' => 'Giày nam Nike Legend React',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://www.sport1.vn/media/catalog/product/cache/1/image/800x800/9df78eab33525d08d6e5fb8d27136e95/g/i/giay-running-nike-legend-react-nam-aa1625-405_1.jpg',
                'information'=>'Giày nam chạy bộ Nike Legend React - AA1625-005 sở hữu kiểu dáng trẻ trung, năng động, cùng chất liệu cao cấp, bền bỉ hỗ trợ vận động tốt và định hình bàn chân. Với chất liệu chuyên dùng trong thiết kế thể thao, sản phẩm đem đến cho bạn cảm giác êm ái, dễ chịu khi vận động trong thời gian dài. Đồng hành cùng thiết kế thời trang, giày thể thao Nike được sử dụng công nghệ thoáng khí, giúp cân bằng nhiệt và độ ẩm trong những điều kiện môi trường khác nhau, đế có tính năng chống trơn trượt. Sản phẩm mang phong cách hiện đại, khỏe khoắn và đường may tỉ mỉ, tinh tế. Người dùng có thể yên tâm về chất lượng sản phẩm. Màu sắc bắt mắt, cá tính phù hợp với nhiều lứa tuổi, dáng người và hoàn cảnh sử dụng: tập luyện thể thao, đi học, đi làm hay đi chơi....',
                'old_price' => 700900,
                'price' => 500900,
                'quantity' => 155,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 13,
                'name_product' => 'Giày nam Blazer Low LTHR',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://cf.shopee.vn/file/bc7c440e90659f6f19d5eae7700bf552',
                'information'=>'Giày thể thao nam Blazer Low LTHR màu đen AJ9515-001 là mẫu giày được thiết kế mang phong cách cổ điển, màu sắc khỏe khoắn, sang trọng sẽ mang đến cho bạn 1 phong cách thể thao thật cá tính. Đặc biệt sản phẫm còn có chất liệu cao cấp có độ bền cao, siêu chống thấm, chống trơn trượt cực tốt mang lại sự an toàn tối đa cho người dùng trong mọi hoàng cảnh thời tiết. Sản phẩm thích hợp cho các hoạt động thể thao như: đi bộ, chạy bộ, đi làm, đi chơi hay tập luyện.',
                'old_price' => 900900,
                'price' => 700900,
                'quantity' => 158,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 14,
                'name_product' => 'Giày nam NIKE CK RACER',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://product.hstatic.net/1000333152/product/upload_d5d077a8d5cb4c37b08ff3a87c393757_master.jpg',
                'information'=>'Giày thể thao nam NIKE CK RACER 916780-005 là mẫu giày được thiết kế mang phong cách cổ điển, màu sắc khỏe khoắn, sang trong sẽ mang đến cho bạn 1 phong cách thể thao cá tính. Đặc biệt sãn phẫm còn có chất liệu cao cấp có độ bền cao, siêu chống thấm trong những điều kiện trên sân cỏ.',
                'old_price' => 1900900,
                'price' => 1700900,
                'quantity' => 168,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            [
                'id' => 15,
                'name_product' => 'Giày nam TENNIS CLASSIC CS 683613-115',
                'short_description' => 'Chất liệu cao cấp, bền đẹp theo thời gian. Thiết kế thời trang. Kiểu dáng phong cách. Độ bền cao. Dễ phối đồ',
                'feature_image' => 'https://vn-test-11.slatic.net/p/f430cd507cb825d53f1f91377e31d44e.jpg_720x720q80.jpg_.webp',
                'information'=>'Giày thể thao nam TENNIS CLASSIC CS 683613-115 là mẫu giày được thiết kế mang phong cách cổ điển, màu sắc khỏe khoắn, sang trong sẽ mang đến cho bạn 1 phong cách thể thao cá tính. Đặc biệt sãn phẫm còn có chất liệu cao cấp có độ bền cao, siêu chống thấm trong những điều kiện trên sân cỏ.
                Chất liệu cao cấp thoáng khí cả mặt trong và mặt ngoài giúp bạn luôn dễ chịu và thoải mái dù mang trong thời gian dài.
                Thiết kế thông minh: Giày có trọng lượng nhẹ giúp người mang luôn cảm thấy dễ chịu. Lớp lót dạng lưới giúp cho giày luôn thoáng khí không bị hầm bí khi sử dụng trong thời gian dài. Đặc biệt phần đế được làm bằng cao su tổng hợp, êm ái, thiết kế chống trơn trượt hiệu quả mang lại sự an toàn tối đa cho người dùng trong mọi hoàng cảnh thời tiết.',
                'old_price' => 380000,
                'price' => 350000,
                'quantity' => 170,
                'id_category'=>2,
                'views'=>0,
                'status'=>1
            ],
            ]
        );
    }
}
