<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");

}
if(isset($_POST['submit'])){
  $department = $_POST['department'];
  $name = $_POST['name'];
  $description = $_POST['description'];
  date_default_timezone_set('Asia/Kolkata');
  $date=date("Y.m.d");
  if(isset($_GET['eid'])){
    $dnk=mysqli_query($conn,"update designation set department_id='$department',designation_name='$name',description='$description' where id='$_GET[eid]'");
  }else{
  $sql = "INSERT INTO designation (department_id, designation_name, description,created_date,status) VALUES ('$department', '$name', '$description','$date','1')";
  $dnk = mysqli_query($conn, $sql);
  }
  if($dnk){
    header("location:designation.php");
  }else{
    echo "<script>alert('something went wrong');</script>";
  }
}

$did="";
$name="";
$designation_name="";
$description="";
if(isset($_GET['eid'])){
  $eid = $_GET['eid'];
  $sql = mysqli_query($conn,"SELECT designation.department_id as did,designation.designation_name as designation_name,designation.description as description,department.name as name FROM designation inner join department on designation.department_id = department.id where designation.id = '$eid'");
  $row = mysqli_fetch_assoc($sql);
  $did=$row['did'];
  $name=$row['name'];
  $designation_name=$row['designation_name'];
  $description=$row['description'];
}

if(isset($_GET['delid'])){
  $delid = $_GET['delid'];
  $sql = mysqli_query($conn,"DELETE FROM designation WHERE id = '$delid'");
  if($sql){
    header ("location:designation.php"); 
  }
  else{ echo "<script>alert('Failed to Delete')</script>"; }
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
          <div class="col-sm-8">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Designation</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-4">
          <div class="text-md-right mr-5 d-flex float-right"> <a class="btn btn-smb btn-outline-primary rounded-pill" href="logout.php"><i class="fa fa-sign-out fa-spin fa-1x" aria-hidden="true"></i>
            Logout            </a> </div></div>
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
                      <a href="designation.php" target="_self" class="Department list-item active1">Designation</a>
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
                      <a href="policies.php" target="_self" class="Department list-item ">Policies</a>
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
                  <h6 class="card-title card-title"><b>Add New</b> Designation</h6>
                </div>
                
                <div class="card-body card-body1">
                  <!-- Date dd/mm/yyyy -->
                  <form method="post">
                  <div class="form-group">
                    <label>Department *</label>
                      <select name="department" class="form-control" id="department" required>
                        <option value="">Select Department</option>
                        <?php if(isset($_GET['eid'])){ ?>
                        <option value="<?php echo $did;?>" selected ><?php echo $name; ?></option>
                        <?php } ?>
                        <?php
                          $sql = "SELECT * FROM department";
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result)){
                            echo "<option value='".$row['id']."'>".$row['name']."</option>";
                          }
                        ?>
                     </select>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group">
                    <label>Designation Name <span style="color:red">*</span></label>
                      <input type="text" name="name" id="designation" value="<?php echo $designation_name ?>" class="form-control" placeholder="Name" required>
                    <!-- /.input group -->
                  </div>
                  <div class="form-group" >
                    <label>Description <span style="color:red">*</span></label>
                      <input type="text" name="description" id="description" value="<?php echo $description ?>" class="form-control" placeholder="Department Head" required>
                    <!-- /.input group -->
                  </div>
                </div>
                <div class="card-footer card-footer1" >
                  <button type="submit" onclick="function()" id="submit" class="btn btn-primary btn-md" name="submit">Save</button>
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
                  <h3 class="card-title card-title1"><b>List All</b> Designation</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body card-body1">
                  <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                   
                        <div class="row">
                          <div class="col-sm-12">
                            <table id="myTable" class="table1" >
                              <thead class="tBackColor">
                               <tr>
                               <th>DESIGNATION </th>
                               <th><i class="fa fa-user" style="font-weight:300;font-size:small;">&nbsp;</i>DEPARTMENT </th>
                               <th><i class="fa fa-calendar-alt" style="font-weight:300;font-size:small;">&nbsp;</i>CREATED AT</th>
                               <th>Action</th>
                              </thead>
                              <tbody>
                              <?php
                                $sql = mysqli_query($conn,"SELECT designation.id as id,designation.designation_name as designation_name,designation.created_date as created_date,department.name as name FROM designation inner join department on designation.department_id = department.id");
                                while($arr=mysqli_fetch_array($sql)){
                                ?>
                                <tr>
                                  <td><?php echo $arr['name']; ?></td>
                                  <td><?php echo $arr['designation_name']; ?></td>
                                  <td><?php echo $arr['created_date']; ?></td>
                                  <td><a href="designation.php?eid=<?php echo $arr['id']; ?>"><i class="fas fa-pen"></i></a>&nbsp;&nbsp;
                                  <a href="designation.php?delid=<?php echo $arr['id']; ?>"onclick="return confirm('Are you sure you want to delete this record')"><i class="fa fa-trash"></i></a></td>
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

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
  
let submitaminities = document.getElementById("submit");
submitaminities.addEventListener("click", function(){
let department = document.getElementById("department").value;
 let designation = document.getElementById("designation").value;
 let description = document.getElementById("description")
if(department == "" || designation == "" description == "" ){
    swal("Oops...", "Please fill all the fields", "error");
}
    else{
        swal("Saved!", "HRM Save", "success");
    }
});
  </script>
</body>
</html>
