@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Cập nhật danh mục
    </h1>
</section>
<div class="content">
	<form action="admin/danhmucsanpham/update/{{$danhmucsanpham->id}}" method="post" enctype="multipart/form-data">
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
						<input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục... " aria-required="true" value="{{$danhmucsanpham->name}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Code</label>
						<input type="text" class="form-control" name="code" placeholder="Nhập code url... " aria-required="true" value="{{$danhmucsanpham->code}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>
			
			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Keyword</label>
						<input type="text" class="form-control" name="keyword" placeholder="Nhập keyword... " aria-required="true" value="{{$danhmucsanpham->keyword}}">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Danh mục cha</label>
		              	<select class="form-control" name="danhmuccha_id">
		                    <option value="0">Lựa chọn danh mục cha</option>

		                    @foreach($danhmucsanphamAll as $item)
		                    <option value="{{$item->id}}" 
		                    	@if($danhmucsanpham->danhmuccha_id == $item->id)
		                    		{{"selected"}}
		                    	@endif
	                    	>
	                    		{{$item->name}}
	                    	</option>
		                    @if($item->chils)
		                    	@foreach($item->chils as $ccat)
		                    		<option value="{{$ccat->id}}" 
				                    	@if($danhmucsanpham->danhmuccha_id == $ccat->id)
				                    		{{"selected"}}
				                    	@endif
			                    	>
			                    		--- {{$ccat->name}}
			                    	</option>
                          			@if($ccat->chils)
                                        @foreach($ccat->chils as $ccatCon)
                                            <option value="{{$ccatCon->id}}" 
                                                @if($danhmucsanpham->danhmuccha_id == $ccatCon->id)
                                                    {{"selected"}}
                                                @endif
                                            >
                                                ------ {{$ccatCon->name}}
                                            </option>
                          					@if($ccatCon->chils)
                                            @foreach($ccatCon->chils as $ccatConCon)
                                                <option value="{{$ccatConCon->id}}" 
                                                    @if($danhmucsanpham->danhmuccha_id == $ccatConCon->id)
                                                        {{"selected"}}
                                                    @endif
                                                >
                                                    --------- {{$ccatConCon->name}}
                                                </option>

                                            @endforeach
                                        @endif
                                        @endforeach
                                    @endif
		                    	@endforeach
		                    @endif
		                    @endforeach
		              	</select>
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
		                    <option value="0" <?php if($danhmucsanpham->status == 0 or $danhmucsanpham->status == 2) echo "selected" ?>>Không hiển thị</option>
		                    <option value="1" <?php if($danhmucsanpham->status == 1) echo "selected" ?>>Hiển thị</option>
		              	</select>
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Vị trí</label>
						<select class="form-control" name="vitri">
		                    <option value="0">Lựa chọn vị trí</option>
		                    <?php 
		                        for($i = 1; $i <= 15; $i++){
		                            
		                            
	                                echo "<option value='".$i."'".($danhmucsanpham->vitri == $i ? 'selected' : '')." >Vị trí ".$i."</option>";
		                        }
	                        ?>

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
						<img src="public/upload/danhmucsanpham/{{$danhmucsanpham->anhdaidien}}" class="img-responsive image_baiviet_backend_update" />
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Thẻ Title</label>
						<input type="text" class="form-control" name="title" onKeyDown="CountLeft(this.form.title, this.form.left,69);" onKeyUp="CountLeft(this.form.title,this.form.left,69);" placeholder="Nhập thẻ title ... " aria-required="true" value="{{$danhmucsanpham->title}}">
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
						<textarea class="form-control" rows="7" name="description" onKeyDown="CountRight(this.form.description, this.form.right,300);" onKeyUp="CountRight(this.form.description,this.form.right,300);" placeholder="Nhập thẻ description ...">{{$danhmucsanpham->description}}</textarea>
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
						<textarea class="form-control ckeditor" rows="7" name="headings" placeholder="Nhập thẻ headings ...">{{$danhmucsanpham->headings}}</textarea>
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