<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" xmlns:og="http://opengraphprotocol.org/schema/" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <title>{!! $title !!}</title>

    {{--<link href="assets/outside/css/bootstrap.min.css" rel="stylesheet">--}}


    <link href="/assets/outside/css/venue-detail-2-123f794815db22e987be8c5222c8aa91.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/outside/css/master-a06646f9a770f03d505462e698f959b8.css" rel="stylesheet" type="text/css"/>
    <link href="/assets/outside/css/explorepage-f3b440947af3a27d526b5a6322a82044.css" type="text/css" rel="stylesheet">
    <link href="/assets/outside/css/venue-menu-0dd1e698d3b88d480d4a9a9112641171.css" type="text/css" rel="stylesheet">

    <link href="/assets/outside/css/login.css" rel="stylesheet">
    <link href="/assets/outside/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    {{--<script src="assets/outside/js/bootstrap.min.js" type="javascript"></script>--}}
    {{--<script src="assets/outside/js/jquery-2.2.3.js" type="javascript"></script>--}}


</head>
<?php
    $url_back = URL::current();
    $url_back = base64_encode($url_back);
    $url_login = route("users.login",['url_back' => $url_back]);
//    $url_login = '/login';

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
                                <input type="text" name="tukhoa" placeholder="" maxlength="200" id="headerBarSearch" />
                                <div class="dropdownArrow">
                                    <div class="icon"></div>
                                </div>
                            </div>

                            <button class="submitButton" type="submit">
                                <img class="goIcon" src="/assets/outside/img/search-icon.png" alt="Search" height="35px" width="35px" />
                            </button>
                        </form>
                    </div>
                </div>
                <div class="rightSide">
                    <ul class="loggedOutMenu">
                        <li>
                            <a href="{!! $url_login !!}" data-toggle="modal" data-target="#login-modal" class="log btn">Log In</a>
                        </li>
                        <li>
                            <a href="/signup/"  id="signupButton" class="sign btn">Sign Up</a>
                        </li>
                    </ul>
                </div>
            </div>
            </div>
    </div>
</div>

<div id="container" class="wrap">
    @yield('content')
</div>
{{--<div class="modal fade" id="login-modal" role="dialog" tabindex="-1" aria-labelledby="login-modal" aria-hidden="true">--}}
    {{--<div class="modal-dialog">--}}
            {{--<div class="modal-content">--}}

            {{--<div class="login-box" >--}}
                {{--<p class="pad-btm"><strong>Đăng nhập hệ thống</strong></p>--}}
                {{--<form role="form" class="email-login" method="post" >--}}
                    {{--<input type="hidden" value="{!! csrf_token() !!}" name="_token">--}}
                    {{--@if(Session::has('message'))--}}
                        {{--<div class="alert alert-danger fade in">--}}
                            {{--<button class="close" data-dismiss="alert"><span>×</span></button>--}}
                            {{--{{Session::get('message')}}--}}
                        {{--</div>--}}
                    {{--@endif--}}

                    {{--<div class="u-form-group">--}}
                        {{--<input type="input" name="username" placeholder="Admin" value="{{ old('username') }}"/>--}}
                    {{--</div>--}}
                    {{--<div class="u-form-group">--}}
                        {{--<input type="password" name="password" placeholder="Password"value="{{ old('password') }}"/>--}}
                    {{--</div>--}}

                    {{--<div class="u-form-group">--}}
                        {{--<a href="{!! url("/{$moduleName}/{$controllerName}/signup") !!}">Create new user</a>--}}
                    {{--</div>--}}

                    {{--<div class="u-form-group">--}}
                        {{--<button type="submit"class=" fa fa-user fa-lg" >Đăng nhập</button>--}}
                    {{--</div>--}}
                {{--</form>--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
</body>
</html>