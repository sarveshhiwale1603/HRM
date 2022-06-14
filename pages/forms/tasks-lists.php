<?php 
include('configure.php');
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <style>
      .bg{
        border-top-left-radius: 10%;
        color: aliceblue;
      }
       .snehal{
           margin-left:75%;
       }
       .a1{
        float:right;
       }
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
                      <h6 ><a href=kanban.html target="_self" style="text-decoration:none">Kanban Board</a></h6>
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
                    View Mode     :</span> 
                     <a href="tasks-grid.php" class="btn btn-sm waves-effect waves-light btn-primary btn-icon m-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"> <i class="fas fa-th-large"></i> </a>
                     <a data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn waves-effect waves-light btn-primary btn-sm m-0"> <i data-feather="plus"></i>
                      Add Task        </a>
                          </div>
                        </div>
              </div>
              <div id="add_form" class="collapse add-form" data-parent="#accordion" style="">
                <div class="card s1">
                  <div id="accordion">
                    <div class="card-header">
                      <h5>
                        Add New              Task            </h5>
                      <div class="card-header-right pg a1" > <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-sm waves-effect waves-light btn-primary m-0"> <i data-feather="minus"></i>
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
                            <input class="form-control" placeholder="Title" name="task_name" type="text" value="">
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="start_date">Start Date <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <input type="date" class="form-control date"  placeholder="Start Date" name="start_date" type="text" value="">
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="end_date">End Date <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <input type="date" class="form-control date" placeholder="End Date" name="end_date" type="text" value="">
                             
                            </div>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="form-group">
                            <label for="task_hour" class="control-label">Estimated Hour</label>
                            <div class="input-group">
                            <input type="time" class="form-control timepicker_m"  name="estamited_hrs" type="text" data-dtp="dtp_l90xi">
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group" id="project_ajax">
                            <label for="project_ajax" class="control-label">Project <span class="text-danger">*</span></label>
                            <select class="form-control" name="project_id" data-plugin="select_hrm" data-placeholder="Project">
                              <option value=""></option>
                                                </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="summary">Summary <span class="text-danger">*</span></label>
                            <textarea class="form-control" placeholder="Summary" name="summary" cols="30" rows="1" id="summary"></textarea>
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
                      <button type="submit" class="btn btn-primary">
                      Save            </button>
                    </div>
      
                    <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>        </div>
                </div>
                </div>
              </div>
          <!--/. container-fluid -->
        </div>
        </div>
        <!-- /.row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>TITLE</th>
                    <th>TEAM  </th>
                    <th>START DATE</th>
                    <th>END DATE</th>
                    <th> STATUS  </th>
                    <th>PROGRESS</th>
                  </tr>
                  </thead>
                 
                  <tbody>
                      <?php     
    $sql=mysqli_query($conn,"select * from task");
    while($arr=mysqli_fetch_array($sql)){
    ?>
                      <tr>
                        <td>
                          <?php echo $arr['title'];?>
                        </td>
                        <td>
                          
                        </td>
                        <td>
                          <?php echo $arr['start_date'];?>
                        </td>
                        <td>
                          <?php echo $arr['end_date'];?>
                        </td>
                        <td>
                         
                        </td>
                        <td>
                          
                        </td>
                      </tr>


                      <?php }  ?>

                    </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
        <!--  row end -->
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

<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
<script>
    $(function () {
      $("#example1").DataTable({
        // "responsive": true, "lengthChange": false, "autoWidth": false,
        // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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
</body>
</html>
