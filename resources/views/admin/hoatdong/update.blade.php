@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Cập nhật hoạt động
    </h1>
</section>
<div class="content">
	<form action="admin/hoatdong/update/{{$hoatdong->id}}" method="post" enctype="multipart/form-data">
	{{-- <input type="hidden" name="_token" value=""> --}}
	@csrf
	<div class="box box-primary">
		<div class="box-body">
			@if(count($errors) > 0)
				<div class="alert alert-danger">
					@foreach($errors->all() as $item)
						{{$item}}<br>
					@endforeach
				</div>
			@endif

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Ảnh đối tác ( Width: 830px | Height: 410px )</label>
						<input type="file" class="form-control" name="anhdaidien" aria-required="true">
						@if(session('thongbao_update'))
							<div class="alert alert-danger">
								<i class="fa fa-info-circle"></i> {{session('thongbao_update')}}
							</div>
						@endif
						<div style="height: 5px"></div>
						<img src="public/upload/hoatdong/{{$hoatdong->anhdaidien}}" class="img-responsive" />
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
				<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Tên hoạt động</label>
						<textarea class="form-control" rows="7" name="name" placeholder="Nhập tên hoạt động ...">{{$hoatdong->name}}</textarea>
						<div class="help-block"></div>
					</div>
				</div>
			</div>
		    <div class="form-group">
		        <button type="submit" class="btn btn-success">Lưu lại</button>
		    </div>
		</div>
	</div>
	</form>
</div>

@endsection