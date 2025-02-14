@extends('admin.layout.main')

@section('content')

    <section class="content-header">
        <h1>
            Cập nhật cấu hình
        </h1>
    </section>
    <div class="content">
        <form action="admin/cauhinh/update/{{ $cauhinh->id }}" method="post" enctype="multipart/form-data">
            {{-- <input type="hidden" name="_token" value=""> --}}
            @csrf
            <div class="box box-primary">
                <div class="box-body">
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $item)
                                {{ $item }}<br>
                            @endforeach
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Tên doanh nghiệp</label>
                                <input type="text" class="form-control" name="tendoanhnghiep"
                                    placeholder="Nhập tên doanh nghiệp ... " aria-required="true"
                                    value="{{ $cauhinh->tendoanhnghiep }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Mã số thuế</label>
                                <input type="text" class="form-control" name="mst" placeholder="Nhập MST ... "
                                    aria-required="true" value="{{ $cauhinh->mst }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Liên kết BCT</label>
                                <input type="text" class="form-control" name="bct" placeholder="Nhập liên kết ... "
                                    aria-required="true" value="{{ $cauhinh->bct }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Ảnh logo</label>
                                <input type="file" class="form-control" name="logo" aria-required="true">
                                @if (session('thongbao_update'))
                                    <div class="alert alert-danger">
                                        <i class="fa fa-info-circle"></i> {{ session('thongbao_update') }}
                                    </div>
                                @endif
                                <div style="height: 5px"></div>
                                <img src="{{ asset('storage/cauhinh/' . $cauhinh->logo) }}" class="img-responsive" />
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Địa chỉ</label>
                                <input type="text" class="form-control" name="diachi" placeholder="Nhập địa chỉ ... "
                                    aria-required="true" value="{{ $cauhinh->diachi }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Địa chỉ 2</label>
                                <input type="text" class="form-control" name="diachi2" placeholder="Nhập địa chỉ 2 ... "
                                    aria-required="true" value="{{ $cauhinh->diachi2 }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="row">
     <div class="col-md-7 col-xs-12">
     <div class="field-caterory-name">
          <label>Xưởng SX</label>
          <input type="text" class="form-control" name="diachi2" placeholder="Nhập địa chỉ ... " aria-required="true" value="{{ $cauhinh->diachi2 }}">
          <div class="help-block"></div>
         </div>
        </div>
     </div> -->

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Hotline 1</label>
                                <input type="text" class="form-control" name="hotline1" placeholder="Nhập hotline 1 ... "
                                    aria-required="true" value="{{ $cauhinh->hotline1 }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Hotline 2</label>
                                <input type="text" class="form-control" name="hotline2" placeholder="Nhập hotline 2 ... "
                                    aria-required="true" value="{{ $cauhinh->hotline2 }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Email</label>
                                <input type="text" class="form-control" name="email" placeholder="Nhập email ... "
                                    aria-required="true" value="{{ $cauhinh->email }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Zalo</label>
                                <input type="text" class="form-control" name="zalo" placeholder="Nhập zalo ... "
                                    aria-required="true" value="{{ $cauhinh->zalo }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Fanpage facebook</label>
                                <input type="text" class="form-control" name="fanpage"
                                    placeholder="Nhập link fanpage ... " aria-required="true"
                                    value="{{ $cauhinh->fanpage }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Messenger</label>
                                <input type="text" class="form-control" name="mess" placeholder="Nhập linl ... "
                                    aria-required="true" value="{{ $cauhinh->mess }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Youtube</label>
                                <input type="text" class="form-control" name="ytb" placeholder="Nhập link ... "
                                    aria-required="true" value="{{ $cauhinh->ytb }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Google Plus</label>
                                <input type="text" class="form-control" name="google" placeholder="Nhập link ... "
                                    aria-required="true" value="{{ $cauhinh->google }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Twiter</label>
                                <input type="text" class="form-control" name="twiter" placeholder="Nhập link ... "
                                    aria-required="true" value="{{ $cauhinh->twiter }}">
                                <div class="help-block"></div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-7 col-xs-12">
                            <div class="field-caterory-name">
                                <label>Google map</label>
                                <textarea class="form-control" rows="7" name="map" placeholder="Nhập mã nhúng google map ...">{{ $cauhinh->map }}</textarea>
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
