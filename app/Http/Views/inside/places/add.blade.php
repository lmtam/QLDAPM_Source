
@extends("{$moduleName}.layout.menu")
@section('content')


    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="/assets/inside/plugins/ckeditor/ckeditor.js"></script>
    <script src="/assets/inside/plugins/ckfinder/ckfinder.js"></script>



    <link href="/assets/inside/plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet">
    <script src="/assets/inside/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script src="/assets/inside/plugins/bootstrap-datetimepicker/js/locales/bootstrap-datetimepicker.vi.js"></script>
    <div id="page-title">
        <h1 class="page-header text-overflow">{!! $title !!}</h1>
    </div>

    <ol class="breadcrumb">
        <li>
            <a href="{!! url("/{$moduleName}/{$controllerName}/show-all") !!}">
                {!! $title !!}
            </a>
        </li>
        <li class="active">Thêm mới</li>
    </ol>
    <div id="page-content">
        <form  role="form" class="form-horizontal" method="post">
            <div class="panel-heading">
                <h3 class="panel-title">Thêm mới</h3>
            </div>

            <div class="panel-body">


                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Tên địa điểm</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" id="TenDiaDiem" name="TenDiaDiem" class="form-control">
                        <span class="help-block has-error">{!! $errors->first("TenDiaDiem") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Số nhà</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" id="SoNha" name="SoNha" class="form-control">
                        <span class="help-block has-error">{!! $errors->first("SoNha") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Dịch vụ</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="MaDichVu" name="MaDichVu" class="form-control">
                            @foreach($dichvu as $item)
                                <option value="{{ $item->MaDichVu }}">{{ $item->TenDichVu }}</option>
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaDichVu") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Đường</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="MaDuong" name="MaDuong" class="form-control">
                            @foreach($duong as $item)
                                <option value="{{ $item->MaDuong }}">{{ $item->TenDuong }}</option>
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaDuong") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Phuong</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="selMaPhuong" name="MaPhuong" class="form-control">
                            @foreach($phuong as $item)
                                <option value="{{ $item->MaPhuong }}">{{ $item->TenPhuong }}</option>
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaPhuong") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Quận Huyện</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="MaQuanHuyen" name="MaQuanHuyen" class="form-control">
                            @foreach($quanhuyen as $item)
                                <option value="{{ $item->MaQuanHuyen }}">{{ $item->TenQuanHuyen }}</option>
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaQuanHuyen") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Tỉnh thành</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="MaTinhThanh" name="MaTinhThanh" class="form-control">
                            @foreach($tinhthanh as $item)
                                <option value="{{ $item->MaTinhThanh }}">{{ $item->TenTinhThanh }}</option>
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaTinhThanh") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Mô tả</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        {!! Form::textarea("ChuThich", null, ['class' => 'form-control' , 'id' => "ChuThich", 'style' => 'resize: none;']) !!}
                        <span class="help-block has-error">{!! $errors->first("ChuThich") !!}</span>
                    </div>
                </div>
            </div>
            <div class="panel-footer text-right">
                <a href='{!! url("/{$moduleName}/{$controllerName}/show-all") !!}' class="btn btn-success btn-labeled fa fa-arrow-left pull-left">Về danh sách</a>
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <button class="btn btn-primary btn-labeled fa fa-save">Lưu</button>
                <button id="btn-reset" type="reset" class="btn btn-default btn-labeled fa fa-refresh">Hủy</button>
            </div>

        </form>
    </div>

    <script type="text/javascript">
        $( document ).ready(function() {
            CKEDITOR.config.enterMode = CKEDITOR.ENTER_P;
            CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_BR;

            CKEDITOR.config.toolbar = 'basic';
            CKEDITOR.replace('ChuThich', CKEDITOR.config);
        });

    </script>




@endsection
