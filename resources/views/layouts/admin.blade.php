<!DOCTYPE html>

<!--[if IE 8]>
<html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8"/>
    <title>News</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="/admin/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->


    <!-- BEGIN THEME STYLES -->
    <!-- DOC: To use 'rounded corners' style just load 'components-rounded.css' stylesheet instead of 'components.css' in the below style tag -->
    <link href="/admin/global/css/components-rounded.css" id="style_components" rel="stylesheet" type="text/css"/>
    <link href="/admin/global/css/plugins.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/admin/layout4/css/layout.css" rel="stylesheet" type="text/css"/>
    <link href="/admin/admin/layout4/css/themes/light.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="/admin/admin/layout4/css/custom.css" rel="stylesheet" type="text/css"/>
    <script src="/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
    <!-- END THEME STYLES -->
    <link rel="shortcut icon" type="image/x-icon" href="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">


    <!-- Styles -->


    <style>
        .container {
            padding-top: 100px;
        }
    </style>

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
    ]) !!};
    </script>
</head>


<body class="page-header-fixed ">

<!-- BEGIN HEADER -->
<div class="page-header navbar navbar-fixed-top">
    <!-- BEGIN HEADER INNER -->
    <div class="page-header-inner">
        <!-- BEGIN LOGO -->
        <div class="page-logo admin">
            <a href="/admin/dashboard" title="Shoplist.am">

            </a>
            {{--<div class="menu-toggler sidebar-toggler">
                <!-- DOC: Remove the above "hide" to enable the sidebar toggler button on header -->
            </div>--}}
        </div>
        <!-- END LOGO -->
        <!-- BEGIN RESPONSIVE MENU TOGGLER -->
        <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
           data-target=".navbar-collapse">
        </a>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <!-- BEGIN PAGE ACTIONS -->

        <!-- BEGIN PAGE TOP -->
        <div class="page-top">
            <!-- BEGIN HEADER SEARCH BOX -->

            <!-- BEGIN TOP NAVIGATION MENU -->
            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            {{ Config::get('languages')[App::getLocale()] }}
                        </a>
                        <ul class="dropdown-menu lang-ul">

                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())
                                    <li class="flag">
                                        <a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
                                    </li>
                                @endif
                            @endforeach
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user dropdown-dark">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">

                            <img alt="" class="img-circle" src="/admin/admin/layout4/img/avatar9.jpg"/>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="icon-user"></i> @lang('admin.myProfile') </a>
                            </li>
                            <li class="divider">
                            </li>
                            <li>
                                <a href="{{ route('logOut') }}">
                                    <i class="icon-key"></i> @lang('admin.logout') </a>
                            </li>
                        </ul>
                    </li>
                    <!-- END USER LOGIN DROPDOWN -->
                </ul>
            </div>
            <!-- END TOP NAVIGATION MENU -->
        </div>
        <!-- END PAGE TOP -->
    </div>
    <!-- END HEADER INNER -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
    <!-- BEGIN SIDEBAR -->
@include('include.admin.menu')
<!-- END SIDEBAR -->
    <div class="page-content-wrapper">
        @yield('content')
    </div>

</div>


<!--[if lt IE 9]>
<script src="/admin/global/plugins/respond.min.js"></script>
<script src="/admin/global/plugins/excanvas.min.js"></script>
<![endif]-->
<script src="/admin/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery-migrate.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="/admin/global/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"
        type="text/javascript"></script>
<script src="/admin/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/jquery.cokie.min.js" type="text/javascript"></script>
<script src="/admin/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>

<script src="/admin/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui.min.js for drag & drop support -->
<script src="/admin/global/plugins/flot/jquery.flot.js" type="text/javascript"></script>
<script src="/admin/global/plugins/flot/jquery.flot.resize.js" type="text/javascript"></script>
<script src="/admin/global/plugins/flot/jquery.flot.categories.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- DataTables -->
<script type="text/javascript" src="/admin/global/plugins/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"
        src="/admin/global/plugins/datatables/extensions/TableTools/js/dataTables.tableTools.min.js"></script>
<script type="text/javascript"
        src="/admin/global/plugins/datatables/extensions/ColReorder/js/dataTables.colReorder.min.js"></script>
<script type="text/javascript"
        src="/admin/global/plugins/datatables/extensions/Scroller/js/dataTables.scroller.min.js"></script>
<script type="text/javascript"
        src="/admin/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js"></script>


<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="/admin/global/scripts/metronic.js" type="text/javascript"></script>
<script src="/admin/admin/layout4/scripts/layout.js" type="text/javascript"></script>
<script src="/admin/admin/layout4/scripts/demo.js" type="text/javascript"></script>
<script src="/admin/admin/pages/scripts/ecommerce-index.js"></script>
<script src="/admin/admin/pages/scripts/table-advanced.js"></script>

<script src="/js/script.js"></script>
<!-- END CORE PLUGINS -->
@if(isset($page))
    @if($page == 'dashboard')





    @elseif($page == 'profile')

        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="/admin/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
        <script src="/admin/global/plugins/jquery.sparkline.min.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
        <script src="/admin/global/scripts/metronic.js" type="text/javascript"></script>
        <script src="/admin/admin/layout4/scripts/layout.js" type="text/javascript"></script>
        <script src="/admin/admin/layout4/scripts/demo.js" type="text/javascript"></script>
        <script src="/admin/admin/pages/scripts/profile.js" type="text/javascript"></script>
        <!-- END PAGE LEVEL SCRIPTS -->

    @endif
@endif
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function () {
        Metronic.init(); // init metronic core components
        Layout.init(); // init current layout



    });
</script>
</body>
</html>
