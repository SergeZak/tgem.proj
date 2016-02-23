<!DOCTYPE html>
<html lang="en-us">
<head>
    <meta charset="utf-8">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->

    <title> SmartAdmin </title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Use the correct meta names below for your web application
         Ref: http://davidbcalhoun.com/2010/viewport-metatag

    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">-->

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Basic Styles -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="//maxcdn.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css">

    <!-- SmartAdmin Styles : Please note (smartadmin-production.css) was created using LESS variables -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-production.css">

    <!-- SmartAdmin RTL Support is under construction
    <link rel="stylesheet" type="text/css" media="screen" href="css/smartadmin-rtl.css"> -->

    <!-- We recommend you use "your_style.css" to override SmartAdmin
    specific styles this will also ensure you retrain your customization
    with each SmartAdmin update.
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css"> -->

    <!-- Demo purpose only: goes with demo.js, you can delete this css when designing your own WebApp -->
    <link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">

    <link rel="stylesheet" type="text/css" media="screen" href="css/admin_app.css">

    <!-- FAVICONS -->
    <link rel="shortcut icon" href="img/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="img/favicon/favicon.ico" type="image/x-icon">

    <!-- GOOGLE FONT -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,300,400,700">

</head>
<body class="">
<!-- possible classes: minified, fixed-ribbon, fixed-header, fixed-width-->

<!-- HEADER -->
<header id="header">
    <div id="logo-group">

        <!-- PLACE YOUR LOGO HERE -->
        <span id="logo"> <img src="img/logo.png" alt="SmartAdmin"> </span>
        <!-- END LOGO PLACEHOLDER -->

        <!-- Note: The activity badge color changes when clicked and resets the number to 0
        Suggestion: You may want to set a flag when this happens to tick off all checked messages / notifications -->
        <span id="activity" class="activity-dropdown"> <i class="fa fa-user"></i> <b class="badge"> 21 </b> </span>

        <!-- AJAX-DROPDOWN : control this dropdown height, look and feel from the LESS variable file -->
        <div class="ajax-dropdown">

            <!-- the ID links are fetched via AJAX to the ajax container "ajax-notifications" -->
            <div class="btn-group btn-group-justified" data-toggle="buttons">
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/mail.html">
                    Msgs (14) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/notifications.html">
                    notify (3) </label>
                <label class="btn btn-default">
                    <input type="radio" name="activity" id="ajax/notify/tasks.html">
                    Tasks (4) </label>
            </div>

            <!-- notification content -->
            <div class="ajax-notifications custom-scroll">

                <div class="alert alert-transparent">
                    <h4>Click a button to show messages here</h4>
                    This blank page message helps protect your privacy, or you can show the first message here automatically.
                </div>

                <i class="fa fa-lock fa-4x fa-border"></i>

            </div>
            <!-- end notification content -->

            <!-- footer: refresh area -->
					<span> Last updated on: 12/12/2013 9:43AM
						<button type="button" data-loading-text="<i class='fa fa-refresh fa-spin'></i> Loading..." class="btn btn-xs btn-default pull-right">
                            <i class="fa fa-refresh"></i>
                        </button> </span>
            <!-- end footer -->

        </div>
        <!-- END AJAX-DROPDOWN -->
    </div>

    <!-- projects dropdown -->
    <div id="project-context">

        <span class="label">Projects:</span>
        <span id="project-selector" class="popover-trigger-element dropdown-toggle" data-toggle="dropdown">Recent projects <i class="fa fa-angle-down"></i></span>

        <!-- Suggestion: populate this list with fetch and push technique -->
        <ul class="dropdown-menu">
            <li>
                <a href="javascript:void(0);">Online e-merchant management system - attaching integration with the iOS</a>
            </li>
            <li>
                <a href="javascript:void(0);">Notes on pipeline upgradee</a>
            </li>
            <li>
                <a href="javascript:void(0);">Assesment Report for merchant account</a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Clear</a>
            </li>
        </ul>
        <!-- end dropdown-menu-->

    </div>
    <!-- end projects dropdown -->

    <!-- pulled right: nav area -->
    <div class="pull-right">

        <!-- collapse menu button -->
        <div id="hide-menu" class="btn-header pull-right">
            <span> <a href="javascript:void(0);" title="Collapse Menu"><i class="fa fa-reorder"></i></a> </span>
        </div>
        <!-- end collapse menu -->

        <!-- logout button -->
        <div id="logout" class="btn-header transparent pull-right">
            <span> <a href="login.html" title="Sign Out"><i class="fa fa-sign-out"></i></a> </span>
        </div>
        <!-- end logout button -->

        <!-- search mobile button (this is hidden till mobile view port) -->
        <div id="search-mobile" class="btn-header transparent pull-right">
            <span> <a href="javascript:void(0)" title="Search"><i class="fa fa-search"></i></a> </span>
        </div>
        <!-- end search mobile button -->

        <!-- input: search field -->
        <form action="#search.html" class="header-search pull-right">
            <input type="text" placeholder="Find reports and more" id="search-fld">
            <button type="submit">
                <i class="fa fa-search"></i>
            </button>
            <a href="javascript:void(0);" id="cancel-search-js" title="Cancel Search"><i class="fa fa-times"></i></a>
        </form>
        <!-- end input: search field -->

        <!-- multiple lang dropdown : find all flags in the image folder -->
        <ul class="header-dropdown-list hidden-xs">
            <li>
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img alt="" src="img/flags/us.png"> <span> US </span> <i class="fa fa-angle-down"></i> </a>
                <ul class="dropdown-menu pull-right">
                    <li class="active">
                        <a href="javascript:void(0);"><img alt="" src="img/flags/us.png"> US</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/es.png"> Spanish</a>
                    </li>
                    <li>
                        <a href="javascript:void(0);"><img alt="" src="img/flags/de.png"> German</a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- end multiple lang -->

    </div>
    <!-- end pulled right: nav area -->

</header>
<!-- END HEADER -->

