<?php
include("../include/config.php");
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

 <?php include("../include/header.php"); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Employee Exit</li>
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
                <div class="d-flex flex-row align-items-start hoverTitles ">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg 	fas fa-sign-out-alt"></i>
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
                <div class="d-flex flex-row align-items-start hoverTitles active1">
                  <i class="nav-link pt-1 mt-1 pr-2 mr-2 fa-lg fa fa-bars"></i>
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
                <form method="post" enctype="multipart/form-data" action="api.php">
                <div class="row my-3">
                  <div class="col-md-8">
                    <div class="card card1">
                      <div class="card-header card-header1">
                        <h5 class="card-title">Add New Employee</h5>
                        <div class="card-tools">
                          <button type="button" class="btn btn-primary btn-sm"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                          <i class="fas fa-minus"></i> Hide</button>
                        </button>
                          </button>
                        </div>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <div class="row my-3">
                          <div class="col-lg-6">
                            <label>Employee to Exit <sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <select class="form-control select2" name="emp_name" style="width: 100%;">
                              <option>select employee name</option>
                              <?php $sql=mysqli_query($conn,"select * from employee");
                              while($dnk=mysqli_fetch_array($sql)){
                              ?>
                                <option value="<?php echo $dnk['fname']." ".$dnk['lname']; ?>"><?php echo $dnk['fname']." ".$dnk['lname']; ?></option>
                              <?php } ?>
                              </select>
                            </div>
                            <!-- /input-group -->
                          </div>
                          <div class="col-lg-6">
                            <label>Exit Date <sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                              <input type="date" class="form-control " name="exit_date" placeholder="Exit Date"/>
                              <!-- <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                  <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                              </div> -->
                          </div>
                          </div>
                        </div>

                        
                        <div class="row my-3">
                          <div class="col-lg-4">
                            <label>Exit Type<sup><b style="color:red;">*</b></sup></label>
                            <select class="form-control select2" name="exit_type" style="width: 100%;" placeholder="Office Shift">
                              <option selected="selected" disabled>Type Of Exit</option>
                              <?php $sql=mysqli_query($conn,"select * from exit_type");
                              while($dnk=mysqli_fetch_array($sql)){
                              ?>
                                <option value="<?php echo $dnk['id']; ?>"><?php echo $dnk['type']; ?></option>
                              <?php } ?>
                            </select>
                            <!-- /input-group -->
                          </div>
                          <!-- /.col-lg-4 -->
                          <div class="col-lg-4">
                            <label>Exit Interview<sup><b style="color:red;">*</b></sup></label>
                            <select class="form-control select2" name="exit_int" style="width: 100%;" placeholder="Office Shift">
                              <option selected="selected">Yes</option>
                              <option>No</option>
                            </select>
                            <!-- /input-group -->
                          </div>
                          <div class="col-lg-4">
                            <label>Disable Account<sup><b style="color:red;">*</b></sup></label>
                            <div class="input-group">
                              <select class="form-control select2" name="disable_acc" style="width: 100%;">
                                <option selected="selected">Yes</option>
                                <option>No</option>
                              </select>
                            </div>
                          </div>
                        </div>
                   

                    <div class="row my-3">     
                      <div class="col-lg-12">
                          <label>Description<sup><b style="color:red;">*</b></sup></label>
                          <div class="form-group">
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Description" name="desc"></textarea>
                          </div>
                      </div>
                      
                    </div>      
                        <div class="card-footer">
                          <button type="button" id="reset" class="btn btn-default"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Reset</button>
                          <button type="submit" id="submit" class="btn btn-primary" name="exitSave">Save</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="card card1">
                      <div class="card-header card-header1">
                        <h5 class="card-title card-title1">Profile Picture</h5>
                      </div>
                      <div class="card-body card-body1">
                       <label>Profile Picture<sup><b style="color:red;">*</b></sup></label>
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="file" accept="image/png, image/jpeg, image/jpg">
                          <label class="custom-file-label">Choose file...</label>
                          <small class="text-muted">Upload files only: gif,png,jpg,jpeg</small>
                        </div>
                      </div>
                    </div>
                  </div>
  </form>
                </div>
              </div>



              <div class="card">
                <div class="card-header">
                  <h5 class="card-title">List All Employees</h5>
                  <div class="card-tools">
                   <a href="Exit-Types.php"> <button type="button" title="Grid view" class="btn btn-primary btn-sm">
                      <i class="fas fa-plus"></i> Exit Type</button></a>
                    
                    <button type="button" class="btn btn-primary btn-sm"  data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                      <i class="fas fa-plus"></i> Add New</button>
                    
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" aria-describedby="example1_info">
                              <thead>
                               <tr>
                               <th><i class="fas fa-user-alt"></i> EMPLOYEE TO EXIT</th>
                               <th>EXIT TYPE</th>
                               <th><i class="fas fa-calendar"></i> EXIT DATE</th>
                               <th>EXIT INTERVIEW</th>
                               <th>DISABLE ACCOUNT</th>
                               <th>ACTION</th>
                              </thead>
                              <tbody>
                                <?php
                                $query=mysqli_query($conn,"select * from exit_employee");
                                while($row=mysqli_fetch_array($query)){
                                  $id=$row['id'];?>
                                <tr>
                                  
                                  <td><?php echo $row['name']; ?></td>
                                  <td><?php echo $row['type']; ?></td>
                                  <td><?php echo $row['date']; ?></td>
                                  <td><?php echo $row['interview']; ?></td>
                                  <td><?php echo $row['disable']; ?></td>
                                  <td><button class="btn btn-sm btn-primary usereditid" data-id='<?php echo $row['id']; ?>'><i class="fas fa-pen"></i></button>
                                  <button class="btn btn-sm btn-success userinfo ml-1" data-id='<?php echo $row['id']; ?>' ><i class="fa fa-eye"></i></button>
                                  <a href="check.php?did=<?php echo $row['id']; ?>" class="btn btn-sm btn-info"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                                      <?php } ?>
                              </tbody>
                             <tfoot>

                             </tfoot>
                            </table>
                          </div>
                        </div>

                      
  <!-- edit modal -->
  <div class="modal fade" id="dnkModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document" style="max-width:800px">
    
  <div class="modal-content" style="width:max-content;margin:auto;">
        <div class="modal-header">
          <div>
        <h6 class="modal-title">Edit Employee Exit Information</h6>
        <p style="color:grey;">We need below required information to update this record.</p>
                                </div>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        </div>
        <form method="post" action="check.php">
        <div class="modal-body">
        
        </div>
                                </form>
      </div>
      
    </div>
  </div>   
  <!-- editmodal -->
        
    <!-- view modal -->
    <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
        <h4 class="modal-title">View Employee Exit Information</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
        
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>   
  <!-- view modal  -->
       
  
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
<?php include("../include/footer.php"); ?>
  <!-- Main Footer -->
  </div>
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
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<!-- Page specific script -->
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
$(document).ready(function(){
$('.userinfo').click(function(){
  let userid = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {userid: userid},
   success: function(response){ 
     $('.modal-body').html(response);
     $('#myModal').modal('show'); 
   }
 });
});

$('.usereditid').click(function(){
  let usereditid = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {usereditid: usereditid},
   success: function(response1){ 
     $('.modal-body').html(response1);
     $('#dnkModal').modal('show'); 
   }
 });
});

$(".modal2").click(function(){
  $(this).modal('hide');
})
});
</script>

</body>
</html>