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

<body class="tooltips">

<!-- BEGIN PANEL DEMO -->
<!-- END PANEL DEMO -->


<!--
===========================================================
BEGIN PAGE
===========================================================
-->
<div class="wrapper">
    <!-- BEGIN TOP NAV -->
    <div class="top-navbar primary-color">
        <div class="top-navbar-inner">

            <!-- Begin Logo brand -->
            <div class="logo-brand primary-color">
                <a href="/"><img src="{{ asset('/img/logo.png') }}" alt="ipw logo"></a>
            </div>
            <!-- /.logo-brand -->
            <!-- End Logo brand -->

            <div class="top-nav-content">

                <!-- Begin button sidebar left toggle -->
                <div class="btn-collapse-sidebar-left">
                    <i class="fa fa-bars"></i>
                </div>
                <!-- /.btn-collapse-sidebar-left -->
                <!-- End button sidebar left toggle -->

                <!-- Begin button sidebar right toggle -->
                <!-- End button sidebar right toggle -->

                <!-- Begin button nav toggle -->
                <div class="btn-collapse-nav" data-toggle="collapse" data-target="#main-fixed-nav">
                    <i class="fa fa-plus icon-plus"></i>
                </div>
                <!-- /.btn-collapse-sidebar-right -->
                <!-- End button nav toggle -->


                <!-- Begin user session nav -->
                <ul class="nav-user navbar-right">
                    <li class="dropdown">
                        <a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">
                            <span class="fa fa-terminal"></span>
                        </a>
                        <ul class="dropdown-menu square primary margin-list-rounded with-triangle">
                            @if(Auth::user())
                                <li><a href="/home"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->username }} </a></li>
                                <li class="divider"></li>
                                <li><a href="/auth/logout"><i class="glyphicon glyphicon-log-out"></i> Log out </a></li>
                            @else
                                <li><a href="/auth/login"><i class="glyphicon glyphicon-log-in"></i> Log in </a></li>
                                <li><a href="/auth/register"><i class="glyphicon glyphicon-new-window"></i> Register
                                    </a></li>
                            @endif
                            <li><a href="/comment"><i class="glyphicon glyphicon-send"></i> Leave a comment </a></li>
                        </ul>
                    </li>
                </ul>
                <!-- End user session nav -->

                <!-- Begin Collapse menu nav -->
                <div class="collapse navbar-collapse" id="main-fixed-nav">
                    <!-- Begin nav search form -->
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>
                </div>
                <!-- End Collapse menu nav -->

            </div>
            <!-- /.top-nav-content -->
        </div>
        <!-- /.top-navbar-inner -->
    </div>
    <!-- /.top-navbar -->
    <!-- END TOP NAV -->


    <!-- BEGIN SIDEBAR LEFT -->
    <div class="sidebar-left sidebar-nicescroller light-color">
        @include('sidebar_menu')
    </div>
    <!-- /.sidebar-left -->
    <!-- END SIDEBAR LEFT -->


    <!-- BEGIN SIDEBAR RIGHT HEADING -->
    <!-- END SIDEBAR RIGHT HEADING -->


    <!-- BEGIN SIDEBAR RIGHT -->
    <!-- END SIDEBAR RIGHT -->


    <!-- BEGIN PAGE CONTENT -->
    <div class="page-content">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->

        <!-- BEGIN FOOTER -->
        <footer>
            &copy; 2015 <a href="{{ Url('/') }}">IPLAYWITH.ME.</a><br/>
        </footer>
        <!-- END FOOTER -->


    </div>
    <!-- /.page-content -->
</div>
<!-- /.wrapper -->
<!-- END PAGE CONTENT -->


<!-- BEGIN BACK TO TOP BUTTON -->
<div id="back-top">
    <a href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END BACK TO TOP -->


<!--
===========================================================
END PAGE
===========================================================
-->


</body>
</html>
@include('js_inc')
