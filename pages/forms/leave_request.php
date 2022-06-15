<?php 
include('../include/config.php');
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 


    if(isset($_POST['submit']))
    {
        
        $leave_type = $_POST['leave_type'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $remarks = $_POST['remarks'];
        $leave_reasons = $_POST['leave_reasons'];
        $employee_name = $_POST['employee_name'];
        $status='Pending';
        $image=$_FILES['image']['name'];

  
        $extension=substr($image,strlen( $image)-4,strlen( $image)); 
        $all_extension = array(".jpg","jpeg",".png","gif");
        if(!in_array($extension,$all_extension)){
          $msg="Invalid format. Only jpg / jpeg/ png /gif format allowed";
        } 
            else{
              $image=md5($image).$extension;
        $dnk=$_FILES['image']['tmp_name'];
        $loc="../../dist/img/credit/".$image;
        move_uploaded_file($dnk,$loc);
                }
       
        $sql="INSERT INTO `leave_request`(`leave_type`,`remarks`,`employee`,`leave_reason`, `start_date`, `end_date`,`attachment`,`status`) VALUES ('$leave_type','$remarks','$employee_name','$leave_reasons','$start_date','$end_date','$image','$status')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";   
       }
      
    }
    if(isset($_GET['delid'])){
        $id=mysqli_real_escape_string($conn,$_GET['delid']);
        $sql=mysqli_query($conn,"delete from leave_request where id='$id'");
        if($sql=1){
            header("location:leave_request.php");
        }
        }
    
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRM | LEAVE-REQUEST</title>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <style>
    .bg {
        border-top-left-radius: 10%;
    }
    </style>
</head>

