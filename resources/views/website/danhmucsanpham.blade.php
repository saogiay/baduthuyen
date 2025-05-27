@extends('website.main')

@section('content')

    <div class="main-break">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb list-unstyled">
                        <li class="home">
                            <a class="active" href="{{ url('/') }}" title="Về trang chủ">
                                <span itemprop="title"><i class="fa fa-home "></i> Trang chủ</span>
                            </a>
                        </li>
                        <li>
                            <a itemprop="title"
                                href="{{ route('indexCode', ['code' => $danhmucsanpham->code]) }}">{{ $danhmucsanpham->name }}</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="detail-content-body-name">
                        {{ $danhmucsanpham->name }}
                    </div>
                    <div class="detail-content">

                        @if (count($sanpham) > 0)
                            <div class="detail-content-body-product">

                                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-1">
                                    @foreach ($sanpham as $item)
                                        <div class="col">
                                            <div class="box-product-index h-100">
                                                <div class="box-product-index-img box-product-index-img-page">
                                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                        class="a-img-product">
                                                        <img src="{{ asset('storage/sanpham/' . $item->anhdaidien) }}"
                                                            class="img-fluid w-100" alt="{{ $item->name }}">
                                                    </a>
                                                    <div class="quick-view">
                                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}">Thông
                                                            tin chi tiết</a>
                                                    </div>
                                                </div>
                                                <div class="box-product-index-cap">
                                                    <div class="box-product-index-code">
                                                        Mã SP: <span>{{ $item->masp }}</span>
                                                    </div>
                                                    <div class="box-product-index-name">
                                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                            title="{{ $item->name }}">
                                                            @if (mb_strlen($item->name, 'UTF-8') >= 45)
                                                                {{ mb_substr($item->name, 0, 45, 'UTF-8') }}...
                                                            @else
                                                                {{ $item->name }}
                                                            @endif
                                                        </a>
                                                    </div>
                                                    <div class="box-product-index-spice">
                                                        @if ($item->giasanpham != null or $item->giasanpham != 0)
                                                            {{ number_format($item->giasanpham) }}đ
                                                        @else
                                                            Liên hệ
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {!! $sanpham->links() !!}
                                <section class="section-product-detail">
                                    <div class="container">
                                        <h2 class="section-product-title">Chi tiết sản phẩm</h2>
                                        <div class="product-detail-wrapper">
                                            <div class="product-detail-content">
                                                <h2 class="text-center">
                                                    Dịch Vụ Thi Công Bả Du Thuyền Là Gì? Quy Trình, Lưu Ý Sơn Bả Du Thuyền
                                                </h2>
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
                                                <h3>
                                                    Lưu ý quan trọng khi thi công bả du thuyền
                                                </h3>
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
                                                    Mọi người có thể tham khảo dịch vụ thi công bả hàng hải của công ty cổ phần trang trí D&T, là
                                                    đơn
                                                    vị
                                                    dẫn đầu trong lĩnh vực trang trí ngoại thất du thuyền tại Việt Nam. Mỗi công trình thi công bởi
                                                    D&T
                                                    đều mang đậm dấu ấn của sự chuyên nghiệp và tinh thần trách nhiệm. Sự thành công vang dội của
                                                    các dự
                                                    án như Grand Pioneers Cruise – đạt giải thưởng "Du thuyền xanh tốt nhất thế giới năm 2024", hay
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
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
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

    @include('website.footer')
@endsection
