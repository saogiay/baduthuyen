@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Cập nhật user
    </h1>
</section>
<div class="content">
	<form action="admin/user/update/{{$user->id}}" method="post">
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
						<input value="{{$user->name}}" type="text" class="form-control" name="name" placeholder="Nhập họ tên ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
	    	<div class="row">
	    		<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Email</label>
						<input value="{{$user->email}}" type="email" class="form-control" name="email" placeholder="Nhập email ... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
	    	<div class="row">
    			<div class="col-md-4 col-xs-12">
	        		<div class="field-caterory-name">
	        			<input type="checkbox" id="changePassword" name="changePassword">
						<label for="changePassword">Mật khẩu</label>

						<input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu ... " aria-required="true" disabled="">
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
							@if($user->status == 1)
								<option value="1" selected>Quản trị viên</option>
								<option value="0">Cộng tác viên</option>
							@elseif($user->status == 0)
								<option value="1">Quản trị viên</option>
								<option value="0" selected>Cộng tác viên</option>
							@endif
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
