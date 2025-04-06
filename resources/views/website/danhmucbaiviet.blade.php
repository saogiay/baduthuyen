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
                                href="{{ route('indexCode', ['code' => $danhmucbaiviet->code]) }}">{{ $danhmucbaiviet->name }}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="main-content-page">
        @if(request()->path() === 'dich-vu-son-ba-du-thuyen')
            @include('website.layout')  
        @else
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-4 dis-block">
                        @include('website.sidebar')
                    </div>
                    <div class="col-md-9 col-sm-8 padding-right-25">
                        <div class="detail-content-body-name" style="margin-bottom: 10px;">
                            {{ $danhmucbaiviet->name }}
                        </div>
                        <div class="detail-content">
                            <div class="detail-content-body">
                                @if (count($baiviet) > 0)
                                    @foreach ($baiviet as $item)
                                        <div class="list-item">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-4 col-xs-12">
                                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"
                                                        title="{{ $item->name }}">
                                                        <img src="{{ asset('storage/baiviet/' . $item->anhdaidien) }}"
                                                            class="img-responsive" alt="{{ $item->name }}">
                                                    </a>
                                                </div>
                                                <div class="col-md-8 col-sm-8 col-xs-12">
                                                    <a class="list-item-title"
                                                        href="{{ route('indexCode', ['code' => $item->code]) }}">{{ $item->name }}</a>
                                                    <p class="list-item-date">
                                                        <i class="fa fa-bars"></i> {{ $item->danhmucbaiviet->name }} | <i
                                                            class="fa fa-eye"></i> {{ $item->count_page }} lượt xem
                                                    </p>
                                                    <div class="is-divider"></div>
                                                    <p class="list-item-mo-ta">
                                                        @if (mb_strlen($item->motabaiviet, 'UTF-8') >= 180)
                                                            {{ mb_substr($item->motabaiviet, 0, 180, 'UTF-8') }}[...]
                                                        @else
                                                            {{ $item->motabaiviet }}
                                                        @endif
                                                    </p>
                                                    <div class="about-block-more">
                                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}"><i
                                                                class="fa fa-angle-right"></i> Xem chi tiết</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    {!! $baiviet->links() !!}
                                @else
                                    Dữ liệu đang được cập nhật ...
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 dis-none">
                        @include('website.sidebar')
                    </div>
                </div>
            </div>
        @endif
    </div>

    @include('website.footer')
@endsection