<!-- Left panel : Navigation area -->
<!-- Note: This width of the aside area can be adjusted through LESS variables -->
<aside id="left-panel">

    <!-- User info -->
    <div class="login-info">
        <span> <!-- User image size is adjusted inside CSS, it should stay as it --> <img src="img/avatars/sunny.png" alt="me" class="online" /> <a href="javascript:void(0);" id="show-shortcut">john.doe <i class="fa fa-angle-down"></i></a> </span>
    </div>
    <!-- end user info -->

    <!-- NAVIGATION : This navigation is also responsive

    To make this navigation dynamic please make sure to link the node
    (the reference to the nav > ul) after page load. Or the navigation
    will not initialize.
    -->
    <nav>
        <!-- NOTE: Notice the gaps after each icon usage <i></i>..
        Please note that these links work a bit different than
        traditional hre="" links. See documentation for details.
        -->

        <ul>
            <li class="active">
                <a href="index.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Dashboard</span></a>
            </li>
            <li>
                <a href="inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Inbox</span><span class="badge pull-right inbox-badge">14</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
                <ul>
                    <li>
                        <a href="flot.html">Flot Chart</a>
                    </li>
                    <li>
                        <a href="morris.html">Morris Charts</a>
                    </li>
                    <li>
                        <a href="inline-charts.html">Inline Charts</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
                <ul>
                    <li>
                        <a href="table.html">Normal Tables</a>
                    </li>
                    <li>
                        <a href="datatables.html">Data Tables</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
                <ul>
                    <li>
                        <a href="form-elements.html">Smart Form Elements</a>
                    </li>
                    <li>
                        <a href="form-templates.html">Smart Form Layouts</a>
                    </li>
                    <li>
                        <a href="validation.html">Smart Form Validation</a>
                    </li>
                    <li>
                        <a href="bootstrap-forms.html">Bootstrap Form Elements</a>
                    </li>
                    <li>
                        <a href="plugins.html">Form Plugins</a>
                    </li>
                    <li>
                        <a href="wizard.html">Wizards</a>
                    </li>
                    <li>
                        <a href="other-editors.html">Bootstrap Editors</a>
                    </li>
                    <li>
                        <a href="dropzone.html">Dropzone <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
                <ul>
                    <li>
                        <a href="general-elements.html">General Elements</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="#">Icons</a>
                        <ul>
                            <li>
                                <a href="fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
                            </li>
                            <li>
                                <a href="glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="grid.html">Grid</a>
                    </li>
                    <li>
                        <a href="treeview.html">Tree View</a>
                    </li>
                    <li>
                        <a href="nestable-list.html">Nestable Lists</a>
                    </li>
                    <li>
                        <a href="jqui.html">JQuery UI</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-folder-open"></i> <span class="menu-item-parent">6 Level Navigation</span></a>
                <ul>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 2nd Level</a>
                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> 4th Level</a>
                                        <ul>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 5th Level</a>
                                                <ul>
                                                    <li>
                                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                                    </li>
                                                    <li>
                                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-fw fa-folder-open"></i> Folder</a>

                        <ul>
                            <li>
                                <a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
                                <ul>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                    </li>
                </ul>
            </li>
            <li>
                <a href="calendar.html"><i class="fa fa-lg fa-fw fa-calendar"><em>3</em></i> <span class="menu-item-parent">Calendar</span></a>
            </li>
            <li>
                <a href="widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
            </li>
            <li>
                <a href="gallery.html"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Gallery</span></a>
            </li>
            <li>
                <a href="gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">Google Map Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
                <ul>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                    <li>
                        <a href="pricing-table.html">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="login.html" target="_top">Login</a>
                    </li>
                    <li>
                        <a href="register.html" target="_top">Register</a>
                    </li>
                    <li>
                        <a href="lock.html" target="_top">Locked Screen</a>
                    </li>
                    <li>
                        <a href="error404.html">Error 404</a>
                    </li>
                    <li>
                        <a href="error500.html">Error 500</a>
                    </li>
                    <li>
                        <a href="blank_.html">Blank Page</a>
                    </li>
                    <li>
                        <a href="email-template.html">Email Template</a>
                    </li>
                    <li>
                        <a href="search.html">Search Page</a>
                    </li>
                    <li>
                        <a href="ckeditor.html">CK Editor</a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <span class="minifyme"> <i class="fa fa-arrow-circle-left hit"></i> </span>

</aside>
<!-- END NAVIGATION -->

