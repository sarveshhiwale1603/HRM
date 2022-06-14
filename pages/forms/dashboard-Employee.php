<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3| Dashboard 2</title>


    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="../../plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>


    <link rel="stylesheet" href="../../plugins/_bar-rating.scss">
    <link rel="stylesheet" href="../../plugins/_peitychart.scss">
    <link rel="stylesheet" href="../../plugins/bars-1to10.css">
    <link rel="stylesheet" href="../../plugins/bars-movie.css">
    <link rel="stylesheet" href="../../plugins/_pnotify.scss">
    <link rel="stylesheet" href="dashboard Css/apexcharts.css">
    <link rel="stylesheet" href="dashboard Css/E-dashboard.css">
    <link rel="stylesheet" href="dashboard Css/E-dashboard2.css">



  

 
    <style type="text/css">
        #ui-datepicker-div {
            z-index: 1100 !important;
        }

        .modal-backdrop {
            z-index: 1091 !important;
        }

        .modal {
            z-index: 1100 !important;
        }

        .popover {
            z-index: 1100 !important;
        }
    </style>

    <style>
        .proj-t-card .pt-badge {
            margin-bottom: 0;
            display: inline-block;
            padding: 60px 50px 20px 20px;
            border-radius: 50%;
            position: absolute;
            top: -45px;
            right: -35px;
            transition: all 0.3s ease-in-out;
        }

        .badge-light-success {
            background: #daf6e7;
            color: #17C666;
            border-color: #daf6e7;
        }

        .proj-t-card {
            position: relative;
            overflow: hidden;
        }

        .prod-p-card i {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    text-align: center;
    padding: 11px 0;
    font-size: 24px;
}
    </style>


</head>