<body>
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60"
                width="60">
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
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="#" class="brand-link">
                <span class="brand-text font-weight-light">AdminLTE 4</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user (optional) -->


                <!-- SidebarSearch Form -->


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="tectignis.html" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Home
                                </p>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Employee
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-star"></i>
                                <p>
                                    Core HR
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ol class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="Department.html" class="nav-link">
                                        <i class="nav-icon fa fa-ellipsis"></i>
                                        <p>Department</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="leave.html" class="nav-link">
                                        <i class="nav-icon fa fa-ellipsis"></i>
                                        <p>leave</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="policies.html" class="nav-link">
                                        <i class="nav-icon fa fa-ellipsis"></i>
                                        <p>policies</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="announcement.html" class="nav-link">
                                        <i class="nav-icon fa fa-astrick"></i>
                                        <p>Make Announcement</p>
                                    </a>
                                </li>
                            </ol>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-clock"></i>
                                <p>
                                    Attendance
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <ol class="nav-item">
                                    <a href="#" class="nav-link">

                                        <p>Attendance</p>
                                    </a>
                                </ol>
                                <ol class="nav-item">
                                    <a href="#" class="nav-link">

                                        <p>manul Attendance</p>
                                    </a>
                                </ol>
                                <ol class="nav-item">
                                    <a href="#" class="nav-link">

                                        <p>monthly Report</p>
                                    </a>
                                </ol>
                                <ol class="nav-item">
                                    <a href="#" class="nav-link">
                                        <p>Overtime Request</p>
                                    </a>
                                </ol>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-rupee-sign"></i>
                                <p>
                                    Payroll
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-edit"></i>
                                <p>
                                    Task
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-book"></i>
                                <p>
                                    Project
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">

                    
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-handshake"></i>
                                <p>
                                    Manage Clients
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	fa fa-user-plus"></i>
                                <p>
                                    Leads
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-question-circle"></i>
                                <p>
                                    Helpdesk
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class='nav-icon fas fa-chart-pie'></i>
                                <p>
                                    Estimates
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class='nav-icon fas fa-plus-square'></i>
                                <p>
                                    Leave Request
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon 	fa fa-laptop"></i>
                                <p>
                                    Training Session
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fa fa-gavel"></i>
                                <p>
                                    Disiplinary
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
                                <li class="breadcrumb-item active">Department</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-start">
                                    <i class="nav-link fa fa-square-plus"></i>
                                    <div class="ms-3">
                                        <a href="leave_request.php" target="_self" class="Department">
                                            <h6>Manage Leaves
                                        </a></h6>
                                        <p>Set up Leaves</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-start">
                                    <i class="nav-link fa fa-server"></i>
                                    <div class="ms-3">
                                        <h6><a href="leave.php" target="_self">Leave Type</a></h6>
                                        <p>Add Leave Type</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="clearfix hidden-md-up"></div>

                        <div class="col-md-4 grid-margin">
                            <div class="card-body">
                                <div class="d-flex flex-row align-items-start">
                                    <i class="nav-link	fa fa-calendar"></i>
                                    <div class="ms-3">
                                        <h6><a href="calender.php" target="_self"
                                                style="text-decoration:none">Calendar
                                            </a></h6>
                                        <p>Leave Calendar</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <!-- /.col -->
                    </div>
                    <!-- Info boxes -->
                    <div class="row">
                        <div class="col-md-3 grid-margin">
                            <div class="card mx-1 p-0">
                                <div class="card-body  pr-0 ">
                                    <div class="row p-0 m-0">
                                        <div class="ms-3 col-9">
                                            <a href="department.html" target="_self" class="Department">
                                                <h6>Total Leave
                                            </a></h6>
                                            <p>0</p>
                                        </div>
                                        <div class="col-3 align-items-center d-flex">
                                            <i class=" mr-0 pr-0 nav-link fa-solid fa-money-bill-1"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-md-3 grid-margin">
                            <div class="card mx-1 p-0">
                                <div class="card-body  pr-0 " style="background:#7267EF; color:white;">
                                    <div class="row p-0 m-0">
                                        <div class="ms-3 col-9">
                                            <a href="department.html" target="_self" class="Department"
                                                style="color:white;">
                                                <h6>Approved
                                            </a></h6>
                                            <p>0</p>
                                        </div>
                                        <div class="col-3 align-items-center d-flex bg">
                                            <i class=" mr-0 pr-0 nav-link  fa fa-database"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.col -->

                        <!-- fix for small devices only -->
                        <div class="col-md-3 grid-margin">
                            <div class="card mx-1 p-0">
                                <div class="card-body  pr-0 " style="background:#7267EF; color:white;"">
              <div class=" row p-0 m-0">
                                    <div class="ms-3 col-9">
                                        <a href="department.html" target="_self" class="Department "
                                            style="color:white;">
                                            <h6>Rejected
                                        </a></h6>
                                        <p>0</p>
                                    </div>
                                    <div class="col-3 align-items-center d-flex bg">
                                        <i class=" mr-0 pr-0 nav-link  fa fa-dollar-sign"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-md-3 grid-margin">
                        <div class="card mx-1 p-0">
                            <div class="card-body  pr-0 ">
                                <div class="row p-0 m-0">
                                    <div class="ms-3 col-9">
                                        <a href="department.html" target="_self" class="Department">
                                            <h6>Pending
                                        </a></h6>
                                        <p>0</p>
                                    </div>
                                    <div class="col-3 align-items-center d-flex">
                                        <i class=" mr-0 pr-0 nav-link fa fa-tags"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>

                <!-- /.row -->

                <div class="collapse" id="collapseExample">

                    <div class="row my-3">
                        <div class="col-md-8">
                            <div class="card">
                            <div class="card-header">
                    <h5 class="card-title">Add Leave</h5>
                    <div class="card-tools">
                      <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                      href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-minus"></i> Hide</button>
                    </button>
                      </button>
                    </div>
                  </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <form method="post" enctype="multipart/form-data">
                                        <div class="row my-3">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="first_name">
                                                        Employee <span class="text-danger">*</span>
                                                    </label>
                                                    <select class="form-control select2-hidden-accessible"
                                                        name="employee_name" data-plugin="select_hrm"
                                                        data-placeholder="Employee" tabindex="-1" aria-hidden="true"
                                                        data-select2-id="44" required>
                                                        <option selected="selected">select</option>
                                                        <?php
                                                   $query=mysqli_query($conn,"select * from employee");
                                                            while($sql=mysqli_fetch_array($query))
                                                            {
                                                              ?>

                                                        <option value="<?php echo $sql['fname'].' '.$sql['lname']; ?>">
                                                            <?php echo $sql['fname'].' '.$sql['lname']; ?></option>
                                                        <?php }  ?>
                                                    </select>

                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-lg-6">
                                                <label>Leave Type<sup><b style="color:red;">*</b></sup></label>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <!-- <i class="fas fa-user-alt"></i> -->
                                                        </span>
                                                    </div>
                                                    <input type="text" name="leave_type" class="form-control"
                                                        placeholder="Leave Type" required>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <div class="row my-3">
                                            <div class="col-lg-6">
                                                <label>Start Date<sup><b style="color:red;">*</b></sup></label>
                                                <input type="date" value="Date" name="start_date" class="form-control"
                                                    placeholder="Start Date" required>
                                                <div class="input-group">
                                                    <div class="input-group-prepend">
                                                        <!-- <i class="fas fa-user-alt"></i> -->
                                                        </span>
                                                    </div>
                                                </div>
                                                <!-- /input-group -->
                                            </div>
                                            <!-- /.col-lg-6 -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="end_date">
                                                        End Date <span class="text-danger">*</span>
                                                    </label>
                                                    <div class="input-group">
                                                        <input class="form-control date" type="date"
                                                            placeholder="End Date" name="end_date" type="text"
                                                            value="date" required>
                                                      
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- /.col-lg-6 -->
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <div class="custom-control custom-switch">
                                                    <input type="checkbox" class="custom-control-input input-primary"
                                                        name="leave_half_day" id="leave_half_day" value="1" required >
                                                    <label class="custom-control-label" for="leave_half_day">
                                                        Half Day </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">
                                                    Remarks </label>
                                                <textarea class="form-control textarea" placeholder="Remarks"
                                                    name="remarks" rows="2" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="description">
                                                    Leave Reason </label>
                                                <textarea class="form-control textarea" placeholder="Leave Reason "
                                                    name="leave_reasons" rows="2"></textarea>
                                            </div>
                                        </div>

                                        <div class="card-footer">
                                            <button type="button" id="reset" class="btn btn-default" name="reset"
                                                data-bs-toggle="collapse" href="#collapseExample" role="button"
                                                aria-expanded="false" aria-controls="collapseExample">Reset</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Save</button>

                                        </div>

                                </div>
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">Leave Attachment</h5>
                                </div>
                                <div class="card-body">
                                    <label>Attachment<sup><b style="color:red;">*</b></sup></label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" name="image">
                                        <label class="custom-file-label">Choose file...</label>
                                        <small class="text-muted">Upload files only: pdf,gif,png,jpg,jpeg
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                </form>

             

              
             
                <div class="row">

                    <!-- /.col (left) -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title">List All Leave
                                </h5>
                                <!-- ssssssssssssssssssssssssssssssssss -->

                                <button type="button" class="btn btn-primary float-right" style="margin-right: 3px;"
                                    data-bs-toggle="collapse" href="#collapseExample" role="button"
                                    aria-expanded="false" aria-controls="collapseExample">
                                    +Add New

                                </button>

                            </div>
                            </div>

 <!-- ################################################ -->
             
                            <div class="modal fade closemaual" id="dnkModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="check.php">
      <div class="modal-body body2">
      </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="leaveEdit">Save changes</button>
    </div>
                                                            </form>
  </div>
  </div>
