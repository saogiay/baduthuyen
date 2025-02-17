@extends('admin.layout.main')

@section('content')

<section class="content-header">
	<h1>
		Thêm mới bài viết
	</h1>
</section>
<div class="content">
	<form action="admin/baiviet/create" method="post" enctype="multipart/form-data">
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
						<input type="text" class="form-control" name="name" placeholder="Nhập tên bài viết... " aria-required="true" value="{{old('name')}}">
						@if($errors->first('name'))
						<p class="alert alert-danger"><i class=""></i> {{ $errors->first('name') }}</p>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Code</label>
						<input type="text" class="form-control" name="code" placeholder="Nhập code url... " aria-required="true" value= "{{old('code')}}">
						@if($errors->first('code'))
						<p class="alert alert-danger"><i class=""></i> {{ $errors->first('code') }}</p>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Keyword</label>
						<input type="text" class="form-control" name="keyword" placeholder="Nhập keyword... " aria-required="true" value= "{{old('keyword')}}">
						@if($errors->first('keyword'))
						<p class="alert alert-danger"><i class=""></i> {{ $errors->first('keyword') }}</p>
						@endif
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
		                    <option value="{{$item->id}}">{{$item->name}}</option>
		                    @endforeach
		              	</select>
		              	@if($errors->first('danhmucbaiviet_id'))
						<p class="alert alert-danger"><i class=""></i> {{ $errors->first('danhmucbaiviet_id') }}</p>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

				<div class="row">
					<div class="col-md-7 col-xs-12">
						<div class="field-caterory-name">
							<label>Trạng thái trang chủ</label>
							<select class="form-control" name="status">
								<option value="0">Lựa chọn trạng thái</option>
								<option value="0">Không hiển thị</option>
								<option value="1">Hiển thị</option>
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
								<option value="0">Lựa chọn trạng thái</option>
								<option value="0">Không hiển thị</option>
								<option value="1">Hiển thị</option>
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
								<option value="0">Lựa chọn trạng thái</option>
								<option value="0">Không hiển thị</option>
								<option value="1">Hiển thị</option>
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
								<option value="0">Lựa chọn trạng thái</option>
								<option value="0">Không hiển thị</option>
								<option value="1">Hiển thị</option>
							</select>
							<div class="help-block"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-7 col-xs-12">
						<div class="field-caterory-name">
							<label>Ảnh đại diện ( Width: 300px | Height: 200px )</label>
							<input type="file" class="form-control" name="anhdaidien" id="avatar-input"  aria-required="true">
							@if(session('thongbao_create'))
							<div class="alert alert-danger">
								<i class="fa fa-info-circle"></i> {{session('thongbao_create')}}
							</div>
							@endif
							<div id="avatar-preview" class="row"></div>
							<div class="help-block"></div>
						</div>
					</div>
				</div>
				<script>
					document.getElementById('avatar-input').addEventListener('change', function(event) {
						let file = event.target.files[0];
						let previewContainer = document.getElementById('avatar-preview');
						previewContainer.style.marginTop = '5px';
						previewContainer.innerHTML = '';
						if (file) {
							let reader = new FileReader();
							reader.onload = function(e) {
								let div = document.createElement('div');
								div.classList.add('col-md-4', 'mb-3');
								div.innerHTML = `
									<img src="${e.target.result}" class="img-thumbnail" style="max-width: 100%; height: auto; margin-bottom: 5px;">
									<input type="text" class="form-control mt-2" name="alt_avatar" placeholder="Nhập alt text cho ảnh đại diện">
								`;
								previewContainer.appendChild(div);
							};
							reader.readAsDataURL(file);
						}
					});
				</script>

				<div class="row">
					<div class="col-md-7 col-xs-12">
						<div class="field-caterory-name">
							<label>Mô tả bài viết</label>
							<textarea class="form-control" rows="7" name="motabaiviet" placeholder="Nhập mô tả bài viết ..."></textarea>
							<div class="help-block"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="field-caterory-name">
							<label>Nội dung bài viết</label>
							<textarea class="form-control" id="editor" rows="7" name="noidungbaiviet" placeholder="Nhập nội dung bài viết ..."></textarea>
							<div class="help-block"></div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-md-7 col-xs-12">
						<div class="field-caterory-name">
							<label>Thẻ Title</label>
							<input type="text" class="form-control" name="title" onKeyDown="CountLeft(this.form.title, this.form.left,69);" onKeyUp="CountLeft(this.form.title,this.form.left,69);" placeholder="Nhập thẻ title ... " aria-required="true">
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
							<textarea class="form-control" rows="7" name="description" onKeyDown="CountRight(this.form.description, this.form.right,300);" onKeyUp="CountRight(this.form.description,this.form.right,300);" placeholder="Nhập thẻ description ..."></textarea>
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
							<textarea class="form-control" rows="7" name="headings" placeholder="Nhập thẻ headings ..."></textarea>
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