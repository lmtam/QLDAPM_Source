
@extends("{$moduleName}.layout.menu")
@section('content')
    <div id="page-title">
        <h1 class="page-header text-overflow">All Place</h1>
    </div>

    <ol class="breadcrumb">
        <li class="">All Place</li>
        <li class="active">Danh sách</li>
    </ol>

    <div id="page-content">
        <div class="panel">
            <div class="panel-heading">
                <h3 class="panel-title">Danh sách</h3>
            </div>
            <div class="panel-body">
                <div class="bootstrap-table">
                    <div class="bars pull-left">
                        <button onclick="window.location.href = '{!! url("/{$moduleName}/{$controllerName}/add") !!}'" type="button" class="btn btn-primary btn-labeled fa fa-plus">
                            Thêm mới
                        </button>


                    </div>
                    <div class="fixed-table-container" style="border: none;">
                        <table class="table table-hover table-bordered" id="edt" style="width: 100%; margin-bottom: 20px !important;">
                            <thead>
                            <tr>
                                <th>
                                    <div class="th-inner">
                                        Tên địa điểm

                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Địa chỉ

                                    </div>
                                </th>

                                <th style="width: 80px;">
                                    <div class="th-inner">Action</div>
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($paginate as $row)
                                <tr>

                                    <td>
                                        {!! str_limit($row->TenDiaDiem, 100) !!}
                                    </td>
                                    <td>
                                        {!! $row->SoNha .' Đường '. $row->TenDuong .' Phường '. $row->TenPhuong .' Quận '.$row->TenQuanHuyen .' '. $row->TenTinhThanh !!}
                                    </td>


                                    <td align="center">
                                        <a href="{!! url("/{$moduleName}/{$controllerName}/edit/{$row->MaDuLieu}") !!}" class="add-tooltip btn btn-primary btn-icon icon-lg btn-xs " data-placement="top" data-original-title="Sửa"><i class="fa fa-pencil"></i></a>

                                        <a href="{!! url("/{$moduleName}/{$controllerName}/delete/{$row->MaDuLieu}") !!}" class="add-tooltip btn btn-danger btn-icon icon-lg btn-xs change-status-item" data-placement="top" data-original-title="Xóa"><i class="fa fa-trash-o"></i></a>

                                    </td>
                                </tr>
                            @endforeach
                            </tbody>


                        </table>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


@endsection
