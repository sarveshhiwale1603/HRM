<?php 
include("../include/config.php");


    if(isset($_POST['submit']))
    {
        $title = $_POST['title'];
        $start_date = $_POST['start_date'];
        $end_date = $_POST['end_date'];
        $estimated_hrs = $_POST['estimated_hrs'];
        $summary = $_POST['summary'];
        $description = $_POST['description'];
        $category=$_POST['category']; 
        $sql="INSERT INTO `task`(`title`,`start_date`,`end_date`,`estimated_hours`,`summary`,`description`,`project`) VALUES ('$title','$start_date','$end_date','$estimated_hrs','$summary','$description','$category')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
    }
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3| Dashboard 2</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="../../https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <style>
      .bg{
        border-top-left-radius: 10%;
        color: aliceblue;
      }
       .snehal{
           margin-left:75%;
           
       }
      .pg{
          margin-left:95%; 
          margin-top: 0%;

       }
        /* .s1{
             padding: 0.5rem 1rem;
       }  */
       
  </style>

</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
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
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
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
                <a href="designation.html" class="nav-link">
                  <i class="nav-icon fa fa-ellipsis"></i>
                  <p>Designation</p>
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
                    <i class="nav-link fa fa-bars"></i>
                    <div class="ms-3">
                      <a href="tasks-grid.php" target="_self" class="Department"><h6>Task</a></h6>
                      <p>Add Task</p>
                    </div>
                </div>
                </div>
            </div>
          <!-- /.col -->
          <div class="col-md-4 grid-margin">
            <div class="card-body">
                <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-calendar"></i>
                    <div class="ms-3">
                      <h6><a href="calendar3.html" target="_self" > Calendar</a></h6>
                      <p>Tasks Calendar</p>
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
                    <i class="nav-link	fa fa-tasks"></i>
                    <div class="ms-3">
                      <h6 ><a href="kanban.html" target="_self" style="text-decoration:none">Kanban Board</a></h6>
                      <p>View Task Kanban Board</p>
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
                 <div class="card-body  py-0 pl-0 "style="border-radius: 2px;">
                  <div class="row ">

                    <div class="col-lg-4 py-4 align-items-center d-flex bg" style="background:#17C666">
                        <i class="nav-link fa fa-user-tie" style="font-size:50px"></i>
                      </div>

                      <div class="col-lg-8 py-4">
                        <p>0</p>
                        <a href="department.html" target="_self" class="Department mt-4"><h6>Total Completed</a></h6>
                       
                   
                </div>
                </div>
             </div>
                </div>
            </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card mx-1 p-0">
             <div class="card-body  py-0 pl-0">
              <div class="row ">

                <div class="col-lg-4 py-4 align-items-center d-flex bg" style="background:#7267EF ; padding-left: 0;
                text-align: center; 
                 ">
                    <i class="nav-link fa fa-light fa-wallet" style="font-size:50px"></i>
                  </div>

                  <div class="col-lg-8 py-4">
                    <p>0</p>
                    <a href="department.html" target="_self" class="Department mt-4"><h6>Total In Progress </a></h6>
                   
               
            </div>
            </div>
         </div>
            </div>
        </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="col-md-3 grid-margin">
            <div class="card mx-1 p-0">
             <div class="card-body  py-0 pl-0">
              <div class="row ">

                <div class="col-lg-4 py-4 align-items-center d-flex bg" style="background:#0ce8dd">
                    <i class="nav-link fa fa-user" style="font-size:50px"></i>
                  </div>

                  <div class="col-lg-8 py-4">
                    <p>0</p>
                    <a href="department.html" target="_self" class="Department mt-4"><h6>Total Not Started</a></h6>
                   
               
            </div>
            </div>
         </div>
            </div>
        </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card mx-1 p-0">
             <div class="card-body  py-0 pl-0">
              <div class="row ">

                <div class="col-lg-4 py-4 align-items-center d-flex bg" style="background:#EA4D4D">
                    <i class="nav-link fa fa-user" style="font-size:50px"></i>
                  </div>

                  <div class="col-lg-8 py-4">
                    <p>0</p>
                    <a href="department.html" target="_self" class="Department mt-4"><h6>Total On Hold </a></h6>
                   
               
            </div>
            </div>
         </div>
            </div>
        </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
        <div class="row">
            
            <!-- /.col (left) -->
            <div class="col-md-12">
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List All Tasks
                </h5>
                <div class="nav-item nav-grid f-view snehal"> <span class="m-r-15">
                    View Mode :</span> 
                    <a href="tasks-lists.php" class="btn btn-sm waves-effect waves-light btn-primary btn-icon m-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="List View"> <i class="fas fa-list-ul"></i>
                     </a>
                     <a href="#" class="btn btn-sm waves-effect waves-light btn-primary btn-icon m-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"> <i class="fas fa-th-large"></i> </a>
                            
                     <a data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn waves-effect waves-light btn-primary btn-sm m-0"> <i data-feather="plus"></i>
                      Add Task        </a>
                          </div>
                        </div>
              </div>
                          <!-- ddd -->
                          <div id="add_form" class="collapse add-form" data-parent="#accordion" style="">
                            <div class="card s1">
                              <div id="accordion">
                                <div class="card-header">
                                  <h5>
                                    Add New              Task            </h5>
                                  <div class="card-header-right pg" > <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-sm waves-effect waves-light btn-primary m-0"> <i data-feather="minus"></i>
                                    Hide              </a> </div>
                                </div>
                                                    <form name="add_task" id="xin-form" autocomplete="off" method="post" accept-charset="utf-8">
                      <input type="hidden" name="csrf_token" value="f44c7a5804deeeb53aa87bc0e6c27d26" />
                      <input type="hidden" name="user_id" value="0" style="display:none;" />
                                <div class="card-body">
                                  <div class="row">
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="task_name">Title <span class="text-danger">*</span></label>
                                        <input class="form-control" placeholder="Title" name="title" type="text" value="" required>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="start_date">Start Date <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                          <input type="date" class="form-control date"  placeholder="Start Date" name="start_date" type="text" value="" required>
                                         
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="end_date">End Date <span class="text-danger">*</span></label>
                                        <div class="input-group">
                                          <input type="date" class="form-control date" placeholder="End Date" name="end_date" type="text" value="" required>
                                          
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-3">
                                      <div class="form-group">
                                        <label for="task_hour" class="control-label">Estimated Hour</label>
                                        <div class="input-group">
                                          <input type="time"  class="form-control" placeholder="Estimated Hour" name="estimated_hrs" value="" required>
                                         
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group" id="project_ajax">
                                        <label for="project_ajax" class="control-label">Project <span class="text-danger" required>*</span></label>


                                        <?php 
                  $query=mysqli_query($conn,"select * from project");
                
                  ?>


                      <select class="form-control select2" name="category" style="width: 100%;">
                        <option selected="selected">select</option>
                        <?php
                   while($sql=mysqli_fetch_array($query))
                   {
                     ?>


                        ?>

                        <option value="<?php echo $sql['name']; ?>"> <?php echo $sql['name']; ?></option>
                        <?php } ?>
                      </select>


                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                        <label for="summary">Summary <span class="text-danger">*</span></label>
                                        <textarea class="form-control" placeholder="Summary" name="summary" cols="30" rows="1" id="summary" required></textarea>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control editor" placeholder="Description" name="description" id="description"></textarea>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div>
                                <div class="card-footer text-right">
                                  <button type="reset" class="btn btn-light" href="#add_form" data-toggle="collapse" aria-expanded="false">
                                  Reset            </button>
                                  &nbsp;
                                  <button type="submit" name="submit" class="btn btn-primary">
                                  Save            </button>
                                </div>
                                <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>       </div> </div>
                            </div>
                            </div>
                          </div>
                          
                              <div class="row">
                                </div>
                                
                        </div>
                        <!-- [ task-board-right ] end --> 
                      </div>




                      
                      <div class="row">
                  <div class="col-md-4 col-sm-12">
        
      </div>
                 
            
        
