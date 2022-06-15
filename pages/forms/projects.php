<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 


    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $estimated_hr	 = $_POST['estimated_hr'];
        $start_date	 = $_POST['start_date'];
        $end_date	 = $_POST['end_date'];
        $summary = $_POST['summary'];
        $priority = $_POST['priority'];
        $team = $_POST['team'];
        $description= $_POST['description'];
        $client	 = $_POST['client'];
        date_default_timezone_set('Asia/Kolkata');
        $date=date("Y-m-d H:i:s");
        $employee_code = $team;
        $sql="INSERT INTO `project`(`title`,`estimated_hr`,`priority`,`start_date`,`end_date`,`summary`,`team`,`description`,`client`,`employee_code`,`date`)VALUES ('$title','$estimated_hr','$priority','$start_date','$end_date','$summary','$team','$description','$client','$employee_code','$date')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
   // }
    // if(isset($_GET['delid'])){
    //   $id=mysqli_real_escape_string($conn,$_GET['delid']);
    //   $sql=mysqli_query($conn,"delete from attendance where id='$id'");
    //   if($sql=1){
    //       header("location:manual-attendance.php");
      //}
      }
  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>AdminLTE 3| Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
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
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


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
.f-40{
    font-size: 40px;
}

element.style {
}
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
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <a href="projects.html">
                                    <div class="d-flex flex-row align-items-start hoverTitles">
                                        <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-friends"></i>
                                        <div class="ms-3">
                                            <p class="pb-0 mb-0" style="line-height: 1">
                                                Project
                                            </p>
                                            <small class="text-muted small pt-0 mt-0">Set Up Projects</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- <p style="line-height:1;"><a href="department.html" target="_self" class="Department titles" style="font-weight:medium;">Department</a> <br> -->

                        <!-- /.col -->
                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <a href="\pages\project-Calendar.html">
                                    <div class="d-flex flex-row align-items-start hoverTitles">
                                        <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-calendar"></i>
                                        <div class="ms-3">
                                            <p class="pb-0 mb-0" style="line-height: 1">
                                                Calendar
                                            </p>
                                            <small class="text-muted small pt-0 mt-0">Projects Calendar</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <a href="project-Kanban-Board.html">
                                    <div class="d-flex flex-row align-items-start hoverTitles">
                                        <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg far fa-clock"></i>
                                        <div class="ms-3">
                                            <p class="pb-0 mb-0" style="line-height: 1">
                                                Kanban Board
                                            </p>
                                            <small class="text-muted small pt-0 mt-0">View Projects Kanban Board</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- /.col -->
                       
                    </div>

                    <div class="row">
                      

                        <div class="col-xl-3 col-md-6">
                          <div class="card feed-card mx-1 p-0 rounded">
                            <div class="card-body rounded py-0 pl-0">
                              <div class="row rounded">
                                <div class="col-4 py-4 rounded bg-success border-feed"> <i class="fas fa-user-tie f-40"></i> </div>
                                <div class="col-8 py-4">
                                  <div class="p-t-25 p-b-25">
                                    <h2 class="f-w-400 m-b-10"> 0  </h2>
                                    <p class="text-muted m-0">Total<span class="text-success f-w-400"> Completed   </span></p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="col-xl-3 col-md-6">
                            <div class="card feed-card mx-1 p-0 rounded">
                              <div class="card-body rounded py-0 pl-0">
                                <div class="row rounded">
                                  <div class="col-4 py-4 rounded bg-primary border-feed"> <i class="fas fa-wallet f-40"></i> </div>
                                  <div class="col-8 py-4">
                                    <div class="p-t-25 p-b-25">
                                      <h2 class="f-w-400 m-b-10"> 0  </h2>
                                      <p class="text-muted m-0">Total<span class="text-primary f-w-400"> In Progress   </span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="col-xl-3 col-md-6">
                            <div class="card feed-card mx-1 p-0 rounded">
                              <div class="card-body rounded py-0 pl-0">
                                <div class="row rounded">
                                  <div class="col-4 py-4 rounded bg-info border-feed"> <i class="fas fa-sitemap f-40"></i> </div>
                                  <div class="col-8 py-4">
                                    <div class="p-t-25 p-b-25">
                                      <h2 class="f-w-400 m-b-10"> 0  </h2>
                                      <p class="text-muted m-0">Total<span class="text-info f-w-400"> Not Started   </span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>

                        
                          <div class="col-xl-3 col-md-6">
                            <div class="card feed-card mx-1 p-0 rounded">
                              <div class="card-body rounded py-0 pl-0">
                                <div class="row rounded">
                                  <div class="col-4 py-4 rounded bg-danger border-feed"> <i class="fas fa-users f-40"></i> </div>
                                  <div class="col-8 py-4">
                                    <div class="p-t-25 p-b-25">
                                      <h2 class="f-w-400 m-b-10"> 0  </h2>
                                      <p class="text-muted m-0">Total<span class="text-danger f-w-400"> On Hold  </span></p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        
                      </div>

                    <div class="row mt-3">
                        <div class="col-lg-12 col-sm-12">
                            <div class="card user-card user-card-1">
                                <div class="card-body">
                                    <div class="user-about-block text-center">
                                        <div class="row align-items-end">
                                            <div class="col text-left">
                                                <h5 class="card-title">List All Employees</h5>
                                            </div>
                                            <div class="col text-right">
                                                <div class="card-tools">
                                                    <span class="mr-2">View Mode : </span>
                                                    <a href="project-List.php"><button type="button"
                                                            class="btn btn-primary btn-sm">
                                                            <i class="fas fa-list-ul"></i>
                                                        </button></a>
                                                        <a href="projects.php" title="Grid view" class="btn btn-primary btn-sm">
                                                            <i class="fas fa-th-large"></i></a>
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fas fa-plus"></i> Add New
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    
                    <!-- /.row -->
                    <div class="row justify-content-center">
                        <div class="col-md-12">

                            <div class="collapse" id="collapseExample">
                              <form method="POST" >
                                <div class="row my-3">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">Add New Project</h5>
                                                <div class="card-tools">
                                                    <button type="button" class="btn btn-primary btn-sm"
                                                        data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                        aria-expanded="false" aria-controls="collapseExample">
                                                        <i class="fas fa-minus"></i> Hide</button>
                                                    </button>
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /.card-header -->
                                            <div class="card-body">
                                                <div class="row my-3">
                                                    <div class="col-lg-4">
                                                        <label>Title<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="title"
                                                                placeholder="Title" required>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-6 -->
                                                    <div class="col-lg-3">
                                                        <label>Client<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                        <?php 
                                                            $query=mysqli_query($conn,"select * from manage_client");
                                                            ?>


                                                                <select class="form-control select2" name="client" style="width: 100%;" required>
                                                                  <option selected="selected">select</option>
                                                                  <?php
                                                            while($sql=mysqli_fetch_array($query))
                                                            {
                                                              ?>

                                                                  <option value="<?php echo $sql['id'] ?>"> <?php echo $sql['first_name'].' '.$sql['last_name']; ?></option>
                                                                  <?php } ?>
                                                                </select>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-lg-2">
                                                        <label>Estimated Hour</label>
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" name="estimated_hr"
                                                                placeholder="Estimated Hour" required>
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text">
                                                                    <i class="fas fa-clock"></i>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <div class="col-lg-3">
                                                        <label>Priority</label>
                                                        <div class="input-group" >
                                                            <select class="form-control select2" style="width: 100%;" name="priority" required>
                                                                <option selected="selected">Highest</option>
                                                                <option>High</option>
                                                                <option>Normal</option>
                                                                <option>Low</option>
                                                            </select>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                   
                                                    <!-- /.col-lg-6 -->
                                                </div>
                                                <!-- /.row -->
                                                <div class="row my-3">
                            <div class="col-lg-3">
                              <label>Start Date<sup><b style="color:red;">*</b></sup></label>
                              <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="date" name="start_date" class="form-control" placeholder="Date" required/>
                              
                              </div>
                            </div>
                            <!-- /.col-lg-4 -->
                            <div class="col-lg-3">
                              <label>End Date<sup><b style="color:red;">*</b></sup></label>
                                <input type="date" name="end_date" class="form-control" placeholder="Date" required/>
                              
                            </div>
                                                    <div class="col-lg-6">
                                                        <label>Summary<sup><b style="color:red;">*</b></sup></label>
                                                        <div class="input-group">
                                                            <textarea class="form-control" name="summary" id="exampleFormControlTextarea1" rows="1" placeholder="Summary" required></textarea>
                                                        </div>
                                                        <!-- /input-group -->
                                                    </div>
                                                    <!-- /.col-lg-4 -->
                                                </div>
                                                <!-- /.row -->


                                                <div class="row my-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                          <label>Team</label>
                                                          <select class="form-control select2" name="team" style="width: 100%;" required>
                                                          <option selected="selected">select</option>
                                                        <?php
                                                   $query=mysqli_query($conn,"select * from employee");
                                                            while($sql=mysqli_fetch_array($query))
                                                            {
                                                              ?>

                                                        <option value="<?php echo $sql['employee_code'] ?>">
                                                            <?php echo $sql['fname'].' '.$sql['lname']; ?></option>
                                                        <?php }  ?>
                                                    </select>
                                                        </div>
                                                          </div>
                                                   
                                                </div>
                                                <!-- /.row -->


                                                <div class="row my-3">
                                                    <div class="col-lg-12">
                                                        <div class="form-group">
                                                          <label>Description</label>
                                                    <textarea id="summernote" name="description" class="form-control" rows="3">
                                                        <!-- Place <em>some</em> <u>text</u> <strong>here</strong> -->
                                                      </textarea>
                                                      </div>
                                                      </div>
                                                </div>
                                             

                                                <div class="card-footer">
                                                    <buttton type="button" id="reset" class="btn btn-default"
                                                        name="reset" data-bs-toggle="collapse" href="#collapseExample"
                                                        role="button" aria-expanded="false"
                                                        aria-controls="collapseExample">Reset</buttton>
                                                    <button type="submit" name=submit id="submit" class="btn btn-primary"
                                                        name="Save">Save</button>
                                                      

                                                </div>
