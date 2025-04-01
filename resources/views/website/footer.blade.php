<?php $cauhinh = DB::table('cauhinh')->first(); ?>

<section id="footerMidle">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12 footerCol menuLink">
                <div class="groupFooter">
                    <div class="h4-foot">
                        THÔNG TIN LIÊN HỆ
                    </div>
                    <div class="address">
                        <ul class="info-address notStyle">
                            <li>
                                <span>{{ $cauhinh->tendoanhnghiep }}</span>
                            </li>

                            <li>
                                <span>{{ $cauhinh->mst }}</span>
                            </li>

                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Địa chỉ: {{ $cauhinh->diachi }}</span>
                            </li>

                            <li>
                                <i class="fa fa-map-marker"></i>
                                <span>Địa chỉ nhà máy: {{ $cauhinh->diachi2 }}</span>
                            </li>

                            <li>
                                <i class="fa fa-envelope"></i>
                                <span>Email: {{ $cauhinh->email }}</span>
                            </li>

                            <li>
                                <i class="fa fa-phone"></i>
                                <span>Hotline: {{ $cauhinh->hotline1 }} @if ($cauhinh->hotline2 != null)
                                        - {{ $cauhinh->hotline2 }}
                                    @endif
                                </span>
                            </li>
                            <li>
                                <i class="fa fa-home"></i>
                                <span>Website: www.baduthuyen.com</span>
                            </li>
                            <li>
                                {{ $cauhinh->bct }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol menuLink">
                <div class="groupFooter">
                    <div class="h4-foot">
                        Chính sách bán hàng
                    </div>
                    <div class="menu-foot">
                        <ul class="notStyle linklist">
                            <?php $baivietFoot = DB::table('baiviet')->where('status_foot', 1)->get(); ?>
                            @foreach ($baivietFoot as $item)
                                <li>
                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"><span><i
                                                class="fa fa-angle-right"></i> {{ $item->name }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-2 col-sm-2 col-xs-12 footerCol menuLink">
                <div class="groupFooter">
                    <div class="h4-foot">
                        Liên kết nhanh
                    </div>
                    <div class="menu-foot">
                        <ul class="notStyle linklist">
                            <li>
                                <a href="{{ route('indexCode', ['code' => 'gioi-thieu']) }}"><span><i
                                            class="fa fa-angle-right"></i> Giới thiệu</span></a>
                            </li>

                            <?php $danhmucbaivietFoot = DB::table('danhmucbaiviet')->get(); ?>
                            @foreach ($danhmucbaivietFoot as $item)
                                <li>
                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}"><span><i
                                                class="fa fa-angle-right"></i> {{ $item->name }}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12 footerCol menuLink">
                <div class="groupFooter">
                    <div class="h4-foot">
                        Hotline liên hệ
                    </div>
                    <div class="hotlineBot">
                        <img class="imgHl" src="{{ asset('images/hotline-foot.png') }}" alt="Hotline footer">
                        <div class="boxHotline">
                            <b>{{ $cauhinh->hotline1 }}</b>
                            <i>(Tất cả các ngày trong tuần)</i>
                        </div>
                    </div>
                    <div class="socical-foot">Kết nối với chúng tôi</div>
                    <div class="listSocial">
                        <ul>
                            <li class="facebook"><a target="_blank" aria-label="facebook"
                                    href="{{ $cauhinh->fanpage }}"><i class="fa fa-facebook"></i></a></li>
                            <li class="google-plus"><a target="_blank" aria-label="google"
                                    href="{{ $cauhinh->google }}"><i class="fa fa-google-plus"></i></a></li>
                            <li class="twitter"><a target="_blank" aria-label="twitter"
                                    href="{{ $cauhinh->twiter }}"><i class="fa fa-twitter"></i></a></li>
                            <li class="instagram"><a target="_blank" aria-label="youtube" href="{{ $cauhinh->ytb }}"><i
                                        class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="bg section-bg fill bg-fill bg-loaded"></div>
<section id="footerBottom">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="footer-coppyright">
                    {{ date('Y') }} © All Rights Reserved. Thiết kế website
                </div>
            </div>
            <div class="col-md-8">
                <div class="theH">
                    <marquee direction="left" onmouseout="this.start()" scrollamount="4" onmouseover="this.stop()">
                        {!! $headings ?? $cauhinhseo->headings !!}
                    </marquee>
                </div>
            </div>
        </div>
    </div>
</section>
