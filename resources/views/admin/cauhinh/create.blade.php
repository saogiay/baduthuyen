@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Thêm mới cấu hình
    </h1>
</section>
<div class="content">
	<form action="admin/cauhinh/create" method="post" enctype="multipart/form-data">
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
						<label>Tên doanh nghiệp</label>
						<input type="text" class="form-control" name="tendoanhnghiep" placeholder="Nhập tên doanh nghiệp ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Ảnh logo</label>
						<input type="file" class="form-control" name="logo" aria-required="true">
						@if(session('thongbao_create'))
							<div class="alert alert-danger">
								<i class="fa fa-info-circle"></i> {{session('thongbao_create')}}
							</div>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Favicon</label>
						<input type="file" class="form-control" name="favicon" aria-required="true">
						@if(session('thongbao_create'))
							<div class="alert alert-danger">
								<i class="fa fa-info-circle"></i> {{session('thongbao_create')}}
							</div>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Địa chỉ</label>
						<input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Hotline 1</label>
						<input type="text" class="form-control" name="hotline1" placeholder="Nhập hotline 1 ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Hotline 2</label>
						<input type="text" class="form-control" name="hotline2" placeholder="Nhập hotline 2 ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Email</label>
						<input type="text" class="form-control" name="email" placeholder="Nhập email ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Fanpage facebook</label>
						<input type="text" class="form-control" name="fanpage" placeholder="Nhập link fanpage ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Google map</label>
						<textarea class="form-control" rows="7" name="map" placeholder="Nhập mã nhúng google map ..."></textarea>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Giới thiệu ngắn</label>
						<textarea class="form-control" rows="7" name="about" placeholder="Nhập giới thiệu ngắn ..."></textarea>
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