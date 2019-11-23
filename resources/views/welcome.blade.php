@extends("layouts.admin")
@section('content')
    <script type="text/javascript">
        var statistic = [
            ['01/19', "{!! $statisticSum[1] ? $statisticSum[1] : 0 !!}"],
            ['02/19', "{!! $statisticSum[2] ? $statisticSum[2] : 0 !!}"],
            ['03/19', "{!! $statisticSum[3] ? $statisticSum[3] : 0 !!}"],
            ['04/19', "{!! $statisticSum[4] ? $statisticSum[4] : 0 !!}"],
            ['05/19', "{!! $statisticSum[5] ? $statisticSum[5] : 0 !!}"],
            ['06/19', "{!! $statisticSum[6] ? $statisticSum[6] : 0 !!}"],
            ['07/19', "{!! $statisticSum[7] ? $statisticSum[7] : 0 !!}"],
            ['08/19', "{!! $statisticSum[8] ? $statisticSum[8] : 0 !!}"],
            ['09/19', "{!! $statisticSum[9] ? $statisticSum[9] : 0 !!}"],
            ['10/19', "{!! $statisticSum[10] ? $statisticSum[10] : 0 !!}"],
            ['11/19', "{!! $statisticSum[11] ? $statisticSum[11] : 0 !!}"],
            ['12/19', "{!! $statisticSum[12] ? $statisticSum[12] : 0 !!}"]
        ];
        var data = [
            ['01/13', "{!! $sumOrders[1] ? $sumOrders[1] : 0 !!}"],
            ['02/13', "{!! $sumOrders[2] ? $sumOrders[2] : 0 !!}"],
            ['03/13', "{!! $sumOrders[3] ? $sumOrders[3]: 0 !!}"],
            ['04/13', "{!! $sumOrders[4] ? $sumOrders[4]: 0 !!}"],
            ['05/13', "{!! $sumOrders[5] ? $sumOrders[5]: 0 !!}"],
            ['06/13', "{!! $sumOrders[6] ? $sumOrders[6]: 0 !!}"],
            ['07/13', "{!! $sumOrders[7] ? $sumOrders[7]: 0 !!}"],
            ['08/13', "{!! $sumOrders[8] ? $sumOrders[8]: 0 !!}"],
            ['09/13', "{!! $sumOrders[9] ? $sumOrders[9]: 0 !!}"],
            ['10/13', "{!! $sumOrders[10] ? $sumOrders[10]: 0 !!}"],
            ['11/13', "{!! $sumOrders[11] ? $sumOrders[11] : 0 !!}"],
            ['12/13', "{!! $sumOrders[12] ? $sumOrders[12]: 0 !!}"]
        ];
    </script>

    <div class="page-content">


        <!-- END SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <!-- BEGIN PAGE HEADER-->
        <!-- BEGIN PAGE HEAD -->
        <div class="page-head">
            <!-- BEGIN PAGE TITLE -->
            <div class="page-title">
                <h1>@lang('admin.dashboardStatistics')</h1>
            </div>
            <!-- END PAGE TITLE -->
            <!-- BEGIN PAGE TOOLBAR -->
            <div class="page-toolbar">
                <!-- BEGIN THEME PANEL -->
                <div class="btn-group btn-theme-panel">
                    <a href="javascript:;" class="btn dropdown-toggle" data-toggle="dropdown">
                        <i class="icon-settings"></i>
                    </a>
                    <div class="dropdown-menu theme-panel pull-right dropdown-custom hold-on-click">
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <h3>THEME</h3>
                                <ul class="theme-colors">
                                    <li class="theme-color theme-color-default active" data-theme="default">
                                        <span class="theme-color-view"></span>
                                        <span class="theme-color-name">Dark Header</span>
                                    </li>
                                    <li class="theme-color theme-color-light" data-theme="light">
                                        <span class="theme-color-view"></span>
                                        <span class="theme-color-name">Light Header</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-8 col-sm-8 col-xs-12 seperator">
                                <h3>LAYOUT</h3>
                                <ul class="theme-settings">
                                    <li>
                                        Theme Style
                                        <select class="layout-style-option form-control input-small input-sm">
                                            <option value="square" selected="selected">Square corners</option>
                                            <option value="rounded">Rounded corners</option>
                                        </select>
                                    </li>
                                    <li>
                                        Layout
                                        <select class="layout-option form-control input-small input-sm">
                                            <option value="fluid" selected="selected">Fluid</option>
                                            <option value="boxed">Boxed</option>
                                        </select>
                                    </li>
                                    <li>
                                        Header
                                        <select class="page-header-option form-control input-small input-sm">
                                            <option value="fixed" selected="selected">Fixed</option>
                                            <option value="default">Default</option>
                                        </select>
                                    </li>
                                    <li>
                                        Top Dropdowns
                                        <select class="page-header-top-dropdown-style-option form-control input-small input-sm">
                                            <option value="light">Light</option>
                                            <option value="dark" selected="selected">Dark</option>
                                        </select>
                                    </li>
                                    <li>
                                        Sidebar Mode
                                        <select class="sidebar-option form-control input-small input-sm">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </li>
                                    <li>
                                        Sidebar Menu
                                        <select class="sidebar-menu-option form-control input-small input-sm">
                                            <option value="accordion" selected="selected">Accordion</option>
                                            <option value="hover">Hover</option>
                                        </select>
                                    </li>
                                    <li>
                                        Sidebar Position
                                        <select class="sidebar-pos-option form-control input-small input-sm">
                                            <option value="left" selected="selected">Left</option>
                                            <option value="right">Right</option>
                                        </select>
                                    </li>
                                    <li>
                                        Footer
                                        <select class="page-footer-option form-control input-small input-sm">
                                            <option value="fixed">Fixed</option>
                                            <option value="default" selected="selected">Default</option>
                                        </select>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END THEME PANEL -->
            </div>
            <!-- END PAGE TOOLBAR -->
        </div>
        <!-- END PAGE HEAD -->
        <!-- BEGIN PAGE BREADCRUMB -->
        <ul class="page-breadcrumb breadcrumb">
            <li>
                <a href="#">@lang('admin.dashboard')</a>
            </li>
        </ul>
        <!-- END PAGE BREADCRUMB -->
        <!-- END PAGE HEADER-->
        <!-- BEGIN PAGE CONTENT-->
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                <div class="dashboard-stat2">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-green-sharp">{{ isset($ordersSum) }}<small class="font-green-sharp"> @lang('home.amd')</small></h3>
                            <small>@lang('admin.totalProfit')</small>
                        </div>
                        <div class="icon">
                            <i class="icon-pie-chart"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">{{ isset($ordersSumMount) }}<small class="font-blue-sharp"> @lang('home.amd')</small></h3>
                            <small>@lang('admin.monthProfit')</small>
                        </div>
                        <div class="icon">
                            <i class="icon-basket"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 margin-bottom-10">
                <div class="dashboard-stat2">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-red-haze">{{ isset($ordersCount) }}</h3>
                            <small>@lang('admin.totalOrders')</small>
                        </div>
                        <div class="icon">
                            <i class="icon-like"></i>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="dashboard-stat2">
                    <div class="display">
                        <div class="number">
                            <h3 class="font-blue-sharp">{{ isset($ordersMount) }}</h3>
                            <small>@lang('admin.orderMonth')</small>
                        </div>
                        <div class="icon">
                            <i class="icon-basket"></i>
                        </div>
                    </div>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-md-5">
                <!-- Begin: life time stats -->
                <div class="portlet light">
                    <div class="portlet-title">
                        <div class="caption">
                            <i class="icon-bar-chart font-green-sharp"></i>
                            <span class="caption-subject font-green-sharp bold uppercase">@lang('admin.overview')</span>
                            <span class="caption-helper">@lang('admin.weeklyStatus')</span>
                        </div>
                        <div class="tools">
                            <a href="javascript:;" class="collapse">
                            </a>
                            <a href="#portlet-config" data-toggle="modal" class="config">
                            </a>
                            <a href="javascript:;" class="reload">
                            </a>
                            <a href="javascript:;" class="fullscreen">
                            </a>
                            <a href="javascript:;" class="remove">
                            </a>
                        </div>
                    </div>
                    <div class="portlet-body">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs dash-statisticts-ul">
                                <li class="active">
                                    <a href="#overview_1" data-toggle="tab">
                                        @lang('admin.topSelling') </a>
                                </li>
                                <li>
                                    <a href="#overview_2" data-toggle="tab">
                                        @lang('admin.viewedByProducts')</a>
                                </li>
                                <li>
                                    <a href="#overview_3" data-toggle="tab">
                                        @lang('admin.customers') </a>
                                </li>
                                <li class="dropdown">
                                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                        @lang('admin.orders') <i class="fa fa-angle-down"></i>
                                    </a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                @lang('admin.lastTenOrders') </a>
                                        </li>
                                        <li>
                                            <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                @lang('admin.pendingOrders') </a>
                                        </li>
                                        <li>
                                            <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                @lang('admin.completedOrders')</a>
                                        </li>
                                        <li>
                                            <a href="#overview_4" tabindex="-1" data-toggle="tab">
                                                @lang('admin.rejectedOrders') </a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="overview_1">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead class="th-fz12">
                                            <tr>
                                                <th>
                                                    @lang('admin.productName')
                                                </th>
                                                <th>
                                                    @lang('admin.price')
                                                </th>
                                                <th>
                                                    @lang('admin.sold')
                                                </th>
                                                <th>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Apple iPhone 4s - 16GB - Black </a>
                                                </td>
                                                <td>
                                                    $625.50
                                                </td>
                                                <td>
                                                    809
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Samsung Galaxy S III SGH-I747 - 16GB </a>
                                                </td>
                                                <td>
                                                    $915.50
                                                </td>
                                                <td>
                                                    6709
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Motorola Droid 4 XT894 - 16GB - Black </a>
                                                </td>
                                                <td>
                                                    $878.50
                                                </td>
                                                <td>
                                                    784
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Regatta Luca 3 in 1 Jacket </a>
                                                </td>
                                                <td>
                                                    $25.50
                                                </td>
                                                <td>
                                                    1245
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Samsung Galaxy Note 3 </a>
                                                </td>
                                                <td>
                                                    $925.50
                                                </td>
                                                <td>
                                                    21245
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Inoval Digital Pen </a>
                                                </td>
                                                <td>
                                                    $125.50
                                                </td>
                                                <td>
                                                    1245
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Metronic - Responsive Admin + Frontend Theme </a>
                                                </td>
                                                <td>
                                                    $20.00
                                                </td>
                                                <td>
                                                    11190
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="overview_2">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Product Name
                                                </th>
                                                <th>
                                                    Price
                                                </th>
                                                <th>
                                                    Views
                                                </th>
                                                <th>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="overview_3">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Customer Name
                                                </th>
                                                <th>
                                                    Total Orders
                                                </th>
                                                <th>
                                                    Total Amount
                                                </th>
                                                <th>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        David Wilson </a>
                                                </td>
                                                <td>
                                                    3
                                                </td>
                                                <td>
                                                    $625.50
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Amanda Nilson </a>
                                                </td>
                                                <td>
                                                    4
                                                </td>
                                                <td>
                                                    $12625.50
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Jhon Doe </a>
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    $125.00
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Bill Chang </a>
                                                </td>
                                                <td>
                                                    45
                                                </td>
                                                <td>
                                                    $12,125.70
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Paul Strong </a>
                                                </td>
                                                <td>
                                                    1
                                                </td>
                                                <td>
                                                    $890.85
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Jane Hilson </a>
                                                </td>
                                                <td>
                                                    5
                                                </td>
                                                <td>
                                                    $239.85
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Patrick Walker </a>
                                                </td>
                                                <td>
                                                    2
                                                </td>
                                                <td>
                                                    $1239.85
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="tab-pane" id="overview_4">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-hover table-bordered">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Customer Name
                                                </th>
                                                <th>
                                                    Date
                                                </th>
                                                <th>
                                                    Amount
                                                </th>
                                                <th>
                                                    Status
                                                </th>
                                                <th>
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        David Wilson </a>
                                                </td>
                                                <td>
                                                    3 Jan, 2013
                                                </td>
                                                <td>
                                                    $625.50
                                                </td>
                                                <td>
													<span class="label label-sm label-warning">
													Pending </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Amanda Nilson </a>
                                                </td>
                                                <td>
                                                    13 Feb, 2013
                                                </td>
                                                <td>
                                                    $12625.50
                                                </td>
                                                <td>
													<span class="label label-sm label-warning">
													Pending </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Jhon Doe </a>
                                                </td>
                                                <td>
                                                    20 Mar, 2013
                                                </td>
                                                <td>
                                                    $125.00
                                                </td>
                                                <td>
													<span class="label label-sm label-success">
													Success </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Bill Chang </a>
                                                </td>
                                                <td>
                                                    29 May, 2013
                                                </td>
                                                <td>
                                                    $12,125.70
                                                </td>
                                                <td>
													<span class="label label-sm label-info">
													In Process </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Paul Strong </a>
                                                </td>
                                                <td>
                                                    1 Jun, 2013
                                                </td>
                                                <td>
                                                    $890.85
                                                </td>
                                                <td>
													<span class="label label-sm label-success">
													Success </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Jane Hilson </a>
                                                </td>
                                                <td>
                                                    5 Aug, 2013
                                                </td>
                                                <td>
                                                    $239.85
                                                </td>
                                                <td>
													<span class="label label-sm label-danger">
													Canceled </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        View </a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <a href="javascript:;">
                                                        Patrick Walker </a>
                                                </td>
                                                <td>
                                                    6 Aug, 2013
                                                </td>
                                                <td>
                                                    $1239.85
                                                </td>
                                                <td>
													<span class="label label-sm label-success">
													@lang('admin.success') </span>
                                                </td>
                                                <td>
                                                    <a href="javascript:;" class="btn default btn-xs green-stripe">
                                                        @lang('admin.views') </a>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
            <div class="col-md-7">
                <!-- Begin: life time stats -->
                <div class="portlet light">
                    <div class="portlet-title tabbable-line">
                        <div class="caption">
                            <i class="icon-share font-red-sunglo"></i>
                            <span class="caption-subject font-red-sunglo bold uppercase">@lang('admin.revenue')</span>
                            <span class="caption-helper">@lang('admin.weeklyStatus')...</span>
                        </div>
                        <ul class="nav nav-tabs">
                            <li>
                                <a href="#portlet_tab2" data-toggle="tab" id="statistics_amounts_tab">
                                    @lang('admin.views') </a>
                            </li>
                            <li class="active">
                                <a href="#portlet_tab1" data-toggle="tab">
                                    @lang('admin.orders') </a>
                            </li>
                        </ul>
                    </div>
                    <div class="portlet-body">
                        <div class="tab-content">
                            <div class="tab-pane active" id="portlet_tab1">
                                <div id="statistics_1" class="chart">
                                </div>
                            </div>
                            <div class="tab-pane" id="portlet_tab2">
                                <div id="statistics_2" class="chart">
                                </div>
                            </div>
                        </div>
                        <div class="well margin-top-10 no-margin no-border">
                            <div class="row">
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-success">
										@lang('admin.revenue'): </span>
                                    <h3></h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-info">
										@lang('admin.views') </span>
                                    <h3></h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-danger">
										@lang('admin.price'): </span>
                                    <h3>@lang('home.amd')</h3>
                                </div>
                                <div class="col-md-3 col-sm-3 col-xs-6 text-stat">
										<span class="label label-warning">
										@lang('admin.orders'): </span>
                                    <h3></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End: life time stats -->
            </div>
        </div>
        <!-- END PAGE CONTENT-->
    </div>

@endsection