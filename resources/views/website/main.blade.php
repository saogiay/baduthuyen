<!DOCTYPE html>
<html lang="vi">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Courgette&family=Roboto:wght@400;700&family=Shrikhand&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
    <meta name="robots" content="index,follow" />
    <meta name="google-site-verification" content="sxDrQyN6kO8uuQWwTP2EhvlDdY-4av45EOGXRNQ2AFY">
    <link rel="shortcut icon" href="{{ asset('storage/cauhinh/favicon.ico') }}" type="image/x-icon">

    <title>{{ $title }}</title>
    <meta name='description' itemprop='description' content='{{ $description }}' />
    <meta property='article:published_time' content='{{ $created_at }}' />
    <link rel="canonical" href="{{ url()->current() }}" />
    <meta property='article:section' content='event' />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:type" content="article" />
    <meta property="og:locale" content="en-us" />
    <meta property="og:locale:alternate" content="vi-vn" />
    <meta property="og:site_name" content="{{ env('SITE_URL', $title) }}" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="{{ $title }}" />
    <meta name="twitter:site" content="@BrnBhaskar" />
    @if (isset($hinhanhdaidien))
        <meta property="og:image" content="{{ $hinhanhdaidien }}" />
        <meta property="og:image:url" content="{{ $hinhanhdaidien }}" />
        <meta property="og:image:size" content="300" />
    @endif

    {!! $cauhinhseo->webmastertool !!}
    {!! $cauhinhseo->script !!}
</head>

