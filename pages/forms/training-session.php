<?php 
include('../include/config.php');
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 


    if(isset($_POST['submit']))
    {
        $trainer = $_POST['trainer'];
        $training_type = $_POST['training_type'];
        $training_cost = $_POST['training_cost'];
        $status = $_POST['status'];
        $start_date=$_POST['start_date']; 
        $end_date=$_POST['end_date']; 
        $description=$_POST['description']; 
        $id=$_SESSION['id'];
        $sql = "INSERT INTO `traning_sessions`(`trainers`, `training_skill`, `training_cost`, `status`, `start_date`, `end_date`, `description`) values('$trainer','$training_type','$training_cost','$status','$start_date','$end_date','$description')";
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
  <title>HRM | Training-Session</title>

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
       
  </style>

</head>
<body>
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="../../dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

  <!-- Navbar -->

  <?php 
include("../include/header.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Salary</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="container-fluid">
          <div class="row">
              <div class="col-md-3 grid-margin">
                  <div class="card-body">
                    <div class="d-flex flex-row align-items-start">
                      <i class="nav-link fa fa-calculator"></i>
                      <div class="ms-3">
                        <a href="training-session.html" target="_self" class="Department"><h6>Training Session</a></h6>
                        <p>Set up Training Session</p>
                      </div>
                  </div>
                  </div>
              </div>
            <!-- /.col -->
            <div class="col-md-3 grid-margin">
              <div class="card-body">
                  <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-user-plus"></i>
                    <div class="ms-3">
                        <h6><a href="trainers.html" target="_self" >Trainers</a></h6>
                        <p>Add Trainers</p>
                      </div>
                  </div>
              </div>
          </div>
            <!-- /.col -->
  
            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>
  
            <div class="col-md-3 grid-margin">
              <div class="card-body">
                  <div class="d-flex flex-row align-items-start">
                    <i class="nav-link	fa fa-tasks"></i>
                    <div class="ms-3">
                      <h6 ><a href="training-skill.html" target="_self" style="text-decoration:none">Training Skill </a></h6>
                      <p>Add Training Skill</p>
                      </div>
                  </div>
              </div>
          </div>
          <div class="col-md-3 grid-margin">
            <div class="card-body">
                <div class="d-flex flex-row align-items-start">
                  <i class="nav-link	fa fa-calendar"></i>
                  <div class="ms-3">
                    <h6 ><a href="training-calendar.html" target="_self" style="text-decoration:none">Calendar</a></h6>
                    <p> Training Calendar </p>
                    </div>
                </div>
            </div>
        </div>
            <!-- /.col -->
            
            <!-- /.col -->
          </div>
          <!-- Info boxes -->
          
              
          </div>
        <!-- Info boxes -->
       
        
        <!-- /.row -->
        <div id="add_form" class="collapse add-form" data-parent="#accordion" style="">
          <div class="card s1">
            <div id="accordion">
              <div class="card-header">
                <h5>
                  Add New Training Sessions
                </h5>
                <div class="card-header-right pg" style="float: right;"> <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-sm waves-effect waves-light btn-primary m-0"> <i data-feather="minus"></i>
                  Hide              </a> </div>
              </div>
                                  <form name="add_task" id="xin-form" autocomplete="off" method="post" accept-charset="utf-8">
    <input type="hidden" name="csrf_token" value="f44c7a5804deeeb53aa87bc0e6c27d26" />
    <input type="hidden" name="user_id" value="0" style="display:none;" />
    <div class="card-body">
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label for="trainer">
              Trainer <span class="text-danger">*</span>
            </label>
            <select class="form-control" name="trainer" data-plugin="select_hrm" data-placeholder="Trainer">
              <option value="snehal">snehal</option>
              <option value="snehal1">snehal1</option>
              <option value="snehal2">snehal2</option>
              <option value="snehal3">snehal3</option>
                            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="training_type">
              Training Skill <span class="text-danger">*</span>
            </label>
           
            <select class="form-control" name="training_type" data-plugin="select_hrm" data-placeholder="Training Skill">
            <option selected="selected" disabled>  select  </option>
                              <option value="126">
              Advanced research skills                </option>
                              <option value="127">
              Strong communication skills                </option>
                              <option value="128">
              Adaptability skills                </option>
                              <option value="129">
              Social media                </option>
                              <option value="130">
              Enthusiasm for Learning                </option>
                              <option value="131">
              Soft Skills                </option>
                              <option value="132">
              Professional Training                </option>
                              <option value="133">
              Team Training                </option>
                              <option value="168">
              fgddh                </option>
                            </select>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group">
            <label for="training_cost">
              Training Cost              </label>
            <div class="input-group">
              <div class="input-group-prepend"><span class="input-group-text">
                INR                  </span></div>
              <input class="form-control" placeholder="Training Cost" name="training_cost" type="text" value="">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
                            <input type="hidden" value="0" name="status" />
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="status" class="control-label"> Status <span class="text-danger">*</span></label>
                                  <select class="form-control select2" style="width: 100%;">
                                      <option value="active">  Active  </option>
                                      <option value="banned"> Banned </option>
                                  </select> 
                              </div>
                          </div>
                  <div class="col-md-3">
          <div class="form-group">
            <label for="start_date">
              Start Date <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control date" type="date" placeholder="start Date" name="start_date" type="text" value="">
              <div class="input-group-append"></div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="form-group">
            <label for="end_date">
              End Date <span class="text-danger">*</span>
            </label>
            <div class="input-group">
              <input class="form-control date" type="date" placeholder="End Date" name="end_date" type="text" value="">
              <div class="input-group-append"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="form-group">
            <label for="description">
              Description              </label>
            <textarea class="form-control editor" placeholder="Description" name="description" rows="3" id="description"></textarea>
            
          </div>
        </div>
      </div>
      <div class="card-footer text-right">
      <button type="reset" class="btn btn-light" href="#add_form" data-toggle="collapse" aria-expanded="false">
      Reset        </button>
      &nbsp;
      <button type="submit" name="submit" class="btn btn-primary">
      Save        </button>
    </div>
    </div>
   
    
              </div>
              
              <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>        </div>
          </div>
        </div>
        <!-- /.row -->
        <div class="card">
              <div class="card-header">
                <h3 class="card-title">List All Training Sessions


                </h3>
                <div class="nav-item nav-grid f-view snehal" style="float: right;"> <span class="m-r-15">
                  </span> 
                   
                 
                   <a data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn waves-effect waves-light btn-primary btn-sm m-10"> <i data-feather="plus"></i>
                    Add Task        </a>
                        </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1"
                                                class="table table-bordered table-striped dataTable dtr-inline"
                                                aria-describedby="example1_info">
                                                <thead>
                                                    <tr>
                                                        <th>Training Skills</th>
                                                        <th>Trainers</th>
                                                        <th>Start Date</th>
                                                        <th>End date</th>
                                                        <th>Employees</th>
                                                        <th>Training cost</th>
                                                        <th>Status</th>
                                                        <th>Action</th>

                                                </thead>
                                                <tbody>
                                                <?php     
    $sql=mysqli_query($conn,"select * from training_sessions");
    while($arr=mysqli_fetch_array($sql)){
    ?>   
   <tr>
                                            <td>
                                            <?php echo $arr['training_skill'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['trainers'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['start_date'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['end_date'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['employee'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['training_cost'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['status'];?>
                                            </td>
                                            <td>
                                            <a href="training-session.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-sm btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>

                                            <button type="button"  class="btn btn-sm btn-primary button1" data-id='<?php echo $arr['id']; ?>' data-toggle="modal"
                                           >
                          <i class="fa fa-pen" ></i>
                    </button>

                  
                                               
                                                                 
                  
                  
                      </td>                
                                          </tr>

                                          <?php } ?>
                                                
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
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
    </div>
  </footer>
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
     <script>
      $('.date').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false,
        clearButton: false,
        format: 'YYYY-MM-DD'
      });
      $('.timepicker').bootstrapMaterialDatePicker({
        date: false,
        shortTime: true,
        format: 'HH:mm'
      });
        $('.hr_month_year').datepicker({
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat:'yy-mm',
        yearRange: '1950:' + (new Date().getFullYear() + 15),
        beforeShow: function(input) {
          $(input).datepicker("widget").addClass('hide-calendar');
        },
        onClose: function(dateText, inst) {
          var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
          var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
          $(this).datepicker('setDate', new Date(year, month, 1));
          $(this).datepicker('widget').removeClass('hide-calendar');
          $(this).datepicker('widget').hide();
        }
          
      });
    </script>
</body>
</html>
