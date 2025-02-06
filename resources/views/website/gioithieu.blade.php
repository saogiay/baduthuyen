@extends('website.main')

@section('meta_tags')
    <title>{{$gioithieu->title}}</title>
    <meta name='description' itemprop='description' content='{{$gioithieu->description}}' />
    <meta property='article:published_time' content='{{$gioithieu->created_at}}' />
    <link rel="canonical" href="{{url()->current()}}" />
    <meta property='article:section' content='event' />
    <meta property="og:description" content="{{$gioithieu->description}}" />
    <meta property="og:title" content="{{$gioithieu->title}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="vi-vn" />
    <meta property="og:site_name" content="{{env('SITE_URL', $gioithieu->title)}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{$gioithieu->title}}" />
    <meta name="twitter:site" content="@BrnBhaskar" />
    @foreach($hinhanhdaidien as $anh)
        <meta property="og:image" content="{{ asset('upload/slider/'.$anh->anhdaidien) }}" />
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
                            <a itemprop="title" href="{{ route('indexCode', ['code' => 'gioi-thieu']) }}">Giới thiệu</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	<div class="main-content-page">
    	<div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 dis-block">
                    @include('website.sidebar')
                </div>
                <div class="col-md-9 col-sm-8 padding-right-25">
                    <div class="detail-content">
                        <div class="detail-content-body-name" style="margin-bottom: 10px;">
                            Giới thiệu
                        </div>
                        <div class="detail-content-body chi-tiet-bai-viet">
                            {!!$gioithieu->noidunggioithieu!!}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-4 dis-none">
                    @include('website.sidebar')
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
                        <marquee direction="left" onmouseout="this.start()" scrollamount="4" onmouseover="this.stop()">
                            {!!$gioithieu->headings!!}
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection