@extends("{$moduleName}.layout.header")
@section('content_result')
    <div class="login-box" >
        <p class="pad-btm"><strong>Đăng nhập hệ thống</strong></p>
        <form role="form" class="email-login" method="post" action="" >
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            @if(Session::has('message'))
                <div class="alert alert-danger fade in">
                    <span style="color: red;"> {{Session::get('message')}}</span>
                </div>
            @endif

            <div class="u-form-group">
                <input type="input" name="username"  value="{{ old('username') }}"/>
            </div>
            <span class="help-block has-error">{!! $errors->first("username") !!}</span>
            <div class="u-form-group">
                <input type="password" name="password" value="{{ old('password') }}"/>
            </div>
            <span class="help-block has-error">{!! $errors->first("password") !!}</span>
            <div class="u-form-group">
                <a href="{!! url("/signup") !!}">Create new user</a>

            </div>

            <div class="u-form-group">
                <button type="submit" class=" fa fa-user fa-lg" >Đăng nhập</button>
            </div>


        </form>
        <div class="u-form-group" >
            <a href="facebook/redirect">
                <span>
                    <i class="fa fa-facebook fa-2x"></i>
                    Log in with facebook
                </span>
            </a>

        </div>
    </div>


@endsection
