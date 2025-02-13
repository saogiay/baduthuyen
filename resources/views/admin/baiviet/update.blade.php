@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Cập nhật bài viết
    </h1>
</section>
<div class="content">
	<form action="admin/baiviet/update/{{$baiviet->id}}" method="post" enctype="multipart/form-data">
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
						<label>Tên bài viết</label>
						<input type="text" class="form-control" name="name" placeholder="Nhập tên bài viết... " aria-required="true" value="{{$baiviet->name}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Danh mục cha</label>
		              	<select class="form-control" name="danhmucbaiviet_id">
		                    <option value="0">Lựa chọn danh mục cha</option>
		                    @foreach($danhmucbaiviet as $item)
		                    <option
		                    @if($baiviet->danhmucbaiviet_id == $item->id)
		                    {{"selected"}}
		                    @endif
		                    value="{{$item->id}}">{{$item->name}}</option>
		                    @endforeach
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Trạng thái trang chủ</label>
						<select class="form-control" name="status">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($baiviet->status == 0 or $baiviet->status == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($baiviet->status == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
          
          	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Bài viết dự án</label>
						<select class="form-control" name="status2">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($baiviet->status2 == 0 or $baiviet->status2 == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($baiviet->status2 == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Bài viết dịch vụ</label>
						<select class="form-control" name="status3">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($baiviet->status3 == 0 or $baiviet->status3 == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($baiviet->status3 == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Trạng thái footer</label>
						<select class="form-control" name="status_foot">
		                    <option value="2">Lựa chọn trạng thái</option>
		                    <option value="0" <?php if($baiviet->status_foot == 0 or $baiviet->status_foot == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($baiviet->status_foot == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Ảnh đại diện ( Width: 300px | Height: 200px )</label>
						<input type="file" class="form-control" name="anhdaidien" aria-required="true">
						@if(session('thongbao_create'))
							<div class="alert alert-danger">
								<i class="fa fa-info-circle"></i> {{session('thongbao_create')}}
							</div>
						@endif
						<div style="height: 5px"></div>
						<img src="{{asset("upload/baiviet/".$baiviet->anhdaidien)}}" class="img-responsive image_baiviet_backend_update" />
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Mô tả bài viết</label>
						<textarea class="form-control" rows="7" name="motabaiviet" placeholder="Nhập mô tả bài viết ...">{{$baiviet->motabaiviet}}</textarea>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-12 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Nội dung bài viết</label>
						<textarea class="form-control" id="editor" rows="7" name="noidungbaiviet" placeholder="Nhập nội dung bài viết ...">{{$baiviet->noidungbaiviet}}</textarea>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>


			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Thẻ Title</label>
						<input type="text" class="form-control" name="title" onKeyDown="CountLeft(this.form.title, this.form.left,69);" onKeyUp="CountLeft(this.form.title,this.form.left,69);" placeholder="Nhập thẻ title ... " aria-required="true" value="{{$baiviet->title}}">
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
						<textarea class="form-control" rows="7" name="description" onKeyDown="CountRight(this.form.description, this.form.right,300);" onKeyUp="CountRight(this.form.description,this.form.right,300);" placeholder="Nhập thẻ description ...">{{$baiviet->description}}</textarea>
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
						<textarea class="form-control ckeditor" rows="7" name="headings" placeholder="Nhập thẻ headings ...">{{$baiviet->headings}}</textarea>
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