<?php
use Illuminate\Support\Facades\DB;
use App\Danhmucsanpham;
?>

<div class="layout-page">
    <div class="section-content">
        <div class="container">
            <div class="section-content-text layout-content-text">
                <h1>GIẢI PHÁP SƠN BẢ CHUYÊN NGHIỆP CHO TÀU THUYỀN</h1>
                <p>Bảo vệ và nâng cấp tàu thuyền với dịch vụ sơn bả chất lượng cao. Chúng tôi cung cấp giải pháp toàn
                    diện, giúp tàu của bạn bền đẹp, chống chịu tốt với môi trường biển khắc nghiệt.</p>
                <a href="#" class="btn-tu-van">NHẬN TƯ VẤN <i class="fa fa-phone"></i></a>
            </div>
        </div>
    </div>
    <div class="section-2">
        <div class="container">
            <div class="section-2-content">
                <div class="section-2-left">
                    <img src="{{ asset('images/board1.png') }}" alt="Du thuyền cao cấp"
                        class="main-yacht-image mobile-none-desktop-block">
                    <img src="{{ asset('images/board1-sub.png') }}" alt="Du thuyền cao cấp"
                        class="main-yacht-image mobile-block-desktop-none">
                    <img src="{{ asset('images/board2.png') }}" alt="Du thuyền cao cấp" class="sub-yacht-image">
                </div>
                <div class="section-2-right">
                    <div class="section-tag d-flex align-items-center gap-2">
                        <img src="{{ asset('images/arrow.png') }}" alt="Tag"
                            style="width: 20px; height: 20px; margin-right: 10px;">
                        DU THUYỀN CỦA BẠN ĐÃ SẴN SÀNG?
                    </div>
                    <h2>Du thuyền của bạn có đang xuống cấp vì lớp sơn bả kém chất lượng?</h2>
                    <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line">
                    <p>Bảo vệ và nâng cấp tàu thuyền với dịch vụ sơn bả chất lượng cao. Chúng tôi cung cấp giải pháp
                        toàn diện, giúp tàu của bạn bền đẹp, chống chịu tốt với môi trường biển khắc nghiệt.</p>
                </div>
            </div>

            <div class="section-2-bottom">
                <h3 class="text-left d-flex align-items-center ">
                    <img src="{{ asset('images/arrow.png') }}" alt="Tag"
                        style="width: 20px; height: 20px; margin-right: 10px;">

                    BẢO VỆ DU THUYỀN
                </h3>
                <h2 class="text-left">Hậu quả của sơn bả kém chất lượng</h2>
                <div class="consequence-cards">
                    <div class="consequence-card">
                        <div class="card-number">1</div>
                        <img src="{{ asset('public/images/cate1.jpeg') }}" alt="Hậu quả 1">
                        <div class="consequen-card-layer">
                            <p>Sơn bả kém chất lượng làm mất giá trị du thuyền, giảm tốc độ tàu, tăng tiêu hao nhiên
                                liệu
                            </p>
                        </div>
                    </div>
                    <div class="consequence-card">
                        <div class="card-number">2</div>
                        <img src="{{ asset('public/images/cate2.jpeg') }}" alt="Hậu quả 2">
                        <div class="consequen-card-layer">
                            <p>Môi trường nước biển gây ăn mòn nhanh chóng lớp sơn tàu biển của bạn</p>
                        </div>
                    </div>
                    <div class="consequence-card">
                        <div class="card-number">3</div>
                        <img src="{{ asset('public/images/cate3.jpeg') }}" alt="Hậu quả 3">
                        <div class="consequen-card-layer">
                            <p>Tốn kém khi phải sơn lại thường xuyên do lớp bả bị bong tróc</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="section-3">
        <div class="container">
            <div class="section-3-content section-3-content-desktop">
                <div>
                    <div class="section-tag ">
                        <img src="{{ asset('images/arrowWhite.png') }}" alt="Tag"
                            style="width: 20px; height: 20px; margin-right: 10px;">
                        GIẢI PHÁP
                    </div>
                    <h2>Tại sao chọn chúng tôi</h2>
                </div>
                <div class="solution-card">
                    <div class="solution-icon">
                        <img src="{{ asset('images/quality.png') }}" alt="Chất lượng">
                    </div>
                    <div class="solution-content">
                        <h3>Sử dụng nguyên liệu chất lượng cao cho bả du thuyền</h3>
                        <p>Sử dụng bả chất lượng cao giúp bề mặt thuyền mịn bóng, tăng độ bám sơn, chống chịu môi trường
                            khắc nghiệt và giảm nguy cơ bong tróc, phai màu.</p>
                    </div>
                </div>
                <div class="solution-card">
                    <div class="solution-icon">
                        <img src="{{ asset('images/customer-support.png') }}" alt="Dịch vụ">
                    </div>
                    <div class="solution-content">
                        <h3>Dịch vụ chuyên nghiệp – Chất lượng hàng đầu</h3>
                        <p>Trang Trí D&T sở hữu đội ngũ tay nghề cao, sử dụng vật liệu chất lượng, cam kết tận tâm hỗ
                            trợ và
                            mang đến sản phẩm tốt nhất.</p>
                        <div class="section-3-cta">
                            <a href="#" class="btn-tu-van">NHẬN TƯ VẤN <i class="fa fa-phone"></i></a>
                        </div>
                    </div>
                </div>

            </div>
            <div
                class="section-3-mobile mobile-block-desktop-none d-flex flex-column align-items-center justify-content-center">
                <h3 class="d-flex align-items-center justify-content-center">
                    <img src="{{ asset('images/arrow.png') }}" alt="Tag"
                        style="width: 20px; height: 20px; margin-right: 10px;">

                    BẢO VỆ DU THUYỀN
                </h3>
                <h2>Tại sao lại chọn chúng tôi</h2>
                <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line-4">
                <div class="section-3-mobile-contents">
                    <div class="section-3-mobile-content">
                        <div class="section-3-mobile-item">
                            <div class="solution-icon">
                                <img src="{{ asset('images/quality.png') }}" alt="Chất lượng">
                            </div>
                            <div class="solution-content">
                                <h3>Sử dụng nguyên liệu chất lượng cao cho bả du thuyền</h3>
                                <p>Sử dụng bả chất lượng cao giúp bề mặt thuyền mịn bóng, tăng độ bám sơn, chống chịu
                                    môi
                                    trường
                                    khắc nghiệt và giảm nguy cơ bong tróc, phai màu.</p>
                            </div>
                        </div>
                    </div>
                    <div class="section-3-mobile-content">
                        <div class="section-3-mobile-item">
                            <div class="solution-icon">
                                <img src="{{ asset('images/customer-support.png') }}" alt="Dịch vụ">
                            </div>
                            <div class="solution-content">
                                <h3>Dịch vụ chuyên nghiệp – Chất lượng hàng đầu</h3>
                                <p>Trang Trí D&T sở hữu đội ngũ tay nghề cao, sử dụng vật liệu chất lượng, cam kết tận
                                    tâm
                                    hỗ
                                    trợ và
                                    mang đến sản phẩm tốt nhất.</p>

                            </div>
                        </div>
                    </div>
                    <div class="section-3-cta">
                        <a href="#" class="btn-tu-van">NHẬN TƯ VẤN <i class="fa fa-phone"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <div class="section-4-content">
                <div class="section-tag d-flex align-items-center">
                    <img src="{{ asset('images/arrow.png') }}" alt="Tag"
                        style="width: 20px; height: 20px; margin-right: 10px;">
                    DỰ ÁN CỦA CHÚNG TÔI
                </div>
                <h2>Dự án thi công bả du thuyền đã<br>được D&T hoàn thiện</h2>
                <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line-4">
                <div class="d-flex flex-column align-items-center justify-content-center mobile-block-desktop-none">
                    <div class="project-card-mobile">
                        <div class="project-image">
                            <img src="{{ asset('images/project1.png') }}"
                                alt="Du thuyền 6 sao Grand Pioneers Hạ Long">
                            <div class="project-image-desc">
                                DU THUYỀN 6 SAO GRAND PIONEERS
                                HẠ LONG
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="project-info">
                                <h4>Khẳng định chất lượng thi công, sánh tầm quốc tế.</h4>
                                <p>Trang Trí D&T đảm bảo độ bền, vẻ đẹp du thuyền với công nghệ tiên tiến, khẳng định
                                    tiêu chuẩn quốc tế.</p>
                                <h4>Đoạt giải "Du thuyền xanh tốt nhất thế giới" năm 2024</h4>
                                <p>Grand Pioneers Hạ Long đạt danh hiệu "Du thuyền xanh tốt nhất thế giới", khẳng định
                                    chất lượng, độ bền và thiết kế đột phá.</p>

                            </div>
                        </div>
                    </div>
                    <div class="project-card-mobile">
                        <div class="project-image">
                            <img src="{{ asset('images/project2.png') }}"
                                alt="Du thuyền 6 sao Grand Pioneers Hạ Long">
                            <div class="project-image-desc">
                                SIÊU DU THUYỀN NHÀ HÀNG 6 SAO SAQUILA YACHT
                            </div>
                        </div>
                        <div class="project-content">
                            <div class="project-info">
                                <h4>Du thuyền 6 sao – Niềm tự hào của bàn tay người Việt</h4>
                                <p>Một trong những du thuyền 6 sao đầu tiên được thiết kế và thi công hoàn toàn bởi
                                    những bàn tay tài hoa người Việt</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-between desktop">
                    <div class="flex-1 tab-title active" onclick="showProject(1)">
                        Du thuyền 6 sao Grand Pioneers Hạ Long
                    </div>
                    <div class="flex-1 tab-title" onclick="showProject(2)">
                        Siêu du thuyền nhà hàng 6 sao Saquila Yacht
                    </div>
                </div>
                <div class="line-tab desktop">
                </div>

                <script>
                    function showProject(index) {
                        // Xử lý active tab
                        const tabs = document.querySelectorAll('.tab-title');
                        tabs.forEach(tab => tab.classList.remove('active'));
                        tabs[index - 1].classList.add('active');

                        // Xử lý line active với animation
                        const lineTab = document.querySelector('.line-tab');
                        if (index === 1) {
                            lineTab.classList.remove('right');
                        } else {
                            lineTab.classList.add('right');
                        }

                        // Hiển thị nội dung tương ứng
                        const projects = document.querySelectorAll('.project-card');
                        projects.forEach((project, i) => {
                            if (i === index - 1) {
                                project.style.display = 'flex';
                            } else {
                                project.style.display = 'none';
                            }
                        });
                    }

                    // Khởi tạo hiển thị ban đầu
                    document.addEventListener('DOMContentLoaded', function() {
                        showProject(1);
                    });
                </script>

                <div class="project-cards mobile-none-desktop-block">
                    <div class="project-card">
                        <div class="project-content">
                            <div class="project-info">
                                <h4>Đoạt giải "Du thuyền xanh tốt nhất thế giới" năm 2024</h4>
                                <p>Grand Pioneers Hạ Long đạt danh hiệu "Du thuyền xanh tốt nhất thế giới", khẳng định
                                    chất lượng, độ bền và thiết kế đột phá.</p>
                                <h4>Khẳng định chất lượng thi công, sánh tầm quốc tế.</h4>
                                <p>Trang Trí D&T đảm bảo độ bền, vẻ đẹp du thuyền với công nghệ tiên tiến, khẳng định
                                    tiêu chuẩn quốc tế.</p>
                            </div>
                        </div>
                        <div class="project-image">
                            <img src="{{ asset('images/board3.png') }}" alt="Du thuyền 6 sao Grand Pioneers Hạ Long">
                            <img src="{{ asset('images/boat5.jpeg') }}" alt="Du thuyền 6 sao Grand Pioneers Hạ Long">
                            <button class="nav-btn project-prev prev"><i class="fa fa-chevron-left"></i></button>
                            <button class="nav-btn project-next next"><i class="fa fa-chevron-right"></i></button>
                        </div>

                    </div>
                    <div class="project-card">
                        <div class="project-content">
                            <div class="project-info">
                                <h4>Đẳng cấp thiết kế sang trọng</h4>
                                <p>Saquila Yacht là siêu du thuyền nhà hàng đẳng cấp 6 sao với thiết kế sang trọng và
                                    hiện đại bậc nhất.</p>
                                <h4>Chất lượng thi công hoàn hảo</h4>
                                <p>Trang Trí D&T tự hào mang đến chất lượng thi công hoàn hảo, đáp ứng tiêu chuẩn khắt
                                    khe của chủ đầu tư.</p>
                            </div>
                        </div>
                        <div class="project-image">
                            <img src="{{ asset('images/board3.png') }}"
                                alt="Siêu du thuyền nhà hàng 6 sao Saquila Yacht">
                            <img src="{{ asset('images/boat5.jpeg') }}" alt="Du thuyền 6 sao Grand Pioneers Hạ Long">
                            <button class="nav-btn project-prev prev"><i class="fa fa-chevron-left"></i></button>
                            <button class="nav-btn project-next next"><i class="fa fa-chevron-right"></i></button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <div class="section-4-content">
                <h2>Phản hồi của khách hàng về dịch vụ thi công bả hàng hải<br>của công ty cổ phần Trang Trí D&T</h2>
                <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line-4">

                <p class="section-5-subtitle">Đánh giá thực tế từ những chủ tàu và đối tác tin cậy.</p>


                <div class="testimonial-slider">
                    <div class="testimonial-slides">
                        <div class="testimonial-slide active">
                            <div class="company-logo">
                                <div class="logo-container">
                                    <img src="{{ asset('images/dtLogo.png') }}" alt="D&T Logo">
                                    <img src="{{ asset('images/person.png') }}" alt="D&T Logo"
                                        class="company-person">
                                </div>
                            </div>
                            <p class="testimonial-text">"Tôi hoàn toàn hài lòng với chất lượng dịch vụ thi công bả
                                hàng hải của công ty cổ phần Trang Trí D&T"</p>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <div class="author-details">
                                        <p>"Dịch vụ thi công của công ty bả hàng hải của D&T"</p>
                                        <p class="author-name">Nguyễn Văn A</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="testimonial-slide">
                            <div class="company-logo">
                                <div class="logo-container">
                                    <img src="{{ asset('images/dtLogo.png') }}" alt="D&T Logo">
                                    <img src="{{ asset('images/person.png') }}" alt="D&T Logo"
                                        class="company-person">
                                </div>
                            </div>
                            <p class="testimonial-text">"Tôi hoàn toàn hài lòng với chất lượng dịch vụ thi công bả
                                hàng hải của công ty cổ phần Trang Trí D&T"</p>
                            <div class="testimonial-author">
                                <div class="author-info">
                                    <div class="author-details">
                                        <p>"Dịch vụ thi công của công ty bả hàng hải của D&T"</p>
                                        <p class="author-name">Nguyễn Văn A</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="nav-btn testimonial-prev prev"><i class="fa fa-chevron-left"></i></button>
                    <button class="nav-btn testimonial-next next"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="testimonial-slider-mobile">
                    <div class="testimonial-slider-mobile-item">
                        <p class="testimonial-text">"Tôi hoàn toàn hài lòng với chất lượng dịch vụ thi công bả
                            hàng hải của công ty cổ phần Trang Trí D&T"</p>
                    </div>
                    <div class="testimonial-slider-mobile-item">
                        <p class="testimonial-text">“Sản phẩm của KATAVINA
                            "Dịch vụ thi công của công ty bả hàng hải của D&T”</p>
                    </div>
                    <img src="{{ asset('images/person.png') }}" alt="D&T Logo">
                    {{-- <button class="nav-btn prev"><i class="fa fa-chevron-left"></i></button>
                    <button class="nav-btn next"><i class="fa fa-chevron-right"></i></button> --}}
                </div>
            </div>
        </div>
    </div>
    <section class="section-product-detail">
        <div class="container">
            <h2 class="section-product-title">Chi tiết sản phẩm</h2>
            <div class="product-detail-wrapper">
                <div class="product-detail-content">
                    <h3 class="text-center">
                        Dịch Vụ Thi Công Bả Du Thuyền Là Gì? Quy Trình, Lưu Ý Sơn Bả Du Thuyền
                    </h3>
                    <p>

                        Dịch vụ thi công bả du thuyền đóng vai trò quan trọng hoàn thiện bề mặt tàu thuyền, là yếu tố
                        quyết định đến độ bền bỉ và vẻ đẹp sang trọng của du thuyền. Quy trình này giúp bảo vệ tàu khỏi
                        những tác động khắc nghiệt của môi trường biển, đồng thời mang lại lớp hoàn thiện bóng bẩy, đẳng
                        cấp. Vậy chi tiết dịch vụ thi công bả du thuyền gồm những yêu cầu và quy trình gì khi thực hiện?
                        Cần lưu ý gì khi làm bả du thuyền? Bài viết dưới đây sẽ cung cấp đầy đủ cho bạn!
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/dich-vu-thi-cong-ba-du-thuyen.jpg') }}"
                            alt="Dịch Vụ Thi Công Bả Du Thuyền Là Gì? Quy Trình, Lưu Ý Sơn Bả Du Thuyền"
                            class="product-img">
                        <p>
                            Dịch Vụ Thi Công Bả Du Thuyền Là Gì? Quy Trình, Lưu Ý Sơn Bả Du Thuyền
                        </p>
                    </div>
                    <h3>
                        Dịch vụ thi công bả du thuyền là gì?

                    </h3>

                    <p>
                        Dịch vụ thi công bả du thuyền là một phần quan trọng trong việc bảo trì và nâng cấp du thuyền,
                        giúp duy trì vẻ đẹp và kéo dài tuổi thọ của tàu. Không chỉ mang lại diện mạo hoàn hảo, việc thi
                        công bả hàng hải còn đóng vai trò như một lớp bảo vệ quan trọng trước những yếu tố khắc nghiệt
                        của môi trường biển, như ánh sáng mặt trời, nước mặn và các tác nhân ăn mòn khác.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/dich-vu-thi-cong-ba-du-thuyen-la-gi.jpg') }}"
                            alt="Dịch Vụ Thi Công Bả Du Thuyền Là Gì? Quy Trình, Lưu Ý Sơn Bả Du Thuyền"
                            class="product-img">
                        <p>
                            Dịch vụ thi công bả du thuyền giúp bảo trì và nâng cấp
                        </p>
                    </div>

                    <p>
                        Việc thực hiện sơn bả định kỳ là điều cần thiết để bảo vệ khoản đầu tư vào du thuyền. Nhờ vậy,
                        lớp sơn trang trí bề mặt không chỉ mới lâu hơn, mà còn giúp tàu có thêm lớp rào chắn chống lại
                        các tác động xấu, ngăn ngừa hư hỏng, ăn mòn và phai màu theo thời gian. Điều này không chỉ đảm
                        bảo tính toàn vẹn về mặt cấu trúc của du thuyền mà còn giúp duy trì giá trị bán lại trong tương
                        lai.
                    </p>
                    <h3>
                        Vai trò của dịch vụ thi công bả du thuyền
                    </h3>
                    <p>
                        Việc thực hiện thi công bả du thuyền trước khi sơn lót, sơn trang trí giúp tăng độ bền, bảo vệ
                        bề mặt thuyền. Đồng thời, việc sơn bả cũng giúp cho lớp sơn trang trí đẹp mắt, mịn màng hơn,
                        tăng tuổi thọ cho du thuyền trong mọi điều kiện thời tiết.
                    </p>
                    <h4>
                        Bảo vệ bề mặt thuyền
                    </h4>
                    <p>
                        Dịch vụ thi công bả du thuyền đóng vai trò quan trọng trong việc bảo vệ bề mặt thuyền khỏi các
                        tác nhân gây hại từ môi trường biển bao gồm: ánh sáng mặt trời, nước mặn và các tác nhân ăn mòn
                        khác. Các yếu tố này thường khó tránh khi sử dụng tàu thuyền, là nguyên nhân trực tiếp dẫn đến
                        sự hư hỏng nghiêm trọng, làm phai màu và suy giảm chất lượng vật liệu.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/son-ba-giup-bao-ve-mat-thuyen.jpg') }}"
                            alt="Sơn bả giúp bảo vệ bề mặt thuyền" class="product-img">
                        <p>
                            Sơn bả giúp bảo vệ bề mặt thuyền
                        </p>
                    </div>
                    <p>
                        Lớp sơn bả chất lượng cao được thi công bởi đội ngũ chuyên nghiệp, giúp bề mặt thuyền hình thành
                        một lớp "rào chắn" vững chắc, ngăn ngừa sự ăn mòn và tác động tiêu cực của thời tiết. Ngoài ra,
                        các dịch vụ chuyên nghiệp có thể tiếp cận các công cụ chuyên dụng và loại sơn phù hợp, đảm bảo
                        hiệu quả bảo vệ tàu thuyền lâu dài.
                    </p>
                    <h4>
                        Tăng tính thẩm mỹ
                    </h4>
                    <p>
                        Một lớp sơn bả hoàn thiện không chỉ bảo vệ mà còn làm tăng tính thẩm mỹ cho du thuyền. Dịch vụ
                        thi công chuyên nghiệp đảm bảo việc trang trí bề mặt du thuyền của bạn trở nên sắc nét và mới mẻ
                        hơn. Các chuyên gia thi công bả du thuyền uy tín, tay nghề cao sẽ đảm bảo:
                        Việc làm bả du thuyền cho ra lớp sơn mịn màng, tạo nên diện mạo sang trọng, đẳng cấp.
                        Tư vấn các loại sơn phù hợp với phong cách thiết kế và mục đích sử dụng của du thuyền, mang lại
                        sự hài lòng tối đa về mặt thẩm mỹ.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/son-ba-hang-hai-tang-tinh-tham-mi-cho-du-thuyen.jpg') }}"
                            alt="Sơn bả hàng hải tăng tính thẩm mỹ cho du thuyền" class="product-img">
                        <p>
                            Sơn bả hàng hải tăng tính thẩm mỹ cho du thuyền
                        </p>
                    </div>

                    <h4>
                        Tăng tuổi thọ cho du thuyền
                    </h4>
                    <p>
                        Việc sử dụng dịch vụ thi công bả hàng hải là một khoản đầu tư dài hạn để kéo dài tuổi thọ cho du
                        thuyền của bạn. Một lớp sơn bả chất lượng không chỉ làm đẹp mà còn giúp bảo vệ cấu trúc tàu,
                        giảm thiểu nguy cơ hư hỏng từ môi trường khắc nghiệt. Nhờ vậy, bạn không chỉ tiết kiệm chi phí
                        sửa chữa mà còn duy trì giá trị của du thuyền, đặc biệt trong trường hợp bạn muốn bán hoặc nâng
                        cấp trong tương lai.
                    </p>
                    <h3>
                        Các loại bả du thuyền phổ biến
                    </h3>
                    <p>
                        Bả du thuyền được sử dụng phổ biến hiện nay trên thị trường bao gồm: bả epoxy, bả polyester và
                        bả chống thấm.
                    <h4>
                        Bả epoxy
                    </h4>
                    <p>
                        Bả epoxy là loại bả phổ biến nhất trong dịch vụ thi công bả du thuyền nhờ đặc tính vượt trội về
                        độ bền và khả năng bám dính. Loại bả này có khả năng:
                    </p>
                    <ul>
                        <li>
                            Chịu được tác động từ môi trường biển khắc nghiệt, chống ăn mòn và chịu lực tốt, phù hợp cho
                            các
                            bề mặt như sợi thủy tinh, thép hoặc nhôm.
                        </li>
                        <li>
                            Độ cứng cao, giúp tạo lớp nền chắc chắn cho lớp sơn phủ.
                        </li>
                        <li>
                            Tuy nhiên, loại bả này có nhược điểm là thời gian khô lâu hơn các loại khác, đồng thời đòi
                            hỏi
                            kỹ thuật thi công cao để tránh xuất hiện lỗi như bong tróc hoặc nứt.
                        </li>
                        <li>
                            Bả epoxy thường được sử dụng cho các du thuyền lớn, cần đảm bảo độ bền lâu dài và khả năng
                            chống
                            chịu trong điều kiện vận hành khắc nghiệt.
                        </li>
                    </ul>

                    <div class="product-detail-image">
                        <img src="{{ asset('images/ba-du-thuyen-epoxy.jpg') }}" alt="Bả du thuyền epoxy"
                            class="product-img">

                    </div>

                    <h4>
                        Bả polyester
                    </h4>
                    <p>
                        Bả polyester là lựa chọn phổ biến nhờ giá thành hợp lý và khả năng thi công dễ dàng. Loại bả này
                        có đặc tính nhẹ, dễ mài nhẵn và nhanh khô, phù hợp cho các công trình cần tiết kiệm thời gian.
                    </p>
                    <p>
                        Tuy nhiên, so với bả epoxy, bả polyester có độ bền và khả năng chống ăn mòn kém hơn, không phù
                        hợp với những khu vực thường xuyên tiếp xúc trực tiếp với nước biển. Đây là lựa chọn lý tưởng
                        cho các du thuyền nhỏ hoặc các khu vực trên cao như boong tàu, nơi cần tính thẩm mỹ cao nhưng ít
                        chịu tác động từ môi trường nước.
                    </p>
                    <h4>
                        Bả chống thấm
                    </h4>
                    <p>
                        Bả chống thấm là giải pháp đặc biệt được thiết kế để ngăn nước xâm nhập vào cấu trúc tàu. Loại
                        bả này thường được sử dụng cho các khu vực thân dưới của du thuyền, nơi tiếp xúc trực tiếp với
                        nước biển.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/ba-matit-chong-tham-doc-quyen.jpg') }}"
                            alt="Bả mạtít chống thấm dộc quyền" class="product-img">

                    </div>
                    <p>
                        Ưu điểm của bả chống thấm là khả năng bảo vệ bề mặt khỏi hiện tượng ăn mòn, nứt vỡ và hạn chế sự
                        phát triển của sinh vật biển. Tuy nhiên, nhược điểm là tính ứng dụng không cao đối với các khu
                        vực cần độ bền cơ học hoặc chịu va đập mạnh.
                    </p>
                    <h3>
                        Quy trình thi công bả du thuyền
                    </h3>
                    <p>
                        Quy trình sơn bả du thuyền yêu cầu những công cụ chuyên dụng và việc phối hợp các bước thực hiện
                        chặt chẽ từ thợ tay nghề cao. Thông tin chi tiết như sau:
                    </p>
                    <h4>
                        Dụng cụ bả tàu thuyền cần thiết
                    </h4>
                    Các dụng cụ cần thiết khi thực hiện bả du thuyền chuyên nghiệp bao gồm:
                    <ul>
                        <li>
                            Giấy nhám hoặc máy chà nhám: Dùng để làm sạch và mài mịn bề mặt thuyền, loại bỏ bụi bẩn và
                            sơn
                            cũ.
                        </li>
                        <li>
                            Băng keo giấy: Che chắn các khu vực không cần sơn như cửa sổ, tay vịn để tránh lem sơn.
                        </li>
                        <li>
                            Vật liệu mồi (primer): Tạo lớp bám dính giữa bề mặt thuyền và lớp sơn phủ, đảm bảo sơn không
                            bị
                            bong tróc.
                        </li>
                        <li>
                            Sơn bả du thuyền chuyên dụng tùy thuộc vào từng đơn vị thi công sử dụng các thương hiệu khác
                            nhau.
                        </li>
                        <li>
                            Dụng cụ thi công: Máy phun sơn, con lăn hoặc cọ giúp thi công đều tay và hiệu quả.
                        </li>
                        <li>
                            Đồ bảo hộ: Găng tay, kính bảo hộ và khẩu trang, đảm bảo an toàn cho người thực hiện.
                        </li>
                    </ul>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/dung-cu-son-ba-can-thiet.jpg') }}"
                            alt="Dụng cụ sơn bả cần thiết: giấy nhám, đồ đạc chuyên dụng" class="product-img">
                        <p>
                            Dụng cụ sơn bả cần thiết: giấy nhám, đồ đạc chuyên dụng
                        </p>
                    </div>
                    <h4>
                        Quy trình thực hiện sơn bả du thuyền
                    </h4>
                    Quy trình dịch vụ thi công sơn bả du thuyền như sau để mọi người nắm bắt dễ dàng hơn:
                    <ul>
                        <li>
                            Bước 1: Chuẩn bị bề mặt trước khi sơn: Loại bỏ bụi bẩn, dầu mỡ và lớp sơn cũ bằng giấy nhám
                            hoặc
                            máy chà nhám. Đảm bảo bề mặt thuyền sạch, nhẵn để sơn bám tốt hơn. Che chắn các khu vực như
                            cửa
                            sổ, lan can không sơn. Sử dụng băng keo giấy để bảo vệ các khu vực như cửa sổ, tay vịn hoặc
                            đường viền.
                        </li>
                        <li> Bước 2: Thực hiện thi công: Sau khi chuẩn bị xong, sử dụng sơn lót đều lên bề mặt để tăng
                            độ bám
                            dính cho sơn bả. Tiếp đó, thi công lớp sơn bả bằng máy phun, con lăn hoặc cọ để bảo vệ bề
                            mặt
                            khỏi ăn mòn. Cuối cùng, sơn phủ cuối cùng để trang trí bề mặt du thuyền.</li>
                        <li>
                            Bước 3: Kiểm tra và hoàn thiện kỹ lưỡng từng chi tiết, đảm bảo lớp sơn đồng đều và đạt tiêu
                            chuẩn chất lượng.
                        </li>

                    </ul>

                    <div class="product-detail-image">
                        <img src="{{ asset('images/quy-trinh-thuc-hien-son-ba-du-thuyen.jpg') }}"
                            alt="Quy trình thi công bả du thuyền" class="product-img">
                        <p>
                            Thi công sơn bả du thuyền cần chuẩn bị kỹ lưỡng khi thực hiện

                        </p>
                    </div>
                    <h3>
                        Các yếu tố ảnh hưởng đến thi công bả du thuyền

                    </h3>
                    Để đảm bảo việc thi công bả đạt chất lượng cao, chủ du thuyền cần chú ý đến chất lượng bả, kỹ
                    thuật trét và điều kiện môi trường khi thực hiện.
                    <h4>
                        Vật liệu bả

                    </h4>
                    <p>
                        Vật liệu bả đóng vai trò quyết định trong việc đảm bảo chất lượng của dịch vụ thi công bả du
                        thuyền. Lựa chọn đúng loại bả không chỉ giúp bề mặt thuyền mịn màng, bóng bẩy mà còn gia tăng độ
                        bám dính cho lớp sơn phủ. Các vật liệu bả chuyên dụng thường được sản xuất để chịu được điều
                        kiện môi trường khắc nghiệt, như ánh sáng mặt trời gay gắt và nước biển mặn.

                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/vat-lieu-ba-chat-luong-cao.jpg') }}"
                            alt="Vật liệu bả chất lượng cao" class="product-img">

                    </div>
                    <p>Chất lượng vật liệu bả còn ảnh hưởng đến độ bền của lớp hoàn thiện, giúp giảm nguy cơ nứt, bong
                        tróc
                        hoặc phai màu. Ngoài ra, việc lựa chọn bả cần phù hợp với từng loại bề mặt du thuyền, từ
                        composite,
                        thép, nhôm đến gỗ. Các nhà cung cấp dịch vụ chuyên nghiệp sẽ đảm bảo sử dụng đúng loại bả và sơn
                        phù
                        hợp để mang lại hiệu quả cao nhất.</p>
                    <h4>
                        Kỹ thuật trét bả
                    </h4>
                    <p>
                        Kỹ thuật trét bả là yếu tố then chốt quyết định độ mịn và độ bám dính của bề mặt. Quy trình trét
                        bả
                        không chỉ đơn thuần là việc phủ lên bề mặt mà còn đòi hỏi sự tỉ mỉ và chuyên môn cao:
                    </p>
                    <ul>
                        <li>
                            Đầu tiên, lớp bả phải được trộn đều để tránh hiện tượng vón cục.
                        </li>
                        <li>
                            Sau đó, người thợ sẽ sử dụng các công cụ chuyên dụng như dao bả hoặc con lăn để trét đều lớp
                            bả lên
                            bề mặt, đảm bảo không có khe hở hoặc chỗ dày mỏng không đồng đều.
                        </li>
                        <li>
                            Khi lớp bả khô, bề mặt cần được chà nhám lại để đạt độ mịn tối ưu trước khi sơn.
                        </li>
                        <li>
                            Một kỹ thuật trét bả đúng cách không chỉ tạo nên lớp nền hoàn hảo mà còn giúp tăng cường độ
                            bám dính
                            cho lớp sơn hoàn thiện, đảm bảo lớp sơn không bị bong tróc khi tiếp xúc với môi trường khắc
                            nghiệt.
                        </li>

                    </ul>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/ky-thuat-tret-ba.jpg') }}" alt="Kỹ thuật trét bả"
                            class="product-img">
                        <p>
                            Kỹ thuật trét bả là yếu tố then chốt quyết định độ mịn
                        </p>
                    </div>
                    <h4>
                        Điều kiện môi trường
                    </h4>
                    <p>
                        Điều kiện môi trường ảnh hưởng đến hiệu quả thi công bả hàng hải. Các yếu tố như độ ẩm cao,
                        nhiệt độ
                        quá thấp hoặc quá cao đều có thể làm giảm chất lượng lớp bả và lớp sơn phủ. Ví dụ:
                    </p>
                    <ul>
                        <li>
                            Nhiệt độ quá lạnh có thể khiến bả khô chậm và khó bám, trong khi độ ẩm cao có thể gây ra
                            hiện tượng
                            bong bóng trên bề mặt sơn.
                        </li>
                        <li>
                            Ánh sáng mặt trời gay gắt cũng có thể làm sơn khô quá nhanh, dẫn đến hiện tượng nứt hoặc
                            không đều
                            màu.
                        </li>
                    </ul>
                    <p>
                        Vì vậy, việc thi công thường được thực hiện các xưởng có điều kiện kiểm soát nhiệt độ và độ ẩm
                        tốt.
                    </p>
                    <p>
                        Các nhà thầu chuyên nghiệp sẽ luôn kiểm tra kỹ lưỡng điều kiện môi trường trước khi thi công,
                        đảm
                        bảo bề mặt thuyền được bả và sơn trong điều kiện lý tưởng nhất để đạt chất lượng hoàn hảo.
                    </p>
                    <h4>
                        Lưu ý quan trọng khi thi công bả du thuyền
                    </h4>
                    <p>
                        Từ việc lựa chọn sơn bả chất lượng, đến tìm kiếm đơn vị thi công uy tín và kiểm tra sau khi hoàn
                        thiện đều là những lưu ý quan trọng trong dịch vụ thi công bả du thuyền.
                    </p>
                    <h4>
                        Lựa chọn sơn bả chất lượng
                    </h4>
                    <p>
                        Sơn bả dành cho du thuyền cần đáp ứng các tiêu chí như khả năng chống thấm, chống nắng, chống
                        tia
                        UV, chống chịu ăn mòn từ môi trường biển. Ngoài ra, sau khi thi công bả hàng hải, cần phân biệt
                        rõ
                        giữa lớp sơn phủ dưới cùng (chống hà bám) và lớp sơn phủ trên cùng (tăng tính thẩm mỹ). Vì vậy,
                        chủ
                        du thuyền cần tìm kiếm đơn vị uy tín, cung cấp sơn bả du thuyền chất lượng cao, đầy đủ giấy tờ
                        chứng
                        nhận trước khi thực hiện thi công.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/son-ba-chat-luong-cao-danh-cho-du-thuyen.jpg') }}"
                            alt="Sơn bả du thuyền chất lượng cao" class="product-img">
                        <p>
                            Sơn bả dành cho du thuyền cần có đầy đủ chứng nhận chất lượng
                        </p>
                    </div>
                    <h4>
                        Tìm kiếm đơn vị thi công bả du thuyền uy tín
                    </h4>
                    <p>
                        Đơn vị uy tín quyết định đến 90% chất lượng trong việc thi công bả du thuyền. Một nhà thầu
                        chuyên
                        nghiệp không chỉ sở hữu đội ngũ thợ lành nghề mà còn sử dụng các công cụ, vật liệu đạt chuẩn.
                        Ngoài
                        ra, các đơn vị uy tín thường cung cấp chính sách bảo hành rõ ràng, giúp bạn yên tâm hơn về chất
                        lượng dịch vụ.
                    </p>
                    <p>
                        Mọi người có thể tham khảo dịch vụ thi công bả hàng hải của công ty cổ phần trang trí D&T, là đơn
                        vị
                        dẫn đầu trong lĩnh vực trang trí ngoại thất du thuyền tại Việt Nam. Mỗi công trình thi công bởi
                        D&T
                        đều mang đậm dấu ấn của sự chuyên nghiệp và tinh thần trách nhiệm. Sự thành công vang dội của
                        các dự
                        án như Grand Pioneers Cruise – đạt giải thưởng “Du thuyền xanh tốt nhất thế giới năm 2024”, hay
                        các
                        du thuyền 5 sao như Calista và Saquila Yacht, là minh chứng cho cam kết vượt mong đợi khách hàng
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/du-thuyen-Grand-Pioneers-Cruise.jpg') }}"
                            alt="Du thuyền Grand Pioneers Cruise" class="product-img">
                        <p>
                            Du thuyền Grand Pioneers Cruise đoạt giải du thuyền xanh 2024 được D&T thực hiện
                        </p>
                    </div>
                    <p>
                        Với tư cách là nhà phân phối chính thức của hãng sơn Nippon, đơn vị D&T luôn đảm bảo cung cấp
                        sản
                        phẩm sơn chất lượng cao, phù hợp với các tiêu chuẩn khắt khe nhất trong ngành.. Công ty cũng sở
                        hữu
                        đội ngũ lãnh đạo, kỹ sư và nhân viên kỹ thuật giàu kinh nghiệm, am hiểu sâu sắc về trang trí du
                        thuyền.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/Cong-ty-co-phan-trang-tri-DT-su-dung-cac-cong-cu-dat-chuan-nhan-cong-chuyen-mon-cao.jpg') }}"
                            alt="Công ty cổ phần trang trí D&T sử dụng các công cụ đạt chuẩn, nhân công chuyên môn cao"
                            class="product-img">
                        <p>
                            Công ty cổ phần trang trí D&T sử dụng các công cụ đạt chuẩn, nhân công chuyên môn cao
                        </p>
                    </div>
                    <h4>
                        Kiểm tra chất lượng sau khi bả du thuyền
                    </h4>
                    <p>
                        Sau khi hoàn tất thi công, kiểm tra chất lượng là bước không thể bỏ qua. Việc kiểm tra giúp bạn
                        đảm
                        bảo lớp bả và sơn đạt đúng tiêu chuẩn về độ mịn, độ bám dính và tính thẩm mỹ. Hãy chú ý đến các
                        chi
                        tiết nhỏ như đường viền, khu vực góc cạnh hoặc những vị trí dễ bị sót sơn. Ngoài ra, kiểm tra bề
                        mặt
                        dưới ánh sáng để phát hiện các khuyết điểm như vệt cọ, bóng khí hoặc sơn không đều trước khi làm
                        sơn
                        phủ.
                    </p>
                    <div class="product-detail-image">
                        <img src="{{ asset('images/bao-duong-sau-khi-thi-cong-ba-du-thuyen.jpg') }}"
                            alt="Bảo dưỡng sau thi công bả du thuyền duy trì vẻ đẹp và độ bền của du thuyền"
                            class="product-img">
                        <p>
                            Bảo dưỡng sau thi công bả du thuyền duy trì vẻ đẹp và độ bền của du thuyền

                        </p>
                    </div>
                    <p>
                        Bên cạnh đó, việc bảo dưỡng sau thi công bả du thuyền đóng vai trò thiết yếu trong việc duy trì
                        vẻ
                        đẹp và độ bền của du thuyền. Bảo dưỡng định kỳ giúp phát hiện sớm các vấn đề như ăn mòn bề mặt,
                        sự
                        phát triển của sinh vật biển hay hao mòn do thời gian, từ đó có biện pháp khắc phục kịp thời.
                        Ngoài
                        ra, việc làm sạch, đánh bóng và sơn lại khi cần thiết còn giúp lớp sơn luôn giữ được vẻ mới mẻ,
                        nâng
                        cao giá trị sử dụng cũng như giá trị bán lại của du thuyền.
                    </p>
                    <h3>
                        Lời kết
                    </h3>
                    <p>
                        Dịch vụ thi công bả du thuyền không chỉ giúp bảo vệ mà còn nâng cao giá trị cho bề mặt tàu
                        thuyền
                        cao cấp. Với quy trình thi công đúng chuẩn và sự chăm chút từ đội ngũ chuyên nghiệp, du thuyền
                        của
                        bạn sẽ luôn giữ được vẻ đẹp sang trọng và bền bỉ vượt thời gian. Nếu bạn đang tìm kiếm đơn vị
                        thi
                        công sơn bả hàng hải, đầy đủ sản phẩm chất lượng và thợ nghề giàu kinh nghiệm, hãy liên hệ CÔNG
                        TY
                        cổ phần TRANG TRÍ D&T qua Hotline: 0815 599 588 - 0984 260 860 để nhận tư vấn chi tiết.
                    </p>

                </div>
                <div class="content-overlay"></div>
                <div class="text-center btn-overlay-container">
                    <a href="javascript:void(0)" class="btn-xem-them" onclick="toggleProductContent(this)">Xem
                        thêm</a>
                </div>

            </div>
        </div>
    </section>
    <section class="section-6">
        <div class="container card d-flex align-items-stretch">
            <div class="image-container ">
                <img src="{{ asset('images/boat5.jpeg') }}" alt="Yacht">
            </div>
            <div class="form-container flex-1">
                <div class="section-tag d-flex align-items-center">
                    <img src="{{ asset('images/arrow.png') }}" alt="Tag"
                        style="width: 20px; height: 20px; margin-right: 10px;">
                    LIÊN HỆ
                </div>
                <h2>Liên hệ với chúng tôi</h2>
                <div class="form-line"></div>
                <form>
                    <div class="d-flex form-name gap-2">
                        <input type="text" placeholder="Họ" required>
                        <input type="text" placeholder="Tên" required>
                    </div>
                    <input type="tel" placeholder="Số điện thoại" required>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Lời nhắn" required></textarea>
                    <button onclick="return false;">NHẬN TƯ VẤN <i class="fa fa-phone"></i></button>
                </form>
            </div>
        </div>
    </section>

    <section class="section-4">
        <div class="container d-flex flex-column align-items-center">
            <div class="section-4-content">
                <h2>Tin tức</h2>
                <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line-4">

                <p>Cập nhật tin tức & xu hướng ngành</p>
            </div>
            <?php
            $danhmucbaiviet = DB::table('danhmucbaiviet')->where('status2', 1)->limit(1)->get();
            ?>

            @foreach ($danhmucbaiviet as $cha)
                <?php
                $baiviet = DB::table('baiviet')->where('danhmucbaiviet_id', $cha->id)->where('status', 1)->limit(4)->get();
                ?>

                @if ($baiviet->count() > 0)
                    <div class="news-container">
                        <!-- Bài viết đầu tiên -->
                        <div class="news-container-left">
                            <?php $firstPost = $baiviet->first(); ?>
                            <img src="{{ asset('storage/baiviet/' . $firstPost->anhdaidien) }}"
                                alt="{{ $firstPost->name }}">
                            <div class="news-content">
                                <div class="news-date d-flex align-items-center">
                                    <p class="news-date-title">{{ $cha->name }}</p>
                                    <i class="fa fa-eye"></i>
                                    <p>{{ $firstPost->count_page }} lượt xem</p>
                                </div>
                                <p class="news-title">{{ $firstPost->name }}</p>
                                <a href="{{ route('indexCode', ['code' => $firstPost->code]) }}" class="news-btn">XEM
                                    CHI TIẾT</a>
                            </div>
                        </div>

                        <!-- 3 bài viết còn lại -->
                        <div class="news-container-right">
                            @foreach ($baiviet->skip(1)->take(3) as $item)
                                <div class="news-items">
                                    <div class="news-content">
                                        <div class="news-date d-flex align-items-center">
                                            <p class="news-date-title">{{ $cha->name }}</p>
                                            <i class="fa fa-eye"></i>
                                            <p>{{ $item->count_page }} lượt xem</p>
                                        </div>
                                        <p class="news-title">{{ $item->name }}</p>
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                            class="news-btn">XEM CHI TIẾT</a>
                                    </div>
                                    <img src="{{ asset('storage/baiviet/' . $item->anhdaidien) }}"
                                        alt="{{ $item->name }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            @endforeach
            {{-- <div class="news-container">
                <div class="news-container-left">
                    <img src="{{ asset('images/news1.png') }}" alt="Tin tức 1">
                    <div class="news-content">
                        <div class="news-date d-flex align-items-center">
                            <p class="news-date-title">Tin tức</p>
                            <i class="fa fa-eye"></i>
                            <p>121 lượt xem</p>
                        </div>
                        <p class="news-title">Bả Matit - Giải Pháp Hoàn Hảo Cho Bề Mặt Đẹp Mịn</p>
                        <a href="#" class="news-btn">XEM CHI TIẾT</a>
                    </div>
                </div>
                <div class="news-container-right">
                    <div class="news-items">
                        <div class="news-content">
                            <div class="news-date d-flex align-items-center">
                                <p class="news-date-title">Tin tức</p>
                                <i class="fa fa-eye"></i>
                                <p>121 lượt xem</p>
                            </div>
                            <p class="news-title">Bả Matit - Giải Pháp Hoàn Hảo Cho Bề Mặt Đẹp Mịn</p>
                            <a href="#" class="news-btn">XEM CHI TIẾT</a>
                        </div>
                        <img src="{{ asset('images/news2.png') }}" alt="Tin tức 2">

                    </div>
                    <div class="news-items">
                        <div class="news-content">
                            <div class="news-date d-flex align-items-center">
                                <p class="news-date-title">Tin tức</p>
                                <i class="fa fa-eye"></i>
                                <p>121 lượt xem</p>
                            </div>
                            <p class="news-title">Bả Matit - Giải Pháp Hoàn Hảo Cho Bề Mặt Đẹp Mịn</p>
                            <a href="#" class="news-btn">XEM CHI TIẾT</a>
                        </div>
                        <img src="{{ asset('images/news3.png') }}" alt="Tin tức 3">

                    </div>
                    <div class="news-items">
                        <div class="news-content">
                            <div class="news-date d-flex align-items-center">
                                <p class="news-date-title">Tin tức</p>
                                <i class="fa fa-eye"></i>
                                <p>121 lượt xem</p>
                            </div>
                            <p class="news-title">Bả Matit - Giải Pháp Hoàn Hảo Cho Bề Mặt Đẹp Mịn</p>
                            <a href="#" class="news-btn">XEM CHI TIẾT</a>
                        </div>
                        <img src="{{ asset('images/news4.png') }}" alt="Tin tức 4">

                    </div>
                </div>
            </div> --}}
        </div>
    </section>
