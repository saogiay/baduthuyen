@extends('admin.layout.main')

@section('content')

<section class="content-header">
    <h1>
        Thêm mới danh mục
    </h1>
</section>
<div class="content">
	<form action="admin/danhmucsanpham/create" method="post" enctype="multipart/form-data">
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
						<input type="text" class="form-control" name="name" placeholder="Nhập tên danh mục... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Code</label>
						<input type="text" class="form-control" name="code" placeholder="Nhập code url... " aria-required="true">
						<div class="help-block"></div>
					</div>
				</div>
	    	</div>

			<div class="row">
	    		<div class="col-md-7 col-xs-12">
	        		<div class="field-caterory-name">
						<label>Keyword</label>
						<input type="text" class="form-control" name="keyword" placeholder="Nhập keyword... " aria-required="true">
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
                                        <option value="{{$ccatconcon->id}}"> ------ {{$ccatconcon->name}}</option>
                                        @endforeach
                                    @endif
                                    @endforeach
                                @endif
    	                    	@endforeach
    	                    @endif
    	                    @endforeach
    	              	</select>
    	              	@if($errors->first('danhmuccha_id'))
    					<p class="alert alert-danger"><i class=""></i> {{ $errors->first('danhmuccha_id') }}</p>
    					@endif
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
						<label>Vị trí</label>
						<select class="form-control" name="vitri">
		                    <option value="0">Lựa chọn vị trí</option>
		                    <?php 
		                        for($i = 1; $i <= 15; $i++){
		                            echo "<option value='".$i."'>Vị trí ".$i."</option>";
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