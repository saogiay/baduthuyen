@extends('website.main')


@section('content')

    <div class="main-break" style="margin-bottom: 0;">
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
                                href="{{ route('indexCode', ['code' => $danhmucsanphamChitiet->code]) }}">{{ $danhmucsanphamChitiet->name }}</a>
                        </li>
                        <li>
                            <a itemprop="title"
                                href="{{ route('indexCode', ['code' => $sanpham->code]) }}">{{ $sanpham->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-page main-page-product">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="page-product">
                        <div class="detail-content detail-content-page-san-pham">
                            <div class="noi-dung-san-pham-web">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4">
                                        <div class="anh-san-pham">
                                            <div class="item">
                                                <div class="clearfix" style="max-width:474px;">
                                                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                                        @if (count($hinhanhsanpham) > 0)
                                                            @foreach ($hinhanhsanpham as $image)
                                                                <li
                                                                    data-thumb="{{ asset('storage/sanpham/hinhanh/' . $image->hinhanhsanpham) }}">
                                                                    <img src="{{ asset('storage/sanpham/hinhanh/' . $image->hinhanhsanpham) }}"
                                                                        class="img-responsive" alt="{{ $sanpham->name }}" />
                                                                </li>
                                                            @endforeach
                                                        @else
                                                            <li
                                                                data-thumb="{{ asset('storage/sanpham/' . $sanpham->anhdaidien) }}">
                                                                <img src="{{ asset('storage/sanpham/' . $sanpham->anhdaidien) }}"
                                                                    class="img-responsive" alt="{{ $sanpham->name }}" />
                                                            </li>
                                                        @endif
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-5 col-sm-5">
                                        <div class="noi-dung-san-pham-web-info">
                                            <h1 class="ten-san-pham">
                                                {{ $sanpham->name }}
                                            </h1>
                                            <div class="noi-dung-san-pham-web-info-spice">

                                                @if ($sanpham->giasanpham != null or $sanpham->giasanpham != 0)
                                                    <span>{{ number_format($sanpham->giasanpham) }}đ</span>
                                                @else
                                                    <span>Liên hệ</span>
                                                @endif

                                            </div>

                                            <div class="noi-dung-san-pham-web-info-description">
                                                {!! $sanpham->motasanpham !!}
                                            </div>

                                            <div class="product-button_group">
                                                <div class="button-group__flex">
                                                    <a href="https://m.me/{{ $cauhinh->mess }}" target="_blank"
                                                        class="btn-mua-ngay">
                                                        Tư vấn &amp; Đặt hàng
                                                        <span>(Thông qua Chat Messenger)</span>
                                                    </a>
                                                    <a href="https://zalo.me/{{ $cauhinh->zalo }}" target="_blank"
                                                        class="btn-mua-ngay btn-zalo">
                                                        Tư vấn &amp; Đặt hàng
                                                        <span>(Thông qua Chat Zalo)</span>
                                                    </a>
                                                </div>

                                                <p style="color: #DD0303; margin-top: 10px; margin-bottom: 2px;">
                                                    Bạn cần hỗ trợ tư vấn thêm về sản phẩm?</p>
                                                <p style="color: #232323; margin-bottom: 0; text-align: center">Gọi ngay
                                                    Hotline :
                                                    <span style="white-space: nowrap">
                                                        <a style="color: #DD0303;font-weight: 600;text-decoration: none;"
                                                            href="tel:{{ $cauhinh->hotline1 }}">{{ $cauhinh->hotline1 }}</a>
                                                        &nbsp;-&nbsp;
                                                        <a style="color: #DD0303;font-weight: 600;text-decoration: none;"
                                                            href="tel:{{ $cauhinh->hotline2 }}">{{ $cauhinh->hotline2 }}</a>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-3">
                                        <div class="product-policy">
                                            <div class="product-policy-title">
                                                YÊN TÂM MUA SẮM
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/lapdat.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    <span>100% nhựa nguyên sinh</span> - An toàn sức khỏe
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/baohanhlapdat.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    <span>Một lớp đồng nhất</span>, cấu tạo khung chịu lực, chống rong rêu
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/lapdat.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    Bảo hành sản phẩm <span>15 năm và 20 năm</span>, an tâm sử dụng
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/doimoi.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    <span>Miễn phí</span> giao hàng, hướng dẫn lắp đặt tận tình
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/doitra.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    Sản phẩm <span>luôn có sẵn</span> cung cấp nhanh chóng
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/doingulapdat.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    <span>Sản phẩm chính hãng</span> từ Tiền Phong
                                                </div>
                                            </div>
                                            <div class="product-policy-des">
                                                <div class="product-policy-des-img">
                                                    <img src="images/baohanhtainoi.png" alt="An toàn" />
                                                </div>
                                                <div class="product-policy-des-content">
                                                    Sản phẩm đạt chứng nhận <span>QCVN 12-1:2011/BYT, ISO 9001:2015</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                     <!-- download -->
                                    @if (!empty($sanpham->tailieu))
                                        <div class="col-md-9 col-sm-9">
                                            <p style="font-size: 18px; margin: 0px; font-weight: bold;">TẢI TÀI LIỆU</p>
                                            <span style="height: 1px; background-color: blue; width: 100%; display: inline-block; margin-bottom: 8px;"></span>
                                            <div style="padding: 20px; width: 100%; background-color: #f1f1f1;">
                                                <div>
                                                    <p style="margin-bottom: 5px;">Data Sheet</p>
                                                    <button 
                                                        style="background-color: #010cde; padding: 10px 20px; color: white; border: none; cursor: pointer;" 
                                                        onclick="openDocument('{{ asset('storage/sanpham/' . $sanpham->tailieu) }}')">
                                                        <i class="fa fa-download"></i>
                                                        <span style="margin-left: 7px;">Download</span>
                                                    </button>
                                                </div>
                                            </div>
                                            <script>
                                                function openDocument(url) {
                                                    // console.log(url);
                                                    window.open(url, "_blank");
                                                }
                                            </script>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="lien-quan chi-tiet-bai-viet">
                            <div class="nav-tabs-title">
                                <ul class="nav nav-tabs" role="tablist">
                                    <li class="active">
                                        <a href="#3" role="tab" data-toggle="tab">
                                            Thông tin chi tiết sản phẩm
                                        </a>
                                    </li>
                                </ul>
                            </div>

                            <div class="tab-content">
                                <div class="tab-pane active" id="3">
                                    <div class="chi-tiet-bai-viet noi-dung-chi-tiet">
                                        {!! $sanpham->noidungsanpham !!}
                                    </div>
                                    <div class="social-links">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <ul>
                                                    <li>
                                                        <a rel="nofollow" target="_blank"
                                                            href="https://www.facebook.com/sharer/sharer.php?u={!! url()->full() !!}"
                                                            class="social-button " id="">
                                                            <span class="fa fa-facebook"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" target="_blank"
                                                            href="https://twitter.com/intent/tweet?text=my share text&amp;url={!! url()->full() !!}"
                                                            class="social-button " id="">
                                                            <span class="fa fa-twitter"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" target="_blank"
                                                            href="https://plus.google.com/share?url={!! url()->full() !!}"
                                                            class="social-button " id="">
                                                            <span class="fa fa-google-plus"></span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a rel="nofollow" target="_blank"
                                                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url={!! url()->full() !!}&amp;title=my share text&amp;summary=dit is de linkedin summary"
                                                            class="social-button " id="">
                                                            <span class="fa fa-linkedin"></span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="page-product">
                        <div
                            class="detail-content-title detail-content-title-recents detail-content-title-recents-san-pham">
                            Các sản phẩm liên quan
                        </div>
                        <div class="row">
                            @foreach ($sanphamlienquan as $item)
                                <div class="col-xs-5ths">
                                    <div class="box-product-index">
                                        <div class="box-product-index-img">
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                class="a-img-product">
                                                <img src="{{ asset('storage/sanpham/' . $item->anhdaidien) }}"
                                                    class="img-responsive" alt="{{ $item->name }}">
                                            </a>
                                            <div class="quick-view">
                                                <a href="{{ route('indexCode', ['code' => $item->code]) }}">Thông tin chi
                                                    tiết</a>
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
                    </div>

                </div>
            </div>
        </div>
    </div>

    @include('website.footer')
@endsection

@push('scripts')
    <script>
        // slider chi tiết sản phẩm
        $(document).ready(function() {
            $('#content-slider').lightSlider({
                loop: true,
                keyPress: true,
            });
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 5,
                slideMargin: 0,
                speed: 500,
                auto: false,
                // auto:true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                },
            });
        });
    </script>
@endpush