<!-- MAIN PANEL -->
<div id="main" role="main">

    <!-- RIBBON -->
    <div id="ribbon">

        <span class="ribbon-button-alignment"> <span id="refresh" class="btn btn-ribbon" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true"><i class="fa fa-refresh"></i></span> </span>

        <!-- breadcrumb -->
        <ol class="breadcrumb">
            <li>Home</li><li>Dashboard</li>
        </ol>
        <!-- end breadcrumb -->

        <!-- You can also add more buttons to the
        ribbon for further usability

        Example below:

        <span class="ribbon-button-alignment pull-right">
        <span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
        <span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
        <span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
        </span> -->

    </div>
    <!-- END RIBBON -->

    <!-- MAIN CONTENT -->
    <div id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-7 col-md-7 col-lg-4">
                <h1 class="page-title txt-color-blueDark"><i class="fa-fw fa fa-home"></i> Dashboard <span>> My Dashboard</span></h1>
            </div>
            <div class="col-xs-12 col-sm-5 col-md-5 col-lg-8">
                <ul id="sparks" class="">
                    <li class="sparks-info">
                        <h5> My Income <span class="txt-color-blue">$47,171</span></h5>
                        <div class="sparkline txt-color-blue hidden-mobile hidden-md hidden-sm">
                            1300, 1877, 2500, 2577, 2000, 2100, 3000, 2700, 3631, 2471, 2700, 3631, 2471
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Traffic <span class="txt-color-purple"><i class="fa fa-arrow-circle-up"></i>&nbsp;45%</span></h5>
                        <div class="sparkline txt-color-purple hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                    <li class="sparks-info">
                        <h5> Site Orders <span class="txt-color-greenDark"><i class="fa fa-shopping-cart"></i>&nbsp;2447</span></h5>
                        <div class="sparkline txt-color-greenDark hidden-mobile hidden-md hidden-sm">
                            110,150,300,130,400,240,220,310,220,300, 270, 210
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- widget grid -->
        <section id="widget-grid" class="">

            <!-- row -->
            <div class="row">
                <article class="col-sm-12">
                    <!-- new widget -->
                    <div class="jarviswidget" id="wid-id-0" data-widget-togglebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-colorbutton="false" data-widget-deletebutton="false">
                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header>
                            <span class="widget-icon"> <i class="glyphicon glyphicon-stats txt-color-darken"></i> </span>
                            <h2>Live Feeds </h2>

                            <ul class="nav nav-tabs pull-right in" id="myTab">
                                <li class="active">
                                    <a data-toggle="tab" href="#s1"><i class="fa fa-clock-o"></i> <span class="hidden-mobile hidden-tablet">Live Stats</span></a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#s2"><i class="fa fa-facebook"></i> <span class="hidden-mobile hidden-tablet">Social Network</span></a>
                                </li>

                                <li>
                                    <a data-toggle="tab" href="#s3"><i class="fa fa-dollar"></i> <span class="hidden-mobile hidden-tablet">Revenue</span></a>
                                </li>
                            </ul>

                        </header>

                        <!-- widget div-->
                        <div class="no-padding">
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">

                                test
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body">
                                <!-- content -->
                                <div id="myTabContent" class="tab-content">
                                    <div class="tab-pane fade active in padding-10 no-padding-bottom" id="s1">
                                        <div class="row no-space">
                                            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
														<span class="demo-liveupdate-1"> <span class="onoffswitch-title">Live switch</span> <span class="onoffswitch">
																<input type="checkbox" name="start_interval" class="onoffswitch-checkbox" id="start_interval">
																<label class="onoffswitch-label" for="start_interval">
                                                                    <span class="onoffswitch-inner" data-swchon-text="ON" data-swchoff-text="OFF"></span>
                                                                    <span class="onoffswitch-switch"></span> </label> </span> </span>
                                                <div id="updating-chart" class="chart-large txt-color-blue"></div>

                                            </div>
                                            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 show-stats">

                                                <div class="row">
                                                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> My Tasks <span class="pull-right">130/200</span> </span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-blueDark" style="width: 65%;"></div>
                                                        </div> </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Transfered <span class="pull-right">440 GB</span> </span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-blue" style="width: 34%;"></div>
                                                        </div> </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> Bugs Squashed<span class="pull-right">77%</span> </span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-blue" style="width: 77%;"></div>
                                                        </div> </div>
                                                    <div class="col-xs-6 col-sm-6 col-md-12 col-lg-12"> <span class="text"> User Testing <span class="pull-right">7 Days</span> </span>
                                                        <div class="progress">
                                                            <div class="progress-bar bg-color-greenLight" style="width: 84%;"></div>
                                                        </div> </div>

                                                    <span class="show-stat-buttons"> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Generate PDF</a> </span> <span class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> <a href="javascript:void(0);" class="btn btn-default btn-block hidden-xs">Report a bug</a> </span> </span>

                                                </div>

                                            </div>
                                        </div>

                                        <div class="show-stat-microcharts">
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">

                                                <div class="easy-pie-chart txt-color-orangeDark" data-percent="33" data-pie-size="50">
                                                    <span class="percent percent-sign">35</span>
                                                </div>
                                                <span class="easy-pie-title"> Server Load <i class="fa fa-caret-up icon-color-bad"></i> </span>
                                                <ul class="smaller-stat hidden-sm pull-right">
                                                    <li>
                                                        <span class="label bg-color-greenLight"><i class="fa fa-caret-up"></i> 97%</span>
                                                    </li>
                                                    <li>
                                                        <span class="label bg-color-blueLight"><i class="fa fa-caret-down"></i> 44%</span>
                                                    </li>
                                                </ul>
                                                <div class="sparkline txt-color-greenLight hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                    130, 187, 250, 257, 200, 210, 300, 270, 363, 247, 270, 363, 247
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="easy-pie-chart txt-color-greenLight" data-percent="78.9" data-pie-size="50">
                                                    <span class="percent percent-sign">78.9 </span>
                                                </div>
                                                <span class="easy-pie-title"> Disk Space <i class="fa fa-caret-down icon-color-good"></i></span>
                                                <ul class="smaller-stat hidden-sm pull-right">
                                                    <li>
                                                        <span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 76%</span>
                                                    </li>
                                                    <li>
                                                        <span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 3%</span>
                                                    </li>
                                                </ul>
                                                <div class="sparkline txt-color-blue hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                    257, 200, 210, 300, 270, 363, 130, 187, 250, 247, 270, 363, 247
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="easy-pie-chart txt-color-blue" data-percent="23" data-pie-size="50">
                                                    <span class="percent percent-sign">23 </span>
                                                </div>
                                                <span class="easy-pie-title"> Transfered <i class="fa fa-caret-up icon-color-good"></i></span>
                                                <ul class="smaller-stat hidden-sm pull-right">
                                                    <li>
                                                        <span class="label bg-color-darken">10GB</span>
                                                    </li>
                                                    <li>
                                                        <span class="label bg-color-blueDark"><i class="fa fa-caret-up"></i> 10%</span>
                                                    </li>
                                                </ul>
                                                <div class="sparkline txt-color-darken hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                    200, 210, 363, 247, 300, 270, 130, 187, 250, 257, 363, 247, 270
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
                                                <div class="easy-pie-chart txt-color-darken" data-percent="36" data-pie-size="50">
                                                    <span class="percent degree-sign">36 <i class="fa fa-caret-up"></i></span>
                                                </div>
                                                <span class="easy-pie-title"> Temperature <i class="fa fa-caret-down icon-color-good"></i></span>
                                                <ul class="smaller-stat hidden-sm pull-right">
                                                    <li>
                                                        <span class="label bg-color-red"><i class="fa fa-caret-up"></i> 124</span>
                                                    </li>
                                                    <li>
                                                        <span class="label bg-color-blue"><i class="fa fa-caret-down"></i> 40 F</span>
                                                    </li>
                                                </ul>
                                                <div class="sparkline txt-color-red hidden-sm hidden-md pull-right" data-sparkline-type="line" data-sparkline-height="33px" data-sparkline-width="70px" data-fill-color="transparent">
                                                    2700, 3631, 2471, 2700, 3631, 2471, 1300, 1877, 2500, 2577, 2000, 2100, 3000
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <!-- end s1 tab pane -->

                                    <div class="tab-pane fade" id="s2">
                                        <div class="widget-body-toolbar bg-color-white">

                                            <form class="form-inline" role="form">

                                                <div class="form-group">
                                                    <label class="sr-only" for="s123">Show From</label>
                                                    <input type="email" class="form-control input-sm" id="s123" placeholder="Show From">
                                                </div>
                                                <div class="form-group">
                                                    <input type="email" class="form-control input-sm" id="s124" placeholder="To">
                                                </div>

                                                <div class="btn-group hidden-phone pull-right">
                                                    <a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
                                                    <ul class="dropdown-menu pull-right">
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
                                                        </li>
                                                    </ul>
                                                </div>

                                            </form>

                                        </div>
                                        <div class="padding-10">
                                            <div id="statsChart" class="chart-large has-legend-unique"></div>
                                        </div>

                                    </div>
                                    <!-- end s2 tab pane -->

                                    <div class="tab-pane fade" id="s3">

                                        <div class="widget-body-toolbar bg-color-white smart-form" id="rev-toggles">

                                            <div class="inline-group">

                                                <label for="gra-0" class="checkbox">
                                                    <input type="checkbox" name="gra-0" id="gra-0" checked="checked">
                                                    <i></i> Target </label>
                                                <label for="gra-1" class="checkbox">
                                                    <input type="checkbox" name="gra-1" id="gra-1" checked="checked">
                                                    <i></i> Actual </label>
                                                <label for="gra-2" class="checkbox">
                                                    <input type="checkbox" name="gra-2" id="gra-2" checked="checked">
                                                    <i></i> Signups </label>
                                            </div>

                                            <div class="btn-group hidden-phone pull-right">
                                                <a class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown"><i class="fa fa-cog"></i> More <span class="caret"> </span> </a>
                                                <ul class="dropdown-menu pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file-text-alt"></i> Export to PDF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-question-sign"></i> Help</a>
                                                    </li>
                                                </ul>
                                            </div>

                                        </div>

                                        <div class="padding-10">
                                            <div id="flotcontainer" class="chart-large has-legend-unique"></div>
                                        </div>
                                    </div>
                                    <!-- end s3 tab pane -->
                                </div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>
            </div>

            <!-- end row -->

            <!-- row -->

            <div class="row">

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-1" data-widget-editbutton="false" data-widget-fullscreenbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->

                        <header>
                            <span class="widget-icon"> <i class="fa fa-comments txt-color-white"></i> </span>
                            <h2> SmartChat </h2>
                            <div class="widget-toolbar">
                                <!-- add: non-hidden - to disable auto hide -->

                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-xs btn-success" data-toggle="dropdown">
                                        Status <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right js-status-update">
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-green"></i> Online</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-red"></i> Busy</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-circle txt-color-orange"></i> Away</a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a href="javascript:void(0);"><i class="fa fa-power-off"></i> Log Off</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <div>
                                    <label>Title:</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body widget-hide-overflow no-padding">
                                <!-- content goes here -->

                                <!-- CHAT CONTAINER -->
                                <div id="chat-container">
                                    <span class="chat-list-open-close"><i class="fa fa-user"></i><b>!</b></span>

                                    <div class="chat-list-body custom-scroll">
                                        <ul id="chat-users">
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/5.png" alt="">Robin Berry <span class="badge badge-inverse">23</span><span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Mark Zeukartech <span class="state"><i class="last-online pull-right">2hrs</i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Belmain Dolson <span class="state"><i class="last-online pull-right">45m</i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Galvitch Drewbery <span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Sadi Orlaf <span class="state"><i class="fa fa-circle txt-color-green pull-right"></i></span></a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Markus <span class="state"><i class="last-online pull-right">2m</i></span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/sunny.png" alt="">Sunny <span class="state"><i class="last-online pull-right">2m</i></span> </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);"><img src="img/avatars/male.png" alt="">Denmark <span class="state"><i class="last-online pull-right">2m</i></span> </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-list-footer">

                                        <div class="control-group">

                                            <form class="smart-form">

                                                <section>
                                                    <label class="input">
                                                        <input type="text" id="filter-chat-list" placeholder="Filter">
                                                    </label>
                                                </section>

                                            </form>

                                        </div>

                                    </div>

                                </div>

                                <!-- CHAT BODY -->
                                <div id="chat-body" class="chat-body custom-scroll">
                                    <ul>
                                        <li class="message">
                                            <img src="img/avatars/5.png" class="online" alt="">
                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time> <a href="javascript:void(0);" class="username">Sadi Orlaf</a> Hey did you meet the new board of director? He's a bit of an arse if you ask me...anyway here is the report you requested. I am off to launch with Lisa and Andrew, you wanna join?
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <!--<i class="fa fa-spinner fa-spin"></i>--> <i class="fa fa-file"></i> report-2013-demographic-report-annual-earnings.xls </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-default">cancel</a> <a href="javascript:void(0);" class="btn btn-xs btn-success">save</a> </span>
                                                </p>
                                                <p class="chat-file row">
                                                    <b class="pull-left col-sm-6"> <i class="fa fa-ok txt-color-green"></i> tobacco-report-2012.doc </b>
                                                    <span class="col-sm-6 pull-right"> <a href="javascript:void(0);" class="btn btn-xs btn-primary">open</a> </span>
                                                </p> </div>
                                        </li>
                                        <li class="message">
                                            <img src="img/avatars/sunny.png" class="online" alt="">
                                            <div class="message-text">
                                                <time>
                                                    2014-01-13
                                                </time> <a href="javascript:void(0);" class="username">John Doe</a> Haha! Yeah I know what you mean. Thanks for the file Sadi! <i class="fa fa-smile-o txt-color-orange"></i>
                                            </div>
                                        </li>
                                    </ul>

                                </div>

                                <!-- CHAT FOOTER -->
                                <div class="chat-footer">

                                    <!-- CHAT TEXTAREA -->
                                    <div class="textarea-div">

                                        <div class="typearea">
                                            <textarea placeholder="Write a reply..." id="textarea-expand" class="custom-scroll"></textarea>
                                        </div>

                                    </div>

                                    <!-- CHAT REPLY/SEND -->
											<span class="textarea-controls">
												<button class="btn btn-sm btn-primary pull-right">
                                                    Reply
                                                </button> <span class="pull-right smart-form" style="margin-top: 3px; margin-right: 10px;"> <label class="checkbox pull-right">
                                                        <input type="checkbox" name="subscription" id="subscription">
                                                        <i></i>Press <strong> ENTER </strong> to send </label> </span> <a href="javascript:void(0);" class="pull-left"><i class="fa fa-camera fa-fw fa-lg"></i></a> </span>

                                </div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blueDark" id="wid-id-3" data-widget-colorbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->
                        <header>
                            <span class="widget-icon"> <i class="fa fa-calendar"></i> </span>
                            <h2> My Events </h2>
                            <div class="widget-toolbar">
                                <!-- add: non-hidden - to disable auto hide -->
                                <div class="btn-group">
                                    <button class="btn dropdown-toggle btn-xs btn-default" data-toggle="dropdown">
                                        Showing <i class="fa fa-caret-down"></i>
                                    </button>
                                    <ul class="dropdown-menu js-status-update pull-right">
                                        <li>
                                            <a href="javascript:void(0);" id="mt">Month</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" id="ag">Agenda</a>
                                        </li>
                                        <li>
                                            <a href="javascript:void(0);" id="td">Today</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">

                                <input class="form-control" type="text">

                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body no-padding">
                                <!-- content goes here -->
                                <div class="widget-body-toolbar">

                                    <div id="calendar-buttons">

                                        <div class="btn-group">
                                            <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-prev"><i class="fa fa-chevron-left"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-default btn-xs" id="btn-next"><i class="fa fa-chevron-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <div id="calendar"></div>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>

                <article class="col-sm-12 col-md-12 col-lg-6">

                    <!-- new widget -->
                    <div class="jarviswidget" id="wid-id-2" data-widget-colorbutton="false" data-widget-editbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->

                        <header>
                            <span class="widget-icon"> <i class="fa fa-map-marker"></i> </span>
                            <h2>Birds Eye</h2>
                            <div class="widget-toolbar hidden-mobile">
                                <span class="onoffswitch-title"><i class="fa fa-location-arrow"></i> Realtime</span>
										<span class="onoffswitch">
											<input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" checked="checked" id="myonoffswitch">
											<label class="onoffswitch-label" for="myonoffswitch"> <span class="onoffswitch-inner" data-swchon-text="YES" data-swchoff-text="NO"></span> <span class="onoffswitch-switch"></span> </label> </span>
                            </div>
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <div>
                                    <label>Title:</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body no-padding">
                                <!-- content goes here -->

                                <div id="vector-map" class="vector-map"></div>
                                <div id="heat-fill">
                                    <span class="fill-a">0</span>

                                    <span class="fill-b">5,000</span>
                                </div>

                                <table class="table table-striped table-hover table-condensed">
                                    <thead>
                                    <tr>
                                        <th>Country</th>
                                        <th>Visits</th>
                                        <th class="text-align-center">User Activity</th>
                                        <th class="text-align-center">Online</th>
                                        <th class="text-align-center">Demographic</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td><a href="javascript:void(0);">USA</a></td>
                                        <td>4,977</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                2700, 3631, 2471, 1300, 1877, 2500, 2577, 2700, 3631, 2471, 2000, 2100, 3000
                                            </div></td>
                                        <td class="text-align-center">143</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                17,83
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);">Australia</a></td>
                                        <td>4,873</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                1000, 1100, 3030, 1300, -1877, -2500, -2577, -2700, 3631, 2471, 4700, 1631, 2471
                                            </div></td>
                                        <td class="text-align-center">247</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                22,88
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);">India</a></td>
                                        <td>3,671</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                3631, 1471, 2400, 3631, 471, 1300, 1177, 2500, 2577, 3000, 4100, 3000, 7700
                                            </div></td>
                                        <td class="text-align-center">373</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                10,90
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);">Brazil</a></td>
                                        <td>2,476</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                2700, 1877, 2500, 2577, 2000, 3631, 2471, -2700, -3631, 2471, 1300, 2100, 3000,
                                            </div></td>
                                        <td class="text-align-center">741</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                34,66
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);">Turkey</a></td>
                                        <td>1,476</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-blue text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                1300, 1877, 2500, 2577, 2000, 2100, 3000, -2471, -2700, -3631, -2471, 2700, 3631
                                            </div></td>
                                        <td class="text-align-center">123</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                75,25
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0);">Canada</a></td>
                                        <td>146</td>
                                        <td class="text-align-center">
                                            <div class="sparkline txt-color-orange text-align-center" data-sparkline-height="22px" data-sparkline-width="90px" data-sparkline-barwidth="2">
                                                5, 34, 10, 1, 4, 6, -9, -1, 0, 0, 5, 6, 7
                                            </div></td>
                                        <td class="text-align-center">23</td>
                                        <td class="text-align-center">
                                            <div class="sparkline display-inline" data-sparkline-type='pie' data-sparkline-piecolor='["#E979BB", "#57889C"]' data-sparkline-offset="90" data-sparkline-piesize="23px">
                                                50,50
                                            </div>
                                            <div class="btn-group display-inline pull-right text-align-left hidden-tablet">
                                                <button class="btn btn-xs btn-default dropdown-toggle" data-toggle="dropdown">
                                                    <i class="fa fa-cog fa-lg"></i>
                                                </button>
                                                <ul class="dropdown-menu dropdown-menu-xs pull-right">
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-file fa-lg fa-fw txt-color-greenLight"></i> <u>P</u>DF</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0);"><i class="fa fa-times fa-lg fa-fw txt-color-red"></i> <u>D</u>elete</a>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li class="text-align-center">
                                                        <a href="javascript:void(0);">Cancel</a>
                                                    </li>
                                                </ul>
                                            </div></td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <td colspan=5>
                                            <ul class="pagination pagination-xs no-margin">
                                                <li class="prev disabled">
                                                    <a href="javascript:void(0);">Previous</a>
                                                </li>
                                                <li class="active">
                                                    <a href="javascript:void(0);">1</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">2</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">3</a>
                                                </li>
                                                <li class="next">
                                                    <a href="javascript:void(0);">Next</a>
                                                </li>
                                            </ul></td>
                                    </tr>
                                    </tfoot>
                                </table>

                                <!-- end content -->

                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                    <!-- new widget -->
                    <div class="jarviswidget jarviswidget-color-blue" id="wid-id-4" data-widget-editbutton="false" data-widget-colorbutton="false">

                        <!-- widget options:
                        usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">

                        data-widget-colorbutton="false"
                        data-widget-editbutton="false"
                        data-widget-togglebutton="false"
                        data-widget-deletebutton="false"
                        data-widget-fullscreenbutton="false"
                        data-widget-custombutton="false"
                        data-widget-collapsed="true"
                        data-widget-sortable="false"

                        -->

                        <header>
                            <span class="widget-icon"> <i class="fa fa-check txt-color-white"></i> </span>
                            <h2> ToDo's </h2>
                            <!-- <div class="widget-toolbar">
                            add: non-hidden - to disable auto hide

                            </div>-->
                        </header>

                        <!-- widget div-->
                        <div>
                            <!-- widget edit box -->
                            <div class="jarviswidget-editbox">
                                <div>
                                    <label>Title:</label>
                                    <input type="text" />
                                </div>
                            </div>
                            <!-- end widget edit box -->

                            <div class="widget-body no-padding smart-form">
                                <!-- content goes here -->
                                <h5 class="todo-group-title"><i class="fa fa-warning"></i> Critical Tasks (<small class="num-of-tasks">1</small>)</h5>
                                <ul id="sortable1" class="todo">
                                    <li>
												<span class="handle"> <label class="checkbox">
                                                        <input type="checkbox" name="checkbox-inline">
                                                        <i></i> </label> </span>
                                        <p>
                                            <strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
                                            <span class="date">Jan 1, 2014</span>
                                        </p>
                                    </li>
                                </ul>
                                <h5 class="todo-group-title"><i class="fa fa-exclamation"></i> Important Tasks (<small class="num-of-tasks">3</small>)</h5>
                                <ul id="sortable2" class="todo">
                                    <li>
												<span class="handle"> <label class="checkbox">
                                                        <input type="checkbox" name="checkbox-inline">
                                                        <i></i> </label> </span>
                                        <p>
                                            <strong>Ticket #1347</strong> - Inbox email is being sent twice <small>(bug fix)</small> [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="date">Nov 22, 2013</span>
                                        </p>
                                    </li>
                                    <li>
												<span class="handle"> <label class="checkbox">
                                                        <input type="checkbox" name="checkbox-inline">
                                                        <i></i> </label> </span>
                                        <p>
                                            <strong>Ticket #1314</strong> - Call customer support re: Issue <a href="javascript:void(0);" class="font-xs">#6134</a><small>(code review)</small>
                                            <span class="date">Nov 22, 2013</span>
                                        </p>
                                    </li>
                                    <li>
												<span class="handle"> <label class="checkbox">
                                                        <input type="checkbox" name="checkbox-inline">
                                                        <i></i> </label> </span>
                                        <p>
                                            <strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
                                            <span class="date">Jan 1, 2014</span>
                                        </p>
                                    </li>
                                </ul>

                                <h5 class="todo-group-title"><i class="fa fa-check"></i> Completed Tasks (<small class="num-of-tasks">1</small>)</h5>
                                <ul id="sortable3" class="todo">
                                    <li class="complete">
												<span class="handle" style="display:none"> <label class="checkbox state-disabled">
                                                        <input type="checkbox" name="checkbox-inline" checked="checked" disabled="disabled">
                                                        <i></i> </label> </span>
                                        <p>
                                            <strong>Ticket #17643</strong> - Hotfix for WebApp interface issue [<a href="javascript:void(0);" class="font-xs">More Details</a>] <span class="text-muted">Sea deep blessed bearing under darkness from God air living isn't. </span>
                                            <span class="date">Jan 1, 2014</span>
                                        </p>
                                    </li>
                                </ul>

                                <!-- end content -->
                            </div>

                        </div>
                        <!-- end widget div -->
                    </div>
                    <!-- end widget -->

                </article>

            </div>

            <!-- end row -->

        </section>
        <!-- end widget grid -->

    </div>
    <!-- END MAIN CONTENT -->

