<?php
include("../include/config.php");
if(isset($_POST['submit'])){
 $title=$_POST['title'];
  $start_date=$_POST['start_date'];
  $end_date=$_POST['end_date'];
  $instructor= implode(',',$_POST['department_id']);
  $summary=$_POST['summary'];
  $description=mysqli_real_escape_string($conn,$_POST['description']);
$sql=mysqli_query($conn,"update announcement set title='$title',
start_date='$start_date',
end_date='$end_date',
department_id='$instructor',
summary='$summary',
description='$description' where id='$_GET[eid]'");
  if($sql==1){
    header("location:announcement.php");
  }
  else{echo "<script>alert('Failed to Add $title $start_date $instructor  $summary $description $end_date' )</script>";
    
  }
}

$did="";
$name="";
$summary="";
$end_date="";
$start_date="";
$title="";
$description="";
if(isset($_GET['eid'])){
  $eid = $_GET['eid'];
  $sql = mysqli_query($conn,"SELECT * from announcement where id = '$eid'");
  $row = mysqli_fetch_assoc($sql);
  $did=$row['id'];
  $name=$row['department_id'];
  $description=$row['description'];
  $summary=$row['summary'];
  $end_date=$row['end_date'];
  $start_date=$row['start_date'];
  $title=$row['title'];
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
  <link rel="stylesheet" href="../../plugins/kendo/kendo.min.css">
  <link rel="stylesheet" href="../../plugins/kendo/kendo.bootstrap.css">
  <!-- include plugin -->


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
  <div class="card mb-2">
    <div id="accordion">
      <div class="card-header card-header1">
        <h5 class="card-title card-title1">Update Announcement </h5>
      </div>
                  <form  name="add_announcement" id="xin-form" autocomplete="off" method="post" accept-charset="utf-8">
      <div class="card-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label for="title">
                  Title <span class="text-danger">*</span>
                </label>
                <input class="form-control" placeholder="Title" name="title" type="text" value="<?php echo $title; ?>"required>
              </div>
              </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="start_date">
                      Start Date <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <input class="form-control date" placeholder="Start Date" name="start_date" type="date" value="<?php echo $start_date; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="form-group">
                    <label for="end_date">
                      End Date <span class="text-danger">*</span>
                    </label>
                    <div class="input-group">
                      <input class="form-control date" placeholder="End Date" name="end_date" type="date" value="<?php echo $end_date; ?>" required>
                      <!-- <div class="input-group-append"><span class="input-group-text"><i class="fas fa-calendar-alt"></i></span></div> -->
                    </div>
                  </div>
                </div>
                
            <div class="col-md-6">
              <div class="form-group" id="department_ajax">
                <label for="department" class="control-label">
                  Department                </label>
                  <select id="choices-multiple-remove-button" name="department_id[]" multiple required>
                  <option value="<?php echo $name; ?>" selected='selected' style="font-size:24px"><?php echo $name; ?></option>
                  <?php 
                //    if(isset($_GET['eid'])){ 
                //   $links = array();
                //                             $parts = explode(',', $arr['department_id']);
                //                             foreach ($parts as $tag)
                //                             {
                //                                 $links[] = "<option value=".$tag." selected='selected'>".$name."</option>";
                //                             }
                //                             echo implode(" ", $links);
                //                         }?>
                    
                    <?php
                    $sql=mysqli_query($conn,"select * from department");
                    while($row=mysqli_fetch_array($sql)){
                      echo '<option value="'.$row['name'].'">'.$row['name'].'</option>';
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
                <input type="text" class="form-control" value="<?php echo $summary; ?>" placeholder="Summary" name="summary" id="summary">
              </div>
            </div>
            <div class="col-md-12">
                  <div class="form-group">
                    <label for="description">
                      Description                    </label>
                    <textarea class="form-control editor" placeholder="Description" id="summernote" name="description" cols="8" rows="5" id="description"><?php echo $description; ?></textarea>
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
            <!-- /.col (left) -->
          

        <!-- Main row -->
       
        <!-- /.row -->
      </div><!--/. container-fluid --></div>
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
