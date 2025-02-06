
<?php
use Illuminate\Support\Facades\DB;
use App\Danhmucsanpham;
?>

<div class="box-sidebar-page">

	<div class="box-sidebar">
		<div class="box-sidebar-title">
			Bài viết hữu ích
		</div>
		<div class="box-sidebar-body">
			<?php
	            $baivietnoibat = DB::table('baiviet')->where('status', '1')->orderBy('id', 'desc')->limit(7)->get();
			?>
			@if(count($baivietnoibat) > 0)
				@foreach($baivietnoibat as $item)
				<div class="sidebar-product">
					<div class="row">
						<div class="col-md-4 col-xs-4">
							<div class="sidebar-product-img">
								<a href="{{ route('indexCode', ['code' => $item->code]) }}">
									<img src="public/upload/baiviet/{{$item->anhdaidien}}" class="img-responsive" alt="{{$item->name}}">
								</a>
							</div>
						</div>
						<div class="col-md-8 col-xs-8 no-pad-left">
							<div class="sidebar-product-name">
								<a href="{{ route('indexCode', ['code' => $item->code]) }}">
									@if(mb_strlen($item->name, 'UTF-8') > 40)
	                                {{mb_substr($item->name,0,40,'UTF-8')}}...
	                                @else
	                                {{$item->name}}
	                                @endif
								</a>
							</div>

						</div>
					</div>
				</div>
				@endforeach
			@else
			<div class="sidebar-product">
	 			Dữ liệu đang được cập nhật ...
	 		</div>
			@endif
		</div>
	</div>

</div>