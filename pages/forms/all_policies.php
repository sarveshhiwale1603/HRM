<?php
include("../include/config.php");
session_start();
if(!isset($_SESSION['id'])){
    header("location:index.php");

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
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <style>
   .nav-pills-custom .nav-link {
    color: #aaa;
    background: #fff;
    position: relative;
}

.nav-pills-custom .nav-link.active {
    color: #45b649;
    background: #fff;
}


/* Add indicator arrow for the active tab */
@media (min-width: 992px) {
    .nav-pills-custom .nav-link::before {
        content: '';
        display: block;
        border-top: 8px solid transparent;
        border-left: 10px solid #fff;
        border-bottom: 8px solid transparent;
        position: absolute;
        top: 50%;
        right: -10px;
        transform: translateY(-50%);
        opacity: 0;
    }
}

.nav-pills-custom .nav-link.active::before {
    opacity: 1;
}
  </style>

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
              <li class="breadcrumb-item active">Policies</li>
            </ol>
          </div><!-- /.col -->
          <div class="col-sm-4">
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="py-2 header">
    <div class="container ">
        <header class="text-center mb-5 text-white">
            <h1 class="display-6" style="color:black;text-decoration:underline;"> View Policies</h1>
            <a class="btn btn-primary rounded-pill d-block ml-4" href="policies.php" style="width:17%"><span class="ion ion-md-add"></span>&nbsp;Add New Policy</a>
            <p class="font-italic">
                <a class="text-white" href="">
                    <u></u>
                </a>
            </p>
        </header>


        <div class="row pr-3 mr-3 pl-4">
            <div class="col-md-3">
                <!-- Tabs nav -->
                <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <?php
              $sql=mysqli_query($conn,"SELECT * FROM `policies` group by title") ;
              $count=0;
              while($arr=mysqli_fetch_array($sql)){
                  $dnk=$arr['title'];
                  $id=$arr['id'];
                  
                  if($count==0){
                       echo' <a class="nav-link mb-3 p-3 shadow active" id="v-pills-home-tab" data-toggle="pill" href="#'.$dnk.'_'.$id.'" role="tab" aria-controls="v-pills-home" aria-selected="true">
                      <i class="fa fa-user-circle-o mr-2"></i>
                      <span class="font-weight-bold small text-uppercase">'.$dnk.'</span></a>';
                  }
                  else{
                    echo' <a class="nav-link mb-3 p-3 shadow  id="v-pills-home-tab" data-toggle="pill" href="#'.$dnk.'_'.$id.'" role="tab" aria-controls="v-pills-home" aria-selected="true">
                      <i class="fa fa-user-circle-o mr-2"></i>
                      <span class="font-weight-bold small text-uppercase">'.$dnk.'</span></a>';
                  }
                  $count++;
                  }
              ?>
                    </div>
            </div>

            <div class="col-md-9">
                <!-- Tabs content -->
                <div class="tab-content" id="v-pills-tabContent">
                <?php
              $sql=mysqli_query($conn,"SELECT * FROM `policies` group by title") ;
              $count=0;
              while($arr=mysqli_fetch_array($sql)){
                  $dnk=$arr['title'];
                  $id=$arr['id'];
                  $description=$arr['description'];
                  $image=$arr['image'];
                  
                  if($count==0){
              ?>
                    <div class="tab-pane fade shadow rounded bg-white show active p-5" id="<?php echo $dnk.'_'.$id ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4"><?php echo $dnk ?></h4>
                        <p class="font-italic text-muted mb-2"><?php echo $description ?></p>
                        <span class="box-96 mr-0-5">
                        <iframe src="image/policy_image/<?php echo $image; ?>" width="90%" height="200px">
</iframe>
                              </span>
                    </div>
                    <?php }else{ ?>
                        <div class="tab-pane fade shadow rounded bg-white p-5" id="<?php echo $dnk.'_'.$id ?>" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <h4 class="font-italic mb-4"><?php echo $dnk ?></h4>
                        <p class="font-italic text-muted mb-2"><?php echo $description ?></p>
                        <span class="box-96 mr-0-5">
                        <iframe src="image/policy_image/<?php echo $image; ?>" width="90%" height="100px">
</iframe>               </span>
                    </div>
                    <?php } $count++; } ?>
                   
                </div>
            </div>
        </div>
    </div>
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
 
</div>
<?php
  include('../include/footer.php');
  ?>
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
<script>
    $(document).ready(function() {
        $(".sss").on('click',function() {
           let category=$(this).text().trim();
           $(".category").val(category);
        });

    });
    </script>
</body>
</html>
