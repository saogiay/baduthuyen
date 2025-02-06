@extends('admin.layout.main')

@section('content')


<section class="content-header">
    <h1>
        Danh sách khách hàng liên hệ
    </h1>
</section>
<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-4">
					@if(session('thongbao'))
						<div class="alert alert-success">
							<i class="fa fa-check"></i> {{session('thongbao')}}
						</div>
					@endif
				</div>
			</div>
            <div id="w0" class="grid-view">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="3%">STT</th>
							<th>Thời gian</th>
							<th>Họ tên</th>
							<th>Điện thoại</th>
							<th>Email</th>
							<th>Số lượng</th>
							<th>Chiều cao</th>
							<th>Chiều dài</th>
							<th>Chiều rộng</th>
							<th>Quai xách</th>
							<th>Chất liệu</th>
							<th>Định lượng</th>
							<th>Mặt in</th>
							<th>Cán nilon</th>
							<th>Tổng tiền</th>
							<th class="text-center" width="3%">Xóa</th>
						</tr>
					</thead>
					<tbody class="table-thongtinlienhe-body">
						@foreach($thongtinlienhe as $item)
						<tr data-key="1">
							<td class="text-center">
								{{ ($thongtinlienhe->currentPage() - 1) * $thongtinlienhe->perPage() + $loop->iteration }}
							</td>
							<td>{{ $item->created_at}}</td>
							<td>{{ $item->hoten}}</td>
							<td>{{ $item->dienthoai}}</td>
							<td>{{ $item->email}}</td>
							<td>{{ $item->soluong }}</td>
							<td>{{ $item->chieucao }}</td>
							<td>{{ $item->chieungang }}</td>
							<td>{{ $item->chieurong }}</td>
							<td>
								@if($item->quaixach == 1)
									Quai giấy xoắn
								@endif
								@if($item->quaixach == 2)
									Quai dù óng
								@endif
								@if($item->quaixach == 3)
									Quai dù thường
								@endif
							</td>
							<td>{{ $item->chatlieu }}</td>
							<td>
								@if($item->dinhluong == 1)
									250
								@endif
								@if($item->dinhluong == 2)
									300
								@endif
							</td>
							<td>
								@if($item->matin == 1)
									In 2 mặt giống nhau
								@endif
								@if($item->matin == 2)
									In 2 mặt khác nhau
								@endif
							</td>
							<td>
								@if($item->cannilon == 1)
									Cán màng bóng
								@endif
								@if($item->cannilon == 2)
									Cán màng mờ
								@endif
							</td>
							<td>{{ number_format($item->tongtien) }}</td>
							<td class="text-center">
								<a class="text-danger nut-chuc-nang" href="admin/thongtinlienhe/delete/{{$item->id}}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $thongtinlienhe->links() !!}
			</div>
		</div>
	</div>
</div>

@endsection