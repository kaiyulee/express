<!-- BOOTSTRAP CSS (REQUIRED ALL PAGE)-->
<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- PLUGINS CSS -->
<link href="{{ asset('/plugins/weather-icon/css/weather-icons.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/prettify/prettify.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/owl-carousel/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/owl-carousel/owl.theme.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/owl-carousel/owl.transitions.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/chosen/chosen.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/icheck/skins/all.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/datepicker/datepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/validator/bootstrapValidator.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/summernote/summernote.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/markdown/bootstrap-markdown.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/datatable/css/bootstrap.datatable.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/morris-chart/morris.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/c3-chart/c3.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/slider/slider.min.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/salvattore/salvattore.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/toastr/toastr.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/fullcalendar/fullcalendar/fullcalendar.css') }}" rel="stylesheet">
<link href="{{ asset('/plugins/fullcalendar/fullcalendar/fullcalendar.print.css') }}" rel="stylesheet" media="print">

<!-- MAIN CSS (REQUIRED ALL PAGE)-->
<link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('/css/style-responsive.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">

@if (!empty($load_css))
    @foreach ($load_css as $css)
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/' . $css) }}">
    @endforeach
@endif