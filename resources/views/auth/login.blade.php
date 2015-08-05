<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I Play With Me, A awesome social website!">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Login - I PLAY WITH ME</title>

    @include('css_inc')

            <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login tooltips">

<!-- BEGIN PANEL DEMO -->
<!-- END PANEL DEMO -->


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="login-header text-center">
    <img src="{{ asset('/img/logo.png') }}" class="logo" alt="Logo">
</div>

<div class="login-wrapper">

    <form role="form" action="/auth/login" method="post">
        {!! csrf_field() !!}
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="text" class="form-control no-border input-lg rounded" placeholder="Enter email"
                   name="email" required autofocus>
            <span class="fa fa-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback lg left-feedback no-label">
            <input type="password" class="form-control no-border input-lg rounded" placeholder="Enter password" name="password" required>
            <span class="fa fa-unlock-alt form-control-feedback"></span>
        </div>
        <div class="form-group">
            <div class="checkbox">
                <label>
                    <input type="checkbox" class="i-yellow-flat" name="remember"> 记住偶
                </label>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-perspective btn-block">LOGIN</button>
        </div>
    </form>
    <p class="text-center"><strong><a href="/auth/forgot-password">忘记密码?</a></strong></p>

    <p class="text-center">or</p>

    <p class="text-center"><strong><a href="/auth/register">创建账户</a></strong> | <strong><a
                    href="/">游客</a></strong></p>
</div>

<!--
===========================================================
END PAGE
===========================================================
-->


</body>
</html>
@include('js_inc')
