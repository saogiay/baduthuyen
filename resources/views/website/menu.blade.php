<div class="menu">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-inverse">
				    <div id="main-nav" class="stellarnav light desktop">
				        <ul>
				            <li>
				            	<a href="{{ url('/') }}" class="active"><i class="fa fa-home"></i> Trang chủ</a>
				            </li>
				            <li><a href="{{ route('indexCode', ['code' => 'gioi-thieu']) }}">Giới thiệu</a></li>
				            <?php $danhmucSanPhamMenuMobile1 = DB::table('danhmucsanpham')->where('danhmuccha_id', 0)->orWhere('danhmuccha_id', NULL)->where('status', 1)->orderBy('vitri', 'ASC')->get() ?>
                			@foreach($danhmucSanPhamMenuMobile1 as $danhMucCha)
            				<li>
            					<a href="{{ route('indexCode', ['code' => $danhMucCha->code]) }}">{{ $danhMucCha->name }}</a>
            					<?php $danhmucSanPhamMenuMobile2 = DB::table('danhmucsanpham')->where('danhmuccha_id', $danhMucCha->id)->where('status', 1)->orderBy('vitri', 'ASC')->get() ?>
                    			@if(count($danhmucSanPhamMenuMobile2) > 0)
                    			<ul>
                    				@foreach($danhmucSanPhamMenuMobile2 as $itemMoBile)
                    				<li>
                    					<a href="{{ route('indexCode', ['code' => $itemMoBile->code]) }}">{{ $itemMoBile->name }}</a>
                    				</li>
                    				@endforeach
                    			</ul>
                    			@endif
            				</li>
            				@endforeach
				            <?php $danhmucbaivietMenu = DB::table('danhmucbaiviet')->where('status', 1)->get() ?>
				            @foreach($danhmucbaivietMenu as $item)
				            <li>
				            	<a href="{{ route('indexCode', ['code' => $item->code]) }}">{{ $item->name }}</a>
				            </li>
				            @endforeach
	                        <li><a href="{{ route('indexCode', ['code' => 'lien-he']) }}">Liên hệ</a></li>
				        </ul>
				    </div>
				</nav>
			</div>
		</div>
	</div>
</div>