</div>
    <!-- [ Main Content ] end --> 
  </div>
</div>
<!-- [ Main Content ] end -->
</div>

<div class="modal notification-modal fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Notifications          <br>
          <small class="text-muted">
          Mark all as read          </small> </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <div class="tab-pane fade show active" id="pc-noti-home" role="tabpanel" aria-labelledby="pc-noti-home-tab">
          <ul class="list-unstyled task-list">
                                            </ul>
          <!--<div class="text-center"> <a href="#!" class="b-b-primary text-primary">View Friend List</a> </div>-->
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-light-danger btn-sm" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<style type="text/css">
#ui-datepicker-div {
	z-index:1100 !important;
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
<div class="modal fade show delete-modal" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">
          Are you sure you want to delete this record?        </h5>
        <button type="button" class="close" data-dismiss="modal" > <span aria-hidden="true">×</span> </button>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger"> <strong>
          You won't be able to revert this!          </strong> </div>
      </div>
                  <form name="delete_record" id="delete_record" autocomplete="off" role="form" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_token" value="600c84418b41babf07edcd54101eef47" />
<input type="hidden" name="_method" value="DELETE" style="display:none;" />

<input type="hidden" name="_token" value="000" style="display:none;" />
      <div class="modal-footer">
                <input type="hidden" name="token_type" value="0" id="token_type"  />
          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Confirm</button>
        <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>      </div>
    </div>
  </div>
</div>
<div class="modal view-modal-data fade" id="notification-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" id="ajax_view_modal"></div>
    </div>
</div>
<div class="modal fade show edit-modal-data" role="dialog" aria-labelledby="edit-modal-data" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content" id="ajax_modal"></div>
  </div>
</div>
<div class="modal fade show payroll-modal-data" role="dialog" aria-labelledby="edit-modal-data" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content" id="ajax_payroll_modal"></div>
  </div>
</div>
          </div>
          <!--/. container-fluid -->
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
  <!-- <footer class="main-footer">
    <strong>Copyright &copy;<a href="https://tectignis.in">tectignis.in</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer> -->
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
</body>
</html>
