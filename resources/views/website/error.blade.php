@extends('website.main')

@section('meta_tags')
    <title>404 Error - Trang bạn yêu cầu không tồn tại !</title>
    <meta name='description' itemprop='description' content='404 Error - Trang bạn yêu cầu không tồn tại !' />
    <meta property='article:published_time' content='' />
    <meta property='article:section' content='event' />
    <link rel="canonical" href="{{url()->current()}}" />
    <meta property="og:description" content="404 Error - Trang bạn yêu cầu không tồn tại !" />
    <meta property="og:title" content="404 Error - Trang bạn yêu cầu không tồn tại !" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="vi-vn" />
    <meta property="og:site_name" content="{{env('SITE_URL', '404 Error - Trang bạn yêu cầu không tồn tại !')}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="404 Error - Trang bạn yêu cầu không tồn tại !" />
    <meta name="twitter:site" content="@BrnBhaskar" />
    <meta property="og:image" content="" />
    <meta property="og:image:url" content="{{url()->current()}}" />
    <meta property="og:image:size" content="300" />
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
                            <a href="{{ route('error') }}">404 Error</a>
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
                    <div class="error-404">
                        <img src="{{asset('images/404.png')}}" class="img-responsive" alt="404 Not Found" />
                        <div class="error-404">
                            <div class="error-404-title">
                                Trang bạn yêu cầu không tồn tại...
                            </div>
                            <div class="error-404-des">
                                <p>Chúng tôi không thể tìm thấy trang bạn đang tìm kiếm.</p>
                                <p>Kiểm tra lại URL hoặc trở về <a href="{{ url('/') }}">trang chủ</a>.</p>
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