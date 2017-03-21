<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="I Play With Me, A awesome social website!">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>I PLAY WITH ME - Be Yourself With No Worry!</title>

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
        <div class="login-wrapper">
            <h1 class="error-number">4<i class="fa fa-meh-o icon-xl icon-square icon-primary"></i>4</h1>
            <form role="form" action="index.html">
                <div class="form-group has-feedback lg no-label">
                  <input type="text" class="form-control no-border input-lg rounded" placeholder="Feel lucky!">
                  <span class="fa fa-search form-control-feedback"></span>
                </div>
            </form>
            <p class="text-center"><strong><a href="{{ url('/') }}">返回首页</a></strong></p>
        </div><!-- /.login-wrapper -->

<!--
===========================================================
END PAGE
===========================================================
-->


</body>
</html>
@include('js_inc')
