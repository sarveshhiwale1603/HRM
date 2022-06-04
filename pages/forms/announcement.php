<?php
include("../include/config.php");
if(isset($_POST['submit'])){
 $title=$_POST['title'];
  $start_date=$_POST['start_date'];
  $end_date=$_POST['end_date'];
  // $department_id=$_POST['department_id'];
  $instructor= implode(',',$_POST['department_id']);
  $summary=$_POST['summary'];
  $description=$_POST['description'];
  $sql = mysqli_query($conn,"INSERT INTO announcement (title, start_date, end_date, department_id, summary, description,status) VALUES ('$title', '$start_date','$end_date','$instructor','$summary','$description','1')");
  if($sql==1){
    echo "<script>alert('Successfully Added')</script>";
  }
  else{echo "<script>alert('Failed to Add $title $start_date $instructor  $summary $description $end_date' )</script>";
    
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
  <link rel="stylesheet" href="../../dist/css/style.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
  <link rel="stylesheet" href="../../plugins/kendo/kendo.min.css">
  <link rel="stylesheet" href="../../plugins/kendo/kendo.bootstrap.css">
  <!-- include plugin -->
  <script src="[folder where script is located]/[plugin script].js"></script>


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
              <li class="breadcrumb-item active">Designation</li>
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
                  <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-bars"></i>
                    <div class="ms-3">
                      <a href="department.php" target="_self" class="Department list-item ">Department</a>
                      <p class="list-para">Set up Department</p>
                    </div>
                </div>
                </div>
            </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
                <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-server"></i>
                    <div class="ms-3">
                      <a href="designation.php" target="_self" class="Department list-item ">Designation</a>
                      <p class="list-para">Set up Designation</p>
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
                    <i class="nav-link	fa fa-volume-down"></i>
                    <div class="ms-3">
                      <a href="announcement.php" target="_self" class="Department list-item active1">Announcement</a>
                      <p class="list-para">Set up Announcement</p>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.col -->
          <div class="col-md-3 grid-margin">
            <div class="card-body">
                <div class="d-flex flex-row align-items-start">
                    <i class="nav-link fa fa-bars"></i>
                    <div class="ms-3">
                      <a href="policies.php" target="_self" class="Department list-item ">Policies</a>
                      <p class="list-para">Set up Policies</p>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
        <div id="add_form" class="collapse add-form" data-parent="#accordion" style="">
  <div class="card mb-2">
    <div id="accordion">
      <div class="card-header card-header1">
        <h5 class="card-title card-title1">Add New Announcement </h5>
        <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-primary btn-sm float-right"> <i class="fa fa-minus">&nbsp;&nbsp;</i> Hide</a> 
      </div>
                  <form  name="add_announcement" id="xin-form" autocomplete="off" method="post" accept-charset="utf-8">
      <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">
                  Title <span class="text-danger">*</span>
                </label>
                <input class="form-control" placeholder="Title" name="title" type="text" value="">
              </div>
              </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="start_date">
                      Start Date <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <input class="form-control date" placeholder="Start Date" name="start_date" type="date" value="">
                      <!-- <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div> -->
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="end_date">
                      End Date <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <input class="form-control date" placeholder="End Date" name="end_date" type="date" value="">
                      <!-- <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div> -->
                    </div>
                  </div>
                </div>
                
            <div class="col-md-6">
              <div class="form-group" id="department_ajax">
                <label for="department" class="control-label">
                  Department                </label>
                  <select id="choices-multiple-remove-button" name="department_id[]" multiple>
                    <?php
                    $sql=mysqli_query($conn,"select * from department");
                    while($row=mysqli_fetch_array($sql)){
                      echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
                    }
                    ?>
            
        </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label for="summary">
                  Summary <span class="text-danger">*</span>
                </label>
                <input type="text" class="form-control" placeholder="Summary" name="summary" id="summary">
              </div>
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">
                      Description                    </label>
                    <textarea class="form-control editor" placeholder="Description" id="summernote" name="description" cols="8" rows="5" id="description"></textarea>
                  </div>
                </div>
          </div>
      </div>
      <div class="card-footer text-right mb-3 mr-3">
        <button type="reset" class="btn btn-light" href="#add_form" data-toggle="collapse" aria-expanded="false">Reset</button>&nbsp;
        <button type="submit" name="submit" class="btn btn-primary">Save</button>
      </div>
      <div style="display:none"><label>Bot Will Fill This Field</label><input type="text" name="ciapp_check" value=""/></div></form>    </div>
  </div>
</div>
            <!-- /.col (left) -->
           <!-- collapse end -->

                <div class="card user-profile-list">
  <div class="card-header card-header1">
    <h5 class="card-title card-title1"> List All Announcements</h5>
        <a  data-toggle="collapse" href="#add_form" aria-expanded="false" class="collapsed btn btn-primary btn-sm float-right" > <i class="fa fa-plus">&nbsp;&nbsp;</i>Add New</a> </div>
                <!-- /.card-header -->
                <div class="card-body card-body1">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                   
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="myTable" class="table1" >
                              <thead class="tBackColor">
                               <tr>
                               <th>TITLE</th>
                               <th><i class="fa fa-user" style="font-weight:300;font-size:small;">&nbsp;</i>DEPARTMENT </th>
                               <th><i class="fa fa-calendar" style="font-weight:300;font-size:small;">&nbsp;</i>START DATE</th>
                               <th><i class="fa fa-calendar" style="font-weight:300;font-size:small;">&nbsp;</i>END DATE</th>
                              </thead>
                              <tbody>
                              <?php
                                $sql = mysqli_query($conn,"SELECT * FROM announcement inner join department on announcement.department_id = department.id");
                                while($arr=mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                  
                                  <td><?php echo $arr['title']; ?></td>
                                  <td><ul></li><?php echo $arr['name']; ?></li></ul></td>
                                  <td><?php echo $arr['start_date']; ?></td>
                                  <td><?php echo $arr['end_date']; ?></td>
                                </tr>
                                <?php } ?>
                              </tbody>
                            
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
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <?php
  include('../include/footer.php');
  ?>
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
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script>$(document).ready( function () {
    $('#myTable').DataTable();
} );</script>
<script>$(document).ready(function(){
    
    var multipleCancelButton = new Choices('#choices-multiple-remove-button', {
       removeItemButton: true,
       
     }); 
    
    
});</script>
 <script type="text/javascript" src="../../plugins/kendo/kendo.all.js"></script>
    <script src="../../plugins/kendo/kindo.timezone.js"></script>
 <script>
		$(".editor").kendoEditor({
			resizable: {
				content: true,
				toolbar: true
			}
		});
        </script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.css">
<script src="https://cdn.jsdelivr.net/gh/bbbootstrap/libraries@main/choices.min.js"></script>
</body>
</html>
