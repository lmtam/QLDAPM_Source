@extends("{$moduleName}.layout.login")
@section('content')
    <div class="login-box" >
        <p class="pad-btm"><strong>Đăng nhập hệ thống</strong></p>
        <form role="form" class="email-login" method="post" >
            <input type="hidden" value="{!! csrf_token() !!}" name="_token">
            @if(Session::has('message'))
                <div class="alert alert-danger fade in">
                    <button class="close" data-dismiss="alert"><span>×</span></button>
                    {{Session::get('message')}}
                </div>
            @endif

            <div class="u-form-group">
                <input type="input" name="username" placeholder="Tài khoản Admin" value="{{ old('username') }}"/>
            </div>
            <div class="u-form-group">
                <input type="password" name="password" placeholder="Mật khẩu"value="{{ old('password') }}"/>
            </div>

            <div class="u-form-group">
                <a href="{!! url("/{$moduleName}/{$controllerName}/signup") !!}">Tạo tài khoản mới</a>
            </div>

            <div class="u-form-group">
                <button type="submit"class=" fa fa-user fa-lg" > Đăng nhập</button>
            </div>
        </form>

    </div>
@endsection