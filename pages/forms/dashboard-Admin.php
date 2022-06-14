<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} ?>
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
    <!-- BS Stepper -->
    <link rel="stylesheet" href="../../plugins/bs-stepper/css/bs-stepper.min.css">
    <!-- dropzonejs -->
    <link rel="stylesheet" href="../../plugins/dropzone/min/dropzone.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
    <!-- bootstrap -->
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script> -->

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  
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

.flat-card .row-table:first-child {
    border-bottom: 1px solid #f1f1f1;
}
.flat-card .row-table {
    display: table;
    align-items: center;
    table-layout: fixed;
    height: 100%;
    width: 100%;
    margin: 0;
}
.flat-card .row-table > [class*=col-] {
    display: table-cell;
    float: none;
    table-layout: fixed;
    vertical-align: middle;
}
.flat-card .row-table .br {
    border-right: 1px solid #f1f1f1;
}
    </style>


</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
  <?php include("../include/header.php") ?>
      
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

                  <!-- First Row -->
                    <div class="row">
                        <div class="col-sm-3">
                          <div class="card prod-p-card bg-primary background-pattern-white">
                            <div class="card-body">
                              <div class="row align-items-center m-b-0">
                                <div class="col">
                                  <h6 class="m-b-5 text-white">
                                    Total Employees                    </h6>
                                  <h3 class="m-b-0 text-white">
                                    ₹0.00                    </h3>
                                </div>
                                <div class="col-auto"> <i class="fas fa-database text-white"></i> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                          <div class="card prod-p-card background-pattern">
                            <div class="card-body">
                              <div class="row align-items-center m-b-0">
                                <div class="col">
                                  <h6 class="m-b-5">
                                    Total Projects                    </h6>
                                  <h3 class="m-b-0">
                                    2                    </h3>
                                </div>
                                <div class="col-auto"> <i class="fas fa-money-bill-alt text-primary"></i> </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="card prod-p-card background-pattern">
                              <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                  <div class="col">
                                    <h6 class="m-b-5">
                                      Pending Project                </h6>
                                    <h3 class="m-b-0">
                                      3                </h3>
                                  </div>
                                  <div class="col-auto"> <i class="fas fa-money-bill-alt text-primary"></i> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-sm-3">
                            <div class="card prod-p-card bg-primary background-pattern-white">
                              <div class="card-body">
                                <div class="row align-items-center m-b-0">
                                  <div class="col">
                                    <h6 class="m-b-5 text-white">
                                      Close Project                </h6>
                                    <h3 class="m-b-0 text-white">
                                      ₹0.00                </h3>
                                  </div>
                                  <div class="col-auto"> <i class="fas fa-database text-white"></i> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                      </div>

                      <!-- Second Row -->
                      <div class="row">
                        <!-- 0ticket 0open -->
                        <div class="col-md-12">
                        <div class="card px-5">
                            <div class="row">
                              <div class="col-sm-3 card-body prod-p-card br">
                                <div class="row" style="border-right:1px solid #f1f1f1;">
                                  <div class="col-sm-4 mx-0 px-0"> <i class="fa fa-ticket-alt text-primary mb-1 d-block"></i> </div>
                                  <div class="col-sm-8 text-md-center">
                                    <h5>
                                      0              </h5>
                                    <span>
                                    Tickets              </span> </div>
                                </div>
                              </div>
                              <div class="col-sm-3 d-none prod-p-card d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                                <div class="row" style="border-right:1px solid #f1f1f1;">
                                  <div class="col-sm-4"> <i class="fa fa-folder-open text-primary mb-1 d-block"></i> </div>
                                  <div class="col-sm-8 text-md-center">
                                    <h5>
                                      0              </h5>
                                    <span>
                                    Open              </span> </div>
                                </div>
                              </div>
                              <div class="col-sm-3 d-none prod-p-card d-md-table-cell d-lg-table-cell d-xl-table-cell card-body br">
                                <div class="row" style="border-right:1px solid #f1f1f1;">
                                  <div class="col-sm-4"> <i class="fa fa-folder-open text-primary mb-1 d-block"></i> </div>
                                  <div class="col-sm-8 text-md-center">
                                    <h5>
                                      0              </h5>
                                    <span>
                                    Open              </span> </div>
                                </div>
                              </div>
                              <div class="col-sm-3 prod-p-card card-body">
                                <div class="row">
                                  <div class="col-sm-4"> <i class="fa fa-folder text-primary mb-1 d-block"></i> </div>
                                  <div class="col-sm-8 text-md-center">
                                    <h5>
                                      0              </h5>
                                    <span>
                                    Closed              </span> </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                       <!-- #rd Row Payroll monthly report  -->
                       <div class="row">
                        <div class="col-md-12">
                          <div class="card">
                            <div class="card-header">
                              <h5>
                                Payroll monthly report        </h5>
                            </div>
                            <div class="card-body" style="position: relative;">
                              <div class="row pb-2">
                                <div class="col-auto m-b-10">
                                  <h3 class="mb-1">
                                    ₹0.00            </h3>
                                  <span>
                                  Total            </span> </div>
                                <div class="col-auto m-b-10">
                                  <h3 class="mb-1">
                                    ₹0.00            </h3>
                                  <span>
                                  This Month            </span> </div>
                              </div>
                              <div id="erp-payroll-chart" style="min-height: 380px;"><div id="apexchartsw95r36b1" class="apexcharts-canvas apexchartsw95r36b1 apexcharts-theme-light apexcharts-zoomable" style="width: 425px; height: 365px;"><svg id="SvgjsSvg1902" width="425" height="365" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><g id="SvgjsG1904" class="apexcharts-inner apexcharts-graphical" transform="translate(62.59090909090909, 30)"><defs id="SvgjsDefs1903"><clipPath id="gridRectMaskw95r36b1"><rect id="SvgjsRect1911" width="379.703125" height="270.71275541178386" x="-19.794034090909093" y="-1.5" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskw95r36b1"><rect id="SvgjsRect1912" width="344.1150568181818" height="271.71275541178386" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><line id="SvgjsLine1910" x1="0" y1="0" x2="0" y2="267.71275541178386" stroke="#b6b6b6" stroke-dasharray="3" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="267.71275541178386" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><g id="SvgjsG1928" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1929" class="apexcharts-xaxis-texts-g" transform="translate(0, -10)"><text id="SvgjsText1931" font-family="Helvetica, Arial, sans-serif" x="0" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 1.15625 285.7127685546875)"><tspan id="SvgjsTspan1932">Jun 2022</tspan><title>Jun 2022</title></text><text id="SvgjsText1934" font-family="Helvetica, Arial, sans-serif" x="30.91955061983471" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 32.080684661865234 285.7127685546875)"><tspan id="SvgjsTspan1935">May 2022</tspan><title>May 2022</title></text><text id="SvgjsText1937" font-family="Helvetica, Arial, sans-serif" x="61.83910123966941" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 62.50218963623047 285.7127685546875)"><tspan id="SvgjsTspan1938">Apr 2022</tspan><title>Apr 2022</title></text><text id="SvgjsText1940" font-family="Helvetica, Arial, sans-serif" x="92.75865185950411" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 93.91783142089844 285.7127685546875)"><tspan id="SvgjsTspan1941">Mar 2022</tspan><title>Mar 2022</title></text><text id="SvgjsText1943" font-family="Helvetica, Arial, sans-serif" x="123.67820247933884" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 124.83543395996094 285.7127685546875)"><tspan id="SvgjsTspan1944">Feb 2022</tspan><title>Feb 2022</title></text><text id="SvgjsText1946" font-family="Helvetica, Arial, sans-serif" x="154.59775309917353" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 155.75399780273438 285.7127685546875)"><tspan id="SvgjsTspan1947">Jan 2022</tspan><title>Jan 2022</title></text><text id="SvgjsText1949" font-family="Helvetica, Arial, sans-serif" x="185.51730371900823" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 186.51730346679688 285.7127685546875)"><tspan id="SvgjsTspan1950">Dec 2021</tspan><title>Dec 2021</title></text><text id="SvgjsText1952" font-family="Helvetica, Arial, sans-serif" x="216.43685433884292" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 217.43685913085938 285.7127685546875)"><tspan id="SvgjsTspan1953">Nov 2021</tspan><title>Nov 2021</title></text><text id="SvgjsText1955" font-family="Helvetica, Arial, sans-serif" x="247.35640495867762" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 248.35641479492188 285.7127685546875)"><tspan id="SvgjsTspan1956">Oct 2021</tspan><title>Oct 2021</title></text><text id="SvgjsText1958" font-family="Helvetica, Arial, sans-serif" x="278.2759555785123" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 279.2759704589844 285.7127685546875)"><tspan id="SvgjsTspan1959">Sep 2021</tspan><title>Sep 2021</title></text><text id="SvgjsText1961" font-family="Helvetica, Arial, sans-serif" x="309.195506198347" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 309.69549560546875 285.7127685546875)"><tspan id="SvgjsTspan1962">Aug 2021</tspan><title>Aug 2021</title></text><text id="SvgjsText1964" font-family="Helvetica, Arial, sans-serif" x="340.1150568181817" y="290.71275541178386" text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-45 341.11505126953125 285.7127685546875)"><tspan id="SvgjsTspan1965">Jul 2021</tspan><title>Jul 2021</title></text></g><line id="SvgjsLine1966" x1="-16.294034090909093" y1="268.71275541178386" x2="356.4090909090909" y2="268.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1"></line></g><g id="SvgjsG1981" class="apexcharts-grid"><g id="SvgjsG1982" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1996" x1="-16.294034090909093" y1="0" x2="356.4090909090909" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1997" x1="-16.294034090909093" y1="53.54255108235677" x2="356.4090909090909" y2="53.54255108235677" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1998" x1="-16.294034090909093" y1="107.08510216471355" x2="356.4090909090909" y2="107.08510216471355" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine1999" x1="-16.294034090909093" y1="160.62765324707033" x2="356.4090909090909" y2="160.62765324707033" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2000" x1="-16.294034090909093" y1="214.1702043294271" x2="356.4090909090909" y2="214.1702043294271" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line><line id="SvgjsLine2001" x1="-16.294034090909093" y1="267.71275541178386" x2="356.4090909090909" y2="267.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line></g><g id="SvgjsG1983" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1984" x1="0" y1="268.71275541178386" x2="0" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1985" x1="30.91955061983471" y1="268.71275541178386" x2="30.91955061983471" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1986" x1="61.83910123966942" y1="268.71275541178386" x2="61.83910123966942" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1987" x1="92.75865185950413" y1="268.71275541178386" x2="92.75865185950413" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1988" x1="123.67820247933884" y1="268.71275541178386" x2="123.67820247933884" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1989" x1="154.59775309917353" y1="268.71275541178386" x2="154.59775309917353" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1990" x1="185.51730371900823" y1="268.71275541178386" x2="185.51730371900823" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1991" x1="216.43685433884292" y1="268.71275541178386" x2="216.43685433884292" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1992" x1="247.35640495867762" y1="268.71275541178386" x2="247.35640495867762" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1993" x1="278.2759555785123" y1="268.71275541178386" x2="278.2759555785123" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1994" x1="309.195506198347" y1="268.71275541178386" x2="309.195506198347" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1995" x1="340.1150568181817" y1="268.71275541178386" x2="340.1150568181817" y2="274.71275541178386" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine2003" x1="0" y1="267.71275541178386" x2="340.1150568181818" y2="267.71275541178386" stroke="transparent" stroke-dasharray="0"></line><line id="SvgjsLine2002" x1="0" y1="1" x2="0" y2="267.71275541178386" stroke="transparent" stroke-dasharray="0"></line></g><g id="SvgjsG1913" class="apexcharts-bar-series apexcharts-plot-series"><g id="SvgjsG1914" class="apexcharts-series" rel="1" seriesName="Payroll" data:realIndex="0"><path id="SvgjsPath1916" d="M -7.729887654958677 267.71275541178386L -7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M -7.729887654958677 267.71275541178386L -7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386z" pathFrom="M -7.729887654958677 267.71275541178386L -7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L 7.729887654958677 267.71275541178386L -7.729887654958677 267.71275541178386" cy="267.71275541178386" cx="7.729887654958677" j="0" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1917" d="M 23.18966296487603 267.71275541178386L 23.18966296487603 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 23.18966296487603 267.71275541178386L 23.18966296487603 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386z" pathFrom="M 23.18966296487603 267.71275541178386L 23.18966296487603 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 38.64943827479338 267.71275541178386L 23.18966296487603 267.71275541178386" cy="267.71275541178386" cx="38.64943827479338" j="1" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1918" d="M 54.109213584710744 267.71275541178386L 54.109213584710744 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 54.109213584710744 267.71275541178386L 54.109213584710744 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386z" pathFrom="M 54.109213584710744 267.71275541178386L 54.109213584710744 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 69.56898889462809 267.71275541178386L 54.109213584710744 267.71275541178386" cy="267.71275541178386" cx="69.56898889462809" j="2" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1919" d="M 85.02876420454545 267.71275541178386L 85.02876420454545 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 85.02876420454545 267.71275541178386L 85.02876420454545 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386z" pathFrom="M 85.02876420454545 267.71275541178386L 85.02876420454545 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 100.48853951446281 267.71275541178386L 85.02876420454545 267.71275541178386" cy="267.71275541178386" cx="100.48853951446281" j="3" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1920" d="M 115.94831482438016 267.71275541178386L 115.94831482438016 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 115.94831482438016 267.71275541178386L 115.94831482438016 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386z" pathFrom="M 115.94831482438016 267.71275541178386L 115.94831482438016 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 131.4080901342975 267.71275541178386L 115.94831482438016 267.71275541178386" cy="267.71275541178386" cx="131.4080901342975" j="4" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1921" d="M 146.86786544421486 267.71275541178386L 146.86786544421486 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 146.86786544421486 267.71275541178386L 146.86786544421486 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386z" pathFrom="M 146.86786544421486 267.71275541178386L 146.86786544421486 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 162.3276407541322 267.71275541178386L 146.86786544421486 267.71275541178386" cy="267.71275541178386" cx="162.3276407541322" j="5" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1922" d="M 177.78741606404958 267.71275541178386L 177.78741606404958 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 177.78741606404958 267.71275541178386L 177.78741606404958 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386z" pathFrom="M 177.78741606404958 267.71275541178386L 177.78741606404958 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 193.24719137396693 267.71275541178386L 177.78741606404958 267.71275541178386" cy="267.71275541178386" cx="193.24719137396693" j="6" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1923" d="M 208.70696668388427 267.71275541178386L 208.70696668388427 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 208.70696668388427 267.71275541178386L 208.70696668388427 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386z" pathFrom="M 208.70696668388427 267.71275541178386L 208.70696668388427 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 224.16674199380162 267.71275541178386L 208.70696668388427 267.71275541178386" cy="267.71275541178386" cx="224.16674199380162" j="7" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1924" d="M 239.626517303719 267.71275541178386L 239.626517303719 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 239.626517303719 267.71275541178386L 239.626517303719 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386z" pathFrom="M 239.626517303719 267.71275541178386L 239.626517303719 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 255.08629261363635 267.71275541178386L 239.626517303719 267.71275541178386" cy="267.71275541178386" cx="255.08629261363635" j="8" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1925" d="M 270.54606792355366 267.71275541178386L 270.54606792355366 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 270.54606792355366 267.71275541178386L 270.54606792355366 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386z" pathFrom="M 270.54606792355366 267.71275541178386L 270.54606792355366 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 286.005843233471 267.71275541178386L 270.54606792355366 267.71275541178386" cy="267.71275541178386" cx="286.005843233471" j="9" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1926" d="M 301.46561854338836 267.71275541178386L 301.46561854338836 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 301.46561854338836 267.71275541178386L 301.46561854338836 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386z" pathFrom="M 301.46561854338836 267.71275541178386L 301.46561854338836 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 316.9253938533057 267.71275541178386L 301.46561854338836 267.71275541178386" cy="267.71275541178386" cx="316.9253938533057" j="10" barHeight="0" barWidth="15.459775309917354"></path><path id="SvgjsPath1927" d="M 332.3851691632231 267.71275541178386L 332.3851691632231 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386z" fill="none" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskw95r36b1)" pathTo="M 332.3851691632231 267.71275541178386L 332.3851691632231 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386z" pathFrom="M 332.3851691632231 267.71275541178386L 332.3851691632231 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 347.84494447314046 267.71275541178386L 332.3851691632231 267.71275541178386" cy="267.71275541178386" cx="347.84494447314046" j="11" barHeight="0" barWidth="15.459775309917354"></path></g><g id="SvgjsG1915" class="apexcharts-datalabels" data:realIndex="0"></g></g><line id="SvgjsLine2004" x1="-16.294034090909093" y1="0" x2="356.4090909090909" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine2005" x1="-16.294034090909093" y1="0" x2="356.4090909090909" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG2006" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG2007" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG2008" class="apexcharts-point-annotations"></g><rect id="SvgjsRect2009" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect2010" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g><rect id="SvgjsRect1909" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1967" class="apexcharts-yaxis" rel="0" transform="translate(12.296875, 0)"><g id="SvgjsG1968" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1969" font-family="Helvetica, Arial, sans-serif" x="20" y="31.5" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1970">5.0</tspan></text><text id="SvgjsText1971" font-family="Helvetica, Arial, sans-serif" x="20" y="85.04255108235677" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1972">4.0</tspan></text><text id="SvgjsText1973" font-family="Helvetica, Arial, sans-serif" x="20" y="138.58510216471353" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1974">3.0</tspan></text><text id="SvgjsText1975" font-family="Helvetica, Arial, sans-serif" x="20" y="192.1276532470703" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1976">2.0</tspan></text><text id="SvgjsText1977" font-family="Helvetica, Arial, sans-serif" x="20" y="245.67020432942707" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1978">1.0</tspan></text><text id="SvgjsText1979" font-family="Helvetica, Arial, sans-serif" x="20" y="299.21275541178386" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1980">0.0</tspan></text></g></g><g id="SvgjsG1905" class="apexcharts-annotations"></g></svg><div class="apexcharts-legend"></div><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(114, 103, 239);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div><div class="apexcharts-toolbar" style="top: 0px; right: 3px;"><div class="apexcharts-zoomin-icon" title="Zoom In"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M13 7h-2v4H7v2h4v4h2v-4h4v-2h-4V7zm-1-5C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                      </svg>
                      </div><div class="apexcharts-zoomout-icon" title="Zoom Out"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                          <path d="M0 0h24v24H0z" fill="none"></path>
                          <path d="M7 11v2h10v-2H7zm5-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"></path>
                      </svg>
                      </div><div class="apexcharts-zoom-icon apexcharts-selected" title="Selection Zoom"><svg xmlns="http://www.w3.org/2000/svg" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                          <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                          <path d="M0 0h24v24H0V0z" fill="none"></path>
                          <path d="M12 10h-2v2H9v-2H7V9h2V7h1v2h2v1z"></path>
                      </svg></div><div class="apexcharts-pan-icon" title="Panning"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" height="24" viewBox="0 0 24 24" width="24">
                          <defs>
                              <path d="M0 0h24v24H0z" id="a"></path>
                          </defs>
                          <clipPath id="b">
                              <use overflow="visible" xlink:href="#a"></use>
                          </clipPath>
                          <path clip-path="url(#b)" d="M23 5.5V20c0 2.2-1.8 4-4 4h-7.3c-1.08 0-2.1-.43-2.85-1.19L1 14.83s1.26-1.23 1.3-1.25c.22-.19.49-.29.79-.29.22 0 .42.06.6.16.04.01 4.31 2.46 4.31 2.46V4c0-.83.67-1.5 1.5-1.5S11 3.17 11 4v7h1V1.5c0-.83.67-1.5 1.5-1.5S15 .67 15 1.5V11h1V2.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5V11h1V5.5c0-.83.67-1.5 1.5-1.5s1.5.67 1.5 1.5z"></path>
                      </svg></div><div class="apexcharts-reset-icon" title="Reset Zoom"><svg fill="#000000" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                          <path d="M10 20v-6h4v6h5v-8h3L12 3 2 12h3v8z"></path>
                          <path d="M0 0h24v24H0z" fill="none"></path>
                      </svg></div><div class="apexcharts-menu-icon" title="Menu"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="none" d="M0 0h24v24H0V0z"></path><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path></svg></div><div class="apexcharts-menu"><div class="apexcharts-menu-item exportSVG" title="Download SVG">Download SVG</div><div class="apexcharts-menu-item exportPNG" title="Download PNG">Download PNG</div><div class="apexcharts-menu-item exportCSV" title="Download CSV">Download CSV</div></div></div></div></div>
                            <div class="resize-triggers"><div class="expand-trigger"><div style="width: 476px; height: 503px;"></div></div><div class="contract-trigger"></div></div></div>
                          </div>
                        </div>
                       </div>


                       <!-- 4rt row -->
  <!-- department-wise-chart -->

                       <div class="row">
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                              <h6>
                                Department wise staff            </h6>
                              <div class="row d-flex justify-content-center align-items-center">
                                <div class="col">
                                  <div id="department-wise-chart" style="min-height: 262.7px;"><div id="apexchartsw2d3f3hv" class="apexcharts-canvas apexchartsw2d3f3hv apexcharts-theme-light" style="width: 425px; height: 262.7px;"><svg id="SvgjsSvg1687" width="425" height="262.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="425" height="262.70000000000005"><div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 70px; right: 5px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(68, 157, 209); color: rgb(68, 157, 209); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="DEVELOPER" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">DEVELOPER</span></div></div></foreignObject><g id="SvgjsG1689" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1688"><clipPath id="gridRectMaskw2d3f3hv"><rect id="SvgjsRect1691" width="266" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskw2d3f3hv"><rect id="SvgjsRect1692" width="264" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1693" class="apexcharts-pie"><g id="SvgjsG1694" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1695" r="78.53902439024391" cx="130" cy="130" fill="transparent"></circle><g id="SvgjsG1696" class="apexcharts-slices"><g id="SvgjsG1697" class="apexcharts-series apexcharts-pie-series" seriesName="DEVELOPER" rel="1" data:realIndex="0"><path id="SvgjsPath1698" d="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" fill="rgba(68,157,209,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="360" data:startAngle="0" data:strokeWidth="2" data:value="3" data:pathOrig="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" stroke="#ffffff"></path></g><g id="SvgjsG1699" class="apexcharts-datalabels"><text id="SvgjsText1700" font-family="Helvetica, Arial, sans-serif" x="130" y="229.68414634146342" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" style="font-family: Helvetica, Arial, sans-serif;">100.0%</text></g></g></g><g id="SvgjsG1701" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1702" font-family="Helvetica, Arial, sans-serif" x="130" y="120" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Total</text><text id="SvgjsText1703" font-family="Helvetica, Arial, sans-serif" x="130" y="156" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">3</text></g></g><line id="SvgjsLine1704" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1705" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1690" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(68, 157, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 456px; height: 264px;"></div></div><div class="contract-trigger"></div></div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <!-- Designation wise staff -->
                          <div class="card">
                            <div class="card-body">
                              <h6>
                                Designation wise staff        </h6>
                              <div class="row d-flex justify-content-center align-items-center">
                                <div class="col">
                                  <div id="designation-wise-chart" style="min-height: 262.7px;"><div id="apexchartspbihm8kg" class="apexcharts-canvas apexchartspbihm8kg apexcharts-theme-light" style="width: 425px; height: 262.7px;"><svg id="SvgjsSvg1706" width="425" height="262.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="425" height="262.70000000000005"><div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 70px; right: 5px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(102, 46, 155); color: rgb(102, 46, 155); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="MANAGER" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">MANAGER</span></div></div></foreignObject><g id="SvgjsG1708" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1707"><clipPath id="gridRectMaskpbihm8kg"><rect id="SvgjsRect1710" width="278" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskpbihm8kg"><rect id="SvgjsRect1711" width="276" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1712" class="apexcharts-pie"><g id="SvgjsG1713" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1714" r="78.53902439024391" cx="136" cy="130" fill="transparent"></circle><g id="SvgjsG1715" class="apexcharts-slices"><g id="SvgjsG1716" class="apexcharts-series apexcharts-pie-series" seriesName="MANAGER" rel="1" data:realIndex="0"><path id="SvgjsPath1717" d="M 136 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 135.9789113144622 9.170733547652048 L 135.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 136 51.46097560975609 L 136 9.17073170731706 z" fill="rgba(102,46,155,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="360" data:startAngle="0" data:strokeWidth="2" data:value="3" data:pathOrig="M 136 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 135.9789113144622 9.170733547652048 L 135.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 136 51.46097560975609 L 136 9.17073170731706 z" stroke="#ffffff"></path></g><g id="SvgjsG1718" class="apexcharts-datalabels"><text id="SvgjsText1719" font-family="Helvetica, Arial, sans-serif" x="136" y="229.68414634146342" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" style="font-family: Helvetica, Arial, sans-serif;">100.0%</text></g></g></g><g id="SvgjsG1720" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1721" font-family="Helvetica, Arial, sans-serif" x="136" y="120" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Total</text><text id="SvgjsText1722" font-family="Helvetica, Arial, sans-serif" x="136" y="156" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">3</text></g></g><line id="SvgjsLine1723" x1="0" y1="0" x2="272" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1724" x1="0" y1="0" x2="272" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1709" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(102, 46, 155);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                                <div class="resize-triggers"><div class="expand-trigger"><div style="width: 456px; height: 264px;"></div></div><div class="contract-trigger"></div></div></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        
                       </div>

                       <!-- 5th Row -->

                       <div class="row">
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-header">
                              <h3 class="card-title">Donut Chart</h3>
              
                              <div class="card-tools">
                                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                  <i class="fas fa-minus"></i>
                                </button>
                                <button type="button" class="btn btn-tool" data-card-widget="remove">
                                  <i class="fas fa-times"></i>
                                </button>
                              </div>
                            </div>
                            <div class="card-body">
                              <canvas id="donutChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                            </div>
                            <!-- /.card-body -->
                          </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                  <h3 class="card-title">Pie Chart</h3>
                  
                                  <div class="card-tools">
                                    <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                      <i class="fas fa-minus"></i>
                                    </button>
                                    <button type="button" class="btn btn-tool" data-card-widget="remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                  </div>
                                </div>
                                <div class="card-body">
                                  <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                </div>
                                <!-- /.card-body -->
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
        <div hidden>
          <canvas id="lineChart"></canvas>
          <canvas id="areaChart"></canvas>
          <canvas id="barChart"></canvas>
          <canvas id="stackedBarChart"></canvas>
          </div>
  <?php include("../include/footer.php") ?>


    </div>
    <!-- ./wrapper -->


    <!-- REQUIRED SCRIPTS -->
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <script src="../../plugins/hrm-Js/apexcharts.min.js"></script>
    <script src="../../plugins/hrm-Js/jquery.barrating.min.js"></script>
    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>
    <!-- PAGE PLUGINS -->
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../../dist/js/pages/dashboard2.js"></script>
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
  <script>
    $(function () {
      /* ChartJS
       * -------
       * Here we will create a few charts using ChartJS
       */
  
      //--------------
      //- AREA CHART -
      //--------------
  
      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')
  
      var areaChartData = {
        labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [
          {
            label               : 'Digital Goods',
            backgroundColor     : 'rgba(60,141,188,0.9)',
            borderColor         : 'rgba(60,141,188,0.8)',
            pointRadius          : false,
            pointColor          : '#3b8bba',
            pointStrokeColor    : 'rgba(60,141,188,1)',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data                : [28, 48, 40, 19, 86, 27, 90]
          },
          {
            label               : 'Electronics',
            backgroundColor     : 'rgba(210, 214, 222, 1)',
            borderColor         : 'rgba(210, 214, 222, 1)',
            pointRadius         : false,
            pointColor          : 'rgba(210, 214, 222, 1)',
            pointStrokeColor    : '#c1c7d1',
            pointHighlightFill  : '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data                : [65, 59, 80, 81, 56, 55, 40]
          },
        ]
      }
  
      var areaChartOptions = {
        maintainAspectRatio : false,
        responsive : true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines : {
              display : false,
            }
          }],
          yAxes: [{
            gridLines : {
              display : false,
            }
          }]
        }
      }
  
      // This will get the first returned node in the jQuery collection.
      new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })
  
      //-------------
      //- LINE CHART -
      //--------------
      var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
      var lineChartOptions = $.extend(true, {}, areaChartOptions)
      var lineChartData = $.extend(true, {}, areaChartData)
      lineChartData.datasets[0].fill = false;
      lineChartData.datasets[1].fill = false;
      lineChartOptions.datasetFill = false
  
      var lineChart = new Chart(lineChartCanvas, {
        type: 'line',
        data: lineChartData,
        options: lineChartOptions
      })
  
      //-------------
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
      var donutData        = {
        labels: [
            'Chrome',
            'IE',
            'FireFox',
            'Safari',
            'Opera',
            'Navigator',
        ],
        datasets: [
          {
            data: [700,500,400,600,300,100],
            backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
          }
        ]
      }
      var donutOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(donutChartCanvas, {
        type: 'doughnut',
        data: donutData,
        options: donutOptions
      })
  
      //-------------
      //- PIE CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
      var pieData        = donutData;
      var pieOptions     = {
        maintainAspectRatio : false,
        responsive : true,
      }
      //Create pie or douhnut chart
      // You can switch between pie and douhnut using the method below.
      new Chart(pieChartCanvas, {
        type: 'pie',
        data: pieData,
        options: pieOptions
      })
  
      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp1
      barChartData.datasets[1] = temp0
  
      var barChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        datasetFill             : false
      }
  
      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })
  
      //---------------------
      //- STACKED BAR CHART -
      //---------------------
      var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
      var stackedBarChartData = $.extend(true, {}, barChartData)
  
      var stackedBarChartOptions = {
        responsive              : true,
        maintainAspectRatio     : false,
        scales: {
          xAxes: [{
            stacked: true,
          }],
          yAxes: [{
            stacked: true
          }]
        }
      }
  
      new Chart(stackedBarChartCanvas, {
        type: 'bar',
        data: stackedBarChartData,
        options: stackedBarChartOptions
      })
    })
  </script>
</body>

</html>