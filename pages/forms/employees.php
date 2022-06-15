<?php include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
$name=$_SESSION['name'];
$id=$_SESSION['id']; ?>
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
  <link rel="stylesheet" href="../../dist/css/style.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../../plugins/daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- Bootstrap -->
  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
    <style>
    .hoverTitles{
      color: black;
      cursor: pointer;
      font-weight: 500;
      /* font-size: small; */

    }
    .active1{
      cursor: pointer;
      font-weight: 500;
    }
      .hoverTitles:hover{
      color: #007bff !important;
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
            <div class="col-sm-8">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Employees</li>
              </ol>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-3 grid-margin">
              <div class="card-body">
                <a href="employees.php">
                  <div class="d-flex flex-row align-items-start active1">

                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-friends "></i>
                    <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Employees</p>
                      <small class="text-muted small pt-0 mt-0">Set Up Employees</small>

                    </div>

                  </div>
                </a>
              </div>
            </div>
            <!-- <p style="line-height:1;"><a href="department.html" target="_self" class="Department titles" style="font-weight:medium;">Department</a> <br> -->

            <!-- /.col -->
            <div class="col-md-3 grid-margin">
              <div class="card-body">
                <a href="roles&privilages.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">

                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-lock"></i>
                    <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Roles & Privilages</p>
                      <small class="text-muted small pt-0 mt-0">Set Roles</small>

                    </div>

                  </div>
                </a>
              </div>
            </div>
            <!-- /.col -->

            <!-- fix for small devices only -->
            <div class="clearfix hidden-md-up"></div>

            <div class="col-md-3 grid-margin">
              <div class="card-body">
                <a href="shift&scheduling.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">
                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg 	far fa-clock"></i>
                    <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Shift & Scheduling</p>
                      <small class="text-muted small pt-0 mt-0">Manage Shifts</small>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /.col -->
            <div class="col-md-3 grid-margin">
              <div class="card-body">
                <a href="employees-Exit.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">
                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-sign-out-alt"></i>
                    <div class="ms-3">
                      <p class="pb-0 mb-0" style="line-height:1;">Employees Exit</p>
                      <small class="text-muted small pt-0 mt-0">Set up Employees Exit</small>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <!-- /.col -->
          </div>

          <!-- /.row -->
          <div class="row">

            <!-- /.col (left) -->
            <div class="col-md-12">

              <div class="collapse" id="collapseExample">

                <div class="row my-3">
                  <div class="col-md-8">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Add New Employee</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                          href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fas fa-minus"></i> Hide</button>
                        </button>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <form method="post" enctype="multipart/form-data" action="api.php">
                      <div class="card-body">
                        <div class="row my-3">
                          <div class="col-lg-6">
                            <label>First Name<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-user-alt"></i>
                                </span>
                              </div>
                              <input type="text" class="form-control" name="fname" id="txtname" placeholder="First Name" required>

                            </div>
                            <span id="spanname"></span>

                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                          <div class="col-lg-6">
                            <label>Last Name<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-user-alt"></i></span>
                              </div>
                              <input type="text" class="form-control" name="lname" id="lstname" placeholder="Last Name" required>

                            </div>
                            <span id="lname"></span>

                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->


                        <div class="row my-3">
                          <div class="col-lg-4">
                            <label>Employee ID<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <?php $empid=rand(100000,1000000) ?>
                              <input type="text" class="form-control" name="empid" value="<?php echo $empid; ?>" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-4 -->
                          <div class="col-lg-4">
                            <label>Contact Number<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <input type="number" class="form-control" minlength="10" maxlength="10" name="contact" placeholder="Contact Number" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <div class="col-lg-4">
                            <label>Gender<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <select class="form-control select2" name="gender" style="width: 100%;" required>
                                <option selected="selected">Male</option>
                                <option>Female</option>
                              </select>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-4 -->
                        </div>
                        <!-- /.row -->
        

                        <div class="row my-3">
                          <div class="col-lg-6">
                            <label>Email<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <i class="fas fa-envelope"></i>
                                </span>
                              </div>
                              <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                          <div class="col-lg-6">
                            <label>Username<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-user-alt"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="Username" name="uname" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-6 -->
                        </div>
                        <!-- /.row -->


                        <div class="row my-3">
                          <div class="col-lg-4">
                            <label>Password<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-eye-slash"></i></span>
                              </div>
                              <input type="text" class="form-control" placeholder="password" name="password" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-4 -->
                          <div class="col-lg-4">
                            <label>Office Shift<sup><b style="color:red;">*</b></sup></label>
                            <select class="form-control select2" name="shift" style="width: 100%;" placeholder="Office Shift" required>
                              <option selected="selected" disabled>Office Shift</option>
                              <?php $sql=mysqli_query($conn,"select * from shift_time order by shift asc");
                            while($row=mysqli_fetch_array($sql)){ ?>
                            <option value="<?php echo $row['shift']; ?>"><?php echo $row['shift']; ?></option><?php } ?>
                            </select>
                            <!-- /input-group -->
                          </div>
                          <div class="col-lg-4">
                            <label>Role<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <select class="form-control select2" name="role" style="width: 100%;" required>
                                <option selected="selected" disabled>Role</option>
                                <option>Web Developer</option>
                                <option>Android Developer</option>
                              </select>
                            </div>
                          </div>
                        </div>
                    <div class="row my-3">     
                      <div class="col-lg-4">
                          <label>Department<sup><b style="color:red;">*</b></sup></label>
                          <select class="form-control select2" id="department" name="department" style="width: 100%;" onChange="get(this.value)" required>
                          <option >Choose Department</option>
                          <?php $sql=mysqli_query($conn,"select * from department order by name asc");
                            while($row=mysqli_fetch_array($sql)){ ?>
                            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option><?php } ?>
                          </select>
                        </div>
                        <div class="col-lg-4">
                          <label>Designation<sup><b style="color:red;">*</b></sup></label>
                          <div class="input-group">
                            <select class="form-control select2" name="designation" id="designation" style="width: 100%;" required>
                              <!-- <option selected="selected"value="" >Designation</option> -->
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-4">
                            <label>City<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <!-- <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-eye-slash"></i></span>
                              </div> -->
                              <input type="text" class="form-control" placeholder="password" name="city" required>
                            </div>
                            <!-- /input-group -->
                          </div>
                    </div>

                    <div class="row my-3">     
                      <div class="col-lg-6">
                          <label>Basic Salary<sup><b style="color:red;">*</b></sup></label>
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="fas fa-rupee-sign"></i></span>
                          </div>
                          <input type="number" class="form-control" name="salary" value="30000" required>
                        </div>
                      </div>
                        <div class="col-lg-6">
                          <label>Payslip Type<sup><b style="color:red;">*</b></sup></label>
                          <div class="input-group">
                            <select class="form-control select2" name="slip" style="width: 100%;"required >
                              <option selected="selected" >Per Month</option>
                            </select>
                          </div>
                        </div>
                    </div>     
                    
                    <div class="row my-3">
                     <div class="col-lg-6">
                          <label>Employement Type<sup><b style="color:red;">*</b></sup></label>
                          <div class="input-group">
                            <select class="form-control select2" name="slip" style="width: 100%;" required>
                              <option selected="selected" disabled >Employement Type</option>
                              <option>Internship</option>
                              <option>Payroll</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-lg-6">
                          <label>Pan No.<sup><b style="color:red;">*</b></sup></label>
                          <div class="input-group">
                          <div class="input-group-prepend">
                            <span class="input-group-text"> <i class="far fa-credit-card"></i></span>
                          </div>
                          <input type="text" class="form-control"  id="txtPANCard" name="Pancard" placeholder="Pan No" required>
                        </div>
                        <span id="spanCard"></span>

                      </div>
                    </div>

                        <div class="card-footer">
                          <button type="button" id="reset" class="btn btn-default" name="reset" data-bs-toggle="collapse"
                          href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Reset</button>
                          <button type="submit" id="submit" class="btn btn-primary" name="Save">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title">Profile Picture</h5>
                      </div>
                      <div class="card-body">
                      <label>Profile Picture<sup><b style="color:red;">*</b></sup></label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="file" accept="image/png, image/gif, image/jpeg, image/jpg">
                          <label class="custom-file-label">Choose file...</label>
                          <small class="text-muted">Upload files only: gif,png,jpg,jpeg</small>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </form>
              <!-- <div class="form-group">
                <div class="input-group custom-file date" id="reservationdate" data-target-input="nearest">
                  <input type="file" class="form-control custom-file-input"
                    data-target="#reservationdate" placeholder="choose file" />
                  <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                    <div class="input-group-text">BROWSE</div>
                  </div>
                </div>
              </div> -->
              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List All Employees</h5>
                  <div class="card-tools">
                  <a href="employees-Grid.html"> <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-th-large"></i></button></a> 
                    <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="collapse"
                      href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                  </div>
                </div>

                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                      <div class="col-sm-12">
                        <table id="example1" class="table table-striped dataTable dtr-inline"
                          aria-describedby="example1_info">
                          <thead>
                          <tr>
            <th>Name</th>
            <th>Designation</th>
            <th>Contact Number</th>
            <th>Gender</th>
            <th>City</th>
            <th>Role</th>
            <th>Status</th>
          </tr>
                          </thead>
                          <tbody>
                          <?php
                            $sql=mysqli_query($conn,"select * from employee inner join designation on designation.id=employee.designation order by employee.fname desc");
                            while($row=mysqli_fetch_array($sql)){?>
                              <tr>
                                <td><?php echo $row['fname'] ." ". $row['lname']; ?></td>
                                <td><?php echo $row['designation_name']; ?></td>
                                <td><?php echo $row['mobile']; ?></td>
                                <td><?php echo $row['gender']; ?></td>
                                <td><?php echo $row['city']; ?></td>
                                <td><?php echo $row['role']; ?></td>
                                <td><?php echo 1; ?></td>
                              </tr>
                              <?php } ?>
                           
                          </tbody>
                          <tfoot>

                          </tfoot>
                        </table>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.col (right) -->
            </div>

            <!-- /.row -->

            <!-- Main row -->

            <!-- /.row -->
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

<!-- AdminLTE for demo purposes -->
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
<!-- <script src="../../dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->


<script>

//TEXT VALIDATION
$("#spanname").hide();
  $("#txtname").keyup(function(){
   txt_check();
 });
 function txt_check(){
   let txt=$("#txtname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#spanname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#spanname").hide();

   }
 }

 $("#sub").click(function(){
   txt_err = true;
         txt_check();

     if((txt_err==true)){
        return true;
     }
     else{return false;}
  });

