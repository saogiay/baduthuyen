@extends('admin.layout.main')

@section('content')


<section class="content-header">
    <h1>
        Danh sách hoạt động
    </h1>
</section>
<div class="content">
	<div class="box box-primary">
		<div class="box-body">
			<div class="row">
				<div class="col-md-6">
					@if(session('thongbao'))
						<div class="alert alert-success">
							<i class="fa fa-check"></i> {{session('thongbao')}}
						</div>
					@endif
				</div>
				<div class="col-md-6">
					<p class="pull-right">
		                <a class="btn btn-success" href="admin/hoatdong/create">
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
							<th>Ảnh hoạt động</th>
							<th>Tên hoạt động</th>
							<th class="text-center" width="3%">Sửa</th>
							<th class="text-center" width="3%">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($hoatdong as $item)
						<tr data-key="1">

							<td class="text-center">
								{{ ($hoatdong->currentPage() - 1) * $hoatdong->perPage() + $loop->iteration }}
							</td>
							<td width="10%">
								<img src="public/upload/hoatdong/{{$item->anhdaidien}}" class="img-responsive" >
							</td>
							<td >{{$item->name}}</td>
							<td class="text-center">
								<a class="nut-chuc-nang" href="admin/hoatdong/update/{{$item->id}}" title="Sửa dữ liệu">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
								<a class="text-danger nut-chuc-nang" href="admin/hoatdong/delete/{{$item->id}}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $hoatdong->links() !!}
			</div>
		</div>
	</div>
</div>

@endsection