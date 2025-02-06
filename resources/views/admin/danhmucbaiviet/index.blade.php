@extends('admin.layout.main')

@section('content')


<section class="content-header">
    <h1>
        Danh sách danh mục
    </h1>
</section>
<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-4">
					<form id="search-form" class="form-inline">
						<div class="form-group">
						    <input type="text" class="form-control search-key-danh-muc-bai-viet">
						    <input type="hidden" class="csrf_token" value="{{ csrf_token() }}">
					  	</div>
					  	{{-- <button type="submit" class="btn btn-default"><i class="fa fa-search"></i> </button> --}}
					  	<button class="cancel-search"><i class="fa fa-close"></i> Hủy</button>
					</form>
				</div>
				<div class="col-md-4">
					@if(session('thongbao'))
						<div class="alert alert-success">
							<i class="fa fa-check"></i> {{session('thongbao')}}
						</div>
					@endif
				</div>
				<div class="col-md-4">
					<p class="pull-right">
		                <a class="btn btn-success" href="admin/danhmucbaiviet/create">
		                	<i class="fa fa-plus"></i> Thêm mới
		                </a>
            		</p>
				</div>
			</div>
            <div id="w0" class="grid-view">
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th class="text-center" width="3%">STT</th>
							<th>Tên danh mục</th>
							<th>Trạng thái menu</th>
							<th>Trạng thái trang chủ</th>
							<th class="text-center" width="3%">Sửa</th>
							<th class="text-center" width="3%">Xóa</th>
						</tr>
					</thead>
					<tbody class="table-danhmucbaiviet-body">
						@foreach($danhmucbaiviet as $item)
						<tr data-key="1">
							<td class="text-center">
								{{ ($danhmucbaiviet->currentPage() - 1) * $danhmucbaiviet->perPage() + $loop->iteration }}
							</td>
							<td width="30%">{{$item->name}}</td>
							<td width="15%">
								@if ($item->status == 0 || $item->status == 2)
								    Không hiển thị
								@else
								    Hiển thị
								@endif
							</td>
							<td width="15%">
								@if ($item->status2 == 0 || $item->status2 == 2)
								    Không hiển thị
								@endif
								@if ($item->status2 == 1)
								    Hiển thị kiểu tin tức
								@endif
								@if ($item->status2 == 3)
								    Hiển thị kiểu dự án
								@endif
							</td>
							<td class="text-center">
								<a class="nut-chuc-nang" href="admin/danhmucbaiviet/update/{{$item->id}}" title="Sửa dữ liệu">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
								<a class="text-danger nut-chuc-nang" href="admin/danhmucbaiviet/delete/{{$item->id}}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $danhmucbaiviet->links() !!}
			</div>
		</div>
	</div>
</div>

@endsection