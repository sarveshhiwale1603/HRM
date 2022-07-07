<?php 
include('../include/config.php');


    if(isset($_POST['submit']))
    {
        
        $leave_type = $_POST['leave_type'];
        $days_per_year = $_POST['days_per_year'];
        $requires_approval = $_POST['requires_approval'];

        $sql="INSERT INTO `leave_type`(`leave_type`, `days_per_year`, `requires_approval`) VALUES ('$leave_type','$days_per_year','$requires_approval')";
        if (mysqli_query($conn, $sql)){
          echo "<script> alert ('New record has been added successfully !');</script>";
       } else {
          echo "<script> alert ('connection failed !');</script>";
       }
      
    }
    if(isset($_GET['delid'])){
      $id=mysqli_real_escape_string($conn,$_GET['delid']);
      $sql=mysqli_query($conn,"delete from leave_type where id='$id'");
      if($sql=1){
          header("location:leave.php");
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
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
 
  <style>
    .bg{
      border-top-left-radius: 10%;
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
        <div class="row">
            <div class="col-md-4 grid-margin">
                <div class="card-body">
                  <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-square-plus"></i>
                    <div class="ms-3">
                      <a href="leave_request.php" target="_self" class="Department"><h6>Manage Leaves</a></h6>
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
                      <h6><a href="leave.php" target="_self" >Leave Type</a></h6>
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
                      <h6 ><a href="calendar2.php" target="_self" style="text-decoration:none" required>Calendar</a></h6>
                      <p>Leave Calendar</p>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- Info boxes -->
        <hr class="border-light m-0 mb-3">
        <div class="row m-b-1 animated fadeInRight">
            <div class="col-md-4">
            <div class="card">
              <div class="card-header with-elements">
                Add New        
                Leave Type         </div>
              <div class="card-body">
     <form   method="post">
        <input type="hidden"  value="" />
        <input type="hidden" name="user_id" value="0" style="display:none;" required/>
                <div class="form-group">
                  <label for="name">
                    Leave Type          
                      <span class="text-danger">*</span> </label>
                  <input type="text" class="form-control" name="leave_type" id="leave" placeholder="Leave Type" required>
                </div>
                <div class="form-group">
                  <label for="name">
                    Days per year       
                         <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" name="days_per_year" id="dpy" placeholder="Days per year" required>
                </div>
                <div class="form-group">
                  <label for="gender" class="control-label">
                    Requires Approval          </label>
                  <select class="form-control" name="requires_approval" id="requires"  data-placeholder="Requires Approval">
                    <option value="YES">
                    Yes            </option>
                    <option value="NO">
                    No            </option>
                  </select>
                  <small class="form-text text-muted">
                  If select No, the leave will be automatically approved for this leave type.          </small> </div>
                  <div class="card-footer text-right">
                    <button type="submit" onclick="function()" id="submit" name="submit" class="btn btn-primary">
                    Save        </button>
                  </div>
              </div>
              
              <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>    </div>
              
          </div>
          <div class="col-md-8">
            <div class="card user-profile-list">
              <div class="card-header with-elements"> <span class="card-header-title mr-2"><strong>
                List All        </strong>
                Leave Type        </span> </div>
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
                  <table class="datatables-demo table table-striped table-bordered" id="xin_table">
                    <thead>
                      <tr>
                        <th><i class="fas fa-braille"></i>
                          Leave Type</th>
                        <th> Days per year</th>
                        <th> Requires Approval</th>
                        <th> Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php    
                       $sql1=mysqli_query($conn,"SELECT * FROM leave_type"); 
                        while($row=mysqli_fetch_array($sql1)){
                          ?>
   


                      <tr>
                        <td><?php echo $row['leave_type']; ?></td>
                        <td><?php echo $row['days_per_year']; ?></td>
                        <td><?php echo $row['requires_approval']; ?></td>
                        <td><button class="btn btn-sm btn-primary button2" data-id='<?php echo $row['id']; ?>'><i class="fas fa-pen"></i></button>&nbsp;&nbsp;
                        
                        <a href="leave.php?delid=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger btn-rounded btn-icon btn-sm"  style="color: aliceblue"> <i class="fas fa-trash"></i> </button></a></td>       
                      </tr>
                      <?php } ?>

                    </tbody>
                  </table>
                </div>
              
              
              
             
                <div class="row">
                  <div class="col-md-9">
                    <div class="dataTables_info" id="example1_info" role="status">Showing 1 to 5 of 5 records

                    </div>
                  </div>
                    <div class="col-md-3">
                      <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                        <ul class="pagination" style="margin:auto">
                          <li class="paginate_button page-item previous disabled" id="example1_previous">
                            <a href="#"  class="page-link">Previous</a>
                          </li>
                            
                              <li class="paginate_button" name="next" id="example1_next">
                                <a href="#"class="page-link">Next</a>
                              </li>
                            </ul>
                      </div>
                    </div>
                  </div> </div>
            
       <!-- ################################################ -->
             
       <div class="modal fade closemaual" id="dnkModall" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form method="post" action="check.php">
      <div class="modal-body bodyy">
      </div>
    <div class="modal-footer">
      <button type="submit" class="btn btn-primary" name="leavetypeEdit">Save changes</button>
    </div>
                                                            </form>
  </div>
  </div>
</div>

<!-- ################################################ -->
       
        
        <!-- /.row -->

         
         
           

        
        <!--/. container-fluid -->
    </section>
    <!-- /.content -->
 
  </div>
  <!-- /.content-wrapper -->

 

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
<script src="../../dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../../dist/js/pages/dashboard2.js"></script>
</script>
<script>
$('.btn-print-invoice').on('click', function() {
var link2 = document.createElement('link');
link2.innerHTML =
'<style>@media print{*,::after,::before{text-shadow:none!important;box-shadow:none!important}a:not(.btn){text-decoration:underline}abbr[title]::after{content:" ("attr(title) ")"}pre{white-space:pre-wrap!important}blockquote,pre{border:1px solid #adb5bd;page-break-inside:avoid}thead{display:table-header-group}img,tr{page-break-inside:avoid}h2,h3,p{orphans:3;widows:3}h2,h3{page-break-after:avoid}@page{size:a3}body{min-width:992px!important}.container{min-width:992px!important}.navbar{display:none}.badge{border:1px solid #000}.table{border-collapse:collapse!important}.table td,.table th{background-color:#fff!important}.table-bordered td,.table-bordered th{border:1px solid #dee2e6!important}.table-dark{color:inherit}.table-dark tbody+tbody,.table-dark td,.table-dark th,.table-dark thead th{border-color:#dee2e6}.table .thead-dark th{color:inherit;border-color:#dee2e6}}.page-header{display:none;}</style>';

document.getElementsByTagName('head')[0].appendChild(link2);
window.print();
});
</script>
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
$(document).ready(function(){
$('.button2').click(function(){
  let dnk1 = $(this).data('id');

  $.ajax({
   url: 'check.php',
   type: 'post',
   data: {dnk1: dnk1},
   success: function(response3){ 
     $('.bodyy').html(response3);
     $('#dnkModall').modal('show'); 
   }
 });
});


});
</script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>

let submitaminities = document.getElementById("submit");
submitaminities.addEventListener("click", function(){
 let leave = document.getElementById("leave").value;
 let dpy = document.getElementById("dpy").value;
 let requires = document.getElementById("requires")
 


if(leave == "" || dpy == "" || requires == "" ){
    swal("Oops...", "Please fill all the fields", "error");
}
    else{
        swal("Saved!", "HRM Save", "success");
    }
});


  </script>
</body>
</html>
