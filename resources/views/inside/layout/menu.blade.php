<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{!! $title !!}</title>

    <!--jQuery [ REQUIRED ]-->
    <script src="/assets/inside/js/jquery-2.1.1.min.js"></script>

    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ] -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=latin" rel="stylesheet">


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="/assets/inside/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="/assets/inside/css/nifty.min.css" rel="stylesheet">


    <!--Font Awesome [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/font-awesome/css/font-awesome.css" rel="stylesheet">


    <!--Animate.css [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/animate-css/animate.min.css" rel="stylesheet">

    <!--Morris.js [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/morris-js/morris.min.css" rel="stylesheet">


    <!--Switchery [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/switchery/switchery.min.css" rel="stylesheet">


    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--Bootstrap Table [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

    <!--Page Load Progress Bar [ OPTIONAL ]-->
    <link href="/assets/inside/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="/assets/inside/plugins/pace/pace.min.js"></script>

    <script type="text/javascript" src="/assets/inside/plugins/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="/assets/inside/plugins/ckeditor/adapters/jquery.js"></script>

    <script src="/assets/inside/plugins/uploadify/jquery.uploadify.min.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="/assets/inside/plugins/uploadify/uploadify.css">

    <link href="/assets/inside/plugins/bootstrap-datetimepicker/css/datetimepicker.css" rel="stylesheet" />
    <link href="/assets/inside/plugins/bootstrap-table/bootstrap-table.min.css" rel="stylesheet" />
    <link href="/assets/inside/plugins/bootstrap-table/bootstrap-table.css" rel="stylesheet" />
    <link href="/assets/inside/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="/assets/inside/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/assets/inside/plugins/jquery-sweet-alert/sweetalert.css" rel="stylesheet" />

    <link href="/assets/inside/css/menu.css" rel="stylesheet">
    <link href="/assets/inside/css/place.css" rel="stylesheet">

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->



<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
        <div id="navbar-container" class="boxed">

            <!--Brand logo & name-->
            <!--================================-->
            <div class="navbar-header">
                <a href="#" class="navbar-brand">
                    {{--<img src="/assets/inside/img/logo.png" alt="Inside" class="brand-icon">--}}
                    <div class="brand-title">
                        <span class="brand-text">VnFinder</span>
                    </div>
                </a>
            </div>                <!--================================-->
            <!--End brand logo & name-->



            <!--Navbar Dropdown-->
            <!--================================-->
            <div class="navbar-content clearfix">
                <ul class="nav navbar-top-links pull-left">
                    <!--Navigation toogle button-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li class="tgl-menu-btn">
                        <a class="mainnav-toggle" href="#">
                            <i class="fa fa-navicon fa-lg"></i>
                        </a>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End Navigation toogle button-->
                </ul>

                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End language selector-->



                    <!--User dropdown-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <li id="dropdown-user" class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right">

                                    </span>
                            <div class="username hidden-xs">Tâm Lê</div>
                        </a>


                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right with-arrow panel-default">
                            <!-- User dropdown menu -->
                            <!--                                    <ul class="head-list">
                                                                    <li>
                                                                        <a href="/inside/users/profile">
                                                                            <i class="fa fa-user fa-fw fa-lg"></i> Thông tin cá nhân
                                                                        </a>
                                                                    </li>
                                                                </ul>-->

                            <!-- Dropdown footer -->
                            <div class="pad-all text-right">
                                <a href="/inside/users/logout" class="btn btn-primary">
                                    <i class="fa fa-sign-out fa-fw"></i> Thoát
                                </a>
                            </div>
                        </div>
                    </li>
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    <!--End user dropdown-->


                </ul>
            </div>
            <!--================================-->
            <!--End Navbar Dropdown-->

        </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">
            @yield('content')
        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->



        <!--MAIN NAVIGATION-->
        <!--===================================================-->
        <nav id="mainnav-container">
            <div id="mainnav">
                <!--Menu-->
                <!--================================-->
                <div id="mainnav-menu-wrap">
                    <div class="nano">
                        <div class="nano-content">
                            <ul id="mainnav-menu" class="list-group">

                                <!--Category name-->
                                <li class="list-header">Thanh điều hướng</li>

                                <!--Menu list item-->
                                <li class="<?php echo (in_array($controllerName, array('users')) && in_array($actionNameDefault, array('getDashboard'))) ? 'active-link' : '' ?>">
                                    <a href="/inside/users/index">
                                        <i class="fa fa-dashboard"></i>
                                        <span class="menu-title">
                                                    <strong>Bảng điều khiển</strong>
                                                </span>
                                    </a>
                                </li>

                                <li class="<?php echo (in_array($controllerName, array('categories'))) ? 'active-link' : '' ?>">
                                    <a href="/inside/places/show-all">
                                        <i class="fa fa-table"></i>
                                        <span class="menu-title">
                                                    <strong>Địa điểm</strong>
                                                </span>
                                    </a>
                                </li>

                                <li class="<?php echo (in_array($controllerName, array('articles'))) ? 'active-sub active' : '' ?>">
                                    <a href="/inside/comments/show-all">
                                        <i class="fa fa-edit"></i>
                                        <span class="menu-title">
                                                    <strong>Bình luận</strong>
                                                </span>
                                    </a>
                                </li>


                            </ul>
                        </div>
                    </div>
                </div>
                <!--================================-->
                <!--End menu-->

            </div>
        </nav>
        <!--===================================================-->
        <!--END MAIN NAVIGATION-->
    </div>




<!--===================================================-->
<!-- END OF CONTAINER -->



<!--JAVASCRIPT-->
<!--=================================================-->

<!--jQuery [ REQUIRED ]-->
<script src="/assets/inside/js/jquery-2.1.1.min.js"></script>


<!--BootstrapJS [ RECOMMENDED ]-->
<script src="/assets/inside/js/bootstrap.min.js"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="/assets/inside/plugins/fast-click/fastclick.min.js"></script>

<script src="/assets/inside/plugins/jquery.min.js"></script>
<script src="/assets/inside/js/bootstrap.js"></script>
<script src="/assets/inside/js/bootstrap.min.js"></script>
<script src="/assets/inside/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="/assets/inside/plugins/bootstrap-table/bootstrap-table.min.js"></script>
<script src="/assets/inside/plugins/bootstrap-table/bootstrap-table.js"></script>
<script src="/assets/inside/plugins/jquery-sweet-alert/sweetalert.min.js"></script>

</body>
</html>