<body>
    <div class="wrapper">
        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60" />
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Home</a>
                </li>
            </ul>

            <!-- Right navbar links -->
        </nav>
        <!-- /.navbar -->
   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-light-primary elevation-3">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">HRM</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
       
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
            <li class="nav-header text"><small> YOUR APPS</small></li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Home
                </p>
              </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-clock"></i>
                  <p>
                    Attendance
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-layer-group"></i>
                  <p>
                    Project
                  </p>
                </a>
              </li>
            <li class="nav-header text"><small> YOUR COMPANY</small></li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-users"></i>
                  <p>
                    Leads
                  </p>
                </a>
              </li><li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="nav-icon fa fa-calendar-alt"></i>
                  <p>
                    Invoices
                  </p>
                </a>
              </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

        

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard</li>
                            </ol>
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-md-12">
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="card proj-t-card">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col-auto">
                                                </div>
                                                <div class="col p-l-0">
                                                    <h6 class="m-b-5">Welcome sarvesh hiwale</h6>
                                                    <h6 class="m-b-0 text-primary">Today: <span
                                                            class="badge badge-light-success">Holiday</span></h6>
                                                </div>
                                            </div>
                                            <form action="http://hrm.tectignis.in/erp/timesheet/set_clocking"
                                                name="hr_clocking" id="hr_clocking" autocomplete="off" class="m-b-1"
                                                method="post" accept-charset="utf-8">
                                                <input type="hidden" name="csrf_token"
                                                    value="87da9911243793fc5ce42b3d70d0d478">
                                                <input type="hidden" name="token"
                                                    value="TlKBdKElfaZ-InRIQUPGqX_NhtWWhFTW3cD1rFYttwI"
                                                    style="display:none;">
                                                <input type="hidden" value="clock_out" name="clock_state"
                                                    id="clock_state">
                                                <input type="hidden" value="ALjcR-lvssvhX9TsHHTruq799pCoURC05s6ZoDxE__M"
                                                    name="time_id" id="time_id">
                                                <div class="row align-items-center mt-4 text-center">
                                                    <div class="col">
                                                        <h6 class="m-b-0">
                                                            <button type="button" disabled="disabled"
                                                                class="btn waves-effect waves-light btn-sm btn-success">Clock
                                                                IN <i
                                                                    class="fas fa-long-arrow-alt-right m-r-10"></i></button>
                                                        </h6>
                                                    </div>
                                                    <div class="col">
                                                        <h6 class="m-b-0">
                                                            <button
                                                                class="btn waves-effect waves-light btn-sm btn-secondary ladda-button"
                                                                type="submit" data-style="expand-right"><span
                                                                    class="ladda-label">Clock OUT <i
                                                                        class="fas fa-long-arrow-alt-down m-r-10"></i></span><span
                                                                    class="ladda-spinner"></span></button>
                                                        </h6>
                                                    </div>
                                                </div>
                                                <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                        type="text" name="ciapp_check" value=""></div>
                                            </form>
                                            <h6 class="pt-badge badge-light-success">MANAGER</h6>
                                        </div>
                                        <a href="http://hrm.tectignis.in/erp/attendance-list"
                                            class="btn btn-primary btn-sm btn-round">My Attendance <i
                                                class="fas fa-long-arrow-alt-right m-r-10"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-md-12">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card prod-p-card background-pattern">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-0">
                                                        <div class="col">
                                                            <h6 class="m-b-5">Overtime Request</h6>
                                                            <h3 class="m-b-0">
                                                                0 </h3>
                                                        </div>
                                                        <div class="col-auto"> <i
                                                                class="fas fa-money-bill-alt text-primary"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card prod-p-card bg-primary background-pattern-white">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-0">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">Travel Request</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                0 </h3>
                                                        </div>
                                                        <div class="col-auto"> <i
                                                                class="fas fa-database text-white"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <h6>Tasks Status</h6>
                                            <div class="row d-flex justify-content-center align-items-center">
                                                <div class="col">
                                                    <div id="staff-task-status-chart" style="min-height: 262.7px;">
                                                        <div id="apexchartsgg8o5fwe"
                                                            class="apexcharts-canvas apexchartsgg8o5fwe apexcharts-theme-light"
                                                            style="width: 425px; height: 262.7px;"><svg
                                                                id="SvgjsSvg1186" width="425"
                                                                height="262.70000000000005"
                                                                xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                xmlns:svgjs="http://svgjs.com/svgjs"
                                                                class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                transform="translate(0, 0)"
                                                                style="background: transparent;">
                                                                <foreignObject x="0" y="0" width="425"
                                                                    height="262.70000000000005">
                                                                    <div class="apexcharts-legend apexcharts-align-center position-right"
                                                                        xmlns="http://www.w3.org/1999/xhtml"
                                                                        style="position: absolute; left: auto; top: 70px; right: 5px;">
                                                                        <div class="apexcharts-legend-series" rel="1"
                                                                            data:collapsed="false"
                                                                            style="margin: 2px 5px;"><span
                                                                                class="apexcharts-legend-marker" rel="1"
                                                                                data:collapsed="false"
                                                                                style="background: rgb(114, 103, 239); color: rgb(114, 103, 239); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                class="apexcharts-legend-text" rel="1"
                                                                                i="0" data:default-text="Not%20Started"
                                                                                data:collapsed="false"
                                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Not
                                                                                Started</span></div>
                                                                        <div class="apexcharts-legend-series" rel="2"
                                                                            data:collapsed="false"
                                                                            style="margin: 2px 5px;"><span
                                                                                class="apexcharts-legend-marker" rel="2"
                                                                                data:collapsed="false"
                                                                                style="background: rgb(132, 123, 241); color: rgb(132, 123, 241); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                class="apexcharts-legend-text" rel="2"
                                                                                i="1" data:default-text="In%20Progress"
                                                                                data:collapsed="false"
                                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">In
                                                                                Progress</span></div>
                                                                        <div class="apexcharts-legend-series" rel="3"
                                                                            data:collapsed="false"
                                                                            style="margin: 2px 5px;"><span
                                                                                class="apexcharts-legend-marker" rel="3"
                                                                                data:collapsed="false"
                                                                                style="background: rgb(151, 143, 243); color: rgb(151, 143, 243); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                class="apexcharts-legend-text" rel="3"
                                                                                i="2" data:default-text="Completed"
                                                                                data:collapsed="false"
                                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Completed</span>
                                                                        </div>
                                                                        <div class="apexcharts-legend-series" rel="4"
                                                                            data:collapsed="false"
                                                                            style="margin: 2px 5px;"><span
                                                                                class="apexcharts-legend-marker" rel="4"
                                                                                data:collapsed="false"
                                                                                style="background: rgb(169, 162, 245); color: rgb(169, 162, 245); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                class="apexcharts-legend-text" rel="4"
                                                                                i="3" data:default-text="Cancelled"
                                                                                data:collapsed="false"
                                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Cancelled</span>
                                                                        </div>
                                                                        <div class="apexcharts-legend-series" rel="5"
                                                                            data:collapsed="false"
                                                                            style="margin: 2px 5px;"><span
                                                                                class="apexcharts-legend-marker" rel="5"
                                                                                data:collapsed="false"
                                                                                style="background: rgb(187, 182, 247); color: rgb(187, 182, 247); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                class="apexcharts-legend-text" rel="5"
                                                                                i="4" data:default-text="On%20Hold"
                                                                                data:collapsed="false"
                                                                                style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">On
                                                                                Hold</span></div>
                                                                    </div>
                                                                </foreignObject>
                                                                <g id="SvgjsG1188"
                                                                    class="apexcharts-inner apexcharts-graphical"
                                                                    transform="translate(22, 0)">
                                                                    <defs id="SvgjsDefs1187">
                                                                        <clipPath id="gridRectMaskgg8o5fwe">
                                                                            <rect id="SvgjsRect1190" width="278"
                                                                                height="262" x="-3" y="-1" rx="0" ry="0"
                                                                                opacity="1" stroke-width="0"
                                                                                stroke="none" stroke-dasharray="0"
                                                                                fill="#fff"></rect>
                                                                        </clipPath>
                                                                        <clipPath id="gridRectMarkerMaskgg8o5fwe">
                                                                            <rect id="SvgjsRect1191" width="276"
                                                                                height="264" x="-2" y="-2" rx="0" ry="0"
                                                                                opacity="1" stroke-width="0"
                                                                                stroke="none" stroke-dasharray="0"
                                                                                fill="#fff"></rect>
                                                                        </clipPath>
                                                                    </defs>
                                                                    <g id="SvgjsG1192" class="apexcharts-pie">
                                                                        <g id="SvgjsG1193"
                                                                            transform="translate(0, 0) scale(1)">
                                                                            <g id="SvgjsG1194"
                                                                                class="apexcharts-slices">
                                                                                <g id="SvgjsG1195"
                                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                                    seriesName="NotxStarted" rel="1"
                                                                                    data:realIndex="0">
                                                                                    <path id="SvgjsPath1196"
                                                                                        d="M 136 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 136 250.82926829268294 L 136 130 L 136 9.17073170731706"
                                                                                        fill="rgba(114,103,239,1)"
                                                                                        fill-opacity="1"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="2"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-pie-area apexcharts-pie-slice-0"
                                                                                        index="0" j="0" data:angle="180"
                                                                                        data:startAngle="0"
                                                                                        data:strokeWidth="2"
                                                                                        data:value="1"
                                                                                        data:pathOrig="M 136 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 136 250.82926829268294 L 136 130 L 136 9.17073170731706"
                                                                                        stroke="#ffffff"></path>
                                                                                </g>
                                                                                <g id="SvgjsG1199"
                                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                                    seriesName="InxProgress" rel="2"
                                                                                    data:realIndex="1">
                                                                                    <path id="SvgjsPath1200"
                                                                                        d="M 136 250.82926829268294 A 120.82926829268294 120.82926829268294 0 0 1 136 250.82926829268294 L 136 130 L 136 250.82926829268294"
                                                                                        fill="rgba(132,123,241,1)"
                                                                                        fill-opacity="1"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="2"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-pie-area apexcharts-pie-slice-1"
                                                                                        index="0" j="1" data:angle="0"
                                                                                        data:startAngle="180"
                                                                                        data:strokeWidth="2"
                                                                                        data:value="0"
                                                                                        data:pathOrig="M 136 250.82926829268294 A 120.82926829268294 120.82926829268294 0 0 1 136 250.82926829268294 L 136 130 L 136 250.82926829268294"
                                                                                        stroke="#ffffff"></path>
                                                                                </g>
                                                                                <g id="SvgjsG1201"
                                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                                    seriesName="Completed" rel="3"
                                                                                    data:realIndex="2">
                                                                                    <path id="SvgjsPath1202"
                                                                                        d="M 136 250.82926829268294 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 136 250.82926829268294"
                                                                                        fill="rgba(151,143,243,1)"
                                                                                        fill-opacity="1"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="2"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-pie-area apexcharts-pie-slice-2"
                                                                                        index="0" j="2" data:angle="180"
                                                                                        data:startAngle="180"
                                                                                        data:strokeWidth="2"
                                                                                        data:value="1"
                                                                                        data:pathOrig="M 136 250.82926829268294 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 136 250.82926829268294"
                                                                                        stroke="#ffffff"></path>
                                                                                </g>
                                                                                <g id="SvgjsG1205"
                                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                                    seriesName="Cancelled" rel="4"
                                                                                    data:realIndex="3">
                                                                                    <path id="SvgjsPath1206"
                                                                                        d="M 135.99999999999997 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 135.99999999999997 9.17073170731706"
                                                                                        fill="rgba(169,162,245,1)"
                                                                                        fill-opacity="1"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="2"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-pie-area apexcharts-pie-slice-3"
                                                                                        index="0" j="3" data:angle="0"
                                                                                        data:startAngle="360"
                                                                                        data:strokeWidth="2"
                                                                                        data:value="0"
                                                                                        data:pathOrig="M 135.99999999999997 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 135.99999999999997 9.17073170731706"
                                                                                        stroke="#ffffff"></path>
                                                                                </g>
                                                                                <g id="SvgjsG1207"
                                                                                    class="apexcharts-series apexcharts-pie-series"
                                                                                    seriesName="OnxHold" rel="5"
                                                                                    data:realIndex="4">
                                                                                    <path id="SvgjsPath1208"
                                                                                        d="M 135.99999999999997 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 135.99999999999997 9.17073170731706"
                                                                                        fill="rgba(187,182,247,1)"
                                                                                        fill-opacity="1"
                                                                                        stroke-opacity="1"
                                                                                        stroke-linecap="butt"
                                                                                        stroke-width="2"
                                                                                        stroke-dasharray="0"
                                                                                        class="apexcharts-pie-area apexcharts-pie-slice-4"
                                                                                        index="0" j="4" data:angle="0"
                                                                                        data:startAngle="360"
                                                                                        data:strokeWidth="2"
                                                                                        data:value="0"
                                                                                        data:pathOrig="M 135.99999999999997 9.17073170731706 A 120.82926829268294 120.82926829268294 0 0 1 135.9789113144622 9.170733547652048 L 136 130 L 135.99999999999997 9.17073170731706"
                                                                                        stroke="#ffffff"></path>
                                                                                </g>
                                                                                <g id="SvgjsG1197"
                                                                                    class="apexcharts-datalabels"><text
                                                                                        id="SvgjsText1198"
                                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                                        x="232.66341463414636" y="130"
                                                                                        text-anchor="middle"
                                                                                        dominant-baseline="auto"
                                                                                        font-size="12px"
                                                                                        font-weight="600" fill="#ffffff"
                                                                                        class="apexcharts-text apexcharts-pie-label"
                                                                                        style="font-family: Helvetica, Arial, sans-serif;">50.0%</text>
                                                                                </g>
                                                                                <g id="SvgjsG1203"
                                                                                    class="apexcharts-datalabels"><text
                                                                                        id="SvgjsText1204"
                                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                                        x="39.33658536585365" y="130"
                                                                                        text-anchor="middle"
                                                                                        dominant-baseline="auto"
                                                                                        font-size="12px"
                                                                                        font-weight="600" fill="#ffffff"
                                                                                        class="apexcharts-text apexcharts-pie-label"
                                                                                        style="font-family: Helvetica, Arial, sans-serif;">50.0%</text>
                                                                                </g>
                                                                            </g>
                                                                        </g>
                                                                    </g>
                                                                    <line id="SvgjsLine1209" x1="0" y1="0" x2="272"
                                                                        y2="0" stroke="#b6b6b6" stroke-dasharray="0"
                                                                        stroke-width="1" class="apexcharts-ycrosshairs">
                                                                    </line>
                                                                    <line id="SvgjsLine1210" x1="0" y1="0" x2="272"
                                                                        y2="0" stroke-dasharray="0" stroke-width="0"
                                                                        class="apexcharts-ycrosshairs-hidden"></line>
                                                                </g>
                                                                <g id="SvgjsG1189" class="apexcharts-annotations"></g>
                                                            </svg>
                                                            <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(114, 103, 239);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(132, 123, 241);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(151, 143, 243);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(169, 162, 245);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="apexcharts-tooltip-series-group"><span
                                                                        class="apexcharts-tooltip-marker"
                                                                        style="background-color: rgb(187, 182, 247);"></span>
                                                                    <div class="apexcharts-tooltip-text"
                                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                                class="apexcharts-tooltip-text-value"></span>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                                class="apexcharts-tooltip-text-z-value"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="resize-triggers">
                                                        <div class="expand-trigger">
                                                            <div style="width: 456px; height: 264px;"></div>
                                                        </div>
                                                        <div class="contract-trigger"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="card prod-p-card bg-primary background-pattern-white">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-0">
                                                        <div class="col">
                                                            <h6 class="m-b-5 text-white">My Awards</h6>
                                                            <h3 class="m-b-0 text-white">
                                                                0 </h3>
                                                        </div>
                                                        <div class="col-auto"> <i
                                                                class="fas fa-dollar-sign text-white"></i> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="card prod-p-card background-pattern">
                                                <div class="card-body">
                                                    <div class="row align-items-center m-b-0">
                                                        <div class="col">
                                                            <h6 class="m-b-5">Total Assets</h6>
                                                            <h3 class="m-b-0">
                                                                0 </h3>
                                                        </div>
                                                        <div class="col-auto"> <i class="fas fa-tags text-primary"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-xl-12 col-md-12">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h6>Ticket Priority</h6>
                                                    <div class="row d-flex justify-content-center align-items-center">
                                                        <div class="col">
                                                            <div id="staff-ticket-priority-chart"
                                                                style="min-height: 172.7px;">
                                                                <div id="apexchartssycpj23d"
                                                                    class="apexcharts-canvas apexchartssycpj23d apexcharts-theme-light"
                                                                    style="width: 425px; height: 172.7px;"><svg
                                                                        id="SvgjsSvg1211" width="425"
                                                                        height="172.70000000000002"
                                                                        xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        xmlns:svgjs="http://svgjs.com/svgjs"
                                                                        class="apexcharts-svg" xmlns:data="ApexChartsNS"
                                                                        transform="translate(0, 0)"
                                                                        style="background: transparent;">
                                                                        <foreignObject x="0" y="0" width="425"
                                                                            height="172.70000000000002">
                                                                            <div class="apexcharts-legend apexcharts-align-center position-right"
                                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                                style="position: absolute; left: auto; top: 70px; right: 5px;">
                                                                                <div class="apexcharts-legend-series"
                                                                                    rel="1" data:collapsed="false"
                                                                                    style="margin: 2px 5px;"><span
                                                                                        class="apexcharts-legend-marker"
                                                                                        rel="1" data:collapsed="false"
                                                                                        style="background: rgb(255, 162, 29); color: rgb(255, 162, 29); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                        class="apexcharts-legend-text"
                                                                                        rel="1" i="0"
                                                                                        data:default-text="Low"
                                                                                        data:collapsed="false"
                                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Low</span>
                                                                                </div>
                                                                                <div class="apexcharts-legend-series"
                                                                                    rel="2" data:collapsed="false"
                                                                                    style="margin: 2px 5px;"><span
                                                                                        class="apexcharts-legend-marker"
                                                                                        rel="2" data:collapsed="false"
                                                                                        style="background: rgb(255, 177, 66); color: rgb(255, 177, 66); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                        class="apexcharts-legend-text"
                                                                                        rel="2" i="1"
                                                                                        data:default-text="Medium"
                                                                                        data:collapsed="false"
                                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Medium</span>
                                                                                </div>
                                                                                <div class="apexcharts-legend-series"
                                                                                    rel="3" data:collapsed="false"
                                                                                    style="margin: 2px 5px;"><span
                                                                                        class="apexcharts-legend-marker"
                                                                                        rel="3" data:collapsed="false"
                                                                                        style="background: rgb(255, 192, 102); color: rgb(255, 192, 102); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                        class="apexcharts-legend-text"
                                                                                        rel="3" i="2"
                                                                                        data:default-text="High"
                                                                                        data:collapsed="false"
                                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">High</span>
                                                                                </div>
                                                                                <div class="apexcharts-legend-series"
                                                                                    rel="4" data:collapsed="false"
                                                                                    style="margin: 2px 5px;"><span
                                                                                        class="apexcharts-legend-marker"
                                                                                        rel="4" data:collapsed="false"
                                                                                        style="background: rgb(255, 207, 139); color: rgb(255, 207, 139); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                                        class="apexcharts-legend-text"
                                                                                        rel="4" i="3"
                                                                                        data:default-text="Critical"
                                                                                        data:collapsed="false"
                                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Critical</span>
                                                                                </div>
                                                                            </div>

                                                                        </foreignObject>
                                                                        <g id="SvgjsG1213"
                                                                            class="apexcharts-inner apexcharts-graphical"
                                                                            transform="translate(22, 0)">
                                                                            <defs id="SvgjsDefs1212">
                                                                                <clipPath id="gridRectMasksycpj23d">
                                                                                    <rect id="SvgjsRect1215" width="296"
                                                                                        height="172" x="-3" y="-1"
                                                                                        rx="0" ry="0" opacity="1"
                                                                                        stroke-width="0" stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                                <clipPath
                                                                                    id="gridRectMarkerMasksycpj23d">
                                                                                    <rect id="SvgjsRect1216" width="294"
                                                                                        height="174" x="-2" y="-2"
                                                                                        rx="0" ry="0" opacity="1"
                                                                                        stroke-width="0" stroke="none"
                                                                                        stroke-dasharray="0"
                                                                                        fill="#fff"></rect>
                                                                                </clipPath>
                                                                            </defs>
                                                                            <g id="SvgjsG1217" class="apexcharts-pie">
                                                                                <g id="SvgjsG1218"
                                                                                    transform="translate(0, 0) scale(1)">
                                                                                    <g id="SvgjsG1219"
                                                                                        class="apexcharts-slices">
                                                                                        <g id="SvgjsG1220"
                                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                                            seriesName="Low" rel="1"
                                                                                            data:realIndex="0">
                                                                                            <path id="SvgjsPath1221"
                                                                                                d="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                fill="rgba(255,162,29,1)"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1"
                                                                                                stroke-linecap="butt"
                                                                                                stroke-width="2"
                                                                                                stroke-dasharray="0"
                                                                                                class="apexcharts-pie-area apexcharts-pie-slice-0"
                                                                                                index="0" j="0"
                                                                                                data:angle="0"
                                                                                                data:startAngle="0"
                                                                                                data:strokeWidth="2"
                                                                                                data:value="0"
                                                                                                data:pathOrig="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                stroke="#ffffff"></path>
                                                                                        </g>
                                                                                        <g id="SvgjsG1222"
                                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                                            seriesName="Medium" rel="2"
                                                                                            data:realIndex="1">
                                                                                            <path id="SvgjsPath1223"
                                                                                                d="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                fill="rgba(255,177,66,1)"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1"
                                                                                                stroke-linecap="butt"
                                                                                                stroke-width="2"
                                                                                                stroke-dasharray="0"
                                                                                                class="apexcharts-pie-area apexcharts-pie-slice-1"
                                                                                                index="0" j="1"
                                                                                                data:angle="0"
                                                                                                data:startAngle="0"
                                                                                                data:strokeWidth="2"
                                                                                                data:value="0"
                                                                                                data:pathOrig="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                stroke="#ffffff"></path>
                                                                                        </g>
                                                                                        <g id="SvgjsG1224"
                                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                                            seriesName="High" rel="3"
                                                                                            data:realIndex="2">
                                                                                            <path id="SvgjsPath1225"
                                                                                                d="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                fill="rgba(255,192,102,1)"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1"
                                                                                                stroke-linecap="butt"
                                                                                                stroke-width="2"
                                                                                                stroke-dasharray="0"
                                                                                                class="apexcharts-pie-area apexcharts-pie-slice-2"
                                                                                                index="0" j="2"
                                                                                                data:angle="0"
                                                                                                data:startAngle="0"
                                                                                                data:strokeWidth="2"
                                                                                                data:value="0"
                                                                                                data:pathOrig="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                stroke="#ffffff"></path>
                                                                                        </g>
                                                                                        <g id="SvgjsG1226"
                                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                                            seriesName="Critical"
                                                                                            rel="4" data:realIndex="3">
                                                                                            <path id="SvgjsPath1227"
                                                                                                d="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                fill="rgba(255,207,139,1)"
                                                                                                fill-opacity="1"
                                                                                                stroke-opacity="1"
                                                                                                stroke-linecap="butt"
                                                                                                stroke-width="2"
                                                                                                stroke-dasharray="0"
                                                                                                class="apexcharts-pie-area apexcharts-pie-slice-3"
                                                                                                index="0" j="3"
                                                                                                data:angle="0"
                                                                                                data:startAngle="0"
                                                                                                data:strokeWidth="2"
                                                                                                data:value="0"
                                                                                                data:pathOrig="M 145 8.073170731707307 A 76.92682926829269 76.92682926829269 0 0 1 145 8.073170731707307 L 145 85 L 145 8.073170731707307"
                                                                                                stroke="#ffffff"></path>
                                                                                        </g>
                                                                                    </g>
                                                                                </g>
                                                                            </g>
                                                                            <line id="SvgjsLine1228" x1="0" y1="0"
                                                                                x2="290" y2="0" stroke="#b6b6b6"
                                                                                stroke-dasharray="0" stroke-width="1"
                                                                                class="apexcharts-ycrosshairs"></line>
                                                                            <line id="SvgjsLine1229" x1="0" y1="0"
                                                                                x2="290" y2="0" stroke-dasharray="0"
                                                                                stroke-width="0"
                                                                                class="apexcharts-ycrosshairs-hidden">
                                                                            </line>
                                                                        </g>
                                                                        <g id="SvgjsG1214"
                                                                            class="apexcharts-annotations"></g>
                                                                    </svg>
                                                                    <div
                                                                        class="apexcharts-tooltip apexcharts-theme-dark">
                                                                        <div class="apexcharts-tooltip-series-group">
                                                                            <span class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(255, 162, 29);"></span>
                                                                            <div class="apexcharts-tooltip-text"
                                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                </div>
                                                                                <div class="apexcharts-tooltip-z-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-series-group">
                                                                            <span class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(255, 177, 66);"></span>
                                                                            <div class="apexcharts-tooltip-text"
                                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                </div>
                                                                                <div class="apexcharts-tooltip-z-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-series-group">
                                                                            <span class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(255, 192, 102);"></span>
                                                                            <div class="apexcharts-tooltip-text"
                                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                </div>
                                                                                <div class="apexcharts-tooltip-z-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="apexcharts-tooltip-series-group">
                                                                            <span class="apexcharts-tooltip-marker"
                                                                                style="background-color: rgb(255, 207, 139);"></span>
                                                                            <div class="apexcharts-tooltip-text"
                                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                                <div class="apexcharts-tooltip-y-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                                </div>
                                                                                <div class="apexcharts-tooltip-z-group">
                                                                                    <span
                                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="resize-triggers">
                                                                <div class="expand-trigger">
                                                                    <div style="width: 456px; height: 174px;"></div>
                                                                </div>
                                                                <div class="contract-trigger"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-md-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card prod-p-card bg-success background-pattern-white">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-0">
                                                <div class="col">
                                                    <h6 class="m-b-5 text-white">Expense Claim</h6>
                                                    <h3 class="m-b-0 text-white">
                                                        ₹0.00 </h3>
                                                </div>
                                                <div class="col-auto"> <i class="fas fa-dollar-sign text-white"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="card prod-p-card background-pattern">
                                        <div class="card-body">
                                            <div class="row align-items-center m-b-0">
                                                <div class="col">
                                                    <h6 class="m-b-5">My Leave</h6>
                                                    <h3 class="m-b-0">
                                                        0 </h3>
                                                </div>
                                                <div class="col-auto"> <i class="fas fa-tags text-primary"></i> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>My Payroll monthly report</h5>
                                </div>
                                <div class="card-body" style="position: relative;">
                                    <div class="row pb-2">
                                        <div class="col-auto m-b-10">
                                            <h3 class="mb-1">
                                                ₹0.00 </h3>
                                            <span>Total</span>
                                        </div>
                                        <div class="col-auto m-b-10">
                                            <h3 class="mb-1">
                                                ₹0.00 </h3>
                                            <span>This Month</span>
                                        </div>
                                    </div>
                                    <div id="staff-payroll-chart" style="min-height: 405px;">
                                        <div id="apexcharts6rzmuver"
                                            class="apexcharts-canvas apexcharts6rzmuver apexcharts-theme-light apexcharts-zoomable"
                                            style="width: 425px; height: 390px;"><svg id="SvgjsSvg1257" width="425"
                                                height="390" xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                style="background: transparent;">
                                                <g id="SvgjsG1259" class="apexcharts-inner apexcharts-graphical"
                                                    transform="translate(62.59090909090909, 30)">
                                                    <defs id="SvgjsDefs1258">
                                                        <clipPath id="gridRectMask6rzmuver">
                                                            <rect id="SvgjsRect1266" width="379.703125"
                                                                height="295.71275541178386" x="-19.794034090909093"
                                                                y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0"
                                                                stroke="none" stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask6rzmuver">
                                                            <rect id="SvgjsRect1267" width="344.1150568181818"
                                                                height="296.71275541178386" x="-2" y="-2" rx="0" ry="0"
                                                                opacity="1" stroke-width="0" stroke="none"
                                                                stroke-dasharray="0" fill="#fff"></rect>
                                                        </clipPath>
                                                    </defs>
                                                    <line id="SvgjsLine1265" x1="0" y1="0" x2="0"
                                                        y2="292.71275541178386" stroke="#b6b6b6" stroke-dasharray="3"
                                                        class="apexcharts-xcrosshairs" x="0" y="0" width="1"
                                                        height="292.71275541178386" fill="#b1b9c4" filter="none"
                                                        fill-opacity="0.9" stroke-width="1"></line>
                                                    <g id="SvgjsG1283" class="apexcharts-xaxis"
                                                        transform="translate(0, 0)">
                                                        <g id="SvgjsG1284" class="apexcharts-xaxis-texts-g"
                                                            transform="translate(0, -10)"><text id="SvgjsText1286"
                                                                font-family="Helvetica, Arial, sans-serif" x="0"
                                                                y="315.71275541178386" text-anchor="end"
                                                                dominant-baseline="auto" font-size="12px"
                                                                font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 1.15625 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1287">Jun 2022</tspan>
                                                                <title>Jun 2022</title>
                                                            </text><text id="SvgjsText1289"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="30.91955061983471" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 32.080684661865234 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1290">May 2022</tspan>
                                                                <title>May 2022</title>
                                                            </text><text id="SvgjsText1292"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="61.83910123966941" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 62.50218963623047 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1293">Apr 2022</tspan>
                                                                <title>Apr 2022</title>
                                                            </text><text id="SvgjsText1295"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="92.75865185950411" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 93.91783142089844 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1296">Mar 2022</tspan>
                                                                <title>Mar 2022</title>
                                                            </text><text id="SvgjsText1298"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="123.67820247933884" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 124.83543395996094 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1299">Feb 2022</tspan>
                                                                <title>Feb 2022</title>
                                                            </text><text id="SvgjsText1301"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="154.59775309917353" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 155.75399780273438 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1302">Jan 2022</tspan>
                                                                <title>Jan 2022</title>
                                                            </text><text id="SvgjsText1304"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="185.51730371900823" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 186.51730346679688 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1305">Dec 2021</tspan>
                                                                <title>Dec 2021</title>
                                                            </text><text id="SvgjsText1307"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="216.43685433884292" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 217.43685913085938 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1308">Nov 2021</tspan>
                                                                <title>Nov 2021</title>
                                                            </text><text id="SvgjsText1310"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="247.35640495867762" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 248.35641479492188 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1311">Oct 2021</tspan>
                                                                <title>Oct 2021</title>
                                                            </text><text id="SvgjsText1313"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="278.2759555785123" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 279.2759704589844 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1314">Sep 2021</tspan>
                                                                <title>Sep 2021</title>
                                                            </text><text id="SvgjsText1316"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="309.195506198347" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 309.69549560546875 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1317">Aug 2021</tspan>
                                                                <title>Aug 2021</title>
                                                            </text><text id="SvgjsText1319"
                                                                font-family="Helvetica, Arial, sans-serif"
                                                                x="340.1150568181817" y="315.71275541178386"
                                                                text-anchor="end" dominant-baseline="auto"
                                                                font-size="12px" font-weight="400" fill="#373d3f"
                                                                class="apexcharts-text apexcharts-xaxis-label "
                                                                style="font-family: Helvetica, Arial, sans-serif;"
                                                                transform="rotate(-45 341.11505126953125 310.7127685546875)">
                                                                <tspan id="SvgjsTspan1320">Jul 2021</tspan>
                                                                <title>Jul 2021</title>
                                                            </text></g>
                                                        <line id="SvgjsLine1321" x1="-16.294034090909093"
                                                            y1="293.71275541178386" x2="356.4090909090909"
                                                            y2="293.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" stroke-width="1"></line>
                                                    </g>
                                                    <g id="SvgjsG1336" class="apexcharts-grid">
                                                        <g id="SvgjsG1337" class="apexcharts-gridlines-horizontal">
                                                            <line id="SvgjsLine1351" x1="-16.294034090909093" y1="0"
                                                                x2="356.4090909090909" y2="0" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1352" x1="-16.294034090909093"
                                                                y1="58.54255108235677" x2="356.4090909090909"
                                                                y2="58.54255108235677" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1353" x1="-16.294034090909093"
                                                                y1="117.08510216471355" x2="356.4090909090909"
                                                                y2="117.08510216471355" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1354" x1="-16.294034090909093"
                                                                y1="175.62765324707033" x2="356.4090909090909"
                                                                y2="175.62765324707033" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1355" x1="-16.294034090909093"
                                                                y1="234.1702043294271" x2="356.4090909090909"
                                                                y2="234.1702043294271" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                            <line id="SvgjsLine1356" x1="-16.294034090909093"
                                                                y1="292.71275541178386" x2="356.4090909090909"
                                                                y2="292.71275541178386" stroke="#e0e0e0"
                                                                stroke-dasharray="0" class="apexcharts-gridline"></line>
                                                        </g>
                                                        <g id="SvgjsG1338" class="apexcharts-gridlines-vertical"></g>
                                                        <line id="SvgjsLine1339" x1="0" y1="293.71275541178386" x2="0"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1340" x1="30.91955061983471"
                                                            y1="293.71275541178386" x2="30.91955061983471"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1341" x1="61.83910123966942"
                                                            y1="293.71275541178386" x2="61.83910123966942"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1342" x1="92.75865185950413"
                                                            y1="293.71275541178386" x2="92.75865185950413"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1343" x1="123.67820247933884"
                                                            y1="293.71275541178386" x2="123.67820247933884"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1344" x1="154.59775309917353"
                                                            y1="293.71275541178386" x2="154.59775309917353"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1345" x1="185.51730371900823"
                                                            y1="293.71275541178386" x2="185.51730371900823"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1346" x1="216.43685433884292"
                                                            y1="293.71275541178386" x2="216.43685433884292"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1347" x1="247.35640495867762"
                                                            y1="293.71275541178386" x2="247.35640495867762"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1348" x1="278.2759555785123"
                                                            y1="293.71275541178386" x2="278.2759555785123"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1349" x1="309.195506198347"
                                                            y1="293.71275541178386" x2="309.195506198347"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1350" x1="340.1150568181817"
                                                            y1="293.71275541178386" x2="340.1150568181817"
                                                            y2="299.71275541178386" stroke="#e0e0e0"
                                                            stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                                        <line id="SvgjsLine1358" x1="0" y1="292.71275541178386"
                                                            x2="340.1150568181818" y2="292.71275541178386"
                                                            stroke="transparent" stroke-dasharray="0"></line>
                                                        <line id="SvgjsLine1357" x1="0" y1="1" x2="0"
                                                            y2="292.71275541178386" stroke="transparent"
                                                            stroke-dasharray="0"></line>
                                                    </g>
                                                    <g id="SvgjsG1268"
                                                        class="apexcharts-bar-series apexcharts-plot-series">
                                                        <g id="SvgjsG1269" class="apexcharts-series" rel="1"
                                                            seriesName="Payroll" data:realIndex="0">
                                                            <path id="SvgjsPath1271"
                                                                d="M -7.729887654958677 292.71275541178386L -7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M -7.729887654958677 292.71275541178386L -7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386z"
                                                                pathFrom="M -7.729887654958677 292.71275541178386L -7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L 7.729887654958677 292.71275541178386L -7.729887654958677 292.71275541178386"
                                                                cy="292.71275541178386" cx="7.729887654958677" j="0"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1272"
                                                                d="M 23.18966296487603 292.71275541178386L 23.18966296487603 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 23.18966296487603 292.71275541178386L 23.18966296487603 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386z"
                                                                pathFrom="M 23.18966296487603 292.71275541178386L 23.18966296487603 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 38.64943827479338 292.71275541178386L 23.18966296487603 292.71275541178386"
                                                                cy="292.71275541178386" cx="38.64943827479338" j="1"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1273"
                                                                d="M 54.109213584710744 292.71275541178386L 54.109213584710744 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 54.109213584710744 292.71275541178386L 54.109213584710744 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386z"
                                                                pathFrom="M 54.109213584710744 292.71275541178386L 54.109213584710744 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 69.56898889462809 292.71275541178386L 54.109213584710744 292.71275541178386"
                                                                cy="292.71275541178386" cx="69.56898889462809" j="2"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1274"
                                                                d="M 85.02876420454545 292.71275541178386L 85.02876420454545 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 85.02876420454545 292.71275541178386L 85.02876420454545 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386z"
                                                                pathFrom="M 85.02876420454545 292.71275541178386L 85.02876420454545 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 100.48853951446281 292.71275541178386L 85.02876420454545 292.71275541178386"
                                                                cy="292.71275541178386" cx="100.48853951446281" j="3"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1275"
                                                                d="M 115.94831482438016 292.71275541178386L 115.94831482438016 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 115.94831482438016 292.71275541178386L 115.94831482438016 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386z"
                                                                pathFrom="M 115.94831482438016 292.71275541178386L 115.94831482438016 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 131.4080901342975 292.71275541178386L 115.94831482438016 292.71275541178386"
                                                                cy="292.71275541178386" cx="131.4080901342975" j="4"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1276"
                                                                d="M 146.86786544421486 292.71275541178386L 146.86786544421486 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 146.86786544421486 292.71275541178386L 146.86786544421486 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386z"
                                                                pathFrom="M 146.86786544421486 292.71275541178386L 146.86786544421486 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 162.3276407541322 292.71275541178386L 146.86786544421486 292.71275541178386"
                                                                cy="292.71275541178386" cx="162.3276407541322" j="5"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1277"
                                                                d="M 177.78741606404958 292.71275541178386L 177.78741606404958 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 177.78741606404958 292.71275541178386L 177.78741606404958 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386z"
                                                                pathFrom="M 177.78741606404958 292.71275541178386L 177.78741606404958 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 193.24719137396693 292.71275541178386L 177.78741606404958 292.71275541178386"
                                                                cy="292.71275541178386" cx="193.24719137396693" j="6"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1278"
                                                                d="M 208.70696668388427 292.71275541178386L 208.70696668388427 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 208.70696668388427 292.71275541178386L 208.70696668388427 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386z"
                                                                pathFrom="M 208.70696668388427 292.71275541178386L 208.70696668388427 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 224.16674199380162 292.71275541178386L 208.70696668388427 292.71275541178386"
                                                                cy="292.71275541178386" cx="224.16674199380162" j="7"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1279"
                                                                d="M 239.626517303719 292.71275541178386L 239.626517303719 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 239.626517303719 292.71275541178386L 239.626517303719 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386z"
                                                                pathFrom="M 239.626517303719 292.71275541178386L 239.626517303719 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 255.08629261363635 292.71275541178386L 239.626517303719 292.71275541178386"
                                                                cy="292.71275541178386" cx="255.08629261363635" j="8"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1280"
                                                                d="M 270.54606792355366 292.71275541178386L 270.54606792355366 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 270.54606792355366 292.71275541178386L 270.54606792355366 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386z"
                                                                pathFrom="M 270.54606792355366 292.71275541178386L 270.54606792355366 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 286.005843233471 292.71275541178386L 270.54606792355366 292.71275541178386"
                                                                cy="292.71275541178386" cx="286.005843233471" j="9"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1281"
                                                                d="M 301.46561854338836 292.71275541178386L 301.46561854338836 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 301.46561854338836 292.71275541178386L 301.46561854338836 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386z"
                                                                pathFrom="M 301.46561854338836 292.71275541178386L 301.46561854338836 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 316.9253938533057 292.71275541178386L 301.46561854338836 292.71275541178386"
                                                                cy="292.71275541178386" cx="316.9253938533057" j="10"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                            <path id="SvgjsPath1282"
                                                                d="M 332.3851691632231 292.71275541178386L 332.3851691632231 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386z"
                                                                fill="none" fill-opacity="1" stroke-opacity="1"
                                                                stroke-linecap="butt" stroke-width="0"
                                                                stroke-dasharray="0" class="apexcharts-bar-area"
                                                                index="0" clip-path="url(#gridRectMask6rzmuver)"
                                                                pathTo="M 332.3851691632231 292.71275541178386L 332.3851691632231 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386z"
                                                                pathFrom="M 332.3851691632231 292.71275541178386L 332.3851691632231 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 347.84494447314046 292.71275541178386L 332.3851691632231 292.71275541178386"
                                                                cy="292.71275541178386" cx="347.84494447314046" j="11"
                                                                barHeight="0" barWidth="15.459775309917354"></path>
                                                        </g>
                                                        <g id="SvgjsG1270" class="apexcharts-datalabels"
                                                            data:realIndex="0"></g>
                                                    </g>
                                                    <line id="SvgjsLine1359" x1="-16.294034090909093" y1="0"
                                                        x2="356.4090909090909" y2="0" stroke="#b6b6b6"
                                                        stroke-dasharray="0" stroke-width="1"
                                                        class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine1360" x1="-16.294034090909093" y1="0"
                                                        x2="356.4090909090909" y2="0" stroke-dasharray="0"
                                                        stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                                    <g id="SvgjsG1361" class="apexcharts-yaxis-annotations"></g>
                                                    <g id="SvgjsG1362" class="apexcharts-xaxis-annotations"></g>
                                                    <g id="SvgjsG1363" class="apexcharts-point-annotations"></g>
                                                    <rect id="SvgjsRect1364" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-zoom-rect"></rect>
                                                    <rect id="SvgjsRect1365" width="0" height="0" x="0" y="0" rx="0"
                                                        ry="0" opacity="1" stroke-width="0" stroke="none"
                                                        stroke-dasharray="0" fill="#fefefe"
                                                        class="apexcharts-selection-rect"></rect>
                                                </g>
                                                <rect id="SvgjsRect1264" width="0" height="0" x="0" y="0" rx="0" ry="0"
                                                    opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
                                                    fill="#fefefe"></rect>
                                                <g id="SvgjsG1322" class="apexcharts-yaxis" rel="0"
                                                    transform="translate(12.296875, 0)">
                                                    <g id="SvgjsG1323" class="apexcharts-yaxis-texts-g"><text
                                                            id="SvgjsText1324"
                                                            font-family="Helvetica, Arial, sans-serif" x="20" y="31.5"
                                                            text-anchor="end" dominant-baseline="auto" font-size="11px"
                                                            font-weight="400" fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1325">5.0</tspan>
                                                        </text><text id="SvgjsText1326"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="90.04255108235677" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1327">4.0</tspan>
                                                        </text><text id="SvgjsText1328"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="148.58510216471353" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1329">3.0</tspan>
                                                        </text><text id="SvgjsText1330"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="207.1276532470703" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1331">2.0</tspan>
                                                        </text><text id="SvgjsText1332"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="265.67020432942707" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1333">1.0</tspan>
                                                        </text><text id="SvgjsText1334"
                                                            font-family="Helvetica, Arial, sans-serif" x="20"
                                                            y="324.21275541178386" text-anchor="end"
                                                            dominant-baseline="auto" font-size="11px" font-weight="400"
                                                            fill="#373d3f"
                                                            class="apexcharts-text apexcharts-yaxis-label "
                                                            style="font-family: Helvetica, Arial, sans-serif;">
                                                            <tspan id="SvgjsTspan1335">0.0</tspan>
                                                        </text></g>
                                                </g>
                                                <g id="SvgjsG1260" class="apexcharts-annotations"></g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                            <div class="apexcharts-tooltip apexcharts-theme-light">
                                                <div class="apexcharts-tooltip-title"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                                <div class="apexcharts-tooltip-series-group"><span
                                                        class="apexcharts-tooltip-marker"
                                                        style="background-color: rgb(114, 103, 239);"></span>
                                                    <div class="apexcharts-tooltip-text"
                                                        style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                        <div class="apexcharts-tooltip-y-group"><span
                                                                class="apexcharts-tooltip-text-label"></span><span
                                                                class="apexcharts-tooltip-text-value"></span></div>
                                                        <div class="apexcharts-tooltip-z-group"><span
                                                                class="apexcharts-tooltip-text-z-label"></span><span
                                                                class="apexcharts-tooltip-text-z-value"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
                                                <div class="apexcharts-xaxistooltip-text"
                                                    style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                </div>
                                            </div>
                                            <div
                                                class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
                                                <div class="apexcharts-yaxistooltip-text"></div>
                                            </div>
                                            <div class="apexcharts-toolbar" style="top: 0px; right: 3px;">
                                                <div class="apexcharts-zoomin-icon" title="Zoom In"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="apexcharts-zoomout-icon" title="Zoom Out"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                        <path
                                                            d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
                                                        </path>
                                                    </svg>
                                                </div>
                                                <div class="apexcharts-zoom-icon apexcharts-selected"
                                                    title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg"
                                                        fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                                                        <path
                                                            d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                                        </path>
                                                        <path d="M0 0h24v24H0V0z" fill="none"></path>
                                                        <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                                                    </svg></div>
                                                <div class="apexcharts-pan-icon" title="Panning"><svg
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000"
                                                        height="24" viewBox="0 0 24 24" width="24">
                                                        <defs>
                                                            <path d="M0 0h24v24H0z" id="a"></path>
                                                        </defs>
                                                        <clipPath id="b">
                                                            <use overflow="visible" xlink:href="#a"></use>
                                                        </clipPath>
                                                        <path clip-path="url(#b)"
                                                            d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z">
                                                        </path>
                                                    </svg></div>
                                                <div class="apexcharts-reset-icon" title="Reset Zoom"><svg
                                                        fill="#000000" height="24" viewBox="0 0 24 24" width="24"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                                                        <path d="M0 0h24v24H0z" fill="none"></path>
                                                    </svg></div>
                                                <!-- <div class="apexcharts-menu-icon" title="Menu"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24">
                                                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                        <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                    </svg></div>
                                                <div class="apexcharts-menu">
                                                    <div class="apexcharts-menu-item exportSVG" title="Download SVG">
                                                        Download SVG</div>
                                                    <div class="apexcharts-menu-item exportPNG" title="Download PNG">
                                                        Download PNG</div>
                                                    <div class="apexcharts-menu-item exportCSV" title="Download CSV">
                                                        Download CSV</div>
                                                </div> -->
                                                <div class="dropdown">

                                                    <!--Trigger-->
                                                
                                                    <a  type="button" id="dropdownMenu2" class="apexcharts-menu-icon" title="Menu" data-toggle="dropdown"
                                                       aria-haspopup="true" aria-expanded="false"><svg
                                                       xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                       viewBox="0 0 24 24">
                                                       <path fill="none" d="M0 0h24v24H0V0z"></path>
                                                       <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                                                   </svg></i></a>
                                                
                                                
                                                    <!--Menu-->
                                                    <div class="dropdown-menu dropdown-primary ">
                                                      <a class="dropdown-item apexcharts-menu-item exportSVG" href="#" title="Download SVG">
                                                        Download SVG</a>
                                                      <a class="dropdown-item apexcharts-menu-item exportPNG" href="#" title="Download PNG">
                                                        Download PNG</a>
                                                      <a class="dropdown-item apexcharts-menu-item exportCSV" href="#" title="Download CSV">
                                                        Download CSV</a>
                                                    </div>
                                                  </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 476px; height: 528px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <h6>Projects Status</h6>
                                    <div class="row d-flex justify-content-center align-items-center">
                                        <div class="col">
                                            <div id="staff-project-status-chart" style="min-height: 267.7px;">
                                                <div id="apexcharts82utpl24"
                                                    class="apexcharts-canvas apexcharts82utpl24 apexcharts-theme-light"
                                                    style="width: 425px; height: 267.7px;"><svg id="SvgjsSvg1230"
                                                        width="425" height="267.7" xmlns="http://www.w3.org/2000/svg"
                                                        version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
                                                        xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                        xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                        style="background: transparent;">
                                                        <foreignObject x="0" y="0" width="425" height="267.7">
                                                            <div class="apexcharts-legend apexcharts-align-center position-right"
                                                                xmlns="http://www.w3.org/1999/xhtml"
                                                                style="position: absolute; left: auto; top: 70px; right: 5px;">
                                                                <div class="apexcharts-legend-series" rel="1"
                                                                    data:collapsed="false" style="margin: 2px 5px;">
                                                                    <span class="apexcharts-legend-marker" rel="1"
                                                                        data:collapsed="false"
                                                                        style="background: rgb(23, 198, 102); color: rgb(23, 198, 102); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                        class="apexcharts-legend-text" rel="1" i="0"
                                                                        data:default-text="Not%20Started"
                                                                        data:collapsed="false"
                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Not
                                                                        Started</span></div>
                                                                <div class="apexcharts-legend-series" rel="2"
                                                                    data:collapsed="false" style="margin: 2px 5px;">
                                                                    <span class="apexcharts-legend-marker" rel="2"
                                                                        data:collapsed="false"
                                                                        style="background: rgb(53, 205, 122); color: rgb(53, 205, 122); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                        class="apexcharts-legend-text" rel="2" i="1"
                                                                        data:default-text="In%20Progress"
                                                                        data:collapsed="false"
                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">In
                                                                        Progress</span></div>
                                                                <div class="apexcharts-legend-series" rel="3"
                                                                    data:collapsed="false" style="margin: 2px 5px;">
                                                                    <span class="apexcharts-legend-marker" rel="3"
                                                                        data:collapsed="false"
                                                                        style="background: rgb(83, 213, 142); color: rgb(83, 213, 142); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                        class="apexcharts-legend-text" rel="3" i="2"
                                                                        data:default-text="Completed"
                                                                        data:collapsed="false"
                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Completed</span>
                                                                </div>
                                                                <div class="apexcharts-legend-series" rel="4"
                                                                    data:collapsed="false" style="margin: 2px 5px;">
                                                                    <span class="apexcharts-legend-marker" rel="4"
                                                                        data:collapsed="false"
                                                                        style="background: rgb(113, 220, 162); color: rgb(113, 220, 162); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                        class="apexcharts-legend-text" rel="4" i="3"
                                                                        data:default-text="Cancelled"
                                                                        data:collapsed="false"
                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Cancelled</span>
                                                                </div>
                                                                <div class="apexcharts-legend-series" rel="5"
                                                                    data:collapsed="false" style="margin: 2px 5px;">
                                                                    <span class="apexcharts-legend-marker" rel="5"
                                                                        data:collapsed="false"
                                                                        style="background: rgb(144, 228, 182); color: rgb(144, 228, 182); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span
                                                                        class="apexcharts-legend-text" rel="5" i="4"
                                                                        data:default-text="On%20Hold"
                                                                        data:collapsed="false"
                                                                        style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">On
                                                                        Hold</span></div>
                                                            </div>
                                                        </foreignObject>
                                                        <g id="SvgjsG1232" class="apexcharts-inner apexcharts-graphical"
                                                            transform="translate(22, 0)">
                                                            <defs id="SvgjsDefs1231">
                                                                <clipPath id="gridRectMask82utpl24">
                                                                    <rect id="SvgjsRect1234" width="278" height="267"
                                                                        x="-3" y="-1" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                                <clipPath id="gridRectMarkerMask82utpl24">
                                                                    <rect id="SvgjsRect1235" width="276" height="269"
                                                                        x="-2" y="-2" rx="0" ry="0" opacity="1"
                                                                        stroke-width="0" stroke="none"
                                                                        stroke-dasharray="0" fill="#fff"></rect>
                                                                </clipPath>
                                                            </defs>
                                                            <g id="SvgjsG1236" class="apexcharts-pie">
                                                                <g id="SvgjsG1237" transform="translate(0, 0) scale(1)">
                                                                    <circle id="SvgjsCircle1238" r="80.12439024390244"
                                                                        cx="136" cy="132.5" fill="transparent"></circle>
                                                                    <g id="SvgjsG1239" class="apexcharts-slices">
                                                                        <g id="SvgjsG1240"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="NotxStarted" rel="1"
                                                                            data:realIndex="0">
                                                                            <path id="SvgjsPath1241"
                                                                                d="M 136 9.231707317073159 A 123.26829268292684 123.26829268292684 0 1 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 1 0 136 52.37560975609756 L 136 9.231707317073159 z"
                                                                                fill="rgba(23,198,102,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-0"
                                                                                index="0" j="0" data:angle="360"
                                                                                data:startAngle="0" data:strokeWidth="2"
                                                                                data:value="2"
                                                                                data:pathOrig="M 136 9.231707317073159 A 123.26829268292684 123.26829268292684 0 1 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 1 0 136 52.37560975609756 L 136 9.231707317073159 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1244"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="InxProgress" rel="2"
                                                                            data:realIndex="1">
                                                                            <path id="SvgjsPath1245"
                                                                                d="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                fill="rgba(53,205,122,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-1"
                                                                                index="0" j="1" data:angle="0"
                                                                                data:startAngle="360"
                                                                                data:strokeWidth="2" data:value="0"
                                                                                data:pathOrig="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1246"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="Completed" rel="3"
                                                                            data:realIndex="2">
                                                                            <path id="SvgjsPath1247"
                                                                                d="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                fill="rgba(83,213,142,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-2"
                                                                                index="0" j="2" data:angle="0"
                                                                                data:startAngle="360"
                                                                                data:strokeWidth="2" data:value="0"
                                                                                data:pathOrig="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1248"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="Cancelled" rel="4"
                                                                            data:realIndex="3">
                                                                            <path id="SvgjsPath1249"
                                                                                d="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                fill="rgba(113,220,162,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-3"
                                                                                index="0" j="3" data:angle="0"
                                                                                data:startAngle="360"
                                                                                data:strokeWidth="2" data:value="0"
                                                                                data:pathOrig="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1250"
                                                                            class="apexcharts-series apexcharts-pie-series"
                                                                            seriesName="OnxHold" rel="5"
                                                                            data:realIndex="4">
                                                                            <path id="SvgjsPath1251"
                                                                                d="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                fill="rgba(144,228,182,1)"
                                                                                fill-opacity="1" stroke-opacity="1"
                                                                                stroke-linecap="butt" stroke-width="2"
                                                                                stroke-dasharray="0"
                                                                                class="apexcharts-pie-area apexcharts-donut-slice-4"
                                                                                index="0" j="4" data:angle="0"
                                                                                data:startAngle="360"
                                                                                data:strokeWidth="2" data:value="0"
                                                                                data:pathOrig="M 135.99999999999997 9.231707317073159 A 123.26829268292684 123.26829268292684 0 0 1 135.9784856244029 9.231709194556615 L 135.9860156558619 52.3756109764618 A 80.12439024390244 80.12439024390244 0 0 0 135.99999999999997 52.37560975609756 L 135.99999999999997 9.231707317073159 z"
                                                                                stroke="#ffffff"></path>
                                                                        </g>
                                                                        <g id="SvgjsG1242"
                                                                            class="apexcharts-datalabels"><text
                                                                                id="SvgjsText1243"
                                                                                font-family="Helvetica, Arial, sans-serif"
                                                                                x="136" y="234.19634146341463"
                                                                                text-anchor="middle"
                                                                                dominant-baseline="auto"
                                                                                font-size="12px" font-weight="600"
                                                                                fill="#ffffff"
                                                                                class="apexcharts-text apexcharts-pie-label"
                                                                                style="font-family: Helvetica, Arial, sans-serif;">100.0%</text>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                                <g id="SvgjsG1252" class="apexcharts-datalabels-group"
                                                                    transform="translate(0, 0) scale(1)"><text
                                                                        id="SvgjsText1253"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="136" y="122.5" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="16px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-datalabel-label"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">Total</text><text
                                                                        id="SvgjsText1254"
                                                                        font-family="Helvetica, Arial, sans-serif"
                                                                        x="136" y="158.5" text-anchor="middle"
                                                                        dominant-baseline="auto" font-size="20px"
                                                                        font-weight="400" fill="#373d3f"
                                                                        class="apexcharts-text apexcharts-datalabel-value"
                                                                        style="font-family: Helvetica, Arial, sans-serif;">2</text>
                                                                </g>
                                                            </g>
                                                            <line id="SvgjsLine1255" x1="0" y1="0" x2="272" y2="0"
                                                                stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                                class="apexcharts-ycrosshairs"></line>
                                                            <line id="SvgjsLine1256" x1="0" y1="0" x2="272" y2="0"
                                                                stroke-dasharray="0" stroke-width="0"
                                                                class="apexcharts-ycrosshairs-hidden"></line>
                                                        </g>
                                                        <g id="SvgjsG1233" class="apexcharts-annotations"></g>
                                                    </svg>
                                                    <div class="apexcharts-tooltip apexcharts-theme-dark">
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(23, 198, 102);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(53, 205, 122);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(83, 213, 142);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(113, 220, 162);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="apexcharts-tooltip-series-group"><span
                                                                class="apexcharts-tooltip-marker"
                                                                style="background-color: rgb(144, 228, 182);"></span>
                                                            <div class="apexcharts-tooltip-text"
                                                                style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                                                <div class="apexcharts-tooltip-y-group"><span
                                                                        class="apexcharts-tooltip-text-label"></span><span
                                                                        class="apexcharts-tooltip-text-value"></span>
                                                                </div>
                                                                <div class="apexcharts-tooltip-z-group"><span
                                                                        class="apexcharts-tooltip-text-z-label"></span><span
                                                                        class="apexcharts-tooltip-text-z-value"></span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="resize-triggers">
                                                <div class="expand-trigger">
                                                    <div style="width: 456px; height: 269px;"></div>
                                                </div>
                                                <div class="contract-trigger"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </section>

            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside>
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->

    </div>
    <!-- ./wrapper -->


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/hrm-Js/apexcharts.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->

    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard2.js"></script>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>




    <script>
        $(".editor").kendoEditor({
            resizable: {
                content: true,
                toolbar: true
            }
        });
    </script>
    <script>
        $('.btn-print-invoice').on('click', function () {
            var link2 = document.createElement('link');
            link2.innerHTML =
                '<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}.page-header{display:none;}</style>';

            document.getElementsByTagName('head')[0].appendChild(link2);
            window.print();
        });
    </script>
</body>

</html>