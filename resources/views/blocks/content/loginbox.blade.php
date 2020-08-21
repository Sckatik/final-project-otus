@php( $login_url = View::getSection('login_url') ?? config('adminlte.login_url', 'login') )
@php( $register_url = View::getSection('register_url') ?? config('adminlte.register_url', 'register') )
@php( $password_reset_url = View::getSection('password_reset_url') ?? config('adminlte.password_reset_url', 'password/reset') )

@if (config('adminlte.use_route_url', false))
    @php( $login_url = $login_url ? route($login_url) : '' )
    @php( $register_url = $register_url ? route($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? route($password_reset_url) : '' )
@else
    @php( $login_url = $login_url ? url($login_url) : '' )
    @php( $register_url = $register_url ? url($register_url) : '' )
    @php( $password_reset_url = $password_reset_url ? url($password_reset_url) : '' )
@endif
<div class="login_box">
    <div class="box">
         <a id="c_loginbox"><i class="icon-close2"></i></a>
         <h3>@lang('messages.Login') </h3>
         <form action="{{ $login_url }}" id="dooplay_login_user" method="post">
            {{ csrf_field() }}
            <fieldset class="user">
                 <input id="login" type="text" name="log" placeholder="@lang('messages.username')">
            </fieldset>
            <fieldset class="password">
                <input type="password" id="password" name="pwd" placeholder="@lang('messages.password')">
            </fieldset>
            <label>
                <input name="rmb" type="checkbox" id="rememberme" value="forever" checked=""> @lang('messages.remember')
            </label>
            <fieldset class="submit">
                <input id="dooplay_login_btn" data-btntext="Log in" type="submit" value="Log in">
            </fieldset>
            <a class="register" href="{{ route('register') }}">Register a new account</a>
            <label>
                <a class="pteks" href="{{ route('password.request') }}">Lost your password?</a>
            </label>
        </form>
    </div>
</div>
