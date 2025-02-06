@extends('website.main')

@section('meta_tags')

    <title>{{$danhmucsanpham->title}}</title>
    <meta name='description' itemprop='description' content='{{$danhmucsanpham->description}}' />
    <meta property='article:published_time' content='{{$danhmucsanpham->created_at}}' />
    <link rel="canonical" href="{{url()->current()}}" />
    <meta property='article:section' content='event' />
    <meta property="og:description" content="{{$danhmucsanpham->description}}" />
    <meta property="og:title" content="{{$danhmucsanpham->title}}" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="vi-vn" />
    <meta property="og:site_name" content="{{env('SITE_URL', $danhmucsanpham->title)}}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{$danhmucsanpham->title}}" />
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
                            <a itemprop="title" href="{{ route('indexCode', ['code' => $danhmucsanpham->code]) }}">{{$danhmucsanpham->name}}</span></a>
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
                        {{$danhmucsanpham->name}}
                    </div>
                    <div class="detail-content">
                        
                        @if(count($sanpham) > 0)
                        <div class="detail-content-body-product">
                            
                            <div class="row">
                            @foreach($sanpham as $item)
                            <div class="col-xs-5ths">
                                <div class="box-product-index margin-bottom-10">
                                    <div class="box-product-index-img box-product-index-img-page">
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}" class="a-img-product">
                                            <img src="public/upload/sanpham/{{$item->anhdaidien}}" class="img-responsive" alt="{{$item->name}}">
                                        </a>
                                        <div class="quick-view">
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}">Thông tin chi tiết</a>
                                        </div>
                                    </div>
                                    <div class="box-product-index-cap">
                                      	<div class="box-product-index-code">
                                            Mã SP: <span>{{ $item->masp }}</span>
                                        </div>
                                        <div class="box-product-index-name">
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}" title="{{$item->name}}">
                                                @if(mb_strlen($item->name, 'UTF-8') >= 45)
                                                    {{mb_substr($item->name,0,45,'UTF-8')}}...
                                                @else
                                                    {{$item->name}}
                                                @endif
                                            </a>
                                        </div>
                                        <div class="box-product-index-spice">
                                            @if($item->giasanpham != NULL or $item->giasanpham != 0)
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
                        </div>
                        @endif
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
                        <marquee direction="left" onmouseout="this.start()" scrollamount="4" onmouseover="this.stop()">
                            {!!$danhmucsanpham->headings!!}
                        </marquee>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection