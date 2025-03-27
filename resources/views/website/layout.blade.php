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
                        <img src="{{ asset('images/cate1.jpeg') }}" alt="Hậu quả 1">
                        <div class="consequen-card-layer">
                            <p>Sơn bả kém chất lượng làm mất giá trị du thuyền, giảm tốc độ tàu, tăng tiêu hao nhiên
                                liệu
                            </p>
                        </div>
                    </div>
                    <div class="consequence-card">
                        <div class="card-number">2</div>
                        <img src="{{ asset('images/cate2.jpeg') }}" alt="Hậu quả 2">
                        <div class="consequen-card-layer">
                            <p>Môi trường nước biển gây ăn mòn nhanh chóng lớp sơn tàu biển của bạn</p>
                        </div>
                    </div>
                    <div class="consequence-card">
                        <div class="card-number">3</div>
                        <img src="{{ asset('images/cate3.jpeg') }}" alt="Hậu quả 3">
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
                                <p>Một trong những du thuyền 6 sao đầu tiên được thiết kế và thi công hoàn toàn bởi những bàn tay tài hoa người Việt</p>
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
                            <button class="nav-btn prev"><i class="fa fa-chevron-left"></i></button>
                            <button class="nav-btn next"><i class="fa fa-chevron-right"></i></button>
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
                            <button class="nav-btn prev"><i class="fa fa-chevron-left"></i></button>
                            <button class="nav-btn next"><i class="fa fa-chevron-right"></i></button>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="section-4">
        <div class="container">
            <div class="section-4-content">
                <h2>Phản hồi của khách hàng về dịch vụ thi công bả hàng hải<br>của công ty TNHH Trang Trí D&T</h2>
                <img src="{{ asset('images/devide-line.svg') }}" alt="Devide line" class="devide-line-4">

                <p class="section-5-subtitle">Đánh giá thực tế từ những chủ tàu và đối tác tin cậy.</p>


                <div class="testimonial-slider">
                    <div class="company-logo">
                        <div class="logo-container">
                            <img src="{{ asset('images/dtLogo.png') }}" alt="D&T Logo">
                            <img src="{{ asset('images/person.png') }}" alt="D&T Logo" class="company-person">
                        </div>
                    </div>
                    <p class="testimonial-text">"Tôi hoàn toàn hài lòng với chất lượng dịch vụ thi công bả
                        hàng hải của công ty TNHH Trang Trí D&T"</p>
                    <div class="testimonial-author">
                        <div class="author-info">
                            <div class="author-details">
                                <p>"Dịch vụ thi công của công ty bả hàng hải của D&T"</p>
                                <p class="author-name">Nguyễn Văn A</p>
                            </div>
                        </div>
                    </div>
                    <button class="nav-btn prev"><i class="fa fa-chevron-left"></i></button>
                    <button class="nav-btn next"><i class="fa fa-chevron-right"></i></button>
                </div>
                <div class="testimonial-slider-mobile">
                    <div class="testimonial-slider-mobile-item">
                        <p class="testimonial-text">"Tôi hoàn toàn hài lòng với chất lượng dịch vụ thi công bả
                            hàng hải của công ty TNHH Trang Trí D&T"</p>
                    </div>
                    <div class="testimonial-slider-mobile-item">
                        <p class="testimonial-text">“Sản phẩm của KATAVINA
                            "Dịch vụ thi công của công ty bả hàng hải của D&T”</p>
                    </div>
                    <img src="{{ asset('images/person.png') }}" alt="D&T Logo" >
                    <button class="nav-btn prev"><i class="fa fa-chevron-left"></i></button>
                    <button class="nav-btn next"><i class="fa fa-chevron-right"></i></button>
                </div>
            </div>
        </div>
    </div>
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
                    <button type="submit">NHẬN TƯ VẤN <i class="fa fa-phone"></i></button>
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
            <div class="news-container">
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
            </div>
        </div>
    </section>
</div>
