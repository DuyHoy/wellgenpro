<!DOCTYPE html>
<html lang="en">
  {{--head--}}
  @include('frontend.static.head')
  <link rel="stylesheet" href={{asset('/template/frontend/pc/css/newsdetail_style.css')}}>
 {{--end head--}}
   <body>
      {{-- <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-70478340-1', 'auto');
         ga('send', 'pageview');
         
      </script>  --}}
       <!-- NAVBAR-->
       @include('frontend.static.menu')
       <!-- END  NAVBAR -->
      <div class="content-wrapper">
         <div class="container">
            <div class="row">
               <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                  <div class="content-home">
                     <!-- <a href="http://wellgen.vn/van-tay-hoc-2.html"><img src="http://wellgen.vn/template/frontend/pc/image/3.jpg"></a> -->
                     <p><img src="/assets/image/media/400x400/3-jpg_1415587323.jpg" alt="" /></p>
                     <div class="titlehomeclass">
                        <a href="http://wellgen.vn/van-tay-hoc-2.html">
                        <span class="span1class">Vân tay</span>
                        <span class="span2class">HỌC</span>
                        </a>
                     </div>
                     <ul>
                        <li>
                           <h3><a href="http://wellgen.vn/bao-tro-khoa-hoc-1.html" title="BẢO TRỢ KHOA HỌC" >BẢO TRỢ KHOA HỌC<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/bao-tro-khoa-hoc-1.html" title="BẢO TRỢ KHOA HỌC"><img src="http://wellgen.vn/assets/image/news/400x400/giay-chung-nhan-jpg_1559109078.jpg" alt="BẢO TRỢ KHOA HỌC" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Sinh trắc vân tay của WellGen VN được Trung tâm ứng dụng tâm lý giáo dục bảo trợ khoa học</p>
                              </div>
                              <a class="seemoreclass" title="BẢO TRỢ KHOA HỌC" href="http://wellgen.vn/bao-tro-khoa-hoc-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/sinh-trac-van-tay-ung-dung-chuyen-sau-cho-ba-me-thong-thai-1.html" title="Sinh trac van tay ung dung chuyen sau cho ba me thong thai" >Sinh trac van tay ung dung chuyen sau cho ba me thong thai<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/sinh-trac-van-tay-ung-dung-chuyen-sau-cho-ba-me-thong-thai-1.html" title="Sinh trac van tay ung dung chuyen sau cho ba me thong thai"><img src="http://wellgen.vn/assets/image/news/400x400/genius-jpg_1547009564.jpg" alt="Sinh trac van tay ung dung chuyen sau cho ba me thong thai" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Khoa hoc tuyet voi</p>
                              </div>
                              <a class="seemoreclass" title="Sinh trac van tay ung dung chuyen sau cho ba me thong thai" href="http://wellgen.vn/sinh-trac-van-tay-ung-dung-chuyen-sau-cho-ba-me-thong-thai-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/eq-chi-so-quan-trong-khong-kem-gi-iq-1.html" title="EQ - chỉ số quan trọng không kém gì IQ" >EQ - chỉ số quan trọng không kém gì IQ<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/eq-chi-so-quan-trong-khong-kem-gi-iq-1.html" title="EQ - chỉ số quan trọng không kém gì IQ"><img src="http://wellgen.vn/assets/image/news/400x400/20175298-gesch-ftsmann-verwendung-eq-regenschirm-von-w-tenden-regen-sch-tzen-jpg_1538714647.jpg" alt="EQ - chỉ số quan trọng không kém gì IQ" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>EQ - Emotional Quotient</p>
                              </div>
                              <a class="seemoreclass" title="EQ - chỉ số quan trọng không kém gì IQ" href="http://wellgen.vn/eq-chi-so-quan-trong-khong-kem-gi-iq-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/dao-tao-tu-van-vien-chuyen-nghiep-1.html" title="ĐÀO TẠO TƯ VẤN VIÊN CHUYÊN NGHIỆP" >ĐÀO TẠO TƯ VẤN VIÊN CHUYÊN NGHIỆP<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/dao-tao-tu-van-vien-chuyen-nghiep-1.html" title="ĐÀO TẠO TƯ VẤN VIÊN CHUYÊN NGHIỆP"><img src="http://wellgen.vn/assets/image/news/400x400/what-are-the-top-challenges-faced-by-consultants-jpg_1533004233.jpg" alt="ĐÀO TẠO TƯ VẤN VIÊN CHUYÊN NGHIỆP" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Chương trình đào tạo dành riêng cho tư vấn viên ngành STVT</p>
                              </div>
                              <a class="seemoreclass" title="ĐÀO TẠO TƯ VẤN VIÊN CHUYÊN NGHIỆP" href="http://wellgen.vn/dao-tao-tu-van-vien-chuyen-nghiep-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/buoi-chia-se-nhung-gia-tri-trong-nganh-sinh-trac-dau-van-tay-ngay-12-12-2016-1.html" title="BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016" >BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/buoi-chia-se-nhung-gia-tri-trong-nganh-sinh-trac-dau-van-tay-ngay-12-12-2016-1.html" title="BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016"><img src="http://wellgen.vn/assets/image/news/400x400/sinh-trac-dau-van-tay-png_1459133310.jpg" alt="BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016</p>
                              </div>
                              <a class="seemoreclass" title="BUỔI CHIA SẺ NHỮNG GIÁ TRỊ TRONG NGÀNH "SINH TRẮC DẤU VÂN TAY" NGÀY 12/12/2016" href="http://wellgen.vn/buoi-chia-se-nhung-gia-tri-trong-nganh-sinh-trac-dau-van-tay-ngay-12-12-2016-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/nhung-nhan-thuc-sai-ve-nao-bo-1.html" title="Những nhận thức sai về não bộ" >Những nhận thức sai về não bộ<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/nhung-nhan-thuc-sai-ve-nao-bo-1.html" title="Những nhận thức sai về não bộ"><img src="http://wellgen.vn/assets/image/news/400x400/human-brain-2061-1404880190-jpg_1445247137.jpg" alt="Những nhận thức sai về não bộ" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Không ít người tin rằng người có kích thước não càng lớn thì càng thông minh, tuy nhiên theo các nhà nghiên cứu, đây là một trong những nhận thức sai phổ biến nhất của con người về bộ não.
                                    Để chứng minh, các nhà khoa học lấy ví dụ một số trường hợp liên quan đến một số loài động vật khác nhau. Ví dụ, côn trùng có kích thước não bộ nhỏ nhưng được chứng minh là rất thông minh, thậm chí là hơn cả những loài động vật lớn. Não của cá voi trung bình nặng khoảng 9 kg, tuy nhiên không thể so sánh trí thông minh của chúng với một loài khác có não bộ chỉ nặng 1 kg.
                                 </p>
                              </div>
                              <a class="seemoreclass" title="Những nhận thức sai về não bộ" href="http://wellgen.vn/nhung-nhan-thuc-sai-ve-nao-bo-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/nao-cua-thien-tai-va-ke-dan-don-giong-nhau-95-1.html" title="NÃO CỦA THIÊN TÀI VÀ KẺ ĐẦN ĐỘN GIỐNG NHAU 95%" >NÃO CỦA THIÊN TÀI VÀ KẺ ĐẦN ĐỘN GIỐNG NHAU 95%<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/nao-cua-thien-tai-va-ke-dan-don-giong-nhau-95-1.html" title="NÃO CỦA THIÊN TÀI VÀ KẺ ĐẦN ĐỘN GIỐNG NHAU 95%"><img src="http://wellgen.vn/assets/image/news/400x400/brains-2-jpg_1445246752.jpg" alt="NÃO CỦA THIÊN TÀI VÀ KẺ ĐẦN ĐỘN GIỐNG NHAU 95%" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Mặc dù từ tính cách, sự sáng tạo và khả năng trí tuệ của các thiên tài và kẻ đần độn khác nhau như hai thái cực nhưng thực ra não của họ khác nhau chưa đến 5%.</p>
                              </div>
                              <a class="seemoreclass" title="NÃO CỦA THIÊN TÀI VÀ KẺ ĐẦN ĐỘN GIỐNG NHAU 95%" href="http://wellgen.vn/nao-cua-thien-tai-va-ke-dan-don-giong-nhau-95-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/cha-me-co-thuc-su-hieu-con-cai-1.html" title="Cha Mẹ Có Thực Sự Hiểu Con Cái?" >Cha Mẹ Có Thực Sự Hiểu Con Cái?<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/cha-me-co-thuc-su-hieu-con-cai-1.html" title="Cha Mẹ Có Thực Sự Hiểu Con Cái?"><img src="http://wellgen.vn/assets/image/news/400x400/bv3-compressed-jpg-1411964349-jpg_1445246502.jpg" alt="Cha Mẹ Có Thực Sự Hiểu Con Cái?" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Với những kiến thức về Sinh Trắc Học Dấu Vân Tay cha mẹ sẽ thấu hiểu con mình hơn, định hướng con phát triển tốt nhất.</p>
                              </div>
                              <a class="seemoreclass" title="Cha Mẹ Có Thực Sự Hiểu Con Cái?" href="http://wellgen.vn/cha-me-co-thuc-su-hieu-con-cai-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/sinh-trac-hoc-dau-van-tay-kham-pha-tai-nang-ban-than-–-phat-hien-tai-nang-bam-sinh-1.html" title="[Sinh Trắc Học Dấu Vân Tay] - Khám Phá Tài Năng Bản Thân – Phát hiện tài năng bẩm sinh" >[Sinh Trắc Học Dấu Vân Tay] - Khám Phá Tài Năng Bản Thân – Phát hiện tài năng bẩm sinh<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/sinh-trac-hoc-dau-van-tay-kham-pha-tai-nang-ban-than-–-phat-hien-tai-nang-bam-sinh-1.html" title="[Sinh Trắc Học Dấu Vân Tay] - Khám Phá Tài Năng Bản Thân – Phát hiện tài năng bẩm sinh"><img src="http://wellgen.vn/assets/image/news/400x400/sinh-trac-dau-van-tay-jpg_1445245587.jpg" alt="[Sinh Trắc Học Dấu Vân Tay] - Khám Phá Tài Năng Bản Thân – Phát hiện tài năng bẩm sinh" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Việc khó nhất để đưa bạn đến thành công trong tương lại chính là bạn phải hiểu bản thân mình ở hiện tại. Bạn cần phải hiểu mình đang sống ở hoàn cảnh nào, thế mạnh bản thân mình là gì, mình nên làm gì để đạt được thành công trong tương lai, đừng sai lầm mà dành toàn bộ thời gian của mình vào những công việc không đem lại hạnh phúc cho bạn. Thay vào đó bạn nên dùng một phần thời gian của mình để khám phá chính bản thân mình, phát huy tối đa điểm mạnh và hạn chế điểm yếu trong con người bạn, có vậy tương lại bạn mới có thể thành công được.</p>
                              </div>
                              <a class="seemoreclass" title="[Sinh Trắc Học Dấu Vân Tay] - Khám Phá Tài Năng Bản Thân – Phát hiện tài năng bẩm sinh" href="http://wellgen.vn/sinh-trac-hoc-dau-van-tay-kham-pha-tai-nang-ban-than-–-phat-hien-tai-nang-bam-sinh-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                        <li>
                           <h3><a href="http://wellgen.vn/nao-cua-tre-3-thang-tuoi-cung-phuc-tap-nhu-nao-nguoi-lon-1.html" title="Não của trẻ 3 tháng tuổi cũng phức tạp như não người lớn?" >Não của trẻ 3 tháng tuổi cũng phức tạp như não người lớn?<span class="glyphicon glyphicon-chevron-right"></span></a></h3>
                           <div class="imageclass"><a href="http://wellgen.vn/nao-cua-tre-3-thang-tuoi-cung-phuc-tap-nhu-nao-nguoi-lon-1.html" title="Não của trẻ 3 tháng tuổi cũng phức tạp như não người lớn?"><img src="http://wellgen.vn/assets/image/news/400x400/baby-brain-jpg_1445245190.jpg" alt="Não của trẻ 3 tháng tuổi cũng phức tạp như não người lớn?" /></a></div>
                           <div class="block">
                              <div class="block-detail">
                                 <p>Tuy chưa thể nói được, nhưng trẻ sơ sinh ba tháng tuổi đã có não bộ được tổ chức để phát triển ngôn ngữ. Nhờ kỹ thuật chụp ảnh cộng hưởng từ, các nhà nghiên cứu Pháp đã phát hiện ở não bộ trẻ sơ sinh những cơ chế phức tạp tương tự như ở người lớn.</p>
                              </div>
                              <a class="seemoreclass" title="Não của trẻ 3 tháng tuổi cũng phức tạp như não người lớn?" href="http://wellgen.vn/nao-cua-tre-3-thang-tuoi-cung-phuc-tap-nhu-nao-nguoi-lon-1.html">Xem thêm<i class="fa fa-more"></i></a>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <div class="rightcontentclass hidden-xs hidden-sm">
                     <div class="testimonial">
                        <div class="title-bottom">
                           <h3>Cảm nhận</h3>
                           <img src="http://wellgen.vn/template/frontend/pc/image/wellgen.png" alt="wellgen">
                        </div>
                        <ul>
                           <li>
                              <div class="imageclass"><img src="http://wellgen.vn/assets/image/news/400x400/5-png_1443087070.jpg" alt="Cảm nhận chị PHẠM BẢO HẠNH" /></div>
                              <div class="div-right">
                                 <h3><a href="http://wellgen.vn/cam-nhan-khach-hang-5.html">Cảm nhận chị PHẠM BẢO HẠNH</a></h3>
                                 <p>Con trai vừa có kết quả sinh trắc dấu vân tay, nghe Thầy Binh Nguyen tư vấn mà thấy trên cả tuyệt vời. Qua kết quả, mình tự xem lại bản thân...sẽ có phương pháp giáo dục, định hướng tương lai phù hợp với năng lực của con trai. Lâu nay cứ tưởng chúng ta hiểu con nhiều lắm, nhưng thực tế thì không như vậy...Cám ơn Thầy Bình và trung tâm thật nhiều</p>
                              </div>
                           </li>
                           <li>
                              <div class="imageclass"><img src="http://wellgen.vn/assets/image/news/400x400/3-png_1443086766.jpg" alt="Cảm Nhận chị ĐỖ THỊ HUYỀN LAN" /></div>
                              <div class="div-right">
                                 <h3><a href="http://wellgen.vn/cam-nhan-khach-hang-5.html">Cảm Nhận chị ĐỖ THỊ HUYỀN LAN</a></h3>
                                 <p>Tôi đánh giá cao công nghệ sinh trắc vân tay. Sau khi phân tích bài báo cáo phân tích cho bản thân, con trai và nhân viên, tôi càng hiểu rõ hơn về sự khác biệt ở mỗi các nhân. Đặc biệt, thông qua bài báo cáo giúp tôi biết được phong cách giao tiếp phù hợp với con mình hơn. Tôi rất hài lòng về dịch vụ này. Tôi đánh giá cao độ chính xác của bài báo cáo phân tích là 95%</p>
                              </div>
                           </li>
                           <li>
                              <div class="imageclass"><img src="http://wellgen.vn/assets/image/news/400x400/4-png_1443086909.jpg" alt="Cảm nhận của Thầy Duy Hải" /></div>
                              <div class="div-right">
                                 <h3><a href="http://wellgen.vn/cam-nhan-khach-hang-5.html">Cảm nhận của Thầy Duy Hải</a></h3>
                                 <p>Hôm nay trả bài phân tích vân tay cho thầy Duy Hải .Thầy rất giản dị và hòa đồng. Nhưng những kiến thức của thầy thất kinh khủng . Thầy là chuyên gia kinh tế về chiến lược cho các tập đoàn , công ty lớn trong và ngoài nước. Được nói chuyên anh tôi đã ngộ ra rất nhiều cái rất hay ho. Bản thân anh Hải khi lần đầu tiên anh trải nghiệm bài phân tích vân tay . Anh quá bất ngờ và thốt lên quá tuyệt vời Thanh ơi. Bài phân tích này có thể giải quyết được rất nhiều vấn đề cho các công ty, tập đoàn về khâu tuyển chọn nhân viên , chọn được những nhân viên đắc lực phu hợp với cty. Với vợ chồng thi bài phân tích có thể giúp mọi thành viên trong gia đình hiểu nhau hơn và họ sẽ hp hơn. Với con cái sẽ biết được năng lực bẩm sinh của con mình và hướng cho con mình phát triển theo đúng năng lực của các cháu. Anh đã cảm ơn những người đã mang sinh trắc dấu vân tay về Việt Nam.</p>
                              </div>
                           </li>
                           <li>
                              <div class="imageclass"><img src="http://wellgen.vn/assets/image/news/400x400/ntpsoft-1ab1aba97629c45db7003fddbed16d6e-jpg_1412085806.jpg" alt="Luật sư Nguyễn Thị Hồng Nga" /></div>
                              <div class="div-right">
                                 <h3><a href="http://wellgen.vn/cam-nhan-khach-hang-5.html">Luật sư Nguyễn Thị Hồng Nga</a></h3>
                                 <p>Mục đích của tôi khi sử dụng dịch vụ Sinh trắc dấu vân tay của Wellgen là để biết được khả năng tiềm ẩn của con và có những phương pháp giáo dục khi con còn nhỏ. Các phân tích khoa học của bài cáo cáo đã làm tôi rất hài lòng.  Tôi thấy đây là dịch vụ tốt và nhân viên tư vấn rất nhiệt tình. Xin chân thành cảm ơn Wellgen!</p>
                              </div>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="classvideo hidden-xs hidden-sm" style="margin-top:10px;padding-bottom:10px">
                     <div class="list-video">
                        <h4>Video</h4>
                     </div>
                     <div id="myCarouselVideo" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                           <div class="item active">
                              <p><iframe src="http://www.youtube.com/embed/ebCUctBQiyA" width="425" height="350"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/nMtNpSPDuog" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/utS5Cvo3ILI" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/lt8CPvZ8y7E" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/FSJ6FEtIKfA" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/u7w1zfmHeE4" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/YoZ3VOfC5jQ" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/GRP_aK934y4" width="420" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/fUm737CYYds" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                           <div class="item">
                              <p><iframe src="https://www.youtube.com/embed/otsWFBYUZ10" width="560" height="315" frameborder="0" allowfullscreen="allowfullscreen"></iframe></p>
                           </div>
                        </div>
                        <a class="left carousel-control" href="#myCarouselVideo" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarouselVideo" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 pageclass">
                  <div class="newsdetail">
                     <!-- <div class="breadcrumbclass" ><a class="homeclass" href="http://wellgen.vn" > Trang chủ</a><b> > </b> <a class="" href="http://wellgen.vn/khoa-hoc-2.html" > Khóa học</a><b> ></b> <span> Đào tạo vân tay học ngày 12/06/2019</span></div> -->
                     <h2>Khóa học</h2>
                     <div class="newsdetail_01">
                        <h1>Đào tạo vân tay học ngày 12/06/2019 </h1>
                        <div class="news-detail">
                           <p>Ngày 10/06/2019 vừa qua, WellGen Việt Nam đã tổ chức khoá học " Vân Tay Học Chuyên Sâu" dành cho đối tác tại công ty.</p>
                           <p>Dưới đây là một số hình ảnh từ buổi đào tạo:</p>
                           <p style="text-align: center;"><img src="/assets/image/media/400x400/8398978ccd24287a7135-jpg_1560333165.jpg" alt="" /></p>
                           <p style="text-align: center;"><img src="/assets/image/media/400x400/0f8c35b6ef060a585317-jpg_1560333223.jpg" alt="" /></p>
                           <p style="text-align: center;"><img src="/assets/image/media/400x400/5219cf201590f0cea981-jpg_1560333336.jpg" alt="" /></p>
                           <p style="text-align: center;"><img src="/assets/image/media/400x400/1630ed3cb79452ca0b85-jpg_1560333367.jpg" alt="" /></p>
                           <p>Hãy cùng mong đợi những khoá học tiếp theo của WellGen Việt Nam nhé!</p>
                           <p>Nhanh tay đăng ký để được thông báo khoá học sớm nào:</p>
                           <h3>CÔNG TY TNHH WELLGEN VIỆT NAM</h3>
                           <p>F1.S14 Tòa Nhà Carillon, Số 1 Trần Văn Danh, Phường 13, Quận Tân Bình, Tp HCM.</p>
                           <p>Hotline: 0938.381.885 - 0868.054.836</p>
                           <p> </p>
                        </div>
                        <div class="fb-gg">
                           <div class="fb-like"  data-href="http://wellgen.vn/dao-tao-van-tay-hoc-ngay-12-06-2019-1.html" date-send="false"  data-layout="button" data-action="like" data-show-faces="false" ></div>
                           <a class="sharefaceclass"  href="javascript:fbShare
                              ('http://wellgen.vn/dao-tao-van-tay-hoc-ngay-12-06-2019-1.html',  
                              'Đào tạo vân tay học ngày 12/06/2019',  
                              'Đào tạo vân tay học ngày 12/06/2019',  
                              'http://wellgen.vn/assets/image/news/400x400/1630ed3cb79452ca0b85-jpg_1560333451.jpg', 520, 350)"  
                              >Share</a>
                           <div class="googleplusclass">
                              <g:plusone></g:plusone>
                           </div>
                        </div>
                        <div class="related-news">
                           <ul> 
                           </ul>
                        </div>
                     </div>
                     <div class="related-news-title">Bài viết liên quan</div>
                     <script>(function(d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) return;
                        js = d.createElement(s); js.id = id;
                        js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1&appId=496711550400460";
                        fjs.parentNode.insertBefore(js, fjs);
                        }(document, 'script', 'facebook-jssdk'));
                     </script> 
                     <script>
                        function fbShare(url, title, descr, image, winWidth, winHeight) {
                        	var winTop = (screen.height / 2) - (winHeight / 2);
                        	var winLeft = (screen.width / 2) - (winWidth / 2);
                        	window.open('http://www.facebook.com/sharer.php?s=100&p[title]=' + title + '&p[summary]=' + descr + '&p[url]=' + url + '&p[images][0]=' + image, 'sharer', 'top=' + winTop + ',left=' + winLeft + ',toolbar=0,status=0,width=' + winWidth + ',height=' + winHeight);
                        }
                     </script>
                     <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                     <ul class="related-newsnews">
                        <li>
                           <div class="imageclass"><a href="http://wellgen.vn/bao-tro-khoa-hoc-1.html" title="BẢO TRỢ KHOA HỌC"><img src="http://wellgen.vn/assets/image/news/400x400/giay-chung-nhan-jpg_1559109078.jpg" alt="BẢO TRỢ KHOA HỌC" /></a></div>
                           <div class="div-right">
                              <a href="http://wellgen.vn/bao-tro-khoa-hoc-1.html" title="BẢO TRỢ KHOA HỌC" ><span class="glyphicon glyphicon-chevron-right"></span>  BẢO TRỢ KHOA HỌC</a>
                              <p>Sinh trắc vân tay của WellGen VN được Trung tâm ứng dụng tâm lý giáo dục bảo trợ khoa học</p>
                           </div>
                        </li>
                        <li>
                           <div class="imageclass"><a href="http://wellgen.vn/buoi-dao-tao-1.html" title="BUỔI ĐÀO TẠO"><img src="http://wellgen.vn/assets/image/news/400x400/wellgen-png_1463197310.jpg" alt="BUỔI ĐÀO TẠO" /></a></div>
                           <div class="div-right">
                              <a href="http://wellgen.vn/buoi-dao-tao-1.html" title="BUỔI ĐÀO TẠO" ><span class="glyphicon glyphicon-chevron-right"></span>  BUỔI ĐÀO TẠO</a>
                              <p>BUỔI ĐÀO TẠO "SINH TRẮC DẤU VÂN TAY LEVEL 1"  CHO CÁC ĐỐI TÁC NGÀY 06.07.2018</p>
                           </div>
                        </li>
                        <li>
                           <div class="imageclass"><a href="http://wellgen.vn/khoa-hoc-hieu-minh-hieu-con-ngay-10-9-2017-1.html" title="Khóa học Hiểu Mình Hiểu Con ngày 10/9/2017"><img src="http://wellgen.vn/template/frontend/pc/image/image_default.png" alt="Khóa học Hiểu Mình Hiểu Con ngày 10/9/2017" /></a></div>
                           <div class="div-right">
                              <a href="http://wellgen.vn/khoa-hoc-hieu-minh-hieu-con-ngay-10-9-2017-1.html" title="Khóa học Hiểu Mình Hiểu Con ngày 10/9/2017" ><span class="glyphicon glyphicon-chevron-right"></span>  Khóa học Hiểu Mình Hiểu Con ngày 10/9/2017</a>
                              <p>Chương trình Hiểu Mình Hiểu Con ngày 10/9/2017 đã giúp cho gần 50 phụ huynh hiểu rõ hơn về phương pháp giáo dục sớm, các vấn đề trong giáo dục trẻ và đề ra phương pháp định hướng giáo dục. Chương trình được kết hợp với nội dung Siêu Trí nhớ cực kỳ thú vị.</p>
                           </div>
                        </li>
                        <li>
                           <div class="imageclass"><a href="http://wellgen.vn/kh-sieu-tri-nho-hoc-ngoai-ngu-that-de-dang-1.html" title="KH SIÊU TRÍ NHỚ - HỌC NGOẠI NGỮ THẬT DỄ DÀNG"><img src="http://wellgen.vn/template/frontend/pc/image/image_default.png" alt="KH SIÊU TRÍ NHỚ - HỌC NGOẠI NGỮ THẬT DỄ DÀNG" /></a></div>
                           <div class="div-right">
                              <a href="http://wellgen.vn/kh-sieu-tri-nho-hoc-ngoai-ngu-that-de-dang-1.html" title="KH SIÊU TRÍ NHỚ - HỌC NGOẠI NGỮ THẬT DỄ DÀNG" ><span class="glyphicon glyphicon-chevron-right"></span>  KH SIÊU TRÍ NHỚ - HỌC NGOẠI NGỮ THẬT DỄ DÀNG</a>
                              <p>Ngày 14,15/10/2017, Wellgen VN đồng hành cùng hơn 30 học viên trong chương trình đào tạo đặc biệt SIÊU TRÍ NHỚ - ỨNG DỤNG TRONG VIỆC HỌC NGỌAI NGỮ.</p>
                           </div>
                        </li>
                        <li>
                           <div class="imageclass"><a href="http://wellgen.vn/khoa-hoc-hieu-minh-hieu-con-17-1-2018-1.html" title="Khóa học Hiểu Mình Hiểu Con 17/1/2018"><img src="http://wellgen.vn/template/frontend/pc/image/image_default.png" alt="Khóa học Hiểu Mình Hiểu Con 17/1/2018" /></a></div>
                           <div class="div-right">
                              <a href="http://wellgen.vn/khoa-hoc-hieu-minh-hieu-con-17-1-2018-1.html" title="Khóa học Hiểu Mình Hiểu Con 17/1/2018" ><span class="glyphicon glyphicon-chevron-right"></span>  Khóa học Hiểu Mình Hiểu Con 17/1/2018</a>
                              <p>Chương trình đã đón nhận sự hưởng ứng nhiệt tình từ phía người tham dự. Qua chương trình, các phụ huynh đã lần lượt được làm rõ nhiều vấn đề xoay quanh việc giáo dục con cái trong từng giai đoạn, bản thân cùng đồng hành cùng con phát triển, thay đổi bản thân và thay đổi phương pháp giáo dục,...</p>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
       <!-- FOOTER -->
    @include('frontend.static.footer')
    <!-- END-FOOTER -->
   </body>
   <script type="text/javascript">
      /*  $('#SkypeButton_Call_huynhnhattruong2001_1 img').attr('src','http://wellgen.vn/template/frontend/pc/image/skype_chat.png');*/
   </script>
</html>
{{-- <script type="text/javascript">
   var xmlhttp;
   if (window.XMLHttpRequest)
     {// code for IE7+, Firefox, Chrome, Opera, Safari
     xmlhttp=new XMLHttpRequest();
     }
   else
     {// code for IE6, IE5
     xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
     }
   xmlhttp.open("POST","http://wellgen.vn/adminstat/index/clientstat/1/screenwidth/"+window.screen.availWidth+"/screenheight/"+window.screen.availHeight,true);
   xmlhttp.send();
</script> --}}