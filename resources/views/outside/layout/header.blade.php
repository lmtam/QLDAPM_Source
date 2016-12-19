<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <title>{!! $title !!}</title>

    {{--<link href="assets/outside/css/bootstrap.min.css" rel="stylesheet">--}}

    <link href="/assets/outside/css/venue-detail-2-123f794815db22e987be8c5222c8aa91.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/outside/css/master-a06646f9a770f03d505462e698f959b8.css" rel="stylesheet" type="text/css"/>

    <link href="/assets/outside/css/explorepage-f3b440947af3a27d526b5a6322a82044.css" type="text/css" rel="stylesheet">
    <link href="/assets/outside/css/venue-menu-0dd1e698d3b88d480d4a9a9112641171.css" type="text/css" rel="stylesheet">


    <link href="/assets/outside/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{--<script src="assets/outside/js/bootstrap.min.js" type="javascript"></script>--}}
    {{--<script src="assets/outside/js/jquery-2.2.3.js" type="javascript"></script>--}}
    <link href="/assets/outside/css/login.css" rel="stylesheet">

</head>

<?php

    Session::put('message',null);
    Session::save();

?>
<body class="notrans withHeaderSearch ">
<div id="wrapper">
    <div class="desktopHeaderBarDrawerContainer drawerIsShown" id="desktopHeaderBarDrawerContainer">
        <div id="desktopHeader" class="withDrawer consumerMode ">
            <div class="wrap">
                <div class="leftSide">
                    <div class="logoArea">
                        <a href="/" id="logo">My VnFinder</a>
                    </div><div class="inputs">
                        <form action="search" method="get" id="search">
                            <div class="inputSet searchInputSet withDropdownArrow" data-placeholder="I'm looking for...">
                                <input type="text" name="tukhoa" placeholder="Tôi đang tìm ..." maxlength="200" id="tukhoa" />
                                <div class="dropdownArrow">
                                    <div class="icon"></div>
                                </div>
                            </div>

                            <button class="submitButton" type="submit" >
                                <img class="goIcon" src="/assets/outside/img/search-icon.png"  alt="Search" height="25px" width="25px" />
                            </button>
                        </form>
                    </div>
                </div>
                <?php
                    $isLogin = Session::get('IsLogin');

                ?>
                <div class="rightSide">
                    @if($isLogin != true)
                    <ul class="loggedOutMenu">
                        <li>
                            <a href="/login" data-toggle="modal" data-target="#login-modal" class="log btn">Đăng nhập</a>
                        </li>
                        <li>
                            <a href="/signup"  id="signupButton" class="sign btn">Đăng kí</a>
                        </li>
                    </ul>
                    @else
                    <div id="user">
                        <a class="userPathLink" href="#">
                            <span class="pic"><img src="/assets/outside/img/avatar.png" alt="Tâm L." class="avatar " width="64" height="64" ></span>
                            {{ Session::get('fullname')}}<i class="fa fa-angle-down fa-2x" style="margin-top: 15px;" ></i>
                        </a>
                        <div id="userMenu">
                            <ul>
                                @if(Session::get('IsAdmin') == 1)
                                <li class="myProfile"><a class="userTodoLink" href="/inside/places/show-all">Quản lý</a></li>
                                @endif
                                <li class="myProfile"><a class="userTodoLink" href="/showSave">Lưu</a></li>
                                <li><a href="/logout" class="logoutLink" id="logoutLink" >Đăng Xuất</a></li>
                            </ul>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
            <div >

                @yield('menu');

            </div>
            </div>
    </div>
    <div id="container" class="wrap" style="margin-top : 50px;">
        @yield('content_detail')
    </div>
</div>
<div id="container" class="wrap">
    @yield('content_result')
</div>


</body>
</html>