</div>

<style>
    .project-image {
        position: relative;
        overflow: visible;
        width: 100%;
        border-radius: 8px;
    }

    .project-image img {
        width: 100%;
        height: 100%;
        display: none;
        transition: opacity 0.5s ease;
    }

    .project-image img:first-child {
        display: block;
        /* Mặc định hiển thị ảnh đầu tiên */
    }

    .nav-btn {
        position: absolute;
        top: 50%;
        background: #3c88d3;
        color: #fff;
        border: none;
        width: 40px;
        height: 40px;
        border-radius: 50%;
        cursor: pointer;
        z-index: 10;
        transition: background-color 0.3s;
    }

    .nav-btn:hover {
        background-color: #0547a5;
        color: #fff;
    }

    .prev {
        position: absolute;
        left: -50px;
        z-index: 10;
    }

    .next {
        position: absolute;
        right: -50px;
        z-index: 10;
    }

    /* Hiệu ứng fade */
    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 0.5s forwards;
    }

    .testimonial-slider {
        position: relative;
        overflow: visible;
        width: 100%;
        margin: 30px auto;
    }

    .testimonial-slides {
        position: relative;
        width: 100%;
    }

    .testimonial-slide {
        display: none;
        opacity: 0;
        transition: opacity 0.5s ease;
        text-align: center;
    }

    .testimonial-slide.active {
        background-color: #08194d;
        position: relative;
        min-height: 227px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 15px;
        opacity: 1;
        animation: fadeIn 0.5s forwards;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }

    .fade-in {
        animation: fadeIn 0.5s forwards;
    }

    /* Trạng thái mở rộng */
    .product-detail-wrapper.expanded {
        max-height: none;
        overflow: visible !important;
    }

    .product-detail-wrapper.expanded .content-overlay {
        display: none;
    }

    /* Animation cho chuyển đổi */
    .product-detail-wrapper {
        transition: max-height 0.5s ease-in-out;
    }

    /* Style cho nút thu gọn */
    .btn-thu-gon {
        background-color: #0047b3;
        color: white;
    }

    .btn-thu-gon:hover {
        background-color: #003380;
    }

    /* Vị trí nút khi đang thu gọn */
    .btn-overlay-container {
        position: absolute;
        bottom: 30px;
        left: 0;
        right: 0;
        z-index: 2;
        transition: all 0.5s ease;
    }

    /* Vị trí nút khi đã mở rộng */
    .product-detail-wrapper.expanded .btn-overlay-container {
        position: static;
        margin-top: 30px;
        margin-bottom: 20px;
    }

    /* Thêm khoảng cách dưới cho wrapper khi mở rộng */
    .product-detail-wrapper.expanded {
        max-height: none;
        overflow: visible !important;
        padding-bottom: 20px;
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Xử lý project image slider
        const projectImages = document.querySelectorAll('.project-image');

        projectImages.forEach(projectImage => {
            const slides = projectImage.querySelectorAll('img');
            let currentSlide = 0;

            // Gắn sự kiện cho nút project-next
            const nextButton = projectImage.querySelector('.project-next');
            const prevButton = projectImage.querySelector('.project-prev');

            if (nextButton) {
                nextButton.addEventListener('click', function() {
                    changeProjectSlide(1, projectImage);
                });
            }

            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    changeProjectSlide(-1, projectImage);
                });
            }
        });

        function changeProjectSlide(direction, projectImage) {
            const slides = projectImage.querySelectorAll('img');
            if (slides.length <= 1) return;

            // Tìm slide đang hiển thị
            let currentSlide = 0;
            slides.forEach((slide, index) => {
                if (slide.style.display === 'block') {
                    currentSlide = index;
                }
            });

            // Ẩn slide hiện tại
            slides[currentSlide].style.display = 'none';
            slides[currentSlide].classList.remove('fade-in');

            // Tính toán vị trí slide mới
            currentSlide = (currentSlide + direction + slides.length) % slides.length;

            // Hiển thị slide mới
            slides[currentSlide].style.display = 'block';
            slides[currentSlide].classList.add('fade-in');
        }

        // Xử lý testimonial slider (giữ nguyên code hiện tại)
        const testimonialSliders = document.querySelectorAll('.testimonial-slider');

        testimonialSliders.forEach(slider => {
            const slides = slider.querySelectorAll('.testimonial-slide');
            let currentSlide = 0;

            // Kiểm tra xem nút next có tồn tại không
            const nextButton = slider.querySelector('.testimonial-next');
            const prevButton = slider.querySelector('.testimonial-prev');

            if (nextButton) {
                nextButton.addEventListener('click', function() {
                    changeTestimonialSlide(1, slider);
                });
            }

            if (prevButton) {
                prevButton.addEventListener('click', function() {
                    changeTestimonialSlide(-1, slider);
                });
            }
        });

        function changeTestimonialSlide(direction, slider) {
            const slides = slider.querySelectorAll('.testimonial-slide');
            if (slides.length <= 1) return;

            // Tìm slide đang active
            let currentSlide = 0;
            slides.forEach((slide, index) => {
                if (slide.classList.contains('active')) {
                    currentSlide = index;
                }
            });

            // Ẩn slide hiện tại
            slides[currentSlide].classList.remove('active');
            slides[currentSlide].classList.remove('fade-in');

            // Tính toán vị trí slide mới
            currentSlide = (currentSlide + direction + slides.length) % slides.length;

            // Hiển thị slide mới
            slides[currentSlide].classList.add('active');
            slides[currentSlide].classList.add('fade-in');
        }
    });

    function toggleProductContent(button) {
        // Tìm wrapper gần nhất
        const wrapper = button.closest('.product-detail-wrapper');

        // Kiểm tra trạng thái hiện tại
        if (wrapper.classList.contains('expanded')) {
            // Thu gọn nội dung
            wrapper.classList.remove('expanded');
            button.textContent = 'Xem thêm';
            button.classList.remove('btn-thu-gon');

            // Cuộn lên đầu phần chi tiết sản phẩm
            const sectionTitle = document.querySelector('.section-product-title');
            if (sectionTitle) {
                sectionTitle.scrollIntoView({
                    behavior: 'smooth'
                });
            }
        } else {
            // Mở rộng nội dung
            wrapper.classList.add('expanded');
            button.textContent = 'Thu gọn';
            button.classList.add('btn-thu-gon');

            // Đợi một chút để DOM cập nhật, sau đó cuộn đến nút
            setTimeout(function() {
                button.scrollIntoView({
                    behavior: 'smooth',
                    block: 'center'
                });
            }, 100);
        }
    }
</script>
