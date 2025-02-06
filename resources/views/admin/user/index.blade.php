@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Danh sách user
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
		                <a class="btn btn-success" href="admin/user/create">
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
							<th>Họ tên</th>
							<th>Email</th>
							<th>Status</th>
							<th class="text-center" width="3%">Sửa</th>
							<th class="text-center" width="3%">Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($user as $item)
						<tr data-key="1">
							<td class="text-center">
								{{ ($user->currentPage() - 1) * $user->perPage() + $loop->iteration }}
							</td>
							<td width="15%">{{$item->name}}</td>
							<td width="15%">{{$item->email}}</td>
							<td width="15%">
								@if($item->status == 1){{"Quản trị viên"}}
								@else{{"Cộng tác viên"}}
								@endif
							</td>
							<td class="text-center">
								<a class="nut-chuc-nang" href="admin/user/update/{{$item->id}}" title="Sửa dữ liệu">
									<i class="fa fa-edit"></i>
								</a>
							</td>
							<td class="text-center">
								<a class="text-danger nut-chuc-nang" href="admin/user/delete/{{$item->id}}" title="Xóa dữ liệu" onclick="return confirm('Bạn có muốn xóa không ?')">
									<i class="fa fa-trash"></i>
								</a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				{!! $user->links() !!}
			</div>
		</div>
	</div>
</div>

@endsection