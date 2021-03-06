
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
        <li class="active">Chỉnh sửa</li>
    </ol>
    <div id="page-content">
        <form  class="form-horizontal" method="post">
            <div class="panel-heading">
                <h3 class="panel-title">Chỉnh sửa</h3>
            </div>

            <div class="panel-body">

                <div class="form-group">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Hình đại diện</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7 btn-file">
                        <div class="fileupload-new thumbnail" style="width: 320px; height: 200px; margin-bottom: 3px;">
                            <?php
                            if (!empty(old('image_name'))) :
                                $path = old('image_name');
                            else :
                                $path = '/upload/images/' . $dulieu->image_name;
                            endif;

                            ?>

                            <img class="preview-file-upload" style="width: 320px; height: 190px;" src="{!! $path !!}">
                        </div>

                        <div class="p-l-file">
                            <a href="#" data-target="image_name" class="iframe-btn browse-image" type="button">
                                <i class="fa fa-paperclip"></i>&nbsp;&nbsp;Chọn hình
                            </a>
                        </div>
                        {!! Form::hidden("image_name", $path, ['id' => 'image_name']) !!}
                        {!! Form::hidden("is_new_image") !!}
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Tên địa điểm</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <input type="hidden" name="MaDuLieu" value="{!! $dulieu->MaDuLieu !!}">
                        <input type="hidden" name="MaTenDiaDiem" value="{!! $dulieu->MaTenDiaDiem !!}">
                        <input type="text" id="TenDiaDiem" name="TenDiaDiem" class="form-control" value="{!! $dulieu->TenDiaDiem !!}">
                        <span class="help-block has-error">{!! $errors->first("TenDiaDiem") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Số nhà</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <input type="text" id="SoNha" name="SoNha" class="form-control" value="{!! $dulieu->SoNha !!}">
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
                                @if($item->MaDichVu == $dulieu->MaDichVu)
                                    <option value="{{ $item->MaDichVu }}" selected>{{ $item->TenDichVu }} </option>
                                @else
                                    <option value="{{ $item->MaDichVu }}">{{ $item->TenDichVu }} </option>
                                @endif
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
                                @if($item->MaDuong == $dulieu->MaDuong)
                                    <option value="{{ $item->MaDuong }}" selected>{{ $item->TenDuong }} </option>
                                @else
                                    <option value="{{ $item->MaDuong }}">{{ $item->TenDuong }} </option>
                                @endif
                            @endforeach
                        </select>
                        <span class="help-block has-error">{!! $errors->first("MaDuong") !!}</span>
                    </div>
                </div>
                <div class="form-group col-sm-12">
                    <label class="col-sm-2 control-label" for="form-field-1">
                        <strong>Phường</strong>
                        <span class="symbol required"></span>
                    </label>
                    <div class="col-sm-7">
                        <select id="MaPhuong" name="MaPhuong" class="form-control">
                            @foreach($phuong as $item)
                                @if($item->MaPhuong == $dulieu->MaPhuong)
                                    <option value="{{ $item->MaPhuong }}" selected>{{ $item->TenPhuong }} </option>
                                @else
                                    <option value="{{ $item->MaPhuong }}">{{ $item->TenPhuong }} </option>
                                @endif
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
                                @if($item->MaQuanHuyen == $dulieu->MaQuanHuyen)
                                    <option value="{{ $item->MaQuanHuyen }}" selected>{{ $item->TenQuanHuyen }} </option>
                                @else
                                    <option value="{{ $item->MaQuanHuyen }}">{{ $item->TenQuanHuyen }} </option>
                                @endif
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
                                @if($item->MaTinhThanh == $dulieu->MaTinhThanh)
                                    <option value="{{ $item->MaTinhThanh }}" selected>{{ $item->TenTinhThanh }} </option>
                                @else
                                    <option value="{{ $item->MaTinhThanh }}">{{ $item->TenTinhThanh }} </option>
                                @endif
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
                        {!! Form::textarea("ChuThich", $dulieu->ChuThich, ['class' => 'form-control' , 'id' => "ChuThich", 'style' => 'resize: none;']) !!}
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
        //        $('#Save').click(function () {
        //
        //            $.post("/inside/authors/addarticle",
        //                    {
        //                        _token: $('input[name="_token"]').val(),
        //                        TenDiaDiem: $('input[name="TenDiaDiem"]').val(),
        //                        SoNha: $('input[name="SoNha"]').val(),
        //                        Duong: $('input[name="Duong :selected"]').val()
        //                    },
        //                    function(data){
        //                        alert (data);
        //                    });
        //        });
        //

        $( document ).ready(function() {
            CKEDITOR.config.enterMode = CKEDITOR.ENTER_P;
            CKEDITOR.config.shiftEnterMode = CKEDITOR.ENTER_BR;

            CKEDITOR.config.toolbar = 'basic';
            CKEDITOR.replace('ChuThich', CKEDITOR.config);
        });
        function BrowseServer(name) {
//            console.log(name);
            var config = {};
            config.startupPath = 'Images:/upload/images/';
            var finder = new CKFinder(config);
//    finder.basePath = '../';
            finder.selectActionFunction = SetFileField;
            finder.selectActionData = name;
            finder.callback = function (api) {
                api.disableFolderContextMenuOption('Batch', true);
            };
            finder.popup();
        }
        function SetFileField(fileUrl, data) {
            var file = fileUrl.replace(/\/\//g, '/');
//            console.log(file);
            $('#' + data["selectActionData"]).val(file);
            $('#' + data["selectActionData"]).parent().find('.preview-file-upload').attr('src', file);
        }
        var browseImage = function () {
            $('.browse-image').click(function () {
                var name = $(this).attr('data-target');
                //openKCFinder();
                BrowseServer(name);
            });
        };
        browseImage();
    </script>




@endsection
