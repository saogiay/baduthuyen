@extends('website.main')

@section('content')
    <div class="slider">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <?php $slider = DB::table('slider')->orderBy('id', 'DESC')->get(); ?>
                <?php $i = 0; ?>
                @foreach ($slider as $item)
                    <div
                        @if ($i == 0) class="item active"
             @else
             class="item" @endif>
                        <?php $i++; ?>
                        <a href="{{ $item->linkbaiviet }}">
                            <img src="{{ asset('storage/slider/' . $item->anhdaidien) }}" alt="Slider">
                        </a>
                    </div>
                @endforeach
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="fa fa-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="fa fa-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <div class="section-lg1">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12 m-bot-3" data-anim-type="fade-in-down" data-anim-delay="100">
                    <div class="fea-col-info">
                        <h3 class="bigsubheading fw-700">Thi công <br> Nhanh chóng
                            <span>
                                01.
                            </span>
                        </h3>
                        <div class="text">
                            Quá trình thi công nhanh chóng, không làm mất thời gian của khách hàng.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 m-bot-3" data-anim-type="fade-in-down" data-anim-delay="100">
                    <div class="fea-col-info">
                        <h3 class="bigsubheading fw-700">Dịch vụ <br> Chuyên nghiệp
                            <span>
                                02.
                            </span>
                        </h3>
                        <div class="text">
                            Dịch vụ chuyên nghiệp, có quy trình rõ ràng, phục vụ khách hàng tận tình.
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12 m-bot-3" data-anim-type="fade-in-down" data-anim-delay="100">
                    <div class="fea-col-info">
                        <h3 class="bigsubheading fw-700">Trên 10 năm <br> Kinh nghiệm
                            <span>
                                03.
                            </span>
                        </h3>
                        <div class="text">
                            Đội ngũ có tâm với nghề và có nhiều năm kinh nghiệm.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="main-index-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="box-index-title-2">
                        Thi công Sơn Bả du thuyền số 1 Việt Nam
                    </div>
                    <div class="text-center" style="margin-bottom: 30px"><img src="images/e.png"/ alt="Img"></div>
                    <div class="box-index-content">
                        <div class="row">
                            <?php $baivietIndex = DB::table('baiviet')->where('status', 1)->where('status3', 1)->orderBy('id', 'desc')->limit(2)->get(); ?>
                            @foreach ($baivietIndex as $item)
                                <div class="col-md-4">
                                    <div class="box-index-post">
                                        <div class="box-index-post-img">
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                title="{{ $item->name }}">
                                                <img src="{{ asset('storage/baiviet/' . $item->anhdaidien) }}"
                                                    class="img-responsive" alt="{{ $item->name }}">
                                            </a>
                                            <div class="box-index-post-info">
                                                <ul class="notStyle">
                                                    <li class="time"><i class="fa fa-eye" aria-hidden="true"></i> Lượt
                                                        xem: {{ $item->count_page }}</li>
                                                    <?php
                                                    $parentsCategory = DB::table('danhmucbaiviet')->select('name')->where('id', $item->danhmucbaiviet_id)->first();
                                                    ?>
                                                    <li class="post"><i class="fa fa-check-square"></i>
                                                        <span>{{ $parentsCategory->name }}</span></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="box-index-post-cap">
                                            <div class="box-index-post-name">
                                                <a href="{{ route('indexCode', ['code' => $item->code]) }}">
                                                    @if (mb_strlen($item->name, 'UTF-8') >= 80)
                                                        {{ mb_substr($item->name, 0, 80, 'UTF-8') }}...
                                                    @else
                                                        {{ $item->name }}
                                                    @endif
                                                </a>
                                            </div>
                                            <div class="box-index-post-des">
                                                @if (mb_strlen($item->motabaiviet, 'UTF-8') >= 80)
                                                    {{ mb_substr($item->motabaiviet, 0, 80, 'UTF-8') }}...
                                                @else
                                                    {{ $item->motabaiviet }}
                                                @endif
                                            </div>
                                            <div class="about-block-more">
                                                <a href="{{ route('indexCode', ['code' => $item->code]) }}"><i
                                                        class="fa fa-angle-right"></i> Xem chi tiết</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            <div class="col-md-4">
                                <?php $baivietIndex2 = DB::table('baiviet')->where('status', 1)->where('status3', 1)->orderBy('id', 'desc')->offset(2)->limit(4)->get(); ?>
                                @foreach ($baivietIndex2 as $item2)
                                    <div class="new-block">
                                        <div class="new-block-img">
                                            <a href="{{ route('indexCode', ['code' => $item2->code]) }}">
                                                <img src="{{ asset('storage/baiviet/' . $item2->anhdaidien) }}"
                                                    alt="{{ $item2->name }}" />
                                            </a>
                                        </div>
                                        <div class="new-block-cap">
                                            <div class="new-block-name">
                                                <a href="{{ route('indexCode', ['code' => $item2->code]) }}">
                                                    {{ $item2->name }}
                                                </a>
                                            </div>
                                            <div class="new-block-date">
                                                <i class="fa fa-calendar"></i>
                                                {{ date('d/m/Y', strtotime($item2->created_at)) }}
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
    </div>

    <?php $danhmucbaiviet_duan = DB::table('danhmucbaiviet')->where('status2', 3)->get(); ?>
    @foreach ($danhmucbaiviet_duan as $cha)
        <div class="section-lg1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="list-cat-block">
                            <ul>
                                <li class="first-cat">
                                    <h3>
                                        <a href="{{ route('indexCode', ['code' => $cha->code]) }}">{{ $cha->name }}</a>
                                    </h3>
                                </li>
                                <li class="cat-childs hidden-xs text-right">
                                    <a href="{{ route('indexCode', ['code' => $cha->code]) }}">Xem tất cả</a>
                                </li>
                            </ul>
                        </div>

                        <div class="row">
                            <?php $baiviet_duan = DB::table('baiviet')->where('danhmucbaiviet_id', $cha->id)->where('status2', 1)->limit(4)->get(); ?>
                            @foreach ($baiviet_duan as $item)
                                <div class="col-md-3 col-xs-6">
                                    <div class="activity-block">
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}">
                                            <img src="{{ asset('storage/baiviet/' . $item->anhdaidien) }}"
                                                class="hover-shadow">
                                            <div class="activity-block-cap">
                                                {{ $item->name }}
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    @foreach ($danhmucsanpham as $cha)
        <div class="main-index-content main-index-content-desktop">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box-index-title-2">
                            Sản phẩm
                        </div>
                        <div class="text-center" style="margin-bottom: 30px"><img src="images/e.png"/ alt="Img">
                        </div>
                        <div class="box-index-title-des">
                            Làm phong phú thêm không gian cuộc sống với những dải sắc màu ấn tượng của chúng tôi.
                        </div>
                        <div class="box-index">
                            <div class="row">
                                <div class="col-md-12">

                                    <ul class="nav nav-tabs">
                                        <?php $danhmucspcha = DB::table('danhmucsanpham')->where('danhmuccha_id', $cha->id)->where('status', 1)->get(); ?>
                                        <?php $i = 0; ?>
                                        @foreach ($danhmucspcha as $item)
                                            <?php $i += 1; ?>
                                            <li class="@if ($i == 1) <?php echo 'active'; ?> @endif">
                                                <a data-toggle="tab" href="#cate_{{ $item->id }}">
                                                    {{ $item->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>

                                    <div class="tab-content">
                                        <?php $a = 0; ?>
                                        @foreach ($danhmucspcha as $item2)
                                            <?php $a += 1; ?>
                                            <div id="cate_{{ $item2->id }}"
                                                class="tab-pane fade in @if ($a == 1) <?php echo 'active'; ?> @endif">
                                                <div class="row">

                                                    <?php $danhmucconIds = DB::table('danhmucsanpham')->where('danhmuccha_id', $item2->id)->get()->pluck('id')->toArray();
                                                    $sanpham = DB::table('sanpham')->whereIn('danhmucsanpham_id', $danhmucconIds)->orWhere('danhmucsanpham_id', $item2->id)->where('status', 1)->orderBy('id', 'desc')->limit(10)->get(); ?>

                                                    @foreach ($sanpham as $item)
                                                        <div class="col-xs-5ths">
                                                            <div class="box-product-index">
                                                                <div class="box-product-index-img">
                                                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                                        class="a-img-product">
                                                                        <img src="{{ asset('storage/sanpham/' . $item->anhdaidien) }}"
                                                                            class="img-responsive"
                                                                            alt="{{ $item->name }}">
                                                                    </a>
                                                                    <div class="quick-view">
                                                                        <a
                                                                            href="{{ route('indexCode', ['code' => $item->code]) }}">Thông
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
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="about-block-more cate-block-more">
                            <a href="{{ route('indexCode', ['code' => $cha->code]) }}"><i class="fa fa-angle-right"></i>
                                Xem tất cả</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="block-new">
        <div class="container">
            <div class="row">
                <?php $danhmucbaiviet = DB::table('danhmucbaiviet')->where('status2', 1)->limit(2)->get(); ?>
                @foreach ($danhmucbaiviet as $cha)
                    <div class="col-md-4">
                        <div class="block-new-title">
                            <div class="title-section-post-index">
                                <a href="{{ route('indexCode', ['code' => $cha->code]) }}">{{ $cha->name }}</a>
                            </div>
                        </div>
                        <div class="block-new-content">
                            <?php $baiviet = DB::table('baiviet')->where('danhmucbaiviet_id', $cha->id)->where('status', 1)->limit(3)->get(); ?>
                            @foreach ($baiviet as $item)
                                <div class="new-block">
                                    <div class="new-block-img">
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}">
                                            <img src="{{ asset('storage/baiviet/' . $item->anhdaidien) }}"
                                                alt="{{ $item->name }}">
                                        </a>
                                    </div>
                                    <div class="new-block-cap">
                                        <div class="new-block-name">
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}">
                                                {{ $item->name }}
                                            </a>
                                        </div>
                                        <div class="new-block-des">
                                            @if (mb_strlen($item->motabaiviet, 'UTF-8') >= 90)
                                                {{ mb_substr($item->motabaiviet, 0, 90, 'UTF-8') }}...
                                            @else
                                                {{ $item->motabaiviet }}
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach

                <div class="col-md-4">
                    <div class="block-new-title">
                        <div class="title-section-post-index">
                            <a href=""> Kết nối với chúng tôi</a>
                        </div>
                    </div>
                    <div class="block-new-content">
                        <div id="fb-root"></div>
                        <script>
                            (function(d, s, id) {
                                var js, fjs = d.getElementsByTagName(s)[0];
                                if (d.getElementById(id)) return;
                                js = d.createElement(s);
                                js.id = id;
                                js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10";
                                fjs.parentNode.insertBefore(js, fjs);
                            }(document, 'script', 'facebook-jssdk'));
                        </script>

                        <div class="fb-page" data-href="{{ $cauhinh->fanpage }}" data-tabs="timeline" data-width="400"
                            data-height="400" data-small-header="false" data-adapt-container-width="true"
                            data-hide-cover="false" data-show-facepile="true">
                            <blockquote cite="{{ $cauhinh->fanpage }}" class="fb-xfbml-parse-ignore">
                                <a href="{{ $cauhinh->fanpage }}"> </a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- The Modal/Lightbox -->
    <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
            <?php $i = 0; ?>
            @foreach ($hoatdong as $item)
                <?php $i += 1; ?>
                <div class="mySlides">
                    <div class="numbertext">{{ $i }} / {{ count($hoatdong) }}</div>
                    <img src="{{ asset('storage/hoatdong/' . $item->anhdaidien) }}" style="width:100%">
                </div>
            @endforeach

            <!-- Next/previous controls -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

            <!-- Caption text -->
            <div class="caption-container">
                <p id="caption"></p>
            </div>
            <?php $y = 0; ?>
            @foreach ($hoatdong as $item)
                <?php $y += 1; ?>
                <!-- Thumbnail image controls -->
                <div class="column">
                    <img class="demo" src="{{ asset('storage/hoatdong/' . $item->anhdaidien) }}"
                        onclick="currentSlide({{ $y }})" alt="{{ $item->name }}">
                </div>
            @endforeach

        </div>
    </div>

    @include('website.footer')
@endsection

@push('scripts')
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);
    </script>
@endpush
