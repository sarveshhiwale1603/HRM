<?php 
include('../include/config.php');
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 


    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $contact_number = $_POST['contact_number'];
        $email = $_POST['email'];
        $expertise=$_POST['expertise']; 
        $address=$_POST['address']; 

        $sql="INSERT INTO `trainers`(`first_name`, `last_name`, `contact_no`, `email`, `address`, `expertise`) VALUES ('$first_name','$last_name','$contact_number','$email','$address','$expertise')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
    }

    if(isset($_GET['delid'])){
      $id=mysqli_real_escape_string($conn,$_GET['delid']);
      $sql=mysqli_query($conn,"delete from training_skills where id='$id'");
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
       
  </style>

</head>
<body>
<div class="wrapper">

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
                  Add New Trainer
                </h5>
                <div class="card-header-right pg" style="float: right;"> <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-sm waves-effect waves-light btn-primary m-0"> <i data-feather="minus"></i>
                  Hide              </a> </div>
              </div>
                                  <form name="add_task" id="xin-form" autocomplete="off" method="post" accept-charset="utf-8">
    <input type="hidden" name="csrf_token" value="f44c7a5804deeeb53aa87bc0e6c27d26" />
    <input type="hidden" name="user_id" value="0" style="display:none;" />
    <div class="card-body">
      <div class="bg-white">
        <div class="box-block">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="first_name">
                      First Name <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-user"></i> </span></div>
                      <input class="form-control" placeholder="First Name" name="first_name" type="text" value="">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="last_name" class="control-label">
                      Last Name <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-user"></i> </span></div>
                      <input class="form-control" placeholder="Last Name" name="last_name" type="text" value="">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="contact_number">
                      Contact Number <span class="text-danger">*</span>
                    </label>
                    <input class="form-control" placeholder="Contact Number" name="contact_number" type="text" value="">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="email" class="control-label">
                      Email <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <div class="input-group-prepend"><span class="input-group-text"> <i class="fas fa-envelope"></i> </span></div>
                      <input class="form-control" placeholder="Email" name="email" type="email" value="">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="expertise">
                  Expertise <span class="text-danger">*</span>
                </label>
                <textarea class="form-control textarea" placeholder="Expertise" name="expertise" cols="30" rows="5" id="expertise"></textarea>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label for="address">
              Address              </label>
            <textarea class="form-control" placeholder="Address" name="address" cols="30" rows="3" id="address"></textarea>
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
                <h3 class="card-title">List All Trainers


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
                                                        <th>Trainer</th>
                                                        <th>Contact Number</th>
                                                        <th>Email</th>
                                                        <th>Expertise</th>
                                                        <th>Employees</th>
                                                        <th>Added by</th>
                                                      

                                                </thead>
                                                <tbody>
                                                <?php     
    $sql=mysqli_query($conn,"select * from trainers");
    while($arr=mysqli_fetch_array($sql)){
    ?>   
   <tr>
                                            <td>
                                            <?php echo $arr['first_name'].' '.$arr['last_name'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['contact_no'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['email'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['address'];?>
                                            </td>
                                            <td>
                                            <?php echo $arr['expertise'];?>
                                            </td>
                                            <td>
                                            <a href="trainers.php?delid=<?php echo $arr['id']; ?>"><button type="button" class="btn btn-sm btn-danger btn-rounded btn-icon"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a>

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
</body>
</html>
