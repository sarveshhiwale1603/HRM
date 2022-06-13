<?php include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
}?>
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../../dist/css/adminlte.css">
  <link rel="stylesheet" href="../../dist/css/style.css">
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

  <!-- Preloader -->
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
                  <a  href="employees.php">
                  <div class="d-flex flex-row align-items-start hoverTitles">
                  
                    <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fas fa-user-friends"></i>
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
                <div class="d-flex flex-row align-items-start active1">
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
                <div class="card container">

                  <div class="card-header">
                    <h5 class="card-title">Add New Office Shift</h5>
                    <div class="card-tools">
                      <!-- <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                        <i class="fas fa-th-large"></i></button> -->
                      <button type="button" class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        <i class="fas fa-minus"></i> Hide</button>
                    </div>
                  </div>
                  <form method="post" action="api.php">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Shift Name                <span class="text-danger">*</span> </label>
                          <input class="form-control" placeholder="Shift Name" name="shift_name" type="text" value="" id="name">
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Monday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="mondayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#mondayIn" name="monday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#mondayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Monday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="mondayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#mondayOut" name="monday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#mondayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Tuesday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="tuesdayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#tuesdayIn" name="tuesday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#tuesdayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Tuesday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="tuesdayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#tuesdayOut" name="tuesday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#tuesdayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Wednesday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="wednesdayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#wednesdayIn" name="wednesday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#wednesdayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Wednesday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="wednesdayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#wednesdayOut" name="wednesday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#wednesdayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Thursday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="thursdayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#thursdayIn" name="thursday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#thursdayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Thursday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="thursdayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#thursdayOut" name="thursday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#thursdayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Friday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="fridayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#fridayIn" name="friday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#fridayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Friday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="fridayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#fridayOut" name="friday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#fridayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>


                    <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Saturday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="saturdayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#saturdayIn" name="saturday_in"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#saturdayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Saturday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="saturdayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#saturdayOut" name="saturday_out"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#saturdayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div>

                    <!-- <div class="row">
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Sunday In Time                <span class="text-danger">*</span> </label>
                   
                          <div class="input-group" >
                            <div class="input-group date" id="sundayIn" data-target-input="nearest">
                              <input type="text" placeholder="In Time"  class="form-control datetimepicker-input" data-target="#sundayIn"/>
                              <div class="input-group-append">
                                  <div class="input-group-text" data-target="#sundayIn" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                  <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                              </div>
                              </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label for="shift_name">
                            Sunday Out Time                <span class="text-danger">*</span> </label>
                            <div class="input-group" >
                              <div class="input-group date" id="sundayOut" data-target-input="nearest">
                                <input type="text" placeholder="Out Time"  class="form-control datetimepicker-input" data-target="#sundayOut"/>
                                <div class="input-group-append">
                                    <div class="input-group-text" data-target="#sundayOut" data-toggle="datetimepicker" ><i class="far fa-clock"></i></div>
                                    <div class="input-group-append clear-time" data-clear-id="1"><span class="input-group-text text-danger"><i class="fas fa-trash-alt"></i></span></div>
                                </div>
                                </div>
                             
                            </div>
                        </div>
                      </div>
                    </div> -->


                    <div class="card-footer">
                      <button type="button" id="reset" class="btn btn-default" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Reset</button>
                      <button type="submit" id="submit" class="btn btn-primary" name="save_shift">Save</button>
                    </div>
                  </div>
                 
  </form>
                </div>
              </div>


              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">Add New Office Shift</h5>
                  <div class="card-tools">
                    <!-- <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-th-large"></i></button> -->
                    
                    <button type="button" class="btn btn-primary btn-sm" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="example1" class="table table-striped dataTable dtr-inline table-responsive" aria-describedby="example1_info">
                              <thead>
                               <tr>
                               <th>SHIFT</th>
                               <th>MONDAY</th>
                               <th>TUESDAY</th>
                               <th>WEDNESDAY</th>
                               <th>THURSDAY</th>
                               <th>FRIDAY</th>
                               <th>SATURDAY</th>
                               <th>SUNDAY</th>

                              </thead>
                              <tbody>
                             <?php $sql1=mysqli_query($conn,"SELECT * FROM shift_time ");
                              while($arr=mysqli_fetch_array($sql1)){
                                ?>
                                <tr>
                                  <td><?php echo $arr['shift']; ?></td>
                                  <td><?php echo $arr['monday_start_time'].' To '.$arr['monday_end_time']; ?></td>
                                  <td><?php echo $arr['tuesday_start_time'].' To '.$arr['tuesday_end_time']; ?></td>
                                  <td><?php echo $arr['wednesday_start_time'].' To '.$arr['wednesday_end_time']; ?></td>
                                  <td><?php echo $arr['thursday_start_time'].' To '.$arr['thursday_end_time']; ?></td>
                                  <td><?php echo $arr['friday_start_time'].' To '.$arr['friday_end_time']; ?></td>
                                  <td><?php echo $arr['saturday'].' To '.$arr['saturday_end_time']; ?></td>
                                  <td><?php echo "Holiday" ?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                             <tfoot>

                             </tfoot>
                            </table>
                          </div>
                        </div>
              <!-- <div class="row">
                <div class="col-md-10">
                  <div class="dataTables_info" id="example1_info" role="status">Showing 1 to 10 of 57 entries
                  </div>
                </div>
                  <div class="col-md-2">
                    <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                      <ul class="pagination">
                        <li class="paginate_button page-item previous disabled" id="example1_previous">
                          <a href="#"  class="page-link">Previous</a>
                        </li>
                          
                            <li class="paginate_button" name="next" id="example1_next">
                              <a href="#"class="page-link">Next</a>
                            </li>
                          </ul>
                    </div>
                  </div>
                </div>
              </div> -->
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
      </div><!--/. container-fluid -->
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


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
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

// MONDAY

  //mondayIn
  $('#mondayIn').datetimepicker({
      format: 'LT'
    })
// mondayOut
    $('#mondayOut').datetimepicker({
      format: 'LT'
    })

// TUESDAY
    
  //tuesdayIn
  $('#tuesdayIn').datetimepicker({
      format: 'LT'
    })
  // tuesdayOut
    $('#tuesdayOut').datetimepicker({
      format: 'LT'
    })

// Wednesday 

    //wednesdayIn
  $('#wednesdayIn').datetimepicker({
      format: 'LT'
    })
// wednesdayOut
    $('#wednesdayOut').datetimepicker({
      format: 'LT'
    })

// Thursday 

    //thursdayIn
  $('#thursdayIn').datetimepicker({
      format: 'LT'
    })
   // thursdayOut
    $('#thursdayOut').datetimepicker({
      format: 'LT'
    })

// FRIDAY

    //fridayIn
  $('#fridayIn').datetimepicker({
      format: 'LT'
    })
// fridayOut
    $('#fridayOut').datetimepicker({
      format: 'LT'
    })

// SATURDAY

    //saturdayIn
  $('#saturdayIn').datetimepicker({
      format: 'LT'
    })
// saturdayOut
    $('#saturdayOut').datetimepicker({
      format: 'LT'
    })

// SUNDAY

    //sundayIn
  $('#sundayIn').datetimepicker({
      format: 'LT'
    })
// sundayOut
    $('#sundayOut').datetimepicker({
      format: 'LT'
    })


    //mondayIn
  $('#mondayIn').datetimepicker({
      format: 'LT'
    })
// mondayOut
    $('#mondayOut').datetimepicker({
      format: 'LT'
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

<!-- <script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
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
</script> -->