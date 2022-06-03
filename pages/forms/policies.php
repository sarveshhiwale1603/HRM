<?php
include("../include/config.php");
if(isset($_POST['submit'])){
  $title=$_POST['name'];
  $description=$_POST['description'];
  $description = $_POST['description'];
  date_default_timezone_set('Asia/Kolkata');
  $date=date("Y-m-d H:i:s");
  $status= 1;
  $file=$_FILES['image']['name'];
  // $dnk=$_FILES['image']['tmp_name'][$key];
  $loc="image/policy_image/";
  $added_by='Divya';

  // $extension=substr($file,strlen($file)-4,strlen($file));
  // $allowed=array(".jpg",".png",".gif","jpeg");
  // if(!in_array($extension,$allowed)){
  //   echo "<script>alert('Invalid Image Format. Only jpg, jpeg, png and gif format allowed')</script>";
  // }
  // else{
    $uploaded_images = array();
    foreach($_FILES['image']['name'] as $key=>$val){
      $upload_file = $loc.$_FILES['image']['name'][$key];
      $filename = $_FILES['image']['name'][$key];
      if(move_uploaded_file($_FILES['image']['tmp_name'][$key],$upload_file)){
        $uploaded_images[] = $upload_file;
        $insert_sql = "INSERT INTO policies (title,description,image,create_date,status,added_by) VALUES('$title','$description',' $filename','$date','$status','$added_by')";
        mysqli_query($conn, $insert_sql) or die("database error: ". mysqli_error($conn));
        if($insert_sql){
          echo "<script>alert('Policy Added Successfully')</script>";
          echo "<script>window.open('policies.php','_self')</script>";
        }
      }


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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
                      <a href="announcement.php" target="_self" class="Department list-item ">Announcement</a>
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
                      <a href="policies.php" target="_self" class="Department list-item active1">Policies</a>
                      <p class="list-para">Set up Policies</p>
                    </div>
                </div>
            </div>
        </div>
          <!-- /.col -->
        </div>
        
        <!-- /.row -->
        <div class="row">
            <div class="col-md-4">
              <div class="card card1">
                <div class="card-header card-header1">
                  <h6 class="card-title card-title">Add New Policy</h6>
                </div>
                
                <div class="card-body card-body1">
                  <!-- Date dd/mm/yyyy -->
                  <form method="post" enctype="multipart/form-data">
                  
                  <div class="form-group">
                    <label>Title <span style="color:red">*</span></label>
                      <input type="text" name="name" class="form-control" placeholder="Name">
                    <!-- /.input group -->
                  </div>
                  <div class="form-group" >
                    <label>Description <span style="color:red">*</span></label>
                      <input type="text" name="description" class="form-control" placeholder="Department Head">
                    <!-- /.input group -->
                  </div>
                  <div class="form-group" >
                    <label>Attachment <span style="color:red">*</span></label>
                      <input type="file" name="image[]" multiple>
                      <p style="font-size:12px;margin-top:2px">Upload files only: gif,png,jpg,jpeg</p>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="card-footer card-footer1" >
                  <button type="submit" id="submit" class="btn btn-primary btn-md" name="submit">Save</button>
                </div>
                </form>
                <!-- /.card-body -->
              </div>

              <!-- /.card -->
              <!-- /.card -->
            </div>
            <!-- /.col (left) -->
            <div class="col-md-8">
              <div class="card card1">
                <div class="card-header card-header1">
                  <h3 class="card-title card-title1">List All Policies</h3>
                  <a href="all_policies.php"class="collapsed btn btn-primary btn-sm float-right"> <i class="fa fa-plus">&nbsp;&nbsp;</i>view Policies</a> 
                </div>
                <!-- /.card-header -->
                <div class="card-body card-body1">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                   
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="myTable" class="table1" >
                              <thead class="tBackColor">
                               <tr>
                               <th>TITLE </th>
                               <th><i class="fa fa-user" style="font-weight:300;font-size:small;">&nbsp;</i>CREATED DATE</th>
                               <th><i class="fa fa-calendar-alt" style="font-weight:300;font-size:small;">&nbsp;</i>ADDED BY</th>
                              
                              </thead>
                              <tbody>
                              <?php
                                $sql = mysqli_query($conn,"SELECT * FROM policies group by title                                                                          ");
                                while($arr=mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                  <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                                  <td><?php echo $arr['title']; ?></td>
                                  <td><?php echo $arr['create_date']; ?></td>
                                  <td><?php echo $arr['added_by']; ?></td>
                                 
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

  <!-- Main Footer -->
  <?php
  include('../include/footer.php');
  ?>
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
</body>
</html>
