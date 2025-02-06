@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Thêm mới user
    </h1>
</section>
<div class="content">
	<form action="admin/user/create" method="post">
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
						<label>Họ tên</label>
						<input type="text" class="form-control" name="name" placeholder="Nhập họ tên ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Email</label>
						<input type="email" class="form-control" name="email" placeholder="Nhập email ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
	    	<div class="row">
    			<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Mật khẩu</label>
						<input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
	    	<div class="row">
        		<div class="col-md-4 col-xs-12">
            		<div class="field-caterory-menushow">
						<label>Phân quyền</label>
						<select class="form-control" aria-required="true" name="status">
							<option value="0">-- Chọn --</option>
							<option value="1">Quản trị viên</option>
							<option value="0">Cộng tác viên</option>
						</select>
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
