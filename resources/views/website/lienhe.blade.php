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
@endsection