</div>
<!-- END MAIN PANEL -->

<!-- SHORTCUT AREA : With large tiles (activated via clicking user name tag)
Note: These tiles are completely responsive,
you can add as many as you like
-->
<div id="shortcut">
    <ul>
        <li>
            <a href="#inbox.html" class="jarvismetro-tile big-cubes bg-color-blue"> <span class="iconbox"> <i class="fa fa-envelope fa-4x"></i> <span>Mail <span class="label pull-right bg-color-darken">14</span></span> </span> </a>
        </li>
        <li>
            <a href="#calendar.html" class="jarvismetro-tile big-cubes bg-color-orangeDark"> <span class="iconbox"> <i class="fa fa-calendar fa-4x"></i> <span>Calendar</span> </span> </a>
        </li>
        <li>
            <a href="#gmap-xml.html" class="jarvismetro-tile big-cubes bg-color-purple"> <span class="iconbox"> <i class="fa fa-map-marker fa-4x"></i> <span>Maps</span> </span> </a>
        </li>
        <li>
            <a href="#invoice.html" class="jarvismetro-tile big-cubes bg-color-blueDark"> <span class="iconbox"> <i class="fa fa-book fa-4x"></i> <span>Invoice <span class="label pull-right bg-color-darken">99</span></span> </span> </a>
        </li>
        <li>
            <a href="#gallery.html" class="jarvismetro-tile big-cubes bg-color-greenLight"> <span class="iconbox"> <i class="fa fa-picture-o fa-4x"></i> <span>Gallery </span> </span> </a>
        </li>
        <li>
            <a href="javascript:void(0);" class="jarvismetro-tile big-cubes selected bg-color-pinkDark"> <span class="iconbox"> <i class="fa fa-user fa-4x"></i> <span>My Profile </span> </span> </a>
        </li>
    </ul>
