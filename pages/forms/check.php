<?php
include("../include/config.php");
if(isset($_POST['submit'])){
  $title=$_POST['name'];
  $description=$_POST['description'];
  $description = $_POST['description'];
  date_default_timezone_set('Asia/Kolkata');
  $date=date("Y-m-d H:i:s");
  $status= 1;
  $dnk=$_FILES['image']['tmp_name'];
  $loc="image/policy_image/";
  $added_by='Divya';


    $allowTypes = array('jpg','png','jpeg','gif'); 
    $statusMsg = $errorMsg = $insertValuesSQL = $errorUpload = $errorUploadType = ''; 
    $fileNames = array_filter($_FILES['image']['name']); 
        foreach($_FILES['image']['name'] as $key=>$val){ 
            $fileName = basename($_FILES['image']['name'][$key]); 
            $filw=$_FILES['image']['name'][$key];
            $targetFilePath = $loc . $fileName; 
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION); 
            if(in_array($fileType, $allowTypes)){ 
                if(move_uploaded_file($_FILES["image"]["tmp_name"][$key], $targetFilePath)){ 
                    $insertValuesSQL .= "('".$fileName."', NOW()),"; 
                }else{ 
                    $errorUpload .= $_FILES['image']['name'][$key].' | '; 
                } 
            }else{ 
                $errorUploadType .= $_FILES['image']['name'][$key].' | '; 
            } 
        if(!empty($insertValuesSQL)){ 
            $insertValuesSQL = trim($insertValuesSQL, ','); 
            $insert = $conn->query("INSERT INTO policies (title,description,image,create_date,status,added_by) VALUES('$title','$description','$insertValuesSQL','$date','$status','$added_by')"); 
            if($insert){ 
                $statusMsg = "Files are uploaded successfully.".$errorMsg; 
            }else{ 
                $statusMsg = "Sorry, there was an error uploading your file."; 
            } 
        }else{ 
            $statusMsg = "Upload failed! ".$errorMsg; 
        } 
    }



  // $extension=substr($file,strlen($file)-4,strlen($file));
  // $allowed=array(".jpg",".png",".gif","jpeg");
  // if(!in_array($extension,$allowed)){
  //   echo "<script>alert('Invalid Image Format. Only jpg, jpeg, png and gif format allowed')</script>";
  // }
  // else{
  //   foreach($file as $key=>$val){
  //     move_uploaded_file($dnk,$loc);
  //   }
   
  //   $query="INSERT INTO policies (title,description,image,create_date,status) VALUES('$title','$description',' $file','$date','$status')";
  //   $result=mysqli_query($conn,$query);
  //   if($result){
  //     echo "<script>alert('Policy Added Successfully')</script>";
  //     echo "<script>window.open('policies.php','_self')</script>";
  //   }
  // }
 
 
   
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
                               <th>Image</th>
                              </thead>
                              <tbody>
                              <?php
                                $sql = mysqli_query($conn,"SELECT * FROM policies ");
                                while($arr=mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                  <input type="hidden" name="id" value="<?php echo $arr['id']; ?>">
                                  <td><?php echo $arr['title']; ?></td>
                                  <td><?php echo $arr['create_date']; ?></td>
                                  <td><?php echo $arr['added_by']; ?></td>
                                  <td><img src="image/policy_image/<?php echo $arr['image']; ?>" width="50px" height="50px"></td>
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
