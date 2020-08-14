<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert(
            [
            [   
                'id' => 1,
                'title' => 'Cách mang giày sneaker đi làm',
                'image'=>'https://vsneakershop.weebly.com/uploads/6/3/3/8/63388329/9743715_orig.jpg',
                'short_description' => 'Trước đây, mỗi khi đi làm đều là mang giày tây, giày mọi. Trong khoảng thời gian gần đây, giày thể thao sneaker đã chinh phục bất cứ trang phục nào, cũng như mọi nơi chúng ta đến và đi.',
                'content' =>"https://vsneaker.com/cach-mang-giay-sneaker-di-lam",
                'id_cate' => 2,
                'status' => 1,
            ],
           
            [
                'id' => 2,
                'title' => 'Cách kết hợp giày sneaker với suit thật chất',
                'image'=>' https://bountysneakers.com/wp-content/uploads/2019/12/alphabounce-cover.jpg',
                'short_description' => 'Khi bạn bối rối không biết mang màu giày thể thao nào kết hợp với suit thì việc đơn giản là đi với một đôi giày thể thao màu trắng và sạch sẽ. Để bạn có cái nhìn thật chất lừ và tinh tế hơn.',
                'content' => 'https://vsneaker.com/cach-ket-hop-giay-sneaker-voi-suit-that-chat',
                'id_cate' => 2,
                'status' => 1,
            ],
            [
                'id' => 3,
                'title' => 'Hướng dẫn cách làm trắng đế giày bị ố vàng chuẩn chỉ – 5 cách vệ sinh nhanh và an toàn',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2020/05/ultraboost-pb-cover-1.jpg',
                'short_description' => 'Adidas là một trong những hàng thời trang sneaker lớn nhất hiện nay của thế giới vì vậy hãng này luôn nghiên cứu và phát minh những công nghệ mới . Nhưng chúng cũng có những nhược điểm như dễ bị ố vàng và rất khó vệ sinh, khiến mất thẩm mỹ cho đôi giày.',
                'content' => 'https://bountysneakers.com/huong-dan-cach-lam-trang-de-giay-bi-o-vang-chuan-chi-5-cach-ve-sinh/',
                'id_cate' => 2,
                'status' => 1,
            ],
            [
                'id' => 4,
                'title' => '5 PHƯƠNG PHÁP GIÚP BẠN NỚI RỘNG GIÀY NAM',
                'image'=>'https://bucket.nhanh.vn/store/882/artCT/24725/2_10.jpg',
                'short_description' => 'Khi mua giày nam online chẳng may bạn gặp phải tình trạng đôi giày mà mình mua quá chật so với chân thì phải làm sao? Ngay sau đây chúng tôi sẽ chia sẻ cho bạn mẹo vặt giúp nới rộng giày nam khi bị chật. Cùng đọc biết đâu có lúc bạn cần dùng nhé!',
                'content' => 'https://remmy.vn/5-phuong-phap-giup-ban-noi-rong-giay-nam-khi-bi-chat-n24725.html',
                'id_cate' => 2,
                'status' => 1,
            ],
            [
                'id' => 5,
                'title' => '8 mẹo giúp bạn gái đi giày cao gót không đau chân',
                'image'=>'https://znews-photo.zadn.vn/w660/Uploaded/sgorvz/2018_09_30/di_giay_khong_dau_chan_1.jpg',
                'short_description' => 'Giày cao gót là món đồ không thể thiếu cho phái đẹp nhưng việc đi chúng thường xuyên có thể gây đau chân, phồng rộp. Dưới đây là những mẹo nhỏ giúp ngăn ngừa điều đó.',
                'content' => 'https://zingnews.vn/8-meo-giup-ban-gai-di-giay-cao-got-khong-dau-chan-post880854.html',
                'id_cate' => 2,
                'status' => 1,
            ],
            [
                'id' => 6,
                'title' => '3 Cách làm giày rộng ra Nhanh, Đơn giản, Dễ Dàng',
                'image'=>'https://www.baohotoandien.com/blog/wp-content/uploads/2019/04/huong-dan-chon-mua-giay-bao-ho-phu-hop.jpg',
                'short_description' => 'Chẳng hiểu vì lý do gì mà bạn phải có một đôi giày chật trong tủ. Tuy nhiên cũng không phải là hết cách đến mức bỏ đi. Cùng thử qua những cách làm giày rộng ra đơn giản bên dưới để cứu vãn đôi giày chật của bạn nhé',
                'content' => 'https://www.baohotoandien.com/blog/cach-lam-giay-rong-ra/',
                'id_cate' => 2,
                'status' => 1,
            ],
            [
                'id' => 7,
                'title' => '4 bí mật cách chọn giày chạy bộ được hé lộ từ chuyên gia',
                'image'=>'https://giaydepcrocs.com/wp-content/uploads/2018/01/giay-skechers-nam.jpg',
                'short_description' => 'Đi bộ hay chạy bộ là các hoạt động thể chất đem lại sức khỏe, tăng khả năng bền bỉ của con người. Là một hoạt động rất tốt mà con người cần nên duy trì hằng ngày trong cuộc sống hiện đại ngày nay. Do đó bạn nên trang bị kiến thức về cách chọn giày chạy bộ phù hợp để tránh các nguy cơ, rủi ro về chấn thương.',
                'content' => 'https://giaydepcrocs.com/chon-giay-chay-bo/',
                'id_cate' => 2,
                'status' => 1,
            ],

            [
                'id' => 8,
                'title' => 'Khám phá công nghệ miếng lót giày Memory Foam của Skechers',
                'image'=>'https://giaydepcrocs.com/wp-content/uploads/2017/11/giay-skechers-air-cooled-memory-foam.jpg',
                'short_description' => 'Đối với những ai yêu thể thao, thường xuyên vận động, hay đi bộ nhiều thường hay bị đau gót, sưng ngón chân cái. Thì miếng lót Memory Foam của Skechers sẽ là vị cứu tinh cho bạn. Miếng lót được làm từ loại mousse dẻo có độ co giãn cao. ',
                'content' => 'https://giaydepcrocs.com/kham-pha-cong-nghe-mieng-lot-giay-memory-foam-cua-skechers/',
                'id_cate' => 3,
                'status' => 1,
            ],
            [
                'id' => 9,
                'title' => 'Những dòng giày sneaker dẫn đầu xu hướng đang được chuộng và hot nhiều nhất hiện nay.',
                'image'=>'https://vsneakershop.weebly.com/uploads/6/3/3/8/63388329/img20150313224549627_orig.jpg',
                'short_description' => '​Một cơn chấn động lớn từ Adidas được mang tên là Ultra Boost và trở thành đôi giày xuất sắc nhất trong lịch sử 70 năm qua của Adidas. Siêu phẩm giày chạy bộ này vừa được tung ra và đã khiến cho giới thời trang cũng như giới chạy bộ và thể thao phải ngước nhìn, đã làm mưa làm gió từ năm 2015 đến giờ vẫn còn rất nóng và không có dấu hiệu giảm nhiệt chút nào.',
                'content' => 'https://vsneaker.com/nhung-dong-giay-sneaker-dan-dau-xu-huong-dang-duoc-chuong-va-hot-nhieu-nhat-hien',
                'id_cate' => 3,
                'status' => 1,
            ],
            [
                'id' => 10,
                'title' => 'Những mẫu giày Free Flyknit đẹp vô cùng đang hot',
                'image'=>'https://bizweb.dktcdn.net/100/275/458/files/nike-free-rn-black-white-1.jpg?v=1530152562282',
                'short_description' => '​Giày Free Flyknit là những mẫu giày chạy bộ cực tốt mà bạn không thể nào bỏ qua khi bạn đam mê chạy bộ running. Với đế Free chạy cực nhẹ cực êm, làm bạn hài lòng về độ dẻo dai linh hoạt từ bộ đế bám đường, ngoài ra còn đáp ứng được hai tiêu chí của bạn là thời trang và mát mẻ đến từ thân giày co giãn theo phom bàn chân cho mỗi bước chân chạy rất nhẹ và thoải mái mát mẻ vô cùng. ',
                'content' => 'https://vsneaker.com/nhung-mau-giay-free-flyknit-dep-vo-cung-dang-hot',
                'id_cate' => 3,
                'status' => 1,
            ],
            [
                'id' => 11,
                'title' => 'Giày Air Max nào đang Hot và chất nhất hiện nay',
                'image'=>'https://vsneakershop.weebly.com/uploads/6/3/3/8/63388329/nike-air-max-1-anniversary-retro-og-shape-white-university-red-shoes-online-sale_orig.jpg',
                'short_description' => '​Hiện nay giày Air Max đang cực kỳ trend và Hot được ưa chuộng, một là vì giá trị lịch sử của công nghệ đế AIR, hai là luôn được đông đảo các bạn yêu thích trong suốt thời gian qua càng thêm xu hướng chuộng đế AIR và phong cách Retro, Chunky sneaker hiện nay càng làm cho giày Air Max là một must-have item.',
                'content' => 'https://vsneakershop.weebly.com/blog/giay-air-max-nao-dang-hot-va-chat-nhat-hien-nay',
                'id_cate' => 3,
                'status' => 1,
            ],
            [
                'id' => 12,
                'title' => 'Tổng hợp những phiên bản của giày UltraBoost siêu chất Hot',
                'image'=>'https://vsneakershop.weebly.com/uploads/6/3/3/8/63388329/ultra-boost-core-black-2-0_orig.jpeg',
                'short_description' => 'Một siêu phẩm chạy bộ cực kỳ đỉnh và tốt – một niềm tự hào của Adidas, khả năng thích ứng cao trong quá trình chạy cũng như đáp ứng mong đợi về thời trang. Nếu như bạn là một Runner mà thiếu Ultraboost trong tủ giày thì quả thật là một điều đáng tiếc.',
                'content' => 'https://vsneakershop.weebly.com/blog/tong-hop-nhung-phien-ban-cua-giay-ultraboost-sieu-chat-hot',
                'id_cate' => 3,
                'status' => 1,
            ],


            [
                'id' => 13,
                'title' => 'Đánh giá tổng quan giày Adidas Alphabounce ',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2019/12/alphabounce-cover.jpg',
                'short_description' => 'Alphabounce là một mẫu giày adidas đang được cộng đồng cực ưa chuộng và là đứa con cưng cho các fan mê chạy bộ. Có điều gì mà làm Alphabounce EM này hot đến thế !? Mang thiết kế là giày chạy được thiết kế tối giản , với phần đế cao, thuôn dần về mũi, nhấn nhá bằng những đường rãnh đặc trưng trên hai bên thân giày và bộ đế Bounce.',
                'content' => 'https://bountysneakers.com/danh-gia-tong-quan-giay-adidas-alphabounce-doi-giay-dung-top-trong-dong-giay-running/',
                'id_cate' => 4,
                'status' => 1,
            ],
            [
                'id' => 14,
                'title' => 'Đánh giá Adidas SL20',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2020/07/sl-20-cover.jpg',
                'short_description' => 'Adidas SL20 ( viết tắt của SUPER LIGHT), mẫu giày chạy có lớp đế đệm ứng dụng 100% công nghệ Lightstrike giúp sản phẩm “siêu nhẹ”, thoải mái nhưng vẫn hoàn trả năng lượng tối đa. Không những vậy, SL20 còn được cấu tạo từ lớp lưới co giãn liền mạch, thiết kế torsion chuyển tiếp năng lượng linh hoạt và đế cao su Continental',
                'content' => 'https://bountysneakers.com/danh-gia-adidas-sl20-khong-chi-la-nhanh-ma-con-la-cam-giac-vuot-len-chinh-minh/',
                'id_cate' => 4,
                'status' => 1,
            ],
            [
                'id' => 15,
                'title' => 'Đánh giá Adidas AlphaBoost',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2020/02/alphaboost-cover.jpg',
                'short_description' => 'Adidas AlphaBoost là mẫu giày của sự kết hợp tinh tế giữa thân giày của AlphaBOUNCE và được gia cố thêm với công nghệ đế BOOST êm ái. Adidas AlphaBoost không chỉ nhẹ nhàng mà còn cực kỳ bền bỉ. Cùng Bounty Sneakers chiêm ngưỡng tổng thể adidas AlphaBoost.',
                'content' => 'https://bountysneakers.com/danh-gia-adidas-alphaboost-su-phat-trien-ve-than-hinh-giup-trai-ngiem-hoan-my-hon/',
                'id_cate' => 4,
                'status' => 1,
            ],
            [
                'id' => 16,
                'title' => 'So sánh adidas Ultraboost 20 vs Ultraboost 19',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2020/05/UB20-vs-UB19-Featured-Image-Framed.jpg',
                'short_description' => 'Có gì cải tiến trên adidas Ultraboost 20 vs Ultraboost 19? Kể từ khi mẫu giày adidas Ultraboost 20 được công bố, đây là câu hỏi rất nhiều bạn thắc mắc.',
                'content' => 'https://bountysneakers.com/so-sanh-adidas-ultraboost-20-vs-ultraboost-19-tai-dinh-nghia-ve-nhanh/',
                'id_cate' => 4,
                'status' => 1,
            ],
            [
                'id' => 17,
                'title' => 'Chi tiết về giày adidas Neo: Adidas Advantage Clean',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2019/10/1.jpg',
                'short_description' => 'Giày adidas NEO VS Advantage chính là phiên bản gốc của dòng giày sneaker adidas giá rẻ này. Từ thiết kế đơn giản nhưng thời trang và cá tính này, adidas NEO đã sáng tạo ra rất nhiều mẫu giày sneaker đáng đồng tiền bát gạo.',
                'content' => 'https://bountysneakers.com/chi-tiet-ve-giay-adidas-neo-adidas-advantage-clean-doi-giay-lifestyle-dang-mua-nhat-tam-gia-1-trieu/',
                'id_cate' => 4,
                'status' => 1,
            ],
            [
                'id' => 18,
                'title' => 'Đánh giá hiệu suất của adidas Ultraboost 20',
                'image'=>'https://bountysneakers.com/wp-content/uploads/2020/05/adidas-Ultra-Boost-20-Performance-Review.jpg',
                'short_description' => 'Điều tốt là Adidas Ultraboost 20 hoạt động rất giống với adidas Ultraboost 19. Ultraboost 19 cuối cùng đã biến Ultraboost thành một đôi giày chạy hoàn hảo. Và đột phá hơn nữa, adidas đã tiếp tục truyền thống: cải thiện đôi giày chạy tốt nhất tại thời điểm hiện tại tốt hơn. Có nhiều điểm khác biệt giữa Ultraboost 20 và Ultraboost 19 đã được Bounty Sneakers đào sâu trong bài viết trước',
                'content' => 'https://bountysneakers.com/danh-gia-hieu-suat-cua-adidas-ultraboost-20/',
                'id_cate' => 4,
                'status' => 1,
            ],
            ]
        );
    }
}
