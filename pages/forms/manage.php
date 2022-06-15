
<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");
} 


    if(isset($_POST['submit']))
    {
        $first_name = $_POST['first_name'];
        $last_name	 = $_POST['last_name'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $image=$_FILES['profile']['name'];
        $status="Active";
        date_default_timezone_set('Asia/Kolkata');
        $date1=date("Y-m-d H:i:s");
        $dnkpassword=password_hash($password,PASSWORD_BCRYPT);

        $extension=substr($image,strlen($image)-4,strlen($image));
$all_extension = array(".jpg","jpeg",".png",".gif");

        if(!in_array($extension,$all_extension)){
          $msg="Invalid File Format. Only .jpg,jpeg,.png,.gif,.PNG format allowed";
          echo "<script type='text/javascript'>alert('$msg');</script>";
      }else{
          $upload_marksheet=md5($image).$extension;
          $dnk=$_FILES['profile']['tmp_name'];
          $loc="image/manage_image/".$upload_marksheet;
          move_uploaded_file($dnk,$loc);

          $sql=mysqli_query($conn,"INSERT INTO `manage_client`(`first_name`,`last_name`,`password`,`contact`,`gender`,`email`,`username`,`profile`,`status`)VALUES ('$first_name','$last_name','$dnkpassword','$contact','$gender','$email','$username','$upload_marksheet','$status')");

          $sql=mysqli_query($conn,"INSERT INTO `login`(`name`,`lname`, `email`, `staff`, `password`, `status`, `create_date`) VALUES ('$first_name','$last_name','$email','client','$dnkpassword','1','$date1')");
          if ($sql){
            echo "<script> alert ('New record has been added successfully !');</script>";
         } else {
            echo "<script> alert ('connection failed !');</script>";
         }
      }

       
      
    }
    if(isset($_GET['delid'])){
      $id=mysqli_real_escape_string($conn,$_GET['delid']);
      $sql=mysqli_query($conn,"delete from attendance where id='$id'");
      if($sql=1){
          // header("location:manual-attendance.php");
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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <style>
      .bg{
        border-top-left-radius: 10%;
        color: aliceblue;
      }
       .snehal{
           margin-left:75%;
       }
       .imgset{
         border-radius: 50%;
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
          <div class="col-sm-12">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Clients
              </li>
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
       
        
        <!-- /.row -->
      <div class="collapse" id="collapseExample">

            <div class="row my-3">
              <div class="col-md-8">
                <div class="card">
                  <div class="card-header">
                    <h5 class="card-title">Add Leave</h5>
                    <div class="card-tools">
                     
                      <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" class="btn btn-primary btn-sm collapsed"><i class="fas fa-minus"></i>
                       Hide      </a>
                    </button>
                      </button>
                    </div>
                  </div>
                  <form method="POST" enctype="multipart/form-data" >                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="company_name">
                              First Name                    <span class="text-danger">*</span> </label>
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                              <input class="form-control" placeholder="First Name" id="fstname" name="first_name" type="text" required>

                            </div>
                            <span id="fname"></span>

                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="last_name" class="control-label">
                              Last Name                    <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                              <input class="form-control" placeholder="Last Name" id="lstname" name="last_name" type="text" required>

                            </div>
                            <span id="lname"></span>

                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="website">
                              Password                    <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-eye-slash"></i></span></div>
                              <input class="form-control" placeholder="Password" name="password" type="text" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="contact_number">
                              Contact Number                    <span class="text-danger">*</span></label>
<input type="text" class="form-control" mainlength="10" maxlength="10" name="contact" placeholder="Contact Number" required>                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                            <label for="gender" class="control-label">
                              Gender                  </label>
                            <select class="form-control" name="gender" data-plugin="select_hrm" data-placeholder="Gender" required>
                              <option value="Male">
                              Male                    </option>
                              <option value="Female">
                              Female                    </option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">
                              Email                    <span class="text-danger">*</span> </label>
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-envelope"></i></span></div>
                              <input class="form-control" placeholder="Email" name="email" type="email" required>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="email">
                              Username                    <span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="input-group-prepend"><span class="input-group-text"><i class="fas fa-user"></i></span></div>
                              <input class="form-control" placeholder="Username" name="username" type="text" required>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.row -->


                    <!-- /.row -->
    

                   
                    <!-- /.row -->


                   
               
                    
                    <div class="card-footer">
                      <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" class="collapsed btn  btn-default "> <i data-feather="minus"></i>
                       Reset       </a>        
                                  <button type="submit" name="submit"  id="sub" class="btn btn-primary">Save</button>
                                          

                    </div>

                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card ">
                  <div class="card-header">
                    <h5 class="card-title">Leave Attachment</h5>
                  </div>
                  <div class="card-body">
                <label>Attachment<sup><b style="color:red;">*</b></sup></label>
                    <div class="custom-file">
                      <input type="file" class="form-control" name="profile">
                      <!-- <label class="custom-file-label">Choose file...</label>
                      <small class="text-muted">Upload files only: pdf,gif,png,jpg,jpeg
                      </small> -->
                    </div>
                  </div>
                </div>
              </div>
              </form>

            </div>
          </div>
        <!-- /.row -->
        <div class="card card1">
              <div class="card-header card-header1">
                <h3 class="card-title card-title1">List All Clients


                </h3>
                <div class="nav-item nav-grid f-view snehal" style="float: right;"> <span class="m-r-15">
                  </span> 
                   
                  <a href="managegrid.html" class="btn btn-sm waves-effect waves-light btn-primary btn-icon m-0" data-toggle="tooltip" data-placement="top" title="" data-original-title="Grid View"> <i class="fas fa-th-large"></i> </a>
                        
                   <a data-toggle="collapse" href="#collapseExample" aria-expanded="false" class="collapsed btn waves-effect waves-light btn-primary btn-sm m-10"> <i data-feather="plus"></i>
                    Add New        </a>
                        </div>
              </div>
              
              <!-- /.card-header -->
              <div class="card-body card-body1">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>NAME</th>
                    <th>USER NAME  </th>
                    <th>CONTACT NUMBER</th>
                    <th>GENDER</th>
                    <th> COUNTRY </th>
                    <th> STATUS </th>
                    <th> Action   </th>
                  </tr>
                  </thead>
                 
                        <tbody>
                        <?php 
                        
                        $sql=mysqli_query($conn,"select * from manage_client");
                         while($arr=mysqli_fetch_array($sql)){
                        ?>
                          <tr>
                            
                            <td><img src="image/manage_image/<?php echo $arr['profile'] ?>" class="imgset" width="50px" height="50px"> <?php echo $arr['first_name'];?></td>
                            <td> <?php echo $arr['username'];?></td>
                            <td> <?php echo $arr['contact'];?></td>
                            <td> <?php echo $arr['gender'];?> </td>
                                <td>  <?php echo $arr['country'];?> </td>
                                <td> <?php echo $arr['status'];?>  </td>  
                                <td><a href="client-Details.php?manageid=<?php echo $arr['id'] ?>" title="view details"><i class="fa fa-location-arrow"></i></a>&nbsp;
                                <a href="check.php?managedelid=<?php echo $arr['id'] ?>" title="Delete" onclick="return confirm('Are you sure you want to delete this record')"><i class="fa fa-trash"></i></a></td>                       
                          </tr>
                          <?php } ?>
                        </tbody>
                        
                    </table>
                  <tfoot>
                 
                  </tfoot>
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
  <?php include("../include/footer.php"); ?>
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

//TEXT VALIDATION
$("#fname").hide();
  $("#fstname").keyup(function(){
   txt_check();
 });
 function txt_check(){
   let txt=$("#fstname").val();
   let vali =/^[A-Za-z ]+$/;
   if(!vali.test(txt)){
    $("#fname").show().html("Enter Alphabets only").css("color","red").focus();
    txt_err=false;
    return false;
   }
   else{
       $("#fname").hide();

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
</body>
</html>
