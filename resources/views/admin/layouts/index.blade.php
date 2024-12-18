<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home - Ninja Admin Template</title>

    <!-- Main Styles -->
    <link rel="stylesheet" href="admin/assets/styles/style.min.css">

    <!-- mCustomScrollbar -->
    <link rel="stylesheet" href="admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.min.css">

    <!-- Waves Effect -->
    <link rel="stylesheet" href="admin/assets/plugin/waves/waves.min.css">

    <!-- Sweet Alert -->
    <link rel="stylesheet" href="admin/assets/plugin/sweet-alert/sweetalert.css">

    <!-- Percent Circle -->
    <link rel="stylesheet" href="admin/assets/plugin/percircle/css/percircle.css">

    <!-- Chartist Chart -->
    <link rel="stylesheet" href="admin/assets/plugin/chart/chartist/chartist.min.css">

    <!-- FullCalendar -->
    <link rel="stylesheet" href="admin/assets/plugin/fullcalendar/fullcalendar.min.css">
    <link rel="stylesheet" href="admin/assets/plugin/fullcalendar/fullcalendar.print.css" media='print'>

    <!-- Dark Themes -->
    <link rel="stylesheet" href="admin/assets/styles/style-dark.min.css">
</head>

<body>
    @include('admin.layouts.sidebar')

    @include('admin.layouts.topbar')

    <div id="wrapper">
        <div class="main-content">
            {{-- <div class="row small-spacing">
                <div class="col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Activity</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div id="smil-animation-index-chartist-chart" class="chartist-chart" style="height: 320px">
                        </div>
                        <!-- /#smil-animation-chartist-chart.chartist-chart -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Projects</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content widget-stat">
                            <div class="percent bg-warning"><i class="fa fa-line-chart"></i>53%</div>
                            <!-- /.percent -->
                            <div class="right-content">
                                <h2 class="counter">837</h2>
                                <!-- /.counter -->
                                <p class="text">Projects</p>
                                <!-- /.text -->
                            </div>
                            <!-- /.right-content -->
                            <div class="clear"></div>
                            <!-- /.clear -->
                            <div class="process-bar">
                                <div class="bar-bg bg-warning"></div>
                                <div class="bar js__width bg-warning" data-width="70%"></div>
                                <!-- /.bar js__width bg-success -->
                            </div>
                            <!-- /.process-bar -->
                        </div>
                        <!-- /.content widget-stat -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Memory usage</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content widget-stat-chart">
                            <div class="c100 p76 small blue js__circle">
                                <span>76%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <!-- /.c100 p58 -->
                            <div class="right-content">
                                <h2 class="counter">804</h2>
                                <!-- /.counter -->
                                <p class="text">Disk usage</p>
                                <!-- /.text -->
                            </div>
                            <!-- /.right-content -->
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Visitor Analytics</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content widget-stat">
                            <div class="percent bg-danger"><i class="fa fa-line-chart"></i>+40%</div>
                            <!-- /.percent -->
                            <div class="right-content">
                                <h2 class="counter">976</h2>
                                <!-- /.counter -->
                                <p class="text">Visitors today</p>
                                <!-- /.text -->
                            </div>
                            <!-- /.right-content -->
                            <div class="clear"></div>
                            <!-- /.clear -->
                            <div class="process-bar">
                                <div class="bar-bg bg-danger"></div>
                                <div class="bar js__width bg-danger" data-width="70%"></div>
                                <!-- /.bar js__width bg-success -->
                            </div>
                            <!-- /.process-bar -->
                        </div>
                        <!-- /.content widget-stat -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Monthly Sales</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content widget-stat-chart">
                            <div class="c100 p94 small green js__circle">
                                <span>94%</span>
                                <div class="slice">
                                    <div class="bar"></div>
                                    <div class="fill"></div>
                                </div>
                            </div>
                            <!-- /.c100 p58 -->
                            <div class="right-content">
                                <h2 class="counter">3922</h2>
                                <!-- /.counter -->
                                <p class="text">Sales</p>
                                <!-- /.text -->
                            </div>
                            <!-- /.right-content -->
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->

                <div class="col-lg-4 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Statistics</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content">
                            <div id="chart-2" class="js__chart" data-type="column"
                                data-chart="'Year'/'Statistics' | '2010'/75 | '2011'/42 | '2012'/75 | '2013'/38 | '2014'/19 | '2015'/93 ">
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-4 col-md-12 -->

                <div class="col-lg-4 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Total Projects</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content">
                            <div id="chart-3" class="js__chart" data-type="curve"
                                data-chart="'Year'/'Desktop'/'Mobile' | '2008'/53/0 | '2009'/35/73 | '2010'/89/14 | '2011'/50/50 | '2012'/86/37 | '2013'/47/89 | '2014'/75/50 | '2015'/100/70 ">
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-4 col-md-12 -->

                <div class="col-lg-4 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Daily Sales</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="content">
                            <div id="chart-1" class="js__chart" data-type="donut"
                                data-chart="'Type'/'Number' | 'Normal Sales'/50 | 'In-Site Sales'/20 | 'Mail-Order Sales'/20">
                            </div>
                        </div>
                        <!-- /.content -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-4 col-xs-12 -->

                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content user-info">
                        <div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
                        <!-- /.avatar -->
                        <div class="right-content">
                            <h4 class="name">Betty Simmons</h4>
                            <!-- /.name -->
                            <p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
                            <div class="text-warning small">Manager</div>
                            <!-- /.text-warning -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.user-info -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content user-info">
                        <div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
                        <!-- /.avatar -->
                        <div class="right-content">
                            <h4 class="name">Michael Zenaty</h4>
                            <!-- /.name -->
                            <p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
                            <div class="text-custom small">Support</div>
                            <!-- /.text-custom -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.user-info -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content user-info">
                        <div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
                        <!-- /.avatar -->
                        <div class="right-content">
                            <h4 class="name">Denise Peterson</h4>
                            <!-- /.name -->
                            <p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
                            <div class="text-success small">Designer</div>
                            <!-- /.text-warning -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.user-info -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-3 col-md-6 col-xs-12">
                    <div class="box-content user-info">
                        <div class="avatar"><img src="http://placehold.it/128x128" alt=""></div>
                        <!-- /.avatar -->
                        <div class="right-content">
                            <h4 class="name">Pamela Wood</h4>
                            <!-- /.name -->
                            <p><a href="mailto:hello@ninjateam.org">hello@ninjateam.org</a></p>
                            <div class="text-danger small">Developer</div>
                            <!-- /.text-custom -->
                        </div>
                        <!-- /.right-content -->
                    </div>
                    <!-- /.user-info -->
                </div>
                <!-- /.col-lg-3 col-md-6 col-xs-12 -->
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content">
                        <div id="calendar-widget"></div>
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-xs-12 -->
                <div class="col-lg-6 col-xs-12">
                    <div class="box-content">
                        <h4 class="box-title">Purchases</h4>
                        <!-- /.box-title -->
                        <div class="dropdown js__drop_down">
                            <a href="#"
                                class="dropdown-icon glyphicon glyphicon-option-vertical js__drop_down_button"></a>
                            <ul class="sub-menu">
                                <li><a href="#">Product</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else there</a></li>
                                <li class="split"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                            <!-- /.sub-menu -->
                        </div>
                        <!-- /.dropdown js__dropdown -->
                        <div class="table-responsive table-purchases">
                            <table class="table table-striped margin-bottom-10">
                                <thead>
                                    <tr>
                                        <th style="width:40%;">Product</th>
                                        <th>Price</th>
                                        <th>Date</th>
                                        <th>State</th>
                                        <th style="width:5%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Amaza Themes</td>
                                        <td>$71</td>
                                        <td>Nov 12,2016</td>
                                        <td class="text-success">Completed</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Macbook</td>
                                        <td>$142</td>
                                        <td>Nov 10,2016</td>
                                        <td class="text-danger">Cancelled</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Samsung TV</td>
                                        <td>$200</td>
                                        <td>Nov 01,2016</td>
                                        <td class="text-warning">Pending</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ninja Admin</td>
                                        <td>$200</td>
                                        <td>Oct 28,2016</td>
                                        <td class="text-warning">Pending</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Galaxy Note 5</td>
                                        <td>$200</td>
                                        <td>Oct 28,2016</td>
                                        <td class="text-success">Completed</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>CleanUp Themes</td>
                                        <td>$71</td>
                                        <td>Oct 22,2016</td>
                                        <td class="text-success">Completed</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Facebook WP Plugin</td>
                                        <td>$10</td>
                                        <td>Oct 15,2016</td>
                                        <td class="text-success">Completed</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Iphone 7</td>
                                        <td>$100</td>
                                        <td>Oct 12,2016</td>
                                        <td class="text-warning">Pending</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Nova House</td>
                                        <td>$100</td>
                                        <td>Oct 12,2016</td>
                                        <td class="text-warning">Pending</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Repair Cars</td>
                                        <td>$35</td>
                                        <td>Oct 12,2016</td>
                                        <td class="text-warning">Pending</td>
                                        <td><a href="#"><i class="fa fa-plus-circle"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- /.table -->
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.box-content -->
                </div>
                <!-- /.col-lg-6 col-xs-12 -->
            </div> --}}
            <!-- /.row -->
            @yield('content')

            @include('admin.layouts.footer')
        </div>
        <!-- /.main-content -->
    </div><!--/#wrapper -->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
  <script src="assets/script/html5shiv.min.js"></script>
  <script src="assets/script/respond.min.js"></script>
 <![endif]-->
    <!--
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="admin/assets/scripts/jquery.min.js"></script>
    <script src="admin/assets/scripts/modernizr.min.js"></script>
    <script src="admin/assets/plugin/bootstrap/js/bootstrap.min.js"></script>
    <script src="admin/assets/plugin/mCustomScrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="admin/assets/plugin/nprogress/nprogress.js"></script>
    <script src="admin/assets/plugin/sweet-alert/sweetalert.min.js"></script>
    <script src="admin/assets/plugin/waves/waves.min.js"></script>
    <!-- Full Screen Plugin -->
    <script src="admin/assets/plugin/fullscreen/jquery.fullscreen-min.js"></script>

    <!-- Percent Circle -->
    <script src="admin/assets/plugin/percircle/js/percircle.js"></script>

    <!-- Google Chart -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <!-- Chartist Chart -->
    <script src="admin/assets/plugin/chart/chartist/chartist.min.js"></script>
    <script src="admin/assets/scripts/chart.chartist.init.min.js"></script>

    <!-- FullCalendar -->
    <script src="admin/assets/plugin/moment/moment.js"></script>
    <script src="admin/assets/plugin/fullcalendar/fullcalendar.min.js"></script>
    <script src="admin/assets/scripts/fullcalendar.init.js"></script>

    <script src="admin/assets/scripts/main.min.js"></script>
</body>

</html>