</div>

<!-- ################################################ -->
                            <!-- /.card-header -->
                            <div class="card-body">
                                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                    <div class="row">
                                        <div class="col-sm-8">
                                            <div class="table" id="showtable">
                                                <p>Show
                                                    <select name="showtable">
                                                        <option value="10">10</option>
                                                        <option value="25">25</option>
                                                        <option value="50">50</option>
                                                        <option value="100">100</option>
                                                    </select>
                                                    entries
                                                </p>
                                            </div>
                                        </div>
                                        <div class="col-sm-4" style="display:flex;text-align:end;">
                                            <p style="padding:4px;">Search</p>
                                            <input type="search" class="form-control form-control-sm" name="name">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <table id="example1"
                                                class="table table-bordered table-striped dataTable dtr-inline"
                                                aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>Employee</th>
                                                        <th>Leave type</th>
                                                        <th>Leave Duration</th>
                                                        <th>Days</th>
                                                        <th>Applied on</th>
                                                        <th> Status</th>
                                                        <th> Action</th>

                                                </thead>
                                                <tbody>
                                                <?php     
    $sql=mysqli_query($conn,"select `employee`,`leave_type`,`status`,`date`,`id`,`start_date`, `end_date`,
    DATEDIFF(end_date,start_date) AS days
    from leave_request");
    while($arr=mysqli_fetch_array($sql)){
    ?>   



    
                                          <tr>
                                            <td>
                                            <?php echo $arr['employee'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['leave_type'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['start_date'].' TO '.$arr['end_date'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['days'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['date'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['status'];?>
                                            </td>
                                            <td>
                                            <a href="leave_request.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>

                                            <button type="button"  class="btn btn-primary button1" data-id='<?php echo $arr['id']; ?>' data-toggle="modal"
                                           >
                          <i class="fa fa-pen" ></i>
                    </button>

                  
                                               
                                                                 
                  
                  
                      </td>                 
                                            
                                          </tr>

                                          <?php } ?>
                                                
                                            </table>
                                        </div>
                                    </div>
                                   
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="dataTables_info" id="example1_info" role="status"> 

                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="dataTables_paginate paging_simple_numbers"
                                                id="example1_paginate">
                                                <ul class="pagination">
                                                    <li class="paginate_button page-item previous disabled "
                                                        id="example1_previous">
                                                        <a href="#" class="page-link">Previous</a>
                                                    </li>

                                                    <li class="paginate_button" name="next" id="example1_next">
                                                        <a href="#" class="page-link">Next</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>


                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col (right) -->
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                              <h6>
                              Leave Status </h6>
                              <div class="row d-flex justify-content-center align-items-center">
                                <div class="col">
                                  <div id="department-wise-chart" style="min-height: 262.7px;"><div id="apexchartsw2d3f3hv" class="apexcharts-canvas apexchartsw2d3f3hv apexcharts-theme-light" style="width: 425px; height: 262.7px;"><svg id="SvgjsSvg1687  demo" onmouseover="mouseOver()"width="425" height="262.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="425" height="262.70000000000005"><div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 70px; right: 5px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(68, 157, 209); color: rgb(68, 157, 209); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="DEVELOPER" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">  LEAVE</span></div></div></foreignObject><g id="SvgjsG1689" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1688"><clipPath id="gridRectMaskw2d3f3hv"><rect id="SvgjsRect1691" width="266" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskw2d3f3hv"><rect id="SvgjsRect1692" width="264" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1693" class="apexcharts-pie"><g id="SvgjsG1694" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1695" r="78.53902439024391" cx="130" cy="130" fill="transparent"></circle><g id="SvgjsG1696" class="apexcharts-slices"><g id="SvgjsG1697" class="apexcharts-series apexcharts-pie-series" seriesName="DEVELOPER" rel="1" data:realIndex="0"><path id="SvgjsPath1698" d="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" fill="rgba(68,157,209,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="360" data:startAngle="0" data:strokeWidth="2" data:value="3" data:pathOrig="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" stroke="#ffffff"></path></g><g id="SvgjsG1699" class="apexcharts-datalabels"><text id="SvgjsText1700" font-family="Helvetica, Arial, sans-serif" x="130" y="229.68414634146342" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" style="font-family: Helvetica, Arial, sans-serif;">100.0%</text></g></g></g><g id="SvgjsG1701" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1702" font-family="Helvetica, Arial, sans-serif" x="130" y="120" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Total</text><text id="SvgjsText1703" font-family="Helvetica, Arial, sans-serif" x="130" y="156" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">3</text></g></g><line id="SvgjsLine1704" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1705" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1690" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(68, 157, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                              
                        </div>
                              </div>
                            </div>
                          </div>
                        </div>

                            
                        <div class="col-md-6">
                          <div class="card">
                            <div class="card-body">
                              <h6  >
                          
Leave Type Status        </h6>
                              <div class="row d-flex justify-content-center align-items-center">
                                <div class="col">
                                  <div id="department-wise-chart" style="min-height: 262.7px;"><div id="apexchartsw2d3f3hv" class="apexcharts-canvas apexchartsw2d3f3hv apexcharts-theme-light" style="width: 425px; height: 262.7px;"><svg id="SvgjsSvg1687" width="425" height="262.70000000000005" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;"><foreignObject x="0" y="0" width="425" height="262.70000000000005"><div class="apexcharts-legend apexcharts-align-center position-right" xmlns="http://www.w3.org/1999/xhtml" style="position: absolute; left: auto; top: 70px; right: 5px;"><div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 2px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(68, 157, 209); color: rgb(68, 157, 209); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="DEVELOPER" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">DEVELOPER</span></div></div></foreignObject><g id="SvgjsG1689" class="apexcharts-inner apexcharts-graphical" transform="translate(22, 0)"><defs id="SvgjsDefs1688"><clipPath id="gridRectMaskw2d3f3hv"><rect id="SvgjsRect1691" width="266" height="262" x="-3" y="-1" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="gridRectMarkerMaskw2d3f3hv"><rect id="SvgjsRect1692" width="264" height="264" x="-2" y="-2" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><g id="SvgjsG1693" class="apexcharts-pie"><g id="SvgjsG1694" transform="translate(0, 0) scale(1)"><circle id="SvgjsCircle1695" r="78.53902439024391" cx="130" cy="130" fill="transparent"></circle><g id="SvgjsG1696" class="apexcharts-slices"><g id="SvgjsG1697" class="apexcharts-series apexcharts-pie-series" seriesName="DEVELOPER" rel="1" data:realIndex="0"><path id="SvgjsPath1698" d="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" fill="rgba(68,157,209,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-pie-area apexcharts-donut-slice-0" index="0" j="0" data:angle="360" data:startAngle="0" data:strokeWidth="2" data:value="3" data:pathOrig="M 130 9.17073170731706 A 120.82926829268294 120.82926829268294 0 1 1 129.9789113144622 9.170733547652048 L 129.98629235440043 51.46097680597383 A 78.53902439024391 78.53902439024391 0 1 0 130 51.46097560975609 L 130 9.17073170731706 z" stroke="#ffffff"></path></g><g id="SvgjsG1699" class="apexcharts-datalabels"><text id="SvgjsText1700" font-family="Helvetica, Arial, sans-serif" x="130" y="229.68414634146342" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="600" fill="#ffffff" class="apexcharts-text apexcharts-pie-label" style="font-family: Helvetica, Arial, sans-serif;">100.0%</text></g></g></g><g id="SvgjsG1701" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"><text id="SvgjsText1702" font-family="Helvetica, Arial, sans-serif" x="130" y="120" text-anchor="middle" dominant-baseline="auto" font-size="16px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-label" style="font-family: Helvetica, Arial, sans-serif;">Total</text><text id="SvgjsText1703" font-family="Helvetica, Arial, sans-serif" x="130" y="156" text-anchor="middle" dominant-baseline="auto" font-size="20px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-datalabel-value" style="font-family: Helvetica, Arial, sans-serif;">3</text></g></g><line id="SvgjsLine1704" x1="0" y1="0" x2="260" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1705" x1="0" y1="0" x2="260" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line></g><g id="SvgjsG1690" class="apexcharts-annotations"></g></svg><div class="apexcharts-tooltip apexcharts-theme-dark"><div class="apexcharts-tooltip-series-group"><span class="apexcharts-tooltip-marker" style="background-color: rgb(68, 157, 209);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div></div></div>
                              
                        </div>
                            </div>

                             
            </section>
            </div>
            <?php include("../include/footer.php") ?>
        </div>
        
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS --
    <!-- jQuery -->
    <script>
function mouseOver() {
  document.getElementById("demo").style.color = "red";
}

function mouseOut() {
  document.getElementById("demo").style.color = "black";
}
</script>



    <script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.js"></script>
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

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../plugins/raphael/raphael.min.js"></script>
<script src="../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../plugins/chart.js/Chart.min.js"></script>
<script type="text/javascript">var dt_infoFiltered = '(filtered from _MAX_ total records)';</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"></script>

<!-- AdminLTE for demo purposes -->
<script>
$(document).ready(function(){
$('.button1').click(function(){
  let dnkk = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {dnkk: dnkk},
   success: function(response2){ 
     $('.body2').html(response2);
     $('#dnkModal1').modal('show'); 
   }
 });
});


});
</script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>

</body>

</html>