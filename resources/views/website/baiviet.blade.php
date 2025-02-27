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
                        <a itemprop="title" href="{{ route('indexCode', ['code' => $danhmucbaivietChitiet->code]) }}">{{$danhmucbaivietChitiet->name}}</a>
                    </li>
                    <li>
                        <a itemprop="title">{{$baivietChitiet->name}}</a>
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
                        <h1>{{$baivietChitiet->name}}</h1>
                    </div>
                    <div class="detail-content-body noi-dung-chi-tiet">
                        <div class="detail-content-description">
                            <i class="fa fa-bars"></i> {{$danhmucbaivietChitiet->name}} |
                            <i class="fa fa-eye"></i> {{ $baivietChitiet->count_page }} lượt xem
                        </div>
                        <div id="table-of-contents">
                            <div id="toc-content"></div>
                            <button id="toggle-toc">Ẩn mục lục</button>
                        </div>
                        <div class="chi-tiet-bai-viet ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred">
                            {!!$baivietChitiet->noidungbaiviet!!}
                        </div>

                        <div class="social-links">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul>
                                        <li>
                                            <a rel="nofollow" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={!!url()->full();!!}" class="social-button " id="">
                                                <span class="fa fa-facebook"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" target="_blank" href="https://twitter.com/intent/tweet?text=my share text&amp;url={!!url()->full();!!}" class="social-button " id="">
                                                <span class="fa fa-twitter"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" target="_blank" href="https://plus.google.com/share?url={!!url()->full();!!}" class="social-button " id="">
                                                <span class="fa fa-google-plus"></span>
                                            </a>
                                        </li>
                                        <li>
                                            <a rel="nofollow" target="_blank" href="http://www.linkedin.com/shareArticle?mini=true&amp;url={!!url()->full();!!}&amp;title=my share text&amp;summary=dit is de linkedin summary" class="social-button " id="">
                                                <span class="fa fa-linkedin"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="lien-quan">
                    <div class="detail-content-title detail-content-title-recents">
                        Các bài viết liên quan
                    </div>

                    <div class="row">
                        @foreach($baivietlienquan as $item)
                        <div class="col-md-4">
                            <div class="box-index-post">
                                <div class="box-index-post-img box-index-post-img-page">
                                    <a href="{{ route('indexCode', ['code' => $item->code]) }}" title="{{ $item->name }}">
                                        <img src="{{asset('storage/baiviet/'.$item->anhdaidien)}}" class="img-responsive" alt="{{ $item->name }}">
                                    </a>
                                    <div class="box-index-post-info">
                                        <ul class="notStyle">
                                            <li class="time"><i class="fa fa-calendar" aria-hidden="true"></i> <time>{{date("d/m/Y", strtotime($item->created_at))}}</time></li>
                                            <li class="post"><i class="fa fa-check-square"></i> <span>{{ $item->danhmucbaiviet->name }}</span></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-index-post-cap">
                                    <div class="box-index-post-name box-index-post-name-page">
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}">{{ $item->name }}</a>
                                    </div>
                                    <div class="box-index-post-des box-index-post-des-page">
                                        @if(mb_strlen($item->motabaiviet, 'UTF-8') >= 100)
                                        {{mb_substr($item->motabaiviet,0,100,'UTF-8')}}[...]
                                        @else
                                        {{$item->motabaiviet}}
                                        @endif
                                    </div>
                                    <div class="about-block-more">
                                        <a href="{{ route('indexCode', ['code' => $item->code]) }}"><i class="fa fa-angle-right"></i> Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
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
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const convertEmbedMediaFromCkeditor5 = () => {
            let oldIframe = document.querySelectorAll("oembed");
            oldIframe = Array.from(oldIframe);

            for (const i in oldIframe) {
                let url = oldIframe[i].getAttribute("url");
                if (url) {
                    url = url.replace("watch?v=", "embed/");
                    const newIframe = document.createElement("iframe");
                    newIframe.style.setProperty("width", "100%", "important");
                    newIframe.style.setProperty("height", "auto", "important");
                    newIframe.style.aspectRatio = "16/9";
                    newIframe.setAttribute("src", url);
                    newIframe.setAttribute("frameborder", "0");
                    newIframe.setAttribute("allowfullscreen", "true");
                    oldIframe[i].parentNode.replaceChild(newIframe, oldIframe[i]);
                }
            }
        };

        function generateTableOfContents() {
            const contentElement = document.querySelector(".chi-tiet-bai-viet");
            const tocElement = document.getElementById("table-of-contents");
            const tocContent = document.getElementById("toc-content");

            if (!contentElement || !tocElement || !tocContent) return;

            const headings = contentElement.querySelectorAll("h3, h4");
            if (headings.length === 0) {
                tocElement.style.display = "none";
                return;
            }

            let tocHTML = '<ul class="toc-list">';
            let countH3 = 0,
                countH4 = 0;

            headings.forEach((heading, index) => {
                if (heading.tagName === "H3") {
                    countH3++;
                    countH4 = 0;
                } else {
                    countH4++;
                }

                let headingText = heading.innerText.trim();
                headingText = convertToSentenceCase(headingText);

                const tocNumber = heading.tagName === "H3" ? `${countH3}.` : `${countH3}.${countH4}`;
                const headingSlug = convertToSlug(headingText);
                const id = `${tocNumber}-${headingSlug}`;
                heading.id = id;

                tocHTML += `
                        <li class="${heading.tagName === "H3" ? "toc-item-h3" : "toc-item-h4"}">
                            <a href="#${id}" class="toc-link">${tocNumber} ${headingText}</a>
                        </li>
                    `;
                });

            tocHTML += "</ul>";
            tocContent.innerHTML = tocHTML;
            tocElement.style.display = "block";

            document.querySelectorAll(".toc-link").forEach(link => {
                link.addEventListener("click", function(event) {
                    event.preventDefault();

                    const targetId = this.getAttribute("href").substring(1);
                    const targetElement = document.getElementById(targetId);

                    if (targetElement) {
                        const offset = targetElement.getBoundingClientRect().top + window.scrollY - 120;

                        const newUrl = `${window.location.origin}${window.location.pathname}#${targetId}`;
                        window.history.pushState(null, null, newUrl);

                        window.scrollTo({
                            top: offset,
                            behavior: "smooth"
                        });
                    }
                });
            });

            const toggleButton = document.getElementById("toggle-toc");
            toggleButton.addEventListener("click", () => {
                tocContent.classList.toggle("hidden");
                toggleButton.textContent = tocContent.classList.contains("hidden") ? "Hiện mục lục" : "Ẩn mục lục";
            });
        }

        function convertToSentenceCase(text) {
            text = text.toLowerCase();
            return text.charAt(0).toUpperCase() + text.slice(1);
        }
        // Hàm chuyển đổi tiêu đề thành định dạng URL-friendly (bỏ dấu, chữ thường, thay dấu cách thành "-")
        function convertToSlug(str) {
            return str
                .normalize("NFD") // Tách dấu ra khỏi ký tự (e.g., é -> e)
                .replace(/[\u0300-\u036f]/g, "") // Xóa dấu tiếng Việt
                .toLowerCase() // Chuyển thành chữ thường
                .replace(/đ/g, "d") // Chuyển đ -> d
                .replace(/[^a-z0-9\s-]/g, "") // Xóa ký tự đặc biệt
                .trim() // Xóa khoảng trắng thừa
                .replace(/\s+/g, "-"); // Thay khoảng trắng thành dấu "-"
        }

        generateTableOfContents();
        convertEmbedMediaFromCkeditor5();
    });
</script>
@endsection