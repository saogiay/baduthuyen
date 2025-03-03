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

                                <div class="row">
                                    @foreach ($sanpham as $item)
                                        <div class="col-xs-5ths">
                                            <div class="box-product-index margin-bottom-10">
                                                <div class="box-product-index-img box-product-index-img-page">
                                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                        class="a-img-product">
                                                        <img src="{{ asset('storage/sanpham/' . $item->anhdaidien) }}"
                                                            class="img-responsive" alt="{{ $item->name }}">
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
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('website.footer')
@endsection
