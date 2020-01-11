<?php

use Illuminate\Database\Seeder;
use Cviebrock\EloquentSluggable\Sluggable;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $content = 'Tham dự có Hội nghị: Về phía Hội đồng Họ Dương Việt Nam có: Ông Dương Công Minh – Chủ tịch Hội đồng Họ Dương Việt Nam. Các ông Phó Chủ tịch: Dương Quốc Trọng, Dương Văn Bé Hai, Dương Công Đức, Dương Tấn Cường. Về phía Hội đồng Họ Dương các tỉnh, thành có: TP. Hồ Chí Minh, Tây Ninh, Bến Tre, Cà Mau, Bà Rịa – Vũng Tàu, Trà Vinh, Vĩnh Long, Bạc Liêu, Hậu Giang, Đồng Tháp, Sóc Trăng… Về phía chính quyền địa phương có các ông bà Phó Chủ tịch, Chánh văn phòng… Và đại diện một số Sở, Ban, Ngành trong tỉnh. Cùng đại diện Họ Dương các tỉnh: Trà Vinh, Vĩnh Long, Bạc Liêu, Hậu Giang, Đồng Tháp, Sóc Trăng… Cùng 200 đại biểu Họ Dương của Thành phố và các Huyện trong tỉnh Kiên Giang.
        Năm 937, hào trưởng đất Phong Châu là Kiều Công Tiễn sát hại Dương Đình Nghệ, trở thành vị Tĩnh Hải quân Tiết độ sứ cuối cùng trong thời kì Tự chủ. Nhưng Công Tiễn lại không có chỗ dựa chính trị vững chắc, hành động tranh giành quyền lực của Công Tiễn bị phản đối bởi nhiều thế lực địa phương và thậm chí nội bộ họ Kiều cũng chia rẽ trầm trọng. Bị cô lập, Công Tiễn vội vã cầu cứu nhà Nam Hán. Ngô Quyền nhanh chóng tập hợp lực lượng đánh tan quan quân Kiều Công Tiễn, giết chết Kiều Công Tiễn rồi chuẩn bị quyết chiến với quân Nam Hán.

        Thắng lợi của Ngô Quyền trên sông Bạch Đằng vào năm 938 đã đặt dấu chấm hết cho mọi âm mưu xâm lược Tĩnh Hải quân của nhà Nam Hán, đồng thời cũng kết thúc thời kì Bắc thuộc của nước Việt. Năm 939, Ngô Quyền xưng vương, đóng đô ở Cổ Loa, lập ra nhà Ngô. Ngô Vương qua đời ở tuổi 47, trị vì được 6 năm. Sau cái chết của ông, nhà Ngô suy yếu nhanh chóng và sụp đổ vào năm 965.

        Về trận chiến Bạch Đằng, năm 938 sau khi Kiều Công Tiễn giết Dương Đình Nghệ; Ngô Quyền được tin về việc phản nghịch của Công Tiễn và thấy việc Công Tiễn quy phục Nam Hán là nguy hại cho cuộc tự chủ mà họ Khúc và Dương Đình Nghệ đã cố gắng xây nền móng nên Ngô Quyền kéo binh từ Ái châu ra đánh Kiều Công Tiễn. Kiều Công Tiễn sai sứ sang đút lót để cầu viện với nhà Nam Hán. Sách An Nam chí lược viết rằng: Công Tiễn bị Ngô Quyền vây, sức yếu bị thua mới cầu cứu nhà Nam Hán. Vua Nam Hán là Lưu Cung nhân Giao Chỉ có loạn muốn chiếm lấy. Lưu Cung phong cho con mình là Vạn vương Lưu Hoằng Tháo làm Giao Vương, đem quân cứu Kiều Công Tiễn. Nhưng khi quân Nam Hán chưa sang, mùa thu năm 938, Ngô Quyền đã giết được Kiều Công Tiễn.

        Lưu Cung tự làm tướng, đóng ở Hải Môn để làm thanh viện. Lưu Cung hỏi kế ở Sùng Văn sứ là Tiêu Ích, Tiêu Ích nói: “Nay mưa dầm đã mấy tuần, đường biển thì xa xôi nguy hiểm, Ngô Quyền lại là người kiệt hiệt, không thể khinh suất được. Đại quân phải nên thận trọng chắc chắn, dùng nhiều người hướng đạo rồi sau mới nên tiến”. Vua Nam Hán không nghe, sai Hoằng Tháo đem chiến thuyền theo sông Bạch Đằng mà vào, muốn đánh Ngô Quyền; nhưng quân chưa đến, Ngô Quyền đã giết Kiều Công Tiễn rồi (Đại Việt sử ký toàn thư).

        Ngô Quyền nghe tin Hoằng Tháo sắp đến, bảo các tướng tá rằng: Hoằng Tháo là đứa trẻ khờ dại,đem quân từ xa đến, quân lính còn mỏi mệt, lại nghe Công Tiễn đã chết, không có người làm nội ứng, đã mất vía trước rồi. Quân ta lấy sức còn khỏe địch với quân mỏi mệt, tất phá được. Nhưng bọn chúng có lợi ở chiến thuyền, ta không phòng bị trước thì thế được thua chưa biết ra sao. Nếu sai người đem cọc lớn vạt nhọn đầu bịt sắt đóng ngầm ở trước cửa biển, thuyền của bọn chúng theo nước triều lên vào trong hàng cọc thì sau đó ta dễ bề chế ngự, không cho chiếc nào ra thoát (Đại Việt sử ký toàn thư)

        Ngô Quyền định kế rồi, bèn cho đóng cọc ở hai bên cửa biển. Khi nước triều lên, Ngô Quyền sai người đem thuyền nhẹ ra khiêu chiến, giả vờ thua chạy để dụ quân Nam Hán đuổi theo. Hoằng Tháo quả nhiên tiến quân vào. Khi binh thuyền đã vào trong vùng cắm cọc. Nước triều rút, cọc nhô lên, Ngô Quyền bèn tiến quân ra đánh, ai nấy đều liều chết chiến đấu. Quân Nam Hán không kịp sửa thuyền mà nước triều rút xuống rất gấp, thuyền đều mắc vào cọc mà lật úp, rối loạn tan vỡ, quân lính chết đuối quá nửa. Ngô Quyền thừa thắng đuổi đánh, bắt được Hoằng Tháo giết đi. Vua Nam Hán đồn trú ở cửa biển để cứu trợ nhưng không làm gì được; thương khóc, thu nhặt quân lính còn sót rút về (Đại Việt sử ký toàn thư).

        Sử gia Ngô Sĩ Liên nhận định trong sách Đại Việt Sử ký Toàn thư:

        “Lưu Cung tham đất đai của người, muốn mở rộng bờ cõi, đất đai chưa lấy được mà đã hại mất đứa con của mình và hại cả nhân dân, tức như Mạnh Tử nói: “Đem cái mình không yêu mà hại cái mình yêu” vậy chăng?”

        Ngô Thì Sĩ nhận định trong sách Việt sử tiêu án: “Lưu Nghiễm ngấp ngó Giao Châu, thừa lúc Đình Nghệ mới mất, cậy có quân ứng viện của Công Tiễn, chắc rằng có thể đánh một trận phá được Ngô Quyền, nhân thế lấy được nước Nam dễ như móc túi vậy. Nếu không có một trận đánh to để hỏa nhuệ khí của Lưu Nghiễm, thì cái tình hình ngoại thuộc lại dần dần thịnh lên, cho nên trận đánh ở Bạch Đằng là cái căn bản khôi phục quốc thống đó. Sau này Đinh, Lê, Lý, Trần còn phải nhờ dư liệt ấy. Võ công hiển hách của Ngô Quyền, tiếng thơm nghìn đời, đâu có phải chỉ khoe khoang một lúc bấy giờ mà thôi”.“Ngô Tiên Chúa giết được nghịch thần Công Tiễn, phá được giặc mạnh Hoằng Tháo”.';



        DB::table('city')->insert([
            ['name' => 'Hà Nội','slug'=>Str::slug('Hà Nội','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Huế','slug'=>Str::slug('Huế','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Hồ Chí Minh','slug'=>Str::slug('Hồ Chí Minh','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Đã Nắng','slug'=>Str::slug('Đã Nắng','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Khánh Hòa','slug'=>Str::slug('Khánh Hòa','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Lào Cai','slug'=>Str::slug('Lào Cai','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Quảng Ninh','slug'=>Str::slug('Quảng Ninh','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Vĩnh Phúc','slug'=>Str::slug('Vĩnh Phúc','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Thái Nguyên','slug'=>Str::slug( 'Thái Nguyên','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Phú Thọ','slug'=>Str::slug('Phú Thọ','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'An Giang','slug'=>Str::slug('An Giang','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Cà Mau','slug'=>Str::slug('Cà Mau','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name' => 'Thanh Hóa','slug'=>Str::slug('Thanh Hóa','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
        ]);
        DB::table('tags')->insert([
            ['name' => 'Giới thiệu','slug'=>Str::slug('Giới thiệu','-'),'status_home'=>'0','status_menu'=>'1','type'=>'0'],
            ['name' => 'Lịch sử dòng họ','slug'=>Str::slug('Lịch sử dòng họ','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Thông tin sự kiện','slug'=>Str::slug('Thông tin sự kiện','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Khuyến học khuyến tài','slug'=>Str::slug('Khuyến học khuyến tài','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Người tốt việc tốt','slug'=>Str::slug('Người tốt việc tốt','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Cộng đồng họ lưu đóng góp','slug'=>Str::slug('Cộng đồng họ lưu đóng góp','-'),'status_home'=>'1','status_menu'=>'1','type'=>'0'],
            ['name' => 'Thư viện','slug'=>Str::slug('Thư viện','-'),'status_home'=>'1','status_menu'=>'1','type'=>'1'],
            
        ]);
        DB::table('indexing')->insert([
            ['id_tags'=>'1','name'=>'Giới thiệu họ Lưu','slug'=>Str::slug('Giới thiệu họ Lưu','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'2','name'=>'Lịch sử họ Lưu','slug'=>Str::slug('Lịch sử họ Lưu','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'3','name'=>'NGÀY HỘI VĂN HÓA MÙA XUÂN','slug'=>Str::slug('NGÀY HỘI VĂN HÓA MÙA XUÂN','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'4','name'=>'Khuyến học khuyến tài','slug'=>Str::slug('Khuyến học khuyến tài','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'5','name'=>'Thanh niên tiêu biểu','slug'=>Str::slug('Thanh niên tiêu biểu','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'6','name'=>'Cơ hội doanh nghiệp','slug'=>Str::slug('Cơ hội doanh nghiệp','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['id_tags'=>'7','name'=>'Văn hóa nghệ thuật','slug'=>Str::slug('Văn hóa nghệ thuật','-'),'created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
        ]);
        DB::table('users')->insert([
            ['name'=>'admin','email'=>'admin@gmail.com','password' => Hash::make('admin'),'role'=>'1','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name'=>'admin2','email'=>'admin2@gmail.com','password' => Hash::make('admin'),'role'=>'0','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name'=>'admin3','email'=>'admin3@gmail.com','password' => Hash::make('admin'),'role'=>'0','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name'=>'admin4','email'=>'admin4@gmail.com','password' => Hash::make('admin'),'role'=>'0','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
            ['name'=>'admin5','email'=>'admin5@gmail.com','password' => Hash::make('admin'),'role'=>'0','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        for ($i = 0; $i < 5; $i++) {
            DB::table('topic')->insert([
                ['id_index'=>'1','id_city'=>'1','creator'=>'1','title'=>'Lễ thành lập Hội đồng Họ Dương tỉnh Kiên Giang','summary'=>'Ngày 06/01/2019 tại Hội trường khách sạn Sài Gòn (TP. Rạch Giá, tỉnh Kiên Giang) Hội đồng Họ Dương Liên tỉnh An Giang – Kiên Giang tổ chức Lễ thành lập Hội đồng Họ Dương tỉnh Kiên Giang;','images'=>'anh1.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Lễ thành lập Hội đồng Họ Dương tỉnh Kiên Giang','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
                ['id_index'=>'2','id_city'=>'2','creator'=>'3','title'=>'Tưởng nhớ người con rể Họ Dương là Ngô Quyền đại thắng trận Bạch Đằng','summary'=>'Lễ vật gồm một con lợn nặng 50 kg, 30 đấu gạo nếp để thổi xôi, trầu cau, hương hoa… ','images'=>'anh2.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Tưởng nhớ người con rể Họ Dương là Ngô Quyền đại thắng trận Bạch Đằng','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
                ['id_index'=>'3','id_city'=>'3','creator'=>'3','title'=>'Công văn về việc tham dự Ngày hội văn hóa mùa xuân Họ Dương Việt Nam năm 2020','summary'=>'Công văn','images'=>'anh3.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Công văn về việc tham dự Ngày hội văn hóa mùa xuân Họ Dương Việt Nam năm 2020','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
                ['id_index'=>'4','id_city'=>'4','creator'=>'4','title'=>'Họ Dương Thái Nguyên được Hội Khuyến học Việt Nam tặng Bằng khen','summary'=>'Sáng ngày 20/12/2019, Hội Khuyến học tỉnh Thái Nguyên đã tổ chức Hội nghị Tổng kết phong trào Khuyến học – Khuyến tài, Xây dựng xã Hội học tập năm 2019 và phương hướng nhiệm vụ năm 2020.','images'=>'anh4.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Họ Dương Thái Nguyên được Hội Khuyến học Việt Nam tặng Bằng khen','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
                ['id_index'=>'6','id_city'=>'5','creator'=>'5','title'=>'Hội thảo phát triển và nâng cao chất lượng cây giống Mắc ca','summary'=>'Trong các ngày 2,3,4 và 5 tháng 3 năm 2019, Hiệp hội mắc ca Việt Nam đã tổ chức đoàn nghiên cứu, khảo sát thực tế tại các cơ sở sản xuất cây giống mắc ca, các vườn trồng mắc ca tại các tỉnh Lâm Đồng, Đắc Lắc và Gia Lai','images'=>'anh5.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Hội thảo phát triển và nâng cao chất lượng cây giống Mắc ca','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],
                ['id_index'=>'5','id_city'=>'1','creator'=>'1','title'=>'Cô giáo Dương Thị Pàng và hành trình gieo chữ trên vùng cao','summary'=>'Cô giáo người dân tộc Mông Dương Thị Pàng đã và đang thực hiên được ước mơ, ngày đêm miệt mài đem chữ đến cho các em học sinh ở vùng cao xã Cổ Linh, huyện Pác Năm, tỉnh Bắc Kạn.','images'=>'anh6.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Cô giáo Dương Thị Pàng và hành trình gieo chữ trên vùng cao','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],

                ['id_index'=>'7','id_city'=>'1','creator'=>'1','title'=>'Dương Huy Thiện: Một người, hai nghề đều thành danh','summary'=>'Trong giới nghiên cứu Văn hóa vùng đất tổ Vua Hùng khi nhắc đến những cây đại thụ về nghiên cứu nếu bỏ qua người thầy giáo – nhà nghiên cứu văn hóa mẫu mực Dương Huy Thiện thì thật là thiếu sót.','images'=>'anh7.jpg','keyword'=>'Họ Dương','content'=>$content,'slug'=>Str::slug('Dương Huy Thiện: Một người, hai nghề đều thành danh','-').$i,'views'=>'0','status'=>'1','censor'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")],

            ]);
        }
        DB::table('info')->insert([
            ['name'=>'Vũ Minh Hải','address'=>'Tòa CT2 khu đô thị Contrexim - Thái Hà, 43 Phạm Văn Đồng - Hà Nội','Phone'=>'0919822986','email'=>'haivm@talentwins.co','fax'=>'68688383','logo'=>'logo-holuu.jpg','content'=>'Chịu trách nhiệm: tất nhiên là anh Hải','slug'=>'ho-luu-info-authentic','facebook'=>'https://www.facebook.com/sieuanhhungMarvel/','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        DB::table('link')->insert([
            ['link'=>'https://www.facebook.com/sieuanhhungMarvel/','title'=>'Hội hâm mộ Marvel','slug'=>'ham-mo-marvel-auth','status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        for ($i = 1; $i < 7; $i++) {
            DB::table('images')->insert([
            ['images'=>'anh'.$i.'.jpg','title'=>'Anh demo','slug'=>'anh'.$i.$i,'status'=>'1','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        }
        DB::table('banner_slider')->insert([
            ['images'=>'banner.jpg','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        DB::table('banner')->insert([
            ['images'=>'banner-mobile.jpg','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]
        ]);
        
    }
}
