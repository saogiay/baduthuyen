@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Cập nhật danh mục
    </h1>
</section>
<div class="content">
	<form action="admin/danhmucbaiviet/update/{{$danhmucbaiviet->id}}" method="post" enctype="multipart/form-data">
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
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Tên danh mục</label>
						<input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục... " aria-required="true" value="{{$danhmucbaiviet->name}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Code</label>
						<input type="text" class="form-control" name="code" placeholder="Nhập code url... " aria-required="true" value="{{$danhmucbaiviet->code}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Keyword</label>
						<input type="text" class="form-control" name="keyword" placeholder="Nhập keyword url... " aria-required="true" value="{{$danhmucbaiviet->keyword}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Trạng thái menu</label>
						<select class="form-control" name="status">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($danhmucbaiviet->status == 0 or $danhmucbaiviet->status == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($danhmucbaiviet->status == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Trạng thái trang chủ</label>
						<select class="form-control" name="status2">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($danhmucbaiviet->status2 == 0 or $danhmucbaiviet->status2 == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($danhmucbaiviet->status2 == 1) echo "selected" ?>>Hiển thị kiểu tin tức</option>
		                    <option value="3" <?php if($danhmucbaiviet->status2 == 3) echo "selected" ?>>Hiển thị kiểu dự án</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Thẻ Title</label>
						<input type="text" class="form-control" name="title" onKeyDown="CountLeft(this.form.title, this.form.left,69);" onKeyUp="CountLeft(this.form.title,this.form.left,69);" placeholder="Nhập thẻ title ... " aria-required="true" value="{{$danhmucbaiviet->title}}">
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-1">
					<div class="count-character-backend">
						<input readonly type="text" name="left" size=3 maxlength=3 value="69" disabled="disabled">
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Thẻ Meta Description</label>
						<textarea class="form-control" rows="7" name="description" onKeyDown="CountRight(this.form.description, this.form.right,300);" onKeyUp="CountRight(this.form.description,this.form.right,300);" placeholder="Nhập thẻ description ...">{{$danhmucbaiviet->description}}</textarea>
						<div class="help-block"></div>
					</div>
				</div>
				<div class="col-md-1">
					<div class="count-character-backend">
						<input readonly type="text" name="right" size=3 maxlength=3 value="300" disabled="disabled">
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Thẻ Headings</label>
						<textarea class="form-control ckeditor" rows="7" name="headings" placeholder="Nhập thẻ headings ...">{{$danhmucbaiviet->headings}}</textarea>
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