<body>
    <style>
        .google-translate {
            margin-left: 10px;
        }

        .google-translate-mobile {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        a.gflag {
            vertical-align: middle;
            font-size: 0px !important;
            display: inline-block !important;
            padding: 0 !important;
            background-repeat: no-repeat;
            background-image: url(//gtranslate.net/flags/24.png);
            margin-left: 10px;
        }

        @media(max-width: 480px) {
            a.gflag {
                transform: translateY(5px);
                background-image: none;
            }
        }

        a.gflag img {
            border: 0;
        }

        /*
        a.gflag:hover {
        background-image: url(//gtranslate.net/flags/24a.png);
        }
        */
        #goog-gt-tt {
            display: none !important;
        }

        .goog-te-banner-frame {
            display: none !important;
        }

        .goog-te-menu-value:hover {
            text-decoration: none !important;
        }

        body {
            top: 0 !important;
        }

        #google_translate_element2,
        .skiptranslate iframe {
            display: none !important;
        }

        @media (max-width: 576px) {
            a.gflag {
                margin-left: 0px;
                margin-right: 2px;
                margin-top: -15px;
            }

            a.gflag img {
                height: 25px;
                object-fit: contain;

            }
        }

        .grid-mobile {
            display: flex;
            align-items: center;
        }

        @media (max-width: 991px) {
            .grid-mobile {
                display: grid;
                grid-template-columns: repeat(2, minmax(0, 1fr));
                gap: 6px;
            }

            .gflag.khmer img {
                height: 25px !important;
            }

            .gflag.en img {
                height: 25px !important;
            }
        }
    </style>

    <div id="wrapper">
        <div class="overlay"></div>
        <div class="header">
            <div class="header-block">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-4 no-pad-right">
                            <div class="logo-site">
                                <a href="{{ url('/') }}">
                                    <img class="img-responsive" src="{{ asset('storage/cauhinh/' . $cauhinh->logo) }}"
                                        alt="{{ $cauhinh->tendoanhnghiep }}">
                                </a>
                            </div>
                            <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                                <span class="hamb-top"></span>
                                <span class="hamb-middle"></span>
                                <span class="hamb-bottom"></span>
                            </button>
                        </div>

                        <div class="col-xs-6 mobile-block-desktop-none">
                            <div class="thuong-hieu">
                                <img src="{{ asset('images/logo-nippon-paint.webp') }}" alt="Logo Nippon Paint">
                            </div>
                        </div>

                        <div class="col-md-4 col-sm-4 col-xs-12 mobile-none-desktop-block">
                            <div class="search">
                                <form action="tim-kiem" method="get">
                                    <div class="input-group">
                                        <input name="tukhoa" type="text" class="form-control"
                                            placeholder="Nhập từ khóa tìm kiếm...">
                                        <span class="input-group-btn">
                                            <button type="submit" aria-label="search-button" class="btn btn-success">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>
                        </div>
                        <div class="col-md-1 col-sm-1 col-xs-1 mobile-none-desktop-block"></div>
                        <div class="col-md-3 col-sm-3 col-xs-4 mobile-none-desktop-block">
                            <div class="thuong-hieu">
                                <img src="{{ asset('images/logo-nippon-paint.webp') }}" alt="Logo Nippon Paint">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="menu">
                <div class="container">
                    <div class="row">

                        <div class="col-md-12">
                            <nav class="navbar navbar-inverse">

                                <ul class="nav navbar-nav">
                                    <li>
                                        <a href="{{ url('/') }}" class="active">
                                            <i class="fa fa-home"></i>
                                            Trang chủ
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('indexCode', ['code' => 'gioi-thieu']) }}">
                                            Giới thiệu
                                        </a>
                                    </li>
                                    <?php $danhmucSanPhamMenuMobile1 = DB::table('danhmucsanpham')->where('danhmuccha_id', 0)->orWhere('danhmuccha_id', null)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                    @foreach ($danhmucSanPhamMenuMobile1 as $danhMucCha)
                                        <li class="li-sub">
                                            <a href="{{ route('indexCode', ['code' => $danhMucCha->code]) }}">
                                                {{ $danhMucCha->name }}
                                            </a>
                                            <?php $danhmucSanPhamMenuMobile2 = DB::table('danhmucsanpham')->where('danhmuccha_id', $danhMucCha->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                            @if (count($danhmucSanPhamMenuMobile2) > 0)
                                                <ul class="navbar-sub">
                                                    @foreach ($danhmucSanPhamMenuMobile2 as $itemMoBile)
                                                        <li class="li-sub-2">
                                                            <a
                                                                href="{{ route('indexCode', ['code' => $itemMoBile->code]) }}">
                                                                <i class="fa fa-angle-right"></i>
                                                                {{ $itemMoBile->name }}
                                                            </a>
                                                            <?php $danhmucSanPhamMenuMobile3 = DB::table('danhmucsanpham')->where('danhmuccha_id', $itemMoBile->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                                            @if (count($danhmucSanPhamMenuMobile3) > 0)
                                                                <ul class="navbar-sub-2">
                                                                    @foreach ($danhmucSanPhamMenuMobile3 as $itemMoBileCon)
                                                                        <li class="li-sub-3">
                                                                            <a
                                                                                href="{{ route('indexCode', ['code' => $itemMoBileCon->code]) }}">
                                                                                <i class="fa fa-angle-right"></i>
                                                                                {{ $itemMoBileCon->name }}
                                                                            </a>
                                                                            <?php $danhmucSanPhamMenuMobile4 = DB::table('danhmucsanpham')->where('danhmuccha_id', $itemMoBileCon->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                                                            @if (count($danhmucSanPhamMenuMobile4) > 0)
                                                                                <ul class="navbar-sub-3">
                                                                                    @foreach ($danhmucSanPhamMenuMobile4 as $itemMoBileConCon)
                                                                                        <li>
                                                                                            <a
                                                                                                href="{{ route('indexCode', ['code' => $itemMoBileConCon->code]) }}">
                                                                                                <i
                                                                                                    class="fa fa-angle-right"></i>
                                                                                                {{ $itemMoBileConCon->name }}
                                                                                            </a>
                                                                                        </li>
                                                                                    @endforeach
                                                                                </ul>
                                                                            @endif
                                                                        </li>
                                                                    @endforeach
                                                                </ul>
                                                            @endif
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            @endif
                                        </li>
                                    @endforeach
                                    <?php $danhmucbaivietMenu = DB::table('danhmucbaiviet')->where('status', 1)->get(); ?>
                                    @foreach ($danhmucbaivietMenu as $item)
                                        <li>
                                            <a href="{{ route('indexCode', ['code' => $item->code]) }}">
                                                {{ $item->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    <li>
                                        <a href="{{ route('indexCode', ['code' => 'lien-he']) }}">
                                            Liên hệ
                                        </a>
                                    </li>
                                </ul>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @yield('content')

        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-logo">
                    <a href="">
                        <img src="{{ asset('storage/cauhinh/' . $cauhinh->logo) }}" alt="Logo">
                    </a>
                </li>
                <li class="sidebar-brand">
                    <form class="navbar-form navbar-right" action="{{ route('indexCode', ['code' => 'tim-kiem']) }}"
                        method="post">
                        @csrf
                        <div class="input-group">
                            <input type="text" class="form-control" name="tukhoa"
                                placeholder="Tìm kiếm thông tin.." required>
                            <div class="input-group-btn">
                                <button class="btn btn-default" aria-label="search-button" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </li>
                <li>
                    <a href="{{ url('/') }}" class="active">Trang chủ</a>
                </li>
                <li><a href="{{ route('indexCode', ['code' => 'gioi-thieu']) }}">Giới thiệu</a></li>
                <?php $danhmucSanPhamMenuMobile1 = DB::table('danhmucsanpham')->where('danhmuccha_id', 0)->orWhere('danhmuccha_id', null)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                @foreach ($danhmucSanPhamMenuMobile1 as $danhMucCha)
                    <li>
                        <a href="{{ route('indexCode', ['code' => $danhMucCha->code]) }}">{{ $danhMucCha->name }}</a>
                        <?php $danhmucSanPhamMenuMobile2 = DB::table('danhmucsanpham')->where('danhmuccha_id', $danhMucCha->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                        @if (count($danhmucSanPhamMenuMobile2) > 0)
                            <ul>
                                @foreach ($danhmucSanPhamMenuMobile2 as $itemMoBile)
                                    <li>
                                        <a href="{{ route('indexCode', ['code' => $itemMoBile->code]) }}"><i
                                                class="fa fa-angle-right"></i> {{ $itemMoBile->name }}</a>
                                        <?php $danhmucSanPhamMenuMobile3 = DB::table('danhmucsanpham')->where('danhmuccha_id', $itemMoBile->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                        @if (count($danhmucSanPhamMenuMobile3) > 0)
                                            <ul>
                                                @foreach ($danhmucSanPhamMenuMobile3 as $itemMoBileCon)
                                                    <li>
                                                        <a
                                                            href="{{ route('indexCode', ['code' => $itemMoBileCon->code]) }}">
                                                            <i class="fa fa-angle-right"></i>
                                                            {{ $itemMoBileCon->name }}
                                                        </a>
                                                        <?php $danhmucSanPhamMenuMobile4 = DB::table('danhmucsanpham')->where('danhmuccha_id', $itemMoBileCon->id)->where('status', 1)->orderBy('vitri', 'ASC')->get(); ?>
                                                        @if (count($danhmucSanPhamMenuMobile4) > 0)
                                                            <ul>
                                                                @foreach ($danhmucSanPhamMenuMobile4 as $itemMoBileConCon)
                                                                    <li>
                                                                        <a
                                                                            href="{{ route('indexCode', ['code' => $itemMoBileConCon->code]) }}">
                                                                            <i class="fa fa-angle-right"></i>
                                                                            {{ $itemMoBileConCon->name }}
                                                                        </a>
                                                                    </li>
                                                                @endforeach
                                                            </ul>
                                                        @endif
                                                    </li>
                                                @endforeach
                                            </ul>
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                @endforeach
                <?php $danhmucbaivietMenu = DB::table('danhmucbaiviet')->where('status', 1)->get(); ?>
                @foreach ($danhmucbaivietMenu as $item)
                    <li>
                        <a href="{{ route('indexCode', ['code' => $item->code]) }}">{{ $item->name }}</a>
                    </li>
                @endforeach
                <li><a href="{{ route('indexCode', ['code' => 'lien-he']) }}">Liên hệ</a></li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
    </div>

    <div class="sticky-CTA show-CTA">
        <ul class="list-unstyled" style="margin-bottom: 0">
            <li class="map">
                <a href="{{ $cauhinh->fanpage }}" target="_blank">
                    <span class="icon"></span>
                    <span class="text">Fanpage</span>
                </a>
            </li>
            <li class="zalo">
                <a href="https://zalo.me/{{ $cauhinh->zalo }}" target="_blank">
                    <span class="icon"></span>
                    <span class="text">Chat Zalo</span>
                </a>
            </li>
            <li class="call">
                <a href="tel:{{ $cauhinh->zalo }}">
                    <i class="fa fa-phone"></i>
                    <span class="text">Gọi điện</span>
                </a>
            </li>
            <li class="messenger">
                <a href="https://m.me/{{ $cauhinh->mess }}" target="_blank">
                    <span class="icon"></span>
                    <span class="text">Messenger</span>
                </a>
            </li>
            <li class="youtube">
                <a href="{{ $cauhinh->ytb }}">
                    <i class="fa fa-youtube"></i>
                    <span class="text">Youtube</span>
                </a>
            </li>
        </ul>
    </div>

    <script src="{{ asset('js/app.min.js') }}"></script>
    <script src="{{ asset('js/frontend/custom.js') }}"></script>

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: ''
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>
    <script>
        $(function() {
            $('.gflag.vietnam').on('click', function(e) {
                e.preventDefault();
                $('.goog-te-combo').val('vi');
                const triggerEvent = (element, eventName) => {
                    const event = new Event(eventName);
                    element.dispatchEvent(event);
                };
                triggerEvent(document.querySelector('.goog-te-combo'), 'change');
            })

            $('.gflag.en').on('click', function(e) {
                e.preventDefault();
                $('.goog-te-combo').val('en');
                const triggerEvent = (element, eventName) => {
                    const event = new Event(eventName);
                    element.dispatchEvent(event);
                };
                triggerEvent(document.querySelector('.goog-te-combo'), 'change');
            })
        })
    </script>
    <script type="application/ld+json">{
			"@context": "http://schema.org",
		  	"@type": "Professionalservice",
			"@id":"{{ url('/') }}",
			"url": "{{ url('/') }}",
			"logo": "{{ url('/') }}/public/upload/cauhinh/{{$cauhinh->logo}}",
		    "image":"{{ url('/') }}/public/upload/cauhinh/{{$cauhinh->logo}}",
		    "priceRange":"1000$-30000$",
			"hasMap": " ",	
			"email": "mailto:{{$cauhinh->email}}",
		    "founder": "{{$cauhinh->tendoanhnghiep}}",
		  	"address": {
		    	"@type": "PostalAddress",
		    	"addressLocality": "Hoài Đức",
		        "addressCountry": "VIỆT NAM",
		    	"addressRegion": "Hà Nội",
		    	"postalCode":"180000",
		    	"streetAddress": "{{$cauhinh->diachi}}"
		  	},
		  	"description": "{{$cauhinhseo->description}}",
			"name": "{{$cauhinhseo->title}}",
		  	"telephone": "{{$cauhinh->hotline1}}",
		  	"openingHoursSpecification": [
			  	{
				    "@type": "OpeningHoursSpecification",
				    "dayOfWeek": [
				      	"Monday",
				      	"Tuesday",
				      	"Wednesday",
				      	"Thursday",
				      	"Friday"
				    ],
				    "opens": "07:30",
				    "closes": "18:00"
			  	},
			  	{
				    "@type": "OpeningHoursSpecification",
				    "dayOfWeek": [
				      "Saturday"
				    ],
				    "opens": "8:00",
				    "closes": "11:30"
			  	}
		  	],
		  	"geo": {
		    	"@type": "GeoCoordinates",
			   	"latitude": "20.8493022",
		    	"longitude": "106.7260935"
	 		}, 			
         	"potentialAction": {
			    "@type": "ReserveAction",
			    "target": {
			      	"@type": "EntryPoint",
			      	"urlTemplate": "{{ url('/') }}",
			      	"inLanguage": "vn",
			      	"actionPlatform": [
				        "http://schema.org/DesktopWebPlatform",
				        "http://schema.org/IOSPlatform",
				        "http://schema.org/AndroidPlatform"
			      	]
			    },
			    "result": {
			      	"@type": "Reservation",
			      	"name": "Đăng ký"
			    }
		  	},
			 
		  	"sameAs" : [
            	"{{$cauhinh->fanpage}}"
            ]
		}
		</script>
    <script type="application/ld+json">{
		  	"@context": "http://schema.org",
		  	"@type": "Person",
		  	"name": "{{$cauhinh->tendoanhnghiep}}",
		  	"jobTitle": "CEO",
		  	"image" : "{{ url('/') }}/public/upload/cauhinh/{{$cauhinh->logo}}",
		   	"worksFor" : "{{$cauhinhseo->title}}",
		  	"url": "{{ url('/') }}",
			"sameAs" : [
            	"{{$cauhinh->fanpage}}"
             ], 
			"AlumniOf" : [ "Trường Trung học phổ thông",
			"Vietnam Maritime University" ],
			"address": {
			  	"@type": "PostalAddress",
		    	"addressLocality": "Hai Phong",
			    "addressRegion": "vietnam"
		 	}}
		</script>
    @stack('scripts')
    {!! $cauhinhseo->analytics !!}
</body>

</html>