</div>
<!-- END SHORTCUT AREA -->

<!--================================================== -->

<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="js/notification/SmartNotification.min.js"></script>

<!-- JARVIS WIDGETS -->
<script src="js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- SmartClick: For mobile devices -->
<script src="js/plugin/smartclick/smartclick.js"></script>

<!--[if IE 7]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- Demo purpose only -->
<script src="js/demo.js"></script>

<!-- MAIN APP JS FILE -->
<script src="js/app.js"></script>

<!-- PAGE RELATED PLUGIN(S) -->

<!-- Flot Chart Plugin: Flot Engine, Flot Resizer, Flot Tooltip -->
<script src="js/plugin/flot/jquery.flot.cust.js"></script>
<script src="js/plugin/flot/jquery.flot.resize.js"></script>
<script src="js/plugin/flot/jquery.flot.tooltip.js"></script>

<!-- Vector Maps Plugin: Vectormap engine, Vectormap language -->
<script src="js/plugin/vectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="js/plugin/vectormap/jquery-jvectormap-world-mill-en.js"></script>

<!-- Full Calendar -->
<script src="js/plugin/fullcalendar/jquery.fullcalendar.min.js"></script>

<script>
    $(document).ready(function() {

        // DO NOT REMOVE : GLOBAL FUNCTIONS!
        pageSetUp();

        /*
         * PAGE RELATED SCRIPTS
         */

        $(".js-status-update a").click(function() {
            var selText = $(this).text();
            $this = $(this);
            $this.parents('.btn-group').find('.dropdown-toggle').html(selText + ' <span class="caret"></span>');
            $this.parents('.dropdown-menu').find('li').removeClass('active');
            $this.parent().addClass('active');
        });

        /*
         * TODO: add a way to add more todo's to list
         */

        // initialize sortable
        $(function() {
            $("#sortable1, #sortable2").sortable({
                handle : '.handle',
                connectWith : ".todo",
                update : countTasks
            }).disableSelection();
        });

        // check and uncheck
        $('.todo .checkbox > input[type="checkbox"]').click(function() {
            $this = $(this).parent().parent().parent();

            if ($(this).prop('checked')) {
                $this.addClass("complete");

                // remove this if you want to undo a check list once checked
                //$(this).attr("disabled", true);
                $(this).parent().hide();

                // once clicked - add class, copy to memory then remove and add to sortable3
                $this.slideUp(500, function() {
                    $this.clone().prependTo("#sortable3").effect("highlight", {}, 800);
                    $this.remove();
                    countTasks();
                });
            } else {
                // insert undo code here...
            }

        })
        // count tasks
        function countTasks() {

            $('.todo-group-title').each(function() {
                $this = $(this);
                $this.find(".num-of-tasks").text($this.next().find("li").size());
            });

        }

        /*
         * RUN PAGE GRAPHS
         */

        /* TAB 1: UPDATING CHART */
        // For the demo we use generated data, but normally it would be coming from the server

        var data = [], totalPoints = 200, $UpdatingChartColors = $("#updating-chart").css('color');

        function getRandomData() {
            if (data.length > 0)
                data = data.slice(1);

            // do a random walk
            while (data.length < totalPoints) {
                var prev = data.length > 0 ? data[data.length - 1] : 50;
                var y = prev + Math.random() * 10 - 5;
                if (y < 0)
                    y = 0;
                if (y > 100)
                    y = 100;
                data.push(y);
            }

            // zip the generated y values with the x values
            var res = [];
            for (var i = 0; i < data.length; ++i)
                res.push([i, data[i]])
            return res;
        }

        // setup control widget
        var updateInterval = 1500;
        $("#updating-chart").val(updateInterval).change(function() {

            var v = $(this).val();
            if (v && !isNaN(+v)) {
                updateInterval = +v;
                $(this).val("" + updateInterval);
            }

        });

        // setup plot
        var options = {
            yaxis : {
                min : 0,
                max : 100
            },
            xaxis : {
                min : 0,
                max : 100
            },
            colors : [$UpdatingChartColors],
            series : {
                lines : {
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.4
                        }, {
                            opacity : 0
                        }]
                    },
                    steps : false

                }
            }
        };

        var plot = $.plot($("#updating-chart"), [getRandomData()], options);

        /* live switch */
        $('input[type="checkbox"]#start_interval').click(function() {
            if ($(this).prop('checked')) {
                $on = true;
                updateInterval = 1500;
                update();
            } else {
                clearInterval(updateInterval);
                $on = false;
            }
        });

        function update() {
            if ($on == true) {
                plot.setData([getRandomData()]);
                plot.draw();
                setTimeout(update, updateInterval);

            } else {
                clearInterval(updateInterval)
            }

        }

        var $on = false;

        /*end updating chart*/

        /* TAB 2: Social Network  */

        $(function() {
            // jQuery Flot Chart
            var twitter = [[1, 27], [2, 34], [3, 51], [4, 48], [5, 55], [6, 65], [7, 61], [8, 70], [9, 65], [10, 75], [11, 57], [12, 59], [13, 62]], facebook = [[1, 25], [2, 31], [3, 45], [4, 37], [5, 38], [6, 40], [7, 47], [8, 55], [9, 43], [10, 50], [11, 47], [12, 39], [13, 47]], data = [{
                label : "Twitter",
                data : twitter,
                lines : {
                    show : true,
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.1
                        }, {
                            opacity : 0.13
                        }]
                    }
                },
                points : {
                    show : true
                }
            }, {
                label : "Facebook",
                data : facebook,
                lines : {
                    show : true,
                    lineWidth : 1,
                    fill : true,
                    fillColor : {
                        colors : [{
                            opacity : 0.1
                        }, {
                            opacity : 0.13
                        }]
                    }
                },
                points : {
                    show : true
                }
            }];

            var options = {
                grid : {
                    hoverable : true
                },
                colors : ["#568A89", "#3276B1"],
                tooltip : true,
                tooltipOpts : {
                    //content : "Value <b>$x</b> Value <span>$y</span>",
                    defaultTheme : false
                },
                xaxis : {
                    ticks : [[1, "JAN"], [2, "FEB"], [3, "MAR"], [4, "APR"], [5, "MAY"], [6, "JUN"], [7, "JUL"], [8, "AUG"], [9, "SEP"], [10, "OCT"], [11, "NOV"], [12, "DEC"], [13, "JAN+1"]]
                },
                yaxes : {

                }
            };

            var plot3 = $.plot($("#statsChart"), data, options);
        });

        // END TAB 2

        // TAB THREE GRAPH //
        /* TAB 3: Revenew  */

        $(function() {

            var trgt = [[1354586000000, 153], [1364587000000, 658], [1374588000000, 198], [1384589000000, 663], [1394590000000, 801], [1404591000000, 1080], [1414592000000, 353], [1424593000000, 749], [1434594000000, 523], [1444595000000, 258], [1454596000000, 688], [1464597000000, 364]], prft = [[1354586000000, 53], [1364587000000, 65], [1374588000000, 98], [1384589000000, 83], [1394590000000, 980], [1404591000000, 808], [1414592000000, 720], [1424593000000, 674], [1434594000000, 23], [1444595000000, 79], [1454596000000, 88], [1464597000000, 36]], sgnups = [[1354586000000, 647], [1364587000000, 435], [1374588000000, 784], [1384589000000, 346], [1394590000000, 487], [1404591000000, 463], [1414592000000, 479], [1424593000000, 236], [1434594000000, 843], [1444595000000, 657], [1454596000000, 241], [1464597000000, 341]], toggles = $("#rev-toggles"), target = $("#flotcontainer");

            var data = [{
                label : "Target Profit",
                data : trgt,
                bars : {
                    show : true,
                    align : "center",
                    barWidth : 30 * 30 * 60 * 1000 * 80
                }
            }, {
                label : "Actual Profit",
                data : prft,
                color : '#3276B1',
                lines : {
                    show : true,
                    lineWidth : 3
                },
                points : {
                    show : true
                }
            }, {
                label : "Actual Signups",
                data : sgnups,
                color : '#71843F',
                lines : {
                    show : true,
                    lineWidth : 1
                },
                points : {
                    show : true
                }
            }]

            var options = {
                grid : {
                    hoverable : true
                },
                tooltip : true,
                tooltipOpts : {
                    //content: '%x - %y',
                    //dateFormat: '%b %y',
                    defaultTheme : false
                },
                xaxis : {
                    mode : "time"
                },
                yaxes : {
                    tickFormatter : function(val, axis) {
                        return "$" + val;
                    },
                    max : 1200
                }

            };

            plot2 = null;

            function plotNow() {
                var d = [];
                toggles.find(':checkbox').each(function() {
                    if ($(this).is(':checked')) {
                        d.push(data[$(this).attr("name").substr(4, 1)]);
                    }
                });
                if (d.length > 0) {
                    if (plot2) {
                        plot2.setData(d);
                        plot2.draw();
                    } else {
                        plot2 = $.plot(target, d, options);
                    }
                }

            };

            toggles.find(':checkbox').on('change', function() {
                plotNow();
            });
            plotNow()

        });

        /*
         * VECTOR MAP
         */

        data_array = {
            "US" : 4977,
            "AU" : 4873,
            "IN" : 3671,
            "BR" : 2476,
            "TR" : 1476,
            "CN" : 146,
            "CA" : 134,
            "BD" : 100
        };

        $('#vector-map').vectorMap({
            map : 'world_mill_en',
            backgroundColor : '#fff',
            regionStyle : {
                initial : {
                    fill : '#c4c4c4'
                },
                hover : {
                    "fill-opacity" : 1
                }
            },
            series : {
                regions : [{
                    values : data_array,
                    scale : ['#85a8b6', '#4d7686'],
                    normalizeFunction : 'polynomial'
                }]
            },
            onRegionLabelShow : function(e, el, code) {
                if ( typeof data_array[code] == 'undefined') {
                    e.preventDefault();
                } else {
                    var countrylbl = data_array[code];
                    el.html(el.html() + ': ' + countrylbl + ' visits');
                }
            }
        });

        /*
         * FULL CALENDAR JS
         */

        if ($("#calendar").length) {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();

            var calendar = $('#calendar').fullCalendar({

                editable : true,
                draggable : true,
                selectable : false,
                selectHelper : true,
                unselectAuto : false,
                disableResizing : false,

                header : {
                    left : 'title', //,today
                    center : 'prev, next, today',
                    right : 'month, agendaWeek, agenDay' //month, agendaDay,
                },

                select : function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        calendar.fullCalendar('renderEvent', {
                                    title : title,
                                    start : start,
                                    end : end,
                                    allDay : allDay
                                }, true // make the event "stick"
                        );
                    }
                    calendar.fullCalendar('unselect');
                },

                events : [{
                    title : 'All Day Event',
                    start : new Date(y, m, 1),
                    description : 'long description',
                    className : ["event", "bg-color-greenLight"],
                    icon : 'fa-check'
                }, {
                    title : 'Long Event',
                    start : new Date(y, m, d - 5),
                    end : new Date(y, m, d - 2),
                    className : ["event", "bg-color-red"],
                    icon : 'fa-lock'
                }, {
                    id : 999,
                    title : 'Repeating Event',
                    start : new Date(y, m, d - 3, 16, 0),
                    allDay : false,
                    className : ["event", "bg-color-blue"],
                    icon : 'fa-clock-o'
                }, {
                    id : 999,
                    title : 'Repeating Event',
                    start : new Date(y, m, d + 4, 16, 0),
                    allDay : false,
                    className : ["event", "bg-color-blue"],
                    icon : 'fa-clock-o'
                }, {
                    title : 'Meeting',
                    start : new Date(y, m, d, 10, 30),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Lunch',
                    start : new Date(y, m, d, 12, 0),
                    end : new Date(y, m, d, 14, 0),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Birthday Party',
                    start : new Date(y, m, d + 1, 19, 0),
                    end : new Date(y, m, d + 1, 22, 30),
                    allDay : false,
                    className : ["event", "bg-color-darken"]
                }, {
                    title : 'Smartadmin Open Day',
                    start : new Date(y, m, 28),
                    end : new Date(y, m, 29),
                    className : ["event", "bg-color-darken"]
                }],

                eventRender : function(event, element, icon) {
                    if (!event.description == "") {
                        element.find('.fc-event-title').append("<br/><span class='ultra-light'>" + event.description + "</span>");
                    }
                    if (!event.icon == "") {
                        element.find('.fc-event-title').append("<i class='air air-top-right fa " + event.icon + " '></i>");
                    }
                }
            });

        };

        /* hide default buttons */
        $('.fc-header-right, .fc-header-center').hide();

        // calendar prev
        $('#calendar-buttons #btn-prev').click(function() {
            $('.fc-button-prev').click();
            return false;
        });

        // calendar next
        $('#calendar-buttons #btn-next').click(function() {
            $('.fc-button-next').click();
            return false;
        });

        // calendar today
        $('#calendar-buttons #btn-today').click(function() {
            $('.fc-button-today').click();
            return false;
        });

        // calendar month
        $('#mt').click(function() {
            $('#calendar').fullCalendar('changeView', 'month');
        });

        // calendar agenda week
        $('#ag').click(function() {
            $('#calendar').fullCalendar('changeView', 'agendaWeek');
        });

        // calendar agenda day
        $('#td').click(function() {
            $('#calendar').fullCalendar('changeView', 'agendaDay');
        });

        /*
         * CHAT
         */

        $.filter_input = $('#filter-chat-list');
        $.chat_users_container = $('#chat-container > .chat-list-body')
        $.chat_users = $('#chat-users')
        $.chat_list_btn = $('#chat-container > .chat-list-open-close');
        $.chat_body = $('#chat-body');

        /*
         * LIST FILTER (CHAT)
         */

        // custom css expression for a case-insensitive contains()
        jQuery.expr[':'].Contains = function(a, i, m) {
            return (a.textContent || a.innerText || "").toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
        };

        function listFilter(list) {// header is any element, list is an unordered list
            // create and add the filter form to the header

            $.filter_input.change(function() {
                var filter = $(this).val();
                if (filter) {
                    // this finds all links in a list that contain the input,
                    // and hide the ones not containing the input while showing the ones that do
                    $.chat_users.find("a:not(:Contains(" + filter + "))").parent().slideUp();
                    $.chat_users.find("a:Contains(" + filter + ")").parent().slideDown();
                } else {
                    $.chat_users.find("li").slideDown();
                }
                return false;
            }).keyup(function() {
                // fire the above change event after every letter
                $(this).change();

            });

        }

        // on dom ready
        listFilter($.chat_users);

        // open chat list
        $.chat_list_btn.click(function() {
            $(this).parent('#chat-container').toggleClass('open');
        })

        $.chat_body.animate({
            scrollTop : $.chat_body[0].scrollHeight
        }, 500);

    });

</script>

<!-- Your GOOGLE ANALYTICS CODE Below -->
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();

</script>

</body>

</html>