@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Thêm mới sản phẩm
    </h1>
</section>
<div class="content">
	<form action="admin/sanpham/create" method="post" enctype="multipart/form-data">
	@csrf
	<div class="box box-primary">
		<div class="box-body">

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Tên sản phẩm</label>
						<input type="text" class="form-control" name="name" placeholder="Nhập tên sản phẩm... " aria-required="true">
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
						<input type="text" class="form-control" name="code" placeholder="Nhập code url... " aria-required="true">
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
						<input type="text" class="form-control" name="keyword" placeholder="Nhập keyword... " aria-required="true">
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
    					<select class="form-control" name="danhmucsanpham_id">
    	                    <option value="0">Lựa chọn danh mục cha</option>
    	                    @foreach($danhmucsanpham as $item)
    	                    <option value="{{$item->id}}">{{$item->name}}</option>
    	                    @if($item->chils)
    	                    	@foreach($item->chils as $ccat)
    	                    	<option value="{{$ccat->id}}"> --- {{$ccat->name}}</option>
                          		@if($ccat->chils)
                                    @foreach($ccat->chils as $ccatcon)
                                    <option value="{{$ccatcon->id}}"> ------ {{$ccatcon->name}}</option>
                          			@if($ccatcon->chils)
                                        @foreach($ccatcon->chils as $ccatconcon)
                                        <option value="{{$ccatconcon->id}}"> --- {{$ccatconcon->name}}</option>
                                        @endforeach
                                    @endif
                                    @endforeach
                                @endif
    	                    	@endforeach
    	                    @endif
    	                    @endforeach
    	              	</select>
    	              	@if($errors->first('danhmucsanpham_id'))
    					<p class="alert alert-danger"><i class=""></i> {{ $errors->first('danhmucsanpham_id') }}</p>
    					@endif
    					<div class="help-block"></div>
    				</div>
    			</div>
        	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Trạng thái</label>
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
						<label>Ảnh đại diện (Width: 400px | Height: 400px)</label>
						<input type="file" class="form-control" name="anhdaidien" id="avatar-input" aria-required="true">
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

			<div class="row">
				<div class="col-md-7 col-xs-12">
					<div class="field-caterory-name">
						<label>Hình ảnh chi tiết (Width: 800px | Height: 450px)</label>
						<input type="file" name="image_detail[]" id="image-input" class="form-control" multiple>
					</div>
					<div id="preview-container" class="row"></div>
					<div class="help-block"></div>
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

				document.getElementById('image-input').addEventListener('change', function(event) {
					let files = event.target.files;
					let previewContainer = document.getElementById('preview-container');
					previewContainer.style.marginTop = '5px';
					previewContainer.innerHTML = '';
					
					Array.from(files).forEach((file, index) => {
						let reader = new FileReader();
						reader.onload = function(e) {
							let div = document.createElement('div');
							div.classList.add('col-md-4', 'mb-3');
							div.innerHTML = `
								<img src="${e.target.result}" class="img-thumbnail" style="max-width: 100%; height: auto; margin-bottom: 5px;">
								<input type="text" class="form-control mt-2" name="image_alt[]" placeholder="Nhập alt text cho ảnh chi tiết">
							`;
							previewContainer.appendChild(div);
						};
						reader.readAsDataURL(file);
					});
				});
			</script>

			<div class="row">
				<div class="col-md-7 col-xs-12">
					<div class="field-caterory-name">
						<label>Tài liệu</label>
						<input type="file" class="form-control" name="tailieu" aria-required="true" value="{{ $sanpham->tailieu ?? '' }}">
						file hiện tại: <a href="{{ asset('storage/sanpham/'. $sanpham->tailieu )}}" target="_blank">{{ $sanpham->tailieu }}</a>
						<div class="help-block"></div>
					</div>
				</div>
			</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Mã sản phẩm</label>
						<input type="text" class="form-control" name="masp" placeholder="Nhập mã sản phẩm... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Giá sản phẩm</label>
						<input type="number" class="form-control" name="giasanpham" placeholder="Nhập giá sản phẩm... " aria-required="true">
						@if($errors->first('giasanpham'))
						<p class="alert alert-danger"><i class=""></i> {{ $errors->first('giasanpham') }}</p>
						@endif
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Mô tả sản phẩm</label>
						<textarea class="form-control ckeditor" rows="7" name="motasanpham" placeholder="Nhập mô tả sản phẩm ..."></textarea>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Nội dung sản phẩm</label>
						<textarea class="form-control" id="editor" rows="7" name="noidungsanpham" placeholder="Nhập nội dung sản phẩm ..."></textarea>
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
						<textarea class="form-control ckeditor" rows="7" name="headings" placeholder="Nhập thẻ headings ..."></textarea>
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