</form>
                                            </div>
                                        </div>
                                    </div>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                    <?php
 $query=mysqli_query($conn,"select project.title , project.start_date,project.end_date,project.start_date,project.summary,employee.image from employee inner join project on project.employee_code=employee.employee_code");
                     while($sql=mysqli_fetch_array($query))
                    {
                      ?>
                  
                        <div class="col-md-4 col-sm-12">
                            <div class="card card-border-c-blue">
                                <div class="card-header"> <a
                                        href="http://hrm.tectignis.in/erp/project-detail/WTgSGCdTUsln6QFa0YRAZCK_AjAMCE-AqDB_MScIasQ"
                                        class="text-secondary">#
                                       <?php echo $sql['title'] ?></a> <span class="label label-primary float-right">
                                       <?php echo $sql['start_date'] ?></span> </div>
                                <div class="card-body card-task">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="task-detail">
                                            <?php echo $sql['summary']?></p>
                                            <p class="task-due"><strong>
                                                    Due : </strong><strong class="label label-primary">
                                                    <?php echo $sql['start_date'] ?></strong></p>
                                        </div>
                                        <div class="col-sm-12">
                                            <div class="progress" style="height: 10px;">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 0%;" aria-valuenow="0" aria-valuemin="0"
                                                    aria-valuemax="100">
                                                    0 %</div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    
                                        <div class="task-list-table">
                                          
                                            <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top"
                                                title="" data-original-title="VEDANT NAIDU"><span class="mb-1"><img
                                                        src="employee_image/employee_image/<?php echo $sql['image']; ?>"
                                                        class="img-fluid img-radius mr-2"
                                                        style=" border-radius: 50%; width: 50px; height: auto;"
                                                        alt=""></span></a><a style="color:black;" href="#!"><i
                                                    class="fas fa-plus"></i></a>
                                        </div>
                                    <div class="task-board d-flex flex-row bd-highlight my-3 m-0 p-0" style="float: inherit;">
                                        <div class="dropdown-secondary dropdown mr-2 bd-highlight"> <a href="project-Details.html">
                                                <button class="btn btn-sm p-1 alert alert-warning" 
                                                    type="button">Not Started</button> </a> </div>
                                        <div class="dropdown-secondary dropdown mr-2 bd-highlight"> <a href="project-Details.html">
                                                <button
                                                    class="btn waves-effect waves-light btn-primary btn-sm b-none txt-muted"
                                                    type="button"><i data-toggle="tooltip" data-placement="top" title=""
                                                        class="fas fa-eye m-0"
                                                        data-original-title="View Project"></i></button>
                                            </a> </div>
                                        <div class="dropdown-secondary dropdown mr-2 bd-highlight">
                                            <button
                                                class="btn waves-effect waves-light btn-primary btn-sm dropdown-toggle b-none txt-muted"
                                                type="button" id="dropdown3" data-toggle="dropdown" aria-haspopup="true"
                                                aria-expanded="false"><i class="fas fa-bars"></i></button>
                                            <div class="dropdown-menu" aria-labelledby="dropdown3"
                                                data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                                <a class="dropdown-item" href="project-Details.html"> <i class="feather icon-eye"></i> View
                                                    Project </a>
                                                <a class="dropdown-item" href="project-Details.html"> <i class="feather icon-edit"></i> Edit
                                                    Project </a>
                                                <div class="dropdown-divider"></div>
                                                <a href="#!" class="dropdown-item delete" data-toggle="modal"
                                                    data-target="#modal-default"
                                                    data-record-id="tG8ojG-xuooWM25zk0dWhhSkyNvqEX2MB5osYN-NpvY"><i
                                                        class="feather icon-trash-2"></i> Remove Project </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <?php } ?>
                    </div>
                      <hr>
                       <center> <button class="btn btn-sm btn-primary ">1</button></center>

                       </div>
                       
      <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Are you sure you want to delete this record?</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="alert alert-danger">You won't be able to revert this!</div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Confirm</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
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
        <?php include("../include/footer.php") ?>
        <!-- Main Footer -->

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

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
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
</script>


<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
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
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
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
<!-- Page specific script -->
<script>
  $(function () {
    // Summernote
    $('#summernote').summernote()

    // CodeMirror
    CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
      mode: "htmlmixed",
      theme: "monokai"
    });
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
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    // endDate
    $('#endDate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

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
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>


</body>
</html>