</script>
<script>

//TEXT VALIDATION
$("#lname").hide();
  $("#lstname").keyup(function(){
   txt_check1();
 });
 function txt_check1(){
   let txt=$("#lstname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#lname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#lname").hide();

   }
 }

 $("#sub").click(function(){
   txt_err = true;
         txt_check1();

     if((txt_err==true)){
        return true;
     }
     else{return false;}
  });
  
    //PAN card validation
    $(document).ready(function(){
     $("#spanCard").hide();
      $("#txtPANCard").keyup(function(){
       pan_check();
     });
     function pan_check(){
       let pancard=$("#txtPANCard").val();
       let vali =/([A-Z]){5}([0-9]){4}([A-Z]){1}$/;
       if(!vali.test(pancard)){
          $("#spanCard").show().html("*Invalid Pan No").css("color","red").focus();
       pan_err=false;
       return false;
       }
       else{
           $("#spanCard").hide();
       }
     }

     $("#sub").click(function(){
             pan_err = true;
           pan_check();

         if((pan_err==true)){
            return true;
         }
         else{return false;}
      });
    });

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
<script>
 
  function get(val){
$.ajax({
  type:'POST',
  url:'api.php',
  data:'department='+val,
  success:function(html){
    $('#designation').html(html);
  }
});
  }
</script>


</body>
</html>