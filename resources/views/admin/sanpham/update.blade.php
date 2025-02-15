@extends('admin.layout.main')

@section('content')
    <section class="content-header">
        <h1>
            Cập nhật sản phẩm
        </h1>
    </section>
    <div class="content">
        <form action="admin/sanpham/update/{{ $sanpham->id }}" method="post" enctype="multipart/form-data">
            {{-- <input type="hidden" name="_token" value=""> --}}
            @csrf
            <div class="box box-primary">
                <div class="box-body">

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Tên sản phẩm</label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Nhập tên bài viết... " aria-required="true" value="{{ $sanpham->name }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Code</label>
                                <input type="text" class="form-control" name="code"
                                    placeholder="Nhập code url... " aria-required="true" value="{{ $sanpham->code }}">
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

                                    @foreach ($danhmucsanpham as $item)
                                        <option value="{{ $item->id }}"
                                            @if ($sanpham->danhmucsanpham_id == $item->id) {{ 'selected' }} @endif>
                                            {{ $item->name }}
                                        </option>
                                        @if ($item->chils)
                                            @foreach ($item->chils as $ccat)
                                                <option value="{{ $ccat->id }}"
                                                    @if ($sanpham->danhmucsanpham_id == $ccat->id) {{ 'selected' }} @endif>
                                                    --- {{ $ccat->name }}
                                                </option>
                                                @if ($ccat->chils)
                                                    @foreach ($ccat->chils as $ccatcon)
                                                        <option value="{{ $ccatcon->id }}"
                                                            @if ($sanpham->danhmucsanpham_id == $ccatcon->id) {{ 'selected' }} @endif>
                                                            ------ {{ $ccatcon->name }}
                                                        </option>
                                                        @if ($ccatcon->chils)
                                                            @foreach ($ccatcon->chils as $ccatconcon)
                                                                <option value="{{ $ccatconcon->id }}"
                                                                    @if ($sanpham->danhmucsanpham_id == $ccatconcon->id) {{ 'selected' }} @endif>
                                                                    --- {{ $ccatconcon->name }}
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
                                <label>Trạng thái</label>
                                <select class="form-control" name="status">
                                    <option value="2">Lựa chọn trạng thái</option>
                                    <option value="0" <?php if ($sanpham->status == 0 or $sanpham->status == 2) {
                                        echo 'selected';
                                    } ?>>Không hiển thị</option>
                                    <option value="1" <?php if ($sanpham->status == 1) {
                                        echo 'selected';
                                    } ?>>Hiển thị</option>
                                </select>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Ảnh đại diện ( Width: 400px | Height: 400px )</label>
                                <input type="file" class="form-control" name="anhdaidien" aria-required="true">
                                @if (session('thongbao_create'))
                                    <div class="alert alert-danger">
                                        <i class="fa fa-info-circle"></i> {{ session('thongbao_create') }}
                                    </div>
                                @endif
                                <div style="height: 5px"></div>
                                <img src="{{ asset('storage/sanpham/' . $sanpham->anhdaidien) }}"
                                    class="img-responsive image_baiviet_backend_update" />
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Hình ảnh chi tiết ( Width: 800px | Height: 450px )</label>
                                <input type="file" name="image_detail[]" class="form-control" multiple="multiple">
                                <div style="height: 5px"></div>
                                <div class="div-sanpham_image_many">
                                    @foreach ($hinhanhsanpham as $item)
                                        <span class="div-sanpham_image_many-box">
                                            <img src="{{ asset('storage/sanpham/hinhanh/'.$sanpham->id .'/' . $item->hinhanhsanpham )}}"
                                                class="img-responsive image_baiviet_backend_update sanpham_image_many" />
                                            <a href="admin/sanpham/deleteHinhanhsanpham/{{ $item->id }}"><i
                                                    class="fa fa-trash"></i> Xóa</a>
                                        </span>
                                    @endforeach
                                </div>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Mã sản phẩm</label>
                                <input type="text" class="form-control" name="masp" placeholder="Nhập mã sản phẩm... "
                                    aria-required="true" value="{{ $sanpham->masp }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Giá sản phẩm</label>
                                <input type="number" class="form-control" name="giasanpham" placeholder="Nhập ... "
                                    aria-required="true" value="{{ $sanpham->giasanpham }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Mô tả sản phẩm</label>
                                <textarea class="form-control ckeditor" rows="7" name="motasanpham" placeholder="Nhập mô tả sản phẩm ...">{{ $sanpham->motasanpham }}</textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Nội dung sản phẩm</label>
                                <textarea class="form-control" id="editor" rows="7" name="noidungsanpham"
                                    placeholder="Nhập nội dung sản phẩm ...">{{ $sanpham->noidungsanpham }}</textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Thẻ Title</label>
                                <input type="text" class="form-control" name="title"
                                    onKeyDown="CountLeft(this.form.title, this.form.left,69);"
                                    onKeyUp="CountLeft(this.form.title,this.form.left,69);"
                                    placeholder="Nhập thẻ title ... " aria-required="true"
                                    value="{{ $sanpham->title }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="count-character-backend">
                                <input readonly type="text" name="left" size=3 maxlength=3 value="69"
                                    disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Thẻ Meta Description</label>
                                <textarea class="form-control" rows="7" name="description"
                                    onKeyDown="CountRight(this.form.description, this.form.right,300);"
                                    onKeyUp="CountRight(this.form.description,this.form.right,300);" placeholder="Nhập thẻ description ...">{{ $sanpham->description }}</textarea>
                                <div class="help-block"></div>
                            </div>
                        </div>
                        <div class="col-md-1">
                            <div class="count-character-backend">
                                <input readonly type="text" name="right" size=3 maxlength=3 value="300"
                                    disabled="disabled">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Thẻ Headings</label>
                                <textarea class="form-control ckeditor" rows="7" name="headings" placeholder="Nhập thẻ headings ...">{{ $sanpham->headings }}</textarea>
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
