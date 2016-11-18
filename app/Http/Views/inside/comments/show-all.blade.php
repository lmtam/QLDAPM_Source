
@extends("{$moduleName}.layout.menu")
@section('content')
    <div id="page-title">
        <h1 class="page-header text-overflow">All Comment</h1>
    </div>

    <ol class="breadcrumb">
        <li class="">All Comment</li>
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

                    </div>
                    <div class="fixed-table-container" style="border: none;">
                        <table class="table table-hover table-bordered" id="edt" style="width: 100%; margin-bottom: 20px !important;">
                            <thead>
                            <tr>
                                <th>
                                    <div class="th-inner">
                                        Nội dung

                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Địa điểm

                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Ngày tạo

                                    </div>
                                </th>
                                <th>
                                    <div class="th-inner">
                                        Người tạo

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
                                        {!! str_limit($row->comment_content, 100) !!}
                                    </td>
                                    <td>
                                        {!! $row->TenDiaDiem !!}
                                    </td>
                                    <td>
                                        {!! $row->created_day !!}
                                    </td>
                                    <td>
                                        {!! $row->fullname !!}
                                    </td>

                                    <td align="center">


                                        <a href="{!! url("/{$moduleName}/{$controllerName}/delete/{$row->comment_id}") !!}" class="add-tooltip btn btn-danger btn-icon icon-lg btn-xs change-status-item" data-placement="top" data-original-title="Xóa"><i class="fa fa-trash-o"></i></a>

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
