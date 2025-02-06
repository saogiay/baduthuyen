@extends('website.main')

@section('meta_tags')

    <title>Thông tin liên hệ</title>
    <meta name='description' itemprop='description' content='Thông tin liên hệ. Mọi thắc mắc vui lòng tìm chúng tôi qua bản đồ hoặc gọi điện thoại hoặc đến trực tiếp văn phòng của chúng tôi.' />
    <link rel="canonical" href="{{url()->current()}}" />
    <meta property='article:published_time' content='' />
    <meta property='article:section' content='event' />
    <meta property="og:description" content="Thông tin liên hệ. Mọi thắc mắc vui lòng tìm chúng tôi qua bản đồ hoặc gọi điện thoại hoặc đến trực tiếp văn phòng của chúng tôi." />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="vi-vn" />
    <meta property="og:site_name" content="{{env('SITE_URL', 'Thông tin liên hệ')}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="Thông tin liên hệ" />
    <meta name="twitter:site" content="@BrnBhaskar" />

    @foreach($hinhanhdaidien as $anh)
        <meta property="og:image" content="{{ url('/') }}/public/upload/slider/{{$anh->anhdaidien}}" />
        <meta property="og:image:url" content="" />
        <meta property="og:image:size" content="300" />
    @endforeach
@endsection

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
                            <a itemprop="title" href="{{ route('indexCode', ['code' => 'lien-he']) }}">Liên hệ</a>
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
                        Liên hệ
                    </div>
                    <div class="main-content-index-body">
                        <div class="main-content-index-post">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="caption-contact">
                                        <?php $cauhinh = DB::table('cauhinh')->first(); ?>
                                        <div class="caption-contact-title">
                                            {{$cauhinh->tendoanhnghiep}}
                                        </div>
                                        <div class="caption-contact-body">
                                            <p><i class="fa fa-map-marker"></i> Địa chỉ: {{$cauhinh->diachi}}</p>
                                          	<p><i class="fa fa-map-marker"></i> Địa chỉ nhà máy: {{$cauhinh->diachi2}}</p>
                                            <p><i class="fa fa-phone"></i> Hotline: {{$cauhinh->hotline1}} @if($cauhinh->hotline2 != NULL)- {{$cauhinh->hotline2}}@endif</p>
                                            <p><i class="fa fa-envelope"></i> Email: {{$cauhinh->email}}</p>
                                            <p><i class="fa fa-home"></i> Website: www.baduthuyen.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="map-contact">
                                        {!!$cauhinh->map!!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('website.footer')
    <section id="footerBottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-coppyright">
                       {{date('Y')}} © All Rights Reserved. <a href="https://daivietsoft.com/">Thiết kế website</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="theH">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection