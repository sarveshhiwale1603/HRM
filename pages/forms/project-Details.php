<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
$logname=$_SESSION['name']; 
$id=$_GET['projectListId'];
$sql=mysqli_query($conn,"select * from project  where id='$id'");
$row=mysqli_fetch_array($sql);
?>
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
    <!-- DataTables -->
    <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="../../plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../../plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../dist/css/adminlte.css">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="../../plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
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
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.min.css">
    <!-- CodeMirror -->
    <link rel="stylesheet" href="../../plugins/codemirror/codemirror.css">
    <link rel="stylesheet" href="../../plugins/codemirror/theme/monokai.css">
    <!-- SimpleMDE -->
    <link rel="stylesheet" href="../../plugins/simplemde/simplemde.min.css">
    <!-- bootstrap -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
    </script>


    <!-- Ion Slider -->
    <link rel="stylesheet" href="../../plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="../../plugins/bootstrap-slider/css/bootstrap-slider.min.css" />


    <link rel="stylesheet" href="../../plugins/_bar-rating.scss">
    <link rel="stylesheet" href="../../plugins/_peitychart.scss">

    <link rel="stylesheet" href="../../plugins/bars-movie.css">
    <link rel="stylesheet" href="../../plugins/bars-1to10.css">





    <style>
        .hoverTitles {
            color: black;
            cursor: pointer;
            font-weight: 500;
            font-size: small;
        }

        .hoverTitles:hover {
            color: blueviolet !important;
        }
    </style>
    <style>
        .feed-card .card-body .border-feed i {
            position: absolute;
            top: calc(50% - 20px);
            left: 0;
            right: 0;
            text-align: center;
            color: #fff;
            transition: all 0.3s ease-in-out;
        }

        .f-40 {
            font-size: 40px;
        }

        element.style {}

        .feed-card .card-body {
            position: relative;
            padding-left: 15px;
        }

        .p-b-0 {
            padding-bottom: 0px;
        }

        .p-t-0 {
            padding-top: 0px;
        }

        .card-body {
            flex: 1 1 auto;
            min-height: 1px;
            padding: 25px;
        }

        .card {
            box-shadow: 0 2px 6px -1px rgb(0 0 0 / 10%);
            margin-bottom: 30px;
            transition: box-shadow 0.2s ease-in-out;
        }

        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0px solid rgba(0, 0, 0, 0.125);
            border-radius: 4px;
        }
    </style>
    <style>
        .rate {
            float: left;
            height: 46px;
            padding: 0 10px;
        }

        .rate:not(:checked)>input {
            position: absolute;
            top: -9999px;
        }

        .rate:not(:checked)>label {
            float: right;
            width: 1em;
            overflow: hidden;
            white-space: nowrap;
            cursor: pointer;
            font-size: 30px;
            color: #ccc;
        }

        .rate:not(:checked)>label:before {
            content: '= ';
        }

        .rate>input:checked~label {
            color: #ffc700;
        }

        .rate:not(:checked)>label:hover,
        .rate:not(:checked)>label:hover~label {
            color: #deb217;
        }

        .rate>input:checked+label:hover,
        .rate>input:checked+label:hover~label,
        .rate>input:checked~label:hover,
        .rate>input:checked~label:hover~label,
        .rate>label:hover~input:checked~label {
            color: #c59b08;
        }
    </style>
</head>

<body>
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
                                <li class="breadcrumb-item active">Department</li>
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
                        <div class="col-lg-4">
                            <div class="card hdd-right-inner">
                                <div class="card-header">
                                    <h5 class="card-title">Project Details</h5>
                                    <div class="card-tools">
                                        <a href="" data-toggle="tab" aria-expanded="false" class="">
                                            <a href="projects.php" class="btn btn-shadow btn-secondary btn-sm"><i
                                                    class="mr-2 fa fa-edit"></i>Add Project</a>
                                        </a>
                                    </div>
                                </div>
                                <form autocomplete="off" method="post">

                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="progress"> Progress </label>
                                                    <div class="row margin">
                                                        <div class="col-sm-12">
                                                            <input type="hidden" value="<?php echo $id; ?>"
                                                                id="progressid">
                                                            <input id="range_5" type="text" name="range_5"
                                                                value="<?php echo $row['progress'] ?>" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mb-3">
                                                <div class="form-group project-status">
                                                    <label for="status">
                                                        Status <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="br-wrapper br-theme-bars-movie"><select
                                                            class="form-control demo-movie" name="status"
                                                            id="project_status" style="display: none;">
                                                            <option value="<?php echo $row['status'] ?>">
                                                                <?php echo $row['status'] ?> </option>
                                                            <option value="0" selected="">
                                                                Not Started </option>
                                                            <option value="1">
                                                                In Progress </option>
                                                            <option value="2">
                                                                Cancelled </option>
                                                            <option value="3">
                                                                On Hold </option>
                                                            <option value="4">
                                                                Completed </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-5">
                                                <div class="form-group">
                                                    <label for="status">
                                                        Priority <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-control select2" style="width: 100%;"
                                                        id="project_pro">
                                                        <option selected="selected"
                                                            value="<?php echo $row['priority'] ?>">
                                                            <?php echo $row['priority'] ?></option>
                                                        <option>Highest</option>
                                                        <option>High</option>
                                                        <option>Normal</option>
                                                        <option>Low</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-right">
                                        <button type="button" class="btn btn-primary ladda-button"
                                            id="project_details"><span class="ladda-label">
                                                Update Status </span><span class="ladda-spinner"></span></button>
                                    </div>

                                </form>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="bg-light card mb-2">
                                <div class="card-body">
                                    <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                        <li class="nav-item"> <a class="nav-link  active" id="pills-overview-tab"
                                                data-toggle="pill" href="#pills-overview" role="tab"
                                                aria-controls="pills-overview" aria-selected="false">
                                                Overview </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-edit-tab" data-toggle="pill"
                                                href="#pills-edit" role="tab" aria-controls="pills-edit"
                                                aria-selected="false">
                                                Edit </a> </li>
                                        <!-- <li class="nav-item"> <a class="nav-link" id="pills-discussion-tab"
                                                data-toggle="pill" href="#pills-discussion" role="tab"
                                                aria-controls="pills-discussion" aria-selected="false">
                                                Discussion </a> </li> -->
                                        <li class="nav-item"> <a class="nav-link" id="pills-timelogs-tab"
                                                data-toggle="pill" href="#pills-timelogs" role="tab"
                                                aria-controls="pills-timelogs" aria-selected="true">
                                                Time Logs </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-bugs-tab" data-toggle="pill"
                                                href="#pills-bugs" role="tab" aria-controls="pills-bugs"
                                                aria-selected="false">
                                                Bugs </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-tasks-tab"
                                                data-toggle="pill" href="#pills-tasks" role="tab"
                                                aria-controls="pills-tasks" aria-selected="false">
                                                Tasks </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-files-tab"
                                                data-toggle="pill" href="#pills-files" role="tab"
                                                aria-controls="pills-files" aria-selected="false">
                                                Attach files </a> </li>
                                        <li class="nav-item"> <a class="nav-link" id="pills-notes-tab"
                                                data-toggle="pill" href="#pills-notes" role="tab"
                                                aria-controls="pills-notes" aria-selected="false">
                                                Note </a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5><i class="feather icon-lock mr-1"></i>Project :
                                        <?php echo $row['title']; ?></h5>
                                </div>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade  active show" id="pills-overview" role="tabpanel"
                                        aria-labelledby="pills-overview-tab">
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table m-b-0 f-14 b-solid requid-table">
                                                    <tbody class="text-muted">
                                                        <tr>
                                                            <td>Title</td>
                                                            <td><?php echo $row['title']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Client</td>
                                                            <td><?php echo $row['client']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Estimated Hour</td>
                                                            <td><?php echo $row['estimated_hr']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Priority</td>
                                                            <td> <?php echo $row['priority']; ?> </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Start Date</td>
                                                            <td><i class="far fa-calendar-alt"></i>&nbsp;
                                                                <?php echo $row['start_date']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>End Date</td>
                                                            <td><i class="far fa-calendar-alt"></i>&nbsp;
                                                                <?php echo $row['end_date']; ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Team</td>
                                                            <?php
                                                            $emp_code=$row['team'];
                                                            $result_project=mysqli_query($conn,"SELECT * FROM  project left join employee on employee.employee_code=project.team WHERE project.team='$emp_code';");
                                                            while($row_project = mysqli_fetch_array($result_project)){
                                                                echo "<td><img src='image/employee_image/".$row_project['image']."' class='rounded' style='width:50px;height:50px'></td>";
                                                            }
                                                            ?>

                                                        </tr>
                                                        <!-- <tr>
                                                            <td>Total Hours</td>
                                                            <td><?php// echo $row['']; ?></td>
                                                        </tr> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- <div class="m-b-20 m-t-20">
                                                <h6>Associated Goals</h6>
                                                <hr>
                                                <div class="table-responsive">
                                                    <table class="table table-borderless">
                                                        <tbody class="text-muted">
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div> -->
                                            <div class="mb-3">
                                                <h6 class="my-0">Summary</h6>
                                                <hr>
                                                <?php echo $row['summary']; ?>
                                            </div>
                                            <div class="mb-3">
                                                <h6 class="my-0">Description</h6>
                                                <hr>
                                                <?php echo $row['description']; ?>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- EDIT -->

                                    <div class="tab-pane fade" id="pills-edit" role="tabpanel"
                                        aria-labelledby="pills-overview-tab">
                                        <form action="" name="update_project" id="update_project" autocomplete="off"
                                            method="post" accept-charset="utf-8">
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="title">Title <span
                                                                    class="text-danger">*</span></label>
                                                            <input type="hidden" value="<?php echo $id; ?>" id="editid">
                                                            <input class="form-control" placeholder="Title" id="title"
                                                                name="title" type="text"
                                                                value="<?php echo $row['title'] ?>">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="client_id">Client <span
                                                                    class="text-danger">*</span></label>
                                                            <select class="form-control select2" style="width: 100%;"
                                                                id="editclient">
                                                                <?php
                                                             $sql=mysqli_query($conn,"SELECT * FROM manage_client");
                                                             while($dnk=mysqli_fetch_array($sql)){
                                                               echo "<option value='".$dnk['first_name']." ".$dnk['last_name']."'>".$dnk['first_name']." ".$dnk['last_name']."</option>";
                                                             }
                                                            ?>
                                                                <option value="<?php echo $row['client'] ?>"
                                                                    selected="selected" disabled>
                                                                    <?php echo $row['client'] ?></option>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" value="0" name="assigned_to[]">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="budget_hours">Estimated Hour</label>
                                                            <div class="input-group">
                                                                <input class="form-control" placeholder="Estimated Hour"
                                                                    name="budget_hours" id="budget_hours" type="text"
                                                                    value="<?php echo $row['estimated_hr'] ?>">
                                                                <div class="input-group-append"><span
                                                                        class="input-group-text"><i
                                                                            class="fas fa-clock"></i></span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start_date">Start Date <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group ">
                                                                <input class="form-control applied_on"
                                                                    placeholder="Applied On " name="startDate"
                                                                    id="starteditdate" type="date"
                                                                    value="<?php echo $row['start_date']; ?>"
                                                                    data-dtp="dtp_dl6pL">

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="end_date">End Date <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group ">
                                                                <input class="form-control applied_on" id="endeditDate"
                                                                    name="endDate" type="date"
                                                                    value="<?php echo $row['end_date']; ?>"
                                                                    data-dtp="dtp_dl6pL">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="summary">Summary <span
                                                                class="text-danger">*</span></label>
                                                        <textarea class="form-control" placeholder="Summary"
                                                            name="editsummary" id="editsummary" cols="30"
                                                            rows="3"><?php echo $row['summary']; ?></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group" id="employee_ajax">
                                                        <label for="employee">Team</label>
                                                        <select class="form-control" style="width: 100%;" id="editteam">
                                                            <?php
                                                              $emp_code=$row['team'];
                                                              $result_project=mysqli_query($conn,"SELECT * FROM  project left join employee on employee.employee_code=project.team WHERE project.team='$emp_code';");
                                                              while($row_project = mysqli_fetch_array($result_project)){
                                                                  echo "<option value='".$row_project['employee_code']."' selected='true' >".$row_project['fname']." ".$row_project['lname']."</option>";
                                                              }
                                                              ?>
                                                            <?php
                                                               $query=mysqli_query($conn,"select * from employee");
                                                               while($sql=mysqli_fetch_array($query))
                                                               { echo "<option value='".$sql['employee_code']."'>".$sql['fname']." ".$sql['lname']."</option>";
                                                                    }
                                                              ?>


                                                        </select>
                                                    </div>
                                                </div>
                                                <!-- <input type="hidden" value="0" name="associated_goals[]">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="employee">Associated Goals</label>
                                                            <select class="select2" multiple="multiple" data-placeholder="" style="width: 100%;">
                                                                 <option>Vedant</option>
                                                                <option>Naidu</option> 
                                                              
                                                              </select>
                                                        </div>
                                                    </div> -->
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="description">Description</label>
                                                        <textarea class="editdesc" id="summernote">
                                                               <?php echo $row['description']; ?>
                                                              </textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="card-footer text-right">
                                                <button type="button" class="btn btn-primary ladda-button"
                                                    id="updateeditproject"> Update Project</button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                    type="text" name="ciapp_check" value="" /></div>

                                        </form>
                                        
                                    </div>

                                    <!-- DISCUSSION -->
                                    <!-- 

                                    <div class="tab-pane fade" id="pills-discussion" role="tabpanel"  aria-labelledby="pills-discussion-tab">
                                        <div class="card-body task-comment">
                                            <ul class="media-list p-0">
                                            </ul>
                                            <form action="" name="add_discussion" id="add_discussion" autocomplete="off"  method="post" accept-charset="utf-8">
                                                <input type="hidden" name="csrf_token" value="151caa943adbea74b586dda6935a66a3">
                                                <input type="hidden" name="token"  value="Wq0jv-0vl4DUZItXe7Cq7Dn-N_uGlF0Y1syost3-QiU" style="display:none;">
                                                <div class="input-group mb-3">
                                                    <textarea id="summernote1">
                                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                                      </textarea>
                                                </div>
                                                <div class="card-footer text-right">
                                                    <button type="submit" class="btn btn-primary ladda-button"
                                                        data-style="expand-right"><span class="ladda-label">  Add </span><span class="ladda-spinner"></span></button>
                                                </div>
                                                <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""></div>
                                            </form>
                                        </div>
                                    </div> -->

                                    <!-- TIME LOG -->


                                    <div class="tab-pane fade" id="pills-timelogs" role="tabpanel"
                                        aria-labelledby="pills-timelogs-tab">
                                        <form action="" name="add_timelogs" id="add_timelogs" autocomplete="off"
                                            method="post" accept-charset="utf-8">

                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="employee">Employee</label>
                                                            <input type="hidden" value="<?php echo $id; ?>"
                                                                id="timeproid">
                                                            <select class="form-control select2"
                                                                id="employee_time_bugs_name" style="width: 100%;">
                                                                <?php
                                                            $sql=mysqli_query($conn,"SELECT * FROM employee");
                                                            while($dnk=mysqli_fetch_array($sql)){
                                                                echo "<option value='".$dnk['fname']." ".$dnk['lname']."'>".$dnk['fname']." ".$dnk['lname']."</option>";
                                                            }
                                                            ?>

                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>Start Time</label>

                                                            <div class="input-group date" id="timeLogsStartTime"
                                                                data-target-input="nearest">
                                                                <input type="text"
                                                                    class="form-control datetimepicker-input"
                                                                    id="startpro" data-target="#timeLogsStartTime"
                                                                    placeholder="Start Time">
                                                                <div class="input-group-append"
                                                                    data-target="#timeLogsStartTime"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i
                                                                            class="far fa-clock"></i></div>
                                                                </div>
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label>End Time</label>

                                                            <div class="input-group date" id="timeLogsEndTime"
                                                                data-target-input="nearest">
                                                                <input type="text"
                                                                    class="form-control datetimepicker-input"
                                                                    id="endpro" data-target="#timeLogsEndTime"
                                                                    placeholder="End Time">
                                                                <div class="input-group-append"
                                                                    data-target="#timeLogsEndTime"
                                                                    data-toggle="datetimepicker">
                                                                    <div class="input-group-text"><i
                                                                            class="far fa-clock"></i></div>
                                                                </div>
                                                            </div>
                                                            <!-- /.input group -->
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start_date">Start Date <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group ">
                                                                <input type="date" class="form-control "
                                                                    id="timeLogsStartDate" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="start_date">End Date <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="input-group ">
                                                                <input type="date" class="form-control "
                                                                    id="timeLogsEndDate" />

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="summary">Memo <span
                                                                    class="text-danger">*</span></label>
                                                            <textarea class="form-control" placeholder="Memo" id="memo"
                                                                name="memo" cols="30" rows="2"></textarea>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="card-footer text-right">
                                                <button type="button" class="btn btn-primary ladda-button"
                                                    data-style="expand-right" id="time_log_id"><span
                                                        class="ladda-label"> Add Timelog </span><span
                                                        class="ladda-spinner"></span></button>
                                            </div>
                                            <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                    type="text" name="ciapp_check" value=""></div>
                                        </form>
                                        <div class="card user-profile-list">
                                            <div class="card-header">
                                                <h5>
                                                    List All Time Logs </h5>
                                            </div>
                                            <div class="card-body">
                                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                                    <div class="row">
                                                        <div class="col-sm-12" id="display_timelog">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- BUGs -->


                                    <div class="tab-pane fade" id="pills-bugs" role="tabpanel"
                                        aria-labelledby="pills-bugs-tab">
                                        <!--msg-->
                                        <?php $query2=mysqli_query($conn,"select * from Bugs");
while($arra=mysqli_fetch_array($query2)){ ?>
                                        <ul class="media-list" id="bugsclientmessage pt-2">
                                            <li class="media" id="discussion_option_id_1">
                                                <div class="media-left mr-3"> <a href="#!"> <img
                                                            class="img-fluid media-object img-radius comment-img"
                                                            src="http://hrm.tectignis.in/public/uploads/users/thumb/a-sm.jpg"
                                                            alt=""> </a> </div>
                                                <div class="media-body">
                                                    <h6 class="media-heading txt-primary">
                                                        <?php echo $logname; ?> <span class="f-12 text-muted ml-1">
                                                            <?php  
date_default_timezone_set('Asia/Kolkata');
$time_go=strtotime($arra['date']);
$time= strtotime(date( 'd-m-Y h:i:s', time ()));
							$current_time=$time;
							$time_diiference=$current_time - $time_go;
							$seconds=$time_diiference;
							$minutes=round($seconds/60); //value 60 is sec.
							$hours=round($seconds/3600); //value 3600=60min*60sec
							$days=round($seconds/86400);//value 86400 is 24*60*60
							$weeks=round($seconds/604800);//value 604800=7*24*60*60
							$months=round($seconds/2629440);//((365+365+365+365+366)/5/12)*24*60*60
							$years=round($seconds/31553280);//(365+365+365+365+366)/5*24*60*60
							if($seconds<=60){
								$msg="just Now";
							}else if($minutes<=60){
								if($minutes==1){ $msg="one minute ago";}
								else{ $msg="$minutes minutes ago";}
							}else if($hours<=24){
								if($hours==1){ $msg= "an hour ago";}
								else{ $msg= "$hours hrs ago";}
							}else if($days<=7){
								if($days==1){ $msg="yesterday";}
								else{ $msg= "$days days ago";}
							}else if($weeks<=4.3){//4.3=52/12
								if($weeks==1){ $msg="a week ago";}
								else{ $msg="$weeks weeks ago";}
							}else if($months<=12){//4.3=52/12
								if($months==1){ $msg= "a month ago";}
								else{ $msg="$months months ago";}
							}else{
								if($years==1){ $msg="one year ago";}
								else{ $msg= "$years yrs ago";}
							} 
 ?>
                                                            <?php echo $msg; ?> </span></h6>
                                                    <?php echo $arra['bugs']; ?> <div class="mt-2">
                                                        <button class="btn btn-sm btn-primary dnkbugsid"
                                                            data-id='<?php echo $arra['id']; ?>'><i
                                                                class="fas fa-trash-alt text-danger mr-2"></i>Delete</button>
                                                    </div>
                                                </div>
                                            </li>
                                            <hr class="discussion_option_id_1">
                                        </ul>
                                        <?php } ?>
                                        <!--msg-->
                                        <div class="card-body task-comment">
                                            <ul class="media-list p-0">
                                            </ul>
                                            <form name="add_discussion" id="add_discussion" autocomplete="off"
                                                method="post" accept-charset="utf-8">
                                                <div class="input-group mb-3">
                                                    <input type="hidden" value="<?php echo $id; ?>" id="editid">

                                                    <textarea class="bugsdesc" id="summernote2">
                                                        Place <em>some</em> <u>text</u> <strong>here</strong>
                                                      </textarea>
                                                </div>
                                                <div class="card-footer text-right">
                                                    <button type="button" class="btn btn-primary ladda-button"
                                                        id="bugssubmit" data-style="expand-right">Add </button>
                                                </div>
                                                <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                        type="text" name="ciapp_check" value=""></div>
                                            </form>
                                        </div>
                                    </div>



                                    <!-- TASKS -->


                                    <div class="tab-pane fade" id="pills-tasks" role="tabpanel"
                                        aria-labelledby="pills-tasks-tab">
                                        <div class="row m-b-1 animated fadeInRight">
                                        <div class="col-md-12">

                                        <div class="collapse" id="collapseExample">
                                         <div class="card">
                                         <div id="accordion">
                                        <div class="card-header">
                                         <h5 class="card-title">Add New Task</h5>
                                         <div class="card-tools">
                                        <button type="button"  class="btn btn-shadow btn-primary btn-sm" data-bs-toggle="collapse"   href="#collapseExample" role="button" aria-expanded="false"  aria-controls="collapseExample"><i class="mr-2 fa fa-minus"></i>Hide</button>
                                         </div>
                                        </div>
                                        <form action="" autocomplete="off" method="post"
                                                                accept-charset="utf-8">

                                        <div class="card-body">
                                         <div class="row">
                                      <input type="hidden" value="<?php echo $id; ?>"
                                                                            id="taskid">
                                         <div class="col-md-4">
                                         <div class="form-group">
                                         <label for="task_name">Title <span  class="text-danger">*</span></label>
                                         <input class="form-control"  id="tasktitle" placeholder="Title"   name="task_name" type="text"  value="">
                                          </div>
                                         </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                        <label for="start_date">Start Date <span      class="text-danger">*</span></label>
                                         <div class="input-group date" id="taskStartDate" data-target-input="nearest">
                                        <input type="date"  class="form-control datetimepicker-input" id="taskstartdate"       placeholder="Start Date" />
                                        </div>
                                     </div>
                                        </div>
                                        <div class="col-md-4">
                                        <div class="form-group">
                                     <label for="start_date">End Date <span           class="text-danger">*</span></label>
                                     <div class="input-group date"   id="taskEndDate"
                                      data-target-input="nearest">
                                       <input type="text" class="form-control"  placeholder="End Date" id="taskEndDate" />
                                        
                                         </div>
                                         </div>
                                         </div>
                                        <div class="col-md-3">
                                        <div class="form-group">
                                         <label for="task_hour"   class="control-label">Estimated Hour</label>
                                         <div class="input-group date" id="timepicker" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="In Time" id="in_time" data-target="#timepicker" required/>
                                    <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="far fa-clock"></i></div>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                    <div class="form-group" id="project_ajax">
                                    <label for="project_ajax"  class="control-label">Project <span
                                    class="text-danger">*</span></label>
                                    <select class="select2 form-control" data-placeholder="Team" style="width: 100%;" id="taskproject" >
                                    <option selected="selected"> <?php echo $row['title']; ?>  </option>  </select>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="summary">Summary <span class="text-danger">*</span></label>
                                    <textarea class="form-control" placeholder="Summary" name="summary"  cols="30" rows="2"  id="tasksummary"></textarea>
                                    </div>
                                    </div>
                                    <div class="col-md-12">
                                    <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="summernote3" class="desc">                      Place <em>some</em> <u>text</u> <strong>here</strong>
                                    </textarea>
                                    </div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="card-footer text-right">
                                    <button type="reset" class="btn btn-light"  data-bs-toggle="collapse"  href="#collapseExample" role="button"
                                    aria-expanded="false"  aria-controls="collapseExample"> Reset </button>  &nbsp;
                                    <button type="button"  class="btn btn-primary ladda-button"
                                    id="savetask" data-style="expand-right">  Save</button>
                                        </div>
                                        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text"  name="ciapp_check" value=""></div>
                                        </form>
                                        </div>
                                        </div>
                                        </div>

                                                <div class="card user-profile-list">
                                                    <div class="card-header">
                                                        <h5 class="card-title">List All Tasks</h5>
                                                        <div class="card-tools">
                                                            <button type="button"
                                                                class="btn btn-shadow btn-primary btn-sm"
                                                                data-bs-toggle="collapse" href="#collapseExample"
                                                                role="button" aria-expanded="false"
                                                                aria-controls="collapseExample"><i
                                                                    class="mr-2 fa fa-plus"></i>Add New</button>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="box-datatable table-responsive">
                                                            <div id="xin_table_wrapper"
                                                                class="dataTables_wrapper dt-bootstrap4 no-footer">
                                                                <table id="task_Table"
                                                                    class="table table-bordered table-striped dataTable dtr-inline"
                                                                    aria-describedby="task_Table_info">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>TITLE</th>
                                                                            <th>TEAM</th>
                                                                            <th>START DATE</th>
                                                                            <th>END DATE</th>
                                                                            <th>PROGRESS</th>
                                                                    </thead>
                                                                    <tbody>
                                                                    </tbody>
                                                                    <tfoot>

                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- ATTACH FILES -->


                                    <div class="tab-pane fade" id="pills-files" role="tabpanel"
                                        aria-labelledby="pills-files-tab">
                                        <div class="card-body">
                                            <div class="list-group list-group-flush list-pills border-bottom">
                                            </div>
                                            <form action="" name="add_attachment" id="add_attachment" autocomplete="off"
                                                method="post" accept-charset="utf-8">
                                                <input type="hidden" name="csrf_token"
                                                    value="151caa943adbea74b586dda6935a66a3">
                                                <input type="hidden" name="token"
                                                    value="Wq0jv-0vl4DUZItXe7Cq7Dn-N_uGlF0Y1syost3-QiU"
                                                    style="display:none;">
                                                <div class="bg-white">
                                                    <div class="row mt-4">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="task_name">Title <span
                                                                        class="text-danger">*</span></label>
                                                                <input class="form-control" placeholder="Title"
                                                                    name="file_name" type="text" value="">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <fieldset class="form-group">
                                                                    <label for="logo">Attachment <span
                                                                            class="text-danger">*</span></label>
                                                                    <input type="file" class="form-control-file"
                                                                        id="attachment_file" name="attachment_file">
                                                                    <small> Upload files only: gif,png,jpg,jpeg </small>
                                                                </fieldset>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="card-footer text-right">
                                            <button type="submit" class="btn btn-primary ladda-button"
                                                data-style="expand-right"><span class="ladda-label"> Add File
                                                </span><span class="ladda-spinner"></span></button>
                                        </div>
                                        <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                type="text" name="ciapp_check" value=""></div>
                                    </div>

                                    <!-- NOTE -->


                                    <div class="tab-pane fade" id="pills-notes" role="tabpanel"
                                        aria-labelledby="pills-notes-tab">
                                        <div class="card-body task-comment">
                                            <ul class="media-list p-0">
                                            </ul>
                                            <form action="" name="add_note" id="add_note" autocomplete="off"
                                                method="post" accept-charset="utf-8">
                                                <input type="hidden" name="csrf_token"
                                                    value="151caa943adbea74b586dda6935a66a3">
                                                <input type="hidden" name="token"
                                                    value="Wq0jv-0vl4DUZItXe7Cq7Dn-N_uGlF0Y1syost3-QiU"
                                                    style="display:none;">
                                                <div class="input-group mb-3">
                                                    <input type="text" name="description" class="form-control"
                                                        placeholder="Post a Note...">
                                                    <div class="input-group-append">
                                                        <button
                                                            class="btn waves-effect waves-light btn-primary btn-icon ladda-button"
                                                            type="submit" data-style="expand-right"><span
                                                                class="ladda-label"><i
                                                                    class="fa fa-plus"></i></span><span
                                                                class="ladda-spinner"></span></button>
                                                    </div>
                                                </div>
                                                <div style="display:none"><label>Bot Will Fill This Field</label><input
                                                        type="text" name="ciapp_check" value=""></div>
                                            </form>
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
        <?php include("../include/footer.php") ?>
    </div>
    <!-- ./wrapper -->


    <!-- REQUIRED SCRIPTS -->
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.js"></script>

    <!-- PAGE PLUGINS -->
    <!-- jQuery Mapael -->
    <script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
    <script src="../../plugins/raphael/raphael.min.js"></script>
    <script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
    <script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
    <!-- ChartJS -->
    <script src="../../plugins/chart.js/Chart.min.js"></script>

    <script src="../../dist/js/pages/dashboard2.js"></script>
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

    <!-- Select2 -->
    <script src="../../plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap4 Duallistbox -->
    <script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
    <!-- InputMask -->
    <script src="../../plugins/moment/moment.min.js"></script>
    <script src="../../plugins/inputmask/jquery.inputmask.min.js"></script>
    <!-- date-range-picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap color picker -->
    <script src="../../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="../../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Bootstrap Switch -->
    <script src="../../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <!-- BS-Stepper -->
    <script src="../../plugins/bs-stepper/js/bs-stepper.min.js"></script>
    <!-- dropzonejs -->
    <script src="../../plugins/dropzone/min/dropzone.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
    <script src="../../dist/js/jqueries.js"></script>
    <!-- Bootstrap slider -->
    <script src="../../plugins/bootstrap-slider/bootstrap-slider.min.js"></script>

    <!-- Page specific script -->
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <!-- CodeMirror -->
    <script src="../../plugins/codemirror/codemirror.js"></script>
    <script src="../../plugins/codemirror/mode/css/css.js"></script>
    <script src="../../plugins/codemirror/mode/xml/xml.js"></script>
    <script src="../../plugins/codemirror/mode/htmlmixed/htmlmixed.js"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="../../dist/js/demo.js"></script>
    <!-- Ion Slider -->
    <script src="../../plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
    <!-- Page specific script -->


    <script src="../../plugins/hrm-Js/jquery.barrating.min.js"></script>

    <script>
        $(function () {
            // Summernote
            $('#summernote').summernote()

            // Summernote
            $('#summernote1').summernote()

            // Summernote2
            $('#summernote2').summernote()

            // Summernote3
            $('#summernote3').summernote()


            // CodeMirror
            CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
                mode: "htmlmixed",
                theme: "monokai"
            });
        })
    </script>


    <script>
        $(function () {
            $("#example1").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

        //   task_Table
        $(function () {
            $("#task_Table").DataTable({
                // "responsive": true, "lengthChange": false, "autoWidth": false,
                // "buttons": [   "colvis"]
            }).buttons().container().appendTo('#task_Table_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>



    <script>
        $(function () {
            /* BOOTSTRAP SLIDER */
            $('.slider').bootstrapSlider()

            /* ION SLIDER */
            $('#range_1').ionRangeSlider({
                min: 0,
                max: 5000,
                from: 1000,
                to: 4000,
                type: 'double',
                step: 1,
                prefix: '$',
                prettify: false,
                hasGrid: true
            })
            $('#range_2').ionRangeSlider()

            $('#range_5').ionRangeSlider({
                min: 0,
                max: 100,
                type: 'single',
                step: 1,
                postfix: '',
                prettify: false,
                hasGrid: true
            })
            $('#range_6').ionRangeSlider({
                min: -50,
                max: 50,
                from: 0,
                type: 'single',
                step: 1,
                postfix: '°',
                prettify: false,
                hasGrid: true
            })

            $('#range_4').ionRangeSlider({
                type: 'single',
                step: 100,
                postfix: ' light years',
                from: 55000,
                hideMinMax: true,
                hideFromTo: false
            })
            $('#range_3').ionRangeSlider({
                type: 'double',
                postfix: ' miles',
                step: 10000,
                from: 25000000,
                to: 35000000,
                onChange: function (obj) {
                    var t = ''
                    for (var prop in obj) {
                        t += prop + ': ' + obj[prop] + '\r\n'
                    }
                    $('#result').html(t)
                },
                onLoad: function (obj) {
                    //
                }
            })
        })
    </script>

    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })

            //Datemask dd/mm/yyyy
            $('#datemask').inputmask('dd/mm/yyyy', {
                'placeholder': 'dd/mm/yyyy'
            })
            //Datemask2 mm/dd/yyyy
            $('#datemask2').inputmask('mm/dd/yyyy', {
                'placeholder': 'mm/dd/yyyy'
            })
            //Money Euro
            $('[data-mask]').inputmask()

            // EditStartDate
            $('#editStartDate').datetimepicker({
                format: 'L'
            });

            // EditEndDate
            $('#editEndDate').datetimepicker({
                format: 'L'
            });

            // timeLogsStartDate
            $('#timeLogsStartDate').datetimepicker({
                format: 'L'
            });

            // timeLogsEndDate
            $('#timeLogsEndDate').datetimepicker({
                format: 'L'
            });

            // taskStartDate
            $('#taskStartDate').datetimepicker({
                format: 'L'
            });

            // taskEndDate
            $('#taskEndDate').datetimepicker({
                format: 'L'
            });






            //Date and time picker
            $('#reservationdatetime').datetimepicker({
                icons: {
                    time: 'far fa-clock'
                }
            });

            //Date range picker
            $('#reservation').daterangepicker()
            //Date range picker with time picker
            $('#reservationtime').daterangepicker({
                timePicker: true,
                timePickerIncrement: 30,
                locale: {
                    format: 'MM/DD/YYYY hh:mm A'
                }
            })


            //Date range as a button
            $('#daterange-btn').daterangepicker({
                    ranges: {
                        'Today': [moment(), moment()],
                        'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                        'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                        'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                        'This Month': [moment().startOf('month'), moment().endOf('month')],
                        'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                            'month').endOf('month')]
                    },
                    startDate: moment().subtract(29, 'days'),
                    endDate: moment()
                },
                function (start, end) {
                    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                        'MMMM D, YYYY'))
                }
            )

            //timeLogsStartTime
            $('#timepicker').datetimepicker({
                format: 'LT'
            })
           

            //timeLogsEndTime
            $('#timeLogsEndTime').datetimepicker({
                format: 'LT'
            })


            //Timepicker
            $('#timeLogsStartTime').datetimepicker({
                format: 'LT'
            })

            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()

        })
    </script>

    <script>
        $(function () {
            $('#ex20a').on('click', function (e) {
                $('#ex20a')
                    .parent()
                    .find(' >.well')
                    .toggle()
                    .find('input')
                    .slider('relayout');
                e.preventDefault();
            });
        });
        // [ rating-fontawesome ]
        $('.star-rating').barrating({
            theme: 'fontawesome-stars',
            showSelectedRating: false
        });
        $('.bar-rating').barrating('show', {
            theme: 'bars-1to10',
        });
        var currentRating = $('#demo-fontawesome-o').data('current-rating');
        $('#demo-fontawesome-o').barrating({
            theme: 'fontawesome-stars-o',
            showSelectedRating: false,
            initialRating: $('#demo-fontawesome-o').data('current-rating'),
            hoverState: false,
            readonly: false,
            clickState: false,
        });
        // init Isotope
        var $grid = $('.grid').isotope({
            itemSelector: '.element-item',
            layoutMode: 'fitRows',
            getSortData: {
                name: '.name',
                symbol: '.symbol',
                number: '.number parseInt',
                category: '[data-category]',
            }
        });

        // bind filter button click
        $('#filters').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        $('#filters-side').on('click', 'button', function () {
            var filterValue = $(this).attr('data-filter');
            $grid.isotope({
                filter: filterValue
            });
        });
        // change active class on buttons
        $('.button-group').each(function (i, buttonGroup) {
            var $buttonGroup = $(buttonGroup);
            $buttonGroup.on('click', 'button', function () {
                $buttonGroup.find('.active').removeClass('active');
                $(this).addClass('active');
            });
        });
    </script>

    <script type="application/javascript">
        $(document).ready(function () {
            $('[data-plugin="select_hrm"]').select2($(this).attr('data-options'));
            $('[data-plugin="select_hrm"]').select2({
                width: '100%'
            });
            $('.demo-movie').barrating('show', {
                theme: 'bars-movie'
            });
            $('.hr_color').colorpicker({
                format: 'auto'
            });
            //Ladda.bind('button[type=submit]');
            toastr.options.closeButton = 0;
            toastr.options.progressBar = true;
            toastr.options.timeOut = 3000;
            toastr.options.preventDuplicates = true;
            toastr.options.positionClass = "toast-top-center";
        });
    </script>

</body>

</html>